<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exhibitions;

class ExhibitionController extends Controller
{
    // Получение всех записей
    public function GetAllRecords()
    {
        return Exhibitions::all()->toArray();
    }

    // Получение одной записи
    public function GetRecord($id)
    {
        return Exhibitions::findOrFail($id)->toArray();
    }

    // Создание новой записи
    public function Create(Request $request)
    {
        $fields = $request->validate([
            'title' => 'required|min:3|max:255|unique:exhibitions',
            'description' => 'required|min:3',
            'picture' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'start_date' => 'required', 
            'end_date' => 'required',
            'event_id' => 'numeric',
        ]);

        if ($request->hasFile('picture'))
        {
            $image = $request->file('picture');
            $name = time() . '-' . $image->getClientOriginalName();
            $destinationPath = public_path('/images/exhibitions');
            $image->move($destinationPath, $name);
            $fields['picture'] = '/images/exhibitions/' . $name;
        }

        try {
            Exhibitions::create($fields);
            return redirect()->back()->with('success', 'Запись добавлена!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Ошибка при добавлении записи: ' . $e->getMessage());
        }

    }

    // Изменение записи
    public function Update(Request $request, $id)
    {
        $fields = $request->validate([
            'title' => 'required|min:3|max:255|unique:exhibitions,title,' . $id,
            'description' => 'required|min:3',
            'picture' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'start_date' => 'required',
            'end_date' => 'required',
            'event_id' => 'numeric',
        ]);

        $record = Exhibitions::findOrFail($id);

        if (!$record)
        {
            return redirect()->back()->with('error', 'Запись не найдена!');
        }

        if ($request->hasFile('picture'))
        {
            $image = $request->file('picture');
            $name = time() . '-' . $image->getClientOriginalName();
            $destinationPath = public_path('/images/exhibitions');
            $image->move($destinationPath, $name);
            $fields['picture'] = '/images/exhibitions/' . $name;
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
        $record = Exhibitions::findOrFail($id);
        
        try {
            $record->delete();
            return redirect()->back()->with('success', 'Запись удалена!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Ошибка при удалении запись: ' . $e->getMessage());
        }
    }
}
