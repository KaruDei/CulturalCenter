<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actors;

class ActorController extends Controller
{
    // Получение всех записей
    public function GetAllRecords()
    {
        return Actors::all()->toArray();
    }

    // Получение одной записи
    public function GetRecord($id)
    {
        return Actors::findOrFail($id)->toArray();
    }

    // Создание новой записи
    public function Create(Request $request)
    {
        $fields = $request->validate([
            'full_name' => 'required|min:3|max:255|unique:actors',
            'description' => 'required|min:3',
            'id_actor_role' => 'required|numeric',
            'picture' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('picture'))
        {
            $image = $request->file('picture');
            $name = time() . '-' . $image->getClientOriginalName();
            $destinationPath = public_path('/images/actors');
            $image->move($destinationPath, $name);
            $fields['picture'] = '/images/actors/' . $name;
        }

        try {
            Actors::create($fields);
            return redirect()->back()->with('success', 'Запись добавлена!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Ошибка при добавлении записи: ' . $e->getMessage());
        }
    }

    // Изменение записи
    public function Update(Request $request, $id)
    {
        $fields = $request->validate([
            'full_name' => 'required|min:3|max:255|unique:actors,full_name,' . $id,
            'description' => 'required|min:3',
            'id_actor_role' => 'required|numeric',
            'picture' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $record = Actors::findOrFail($id);

        if ($request->hasFile('picture'))
        {
            $image = $request->file('picture');
            $name = time() . '-' . $image->getClientOriginalName();
            $destinationPath = public_path('/images/actors');
            $image->move($destinationPath, $name);
            $fields['picture'] = '/images/actors/' . $name;
        }
        else 
        {
            $fields['picture'] = $record->picture;
        }

        try {
            $record->update($fields);
            return redirect()->back()->with('success', 'Запись изменена!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Ошибка при изменении записи: ' . $e->getMessage());
        }
    }

    // Удаление записи
    public function Delete($id)
    {
        $record = Actors::findOrFail($id);
        
        try {
            $record->delete();
            return redirect()->back()->with('success', 'Запись удалена!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Ошибка при удалении записи: ' . $e->getMessage());
        }
    }
}
