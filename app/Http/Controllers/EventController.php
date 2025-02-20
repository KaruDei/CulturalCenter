<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;

class EventController extends Controller
{
    // Получение всех записей
    public function GetAllEventRecords()
    {
        return Events::all();
    }

    // Получение одной записи
    public function GetEventRecord($id)
    {
        return Events::findOrFail($id);
    }

    // Создание новой записи
    public function CreateEvent(Request $request)
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
            'poster' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'id_event_script' => 'required|numeric',
            'id_creator' => 'required|numeric',
            'id_event_status' => 'required|numeric'
        ]);

        if ($request->hasFile('poster'))
        {
            $image = $request->file('poster');
            $name = time() . '-' . $image->getClientOriginalName();
            $destinationPath = public_path('/images/events');
            $image->move($destinationPath, $name);
            $fields['poster'] = '/images/events/' . $name;
        }

        Events::create($fields);

        return redirect()->back()->with('success', 'Мероприятие добавленно!');
    }

    // Изменение записи
    public function UpdateEvent(Request $request, $id)
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
            'poster' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'id_event_script' => 'required|numeric',
            'id_creator' => 'required|numeric',
            'id_event_status' => 'required|numeric'
        ]);

        $event = Events::findOrFail($id);

        if (!$event)
        {
            return redirect()->back()->with('error', 'Мероприятие не найденно!');
        }

        if ($request->hasFile('poster'))
        {
            $image = $request->file('poster');
            $name = time() . '-' . $image->getClientOriginalName();
            $destinationPath = public_path('/images/events');
            $image->move($destinationPath, $name);
            $fields['poster'] = '/images/events/' . $name;
        }
        else 
        {
            $fields['poster'] = $event->poster;
        }

        $event->update($fields);

        return redirect()->back()->with('success', 'Мероприятие изменено!');
    }

    // Удаление записи
    public function DeleteEvent($id)
    {
        $event = Events::findOrFail($id);
        try {
            $event->delete();
            return redirect()->back()->with('success', 'Мероприятие удалено!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Ошибка при удалении мероприятия: ' . $e->getMessage());
        }
    }
}
