<?php

namespace App\Http\Controllers;

use App\Models\EventStatus;
use App\Models\EventTypes;
use App\Models\Rooms;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Events;

class EventController extends Controller
{
    // Получение всех записей
    public function GetAllRecords()
    {
        return Events::all();
    }

    // Получение одной записи
    public function GetRecord($id)
    {
        return Events::findOrFail($id);
    }

    // Создание новой записи
    public function Create(Request $request)
    {
        $fields = $request->validate([
            'title' => 'required|min:3|max:255|unique:events',
            'description' => 'required|min:3',
            'event_type_id' => 'required|numeric',
            'room_id' => 'required|numeric',
            'date' => 'required',
            'time' => 'required',
            'duration' => 'required|numeric|gte:0',
            'price' => 'required|numeric|gte:0',
            'picture' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'bigpicture' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'script' => 'required|numeric',
            'user_id' => 'required|numeric',
            'event_status_id' => 'required|numeric'
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

        try {
            Events::create($fields);
            return redirect()->back()->with('success', 'Запись добавлена!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Ошибка при добавлении записи: ' . $e->getMessage());
        }
    }

    // Изменение записи
    public function Update(Request $request)
    {
        $fields = $request->validate([
            'title' => 'required|min:3|max:255|unique:events,title,' . $request['event_id'],
            'description' => 'required|min:3',
            'event_type_id' => 'required',
            'room_id' => 'required|numeric',
            'date' => 'required',
            'time' => 'required',
            'duration' => 'required|numeric|gte:0',
            'price' => 'required|numeric|gte:0',
            'picture' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'bigpicture' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'script' => 'required',
            'user_id' => 'required',
            'event_status_id' => 'required'
        ]);

        
        $record = Events::findOrFail($request['event_id']);

        $user_id = null;
        
        if ($fields['user_id'] != 'Мы') {
            $user_id = User::where('full_name', $fields['user_id'])->get()->value('id');
        }
        
        
        $fields['user_id'] = $user_id;
        
        
        $event_type_id = EventTypes::where('type', $fields['event_type_id'])->get()->value('id');
        $event_status_id = EventStatus::where('status', $fields['event_status_id'])->get()->value('id');
        $room_id = Rooms::where('number', $fields['room_id'])->get()->value('id');
        
        // dd($event_type_id);
        

        // if (!$user_id)
        // {
        //     return redirect()->back()->with('error', 'Запись пользователя не найдена!');
        // }
        // else
        // {
        //     $fields['user_id'] = $user_id;
        // }

        if (!$event_type_id)
        {
            return redirect()->back()->with('error', 'Запись типа мероприятия не найдена!');
        }
        else
        {
            $fields['event_type_id'] = $event_type_id;
        }

        if (!$event_status_id)
        {
            return redirect()->back()->with('error', 'Запись статуса не найдена!');
        }
        else
        {
            $fields['event_status_id'] = $event_status_id;
        }

        if (!$room_id)
        {
            return redirect()->back()->with('error', 'Запись комнаты не найдена!');
        }
        else
        {
            $fields['room_id'] = $room_id;
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
        $record = Events::findOrFail($id);
        
        try {
            $record->delete();
            return redirect()->back()->with('success', 'Запись удалена!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Ошибка при удалении записи: ' . $e->getMessage());
        }
    }
}
