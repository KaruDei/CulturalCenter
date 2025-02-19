<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;

class EventController extends Controller
{
    // Получение всех записей
    public function GetAllEventRecords()
    {
        $events = Events::all();
        return view('events', ['events' => $events]);
    }

    // Получение одной записи
    public function GetEventRecord($id)
    {
        $event = Events::get()->where('id', $id);
        return view('event', ['event' => $event]);
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
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            $fields['poster'] = '/images/' . $name;
        }

        Events::create($fields);

        return redirect()->back()->with('success', 'Мероприятие добавленно!');
    }

    // Изменение записи
    public function UpdateEvent(Request $request, $id)
    {
        
    }

    // Удаление записи
    public function DeleteEvent($id)
    {
        Events::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Мероприятие удалено!');
    }
}
