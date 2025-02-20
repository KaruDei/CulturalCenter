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
            'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('picture'))
        {
            $image = $request->file('picture');
            $name = time() . '-' . $image->getClientOriginalName();
            $destinationPath = public_path('/images/actors');
            $image->move($destinationPath, $name);
            $fields['picture'] = '/images/actors/' . $name;
        }

        Actors::create($fields);

        return redirect()->back()->with('success', 'Актёр добавлен!');
    }

    // Изменение записи
    public function Update(Request $request, $id)
    {
        $fields = $request->validate([
            'full_name' => 'required|min:3|max:255|unique:actors,title,' . $id,
            'description' => 'required|min:3',
            'id_actor_role' => 'required|numeric',
            'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $actors = Actors::findOrFail($id);

        if (!$actors)
        {
            return redirect()->back()->with('error', 'Актёр не найден!');
        }

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
            $fields['picture'] = $actors->picture;
        }

        $actors->update($fields);

        return redirect()->back()->with('success', 'Актёр изменён!');
    }

    // Удаление записи
    public function Delete($id)
    {
        $actors = Actors::findOrFail($id);
        try {
            $actors->delete();
            return redirect()->back()->with('success', 'Актёр удалён!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Ошибка при удалении актёра: ' . $e->getMessage());
        }
    }
}
