<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;

class EventController extends Controller
{
    // Получение всех записей
    public function GetAllRecords()
    {
        return Events::all()->toArray();
    }

    // Получение одной записи
    public function GetRecord($id)
    {
        return Events::findOrFail($id)->toArray();
    }

    // Создание новой записи
    public function Create(Request $request)
    {
        $fields = $request->validate([
            'title' => 'required|min:3|max:255|unique:events',
            'description' => 'required|min:3',
            'id_event_type' => 'required|numeric',
            'id_room' => 'required|numeric',
            'date' => 'required',
            'time' => 'required',
            'duration' => 'required|numeric|gte:0',
            'price' => 'required|numeric|gte:0',
            'picture' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'bigpicture' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'id_event_script' => 'required|numeric',
            'id_creator' => 'required|numeric',
            'id_event_status' => 'required|numeric'
        ]);

        if ($request->hasFile('picture'))
        {
            $image = $request->file('picture');
            $name = time() . '-' . $image->getClientOriginalName();
            $destinationPath = public_path('/images/events');
            $image->move($destinationPath, $name);
            $fields['picture'] = '/images/events/' . $name;
        }

        if ($request->hasFile('bigpicture'))
        {
            $image = $request->file('bigpicture');
            $name = time() . '-' . $image->getClientOriginalName();
            $destinationPath = public_path('/images/events');
            $image->move($destinationPath, $name);
            $fields['bigpicture'] = '/images/events/' . $name;
        }

        Events::create($fields);

        return redirect()->back()->with('success', 'Запись добавлена!');
    }

    // Изменение записи
    public function Update(Request $request, $id)
    {
        $fields = $request->validate([
            'title' => 'required|min:3|max:255|unique:events,title,' . $id,
            'description' => 'required|min:3',
            'id_event_type' => 'required|numeric',
            'id_room' => 'required|numeric',
            'date' => 'required',
            'time' => 'required',
            'duration' => 'required|numeric|gte:0',
            'price' => 'required|numeric|gte:0',
            'picture' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'bigpicture' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'id_event_script' => 'required|numeric',
            'id_creator' => 'required|numeric',
            'id_event_status' => 'required|numeric'
        ]);

        $record = Events::findOrFail($id);

        if (!$record)
        {
            return redirect()->back()->with('error', 'Запись не найдена!');
        }

        if ($request->hasFile('picture'))
        {
            $image = $request->file('picture');
            $name = time() . '-' . $image->getClientOriginalName();
            $destinationPath = public_path('/images/events');
            $image->move($destinationPath, $name);
            $fields['picture'] = '/images/events/' . $name;
        }
        else 
        {
            $fields['picture'] = $record->picture;
        }

        if ($request->hasFile('bigpicture'))
        {
            $image = $request->file('bigpicture');
            $name = time() . '-' . $image->getClientOriginalName();
            $destinationPath = public_path('/images/events');
            $image->move($destinationPath, $name);
            $fields['bigpicture'] = '/images/events/' . $name;
        }
        else 
        {
            $fields['bigpicture'] = $record->bigpicture;
        }

        $record->update($fields);

        return redirect()->back()->with('success', 'Запись изменена!');
    }

    // Удаление записи
    public function Delete($id)
    {
        $record = Events::findOrFail($id);
        try {
            $record->delete();
            return redirect()->back()->with('success', 'Запись удалена!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Ошибка при удалении записи: ' . $e->getMessage());
        }
    }
}
