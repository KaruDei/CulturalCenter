<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventTickets;

class EventTicketController extends Controller
{
    // Получение всех записей
    public function GetAllRecords()
    {
        return EventTickets::all()->toArray();
    }

    // Получение одной записи
    public function GetRecord($id)
    {
        return EventTickets::findOrFail($id)->toArray();
    }

    // Создание новой записи
    public function Create(Request $request)
    {
        $fields = $request->validate([
            'price' => 'required|numeric',
            'user_id' => 'required|numeric',
            'event_id' => 'required|numeric',
            'room_id' => 'required|numeric',
            'seat_id' => 'required|numeric',
            'ticket_status_id' => 'required|numeric',
        ]);

        if (EventTickets::where('price', $fields['price'])
                            ->where('user_id', $fields['user_id'])
                            ->where('event_id', $fields['event_id'])
                            ->where('room_id', $fields['room_id'])
                            ->where('seat_id', $fields['seat_id'])
                            ->where('ticket_status_id', $fields['ticket_status_id'])
                            ->exists())
        {
            return redirect()->back()->with('error', 'Такая запись уже сущетсвует!');
        }

        try {
            EventTickets::create($fields);
            return redirect()->back()->with('success', 'Запись добавлена!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Ошибка при добавлении записи: ' . $e->getMessage());
        }
    }

    // Изменение записи
    public function Update(Request $request, $id)
    {
        $fields = $request->validate([
            'price' => 'required|numeric',
            'user_id' => 'required|numeric',
            'event_id' => 'required|numeric',
            'room_id' => 'required|numeric',
            'seat_id' => 'required|numeric',
            'ticket_status_id' => 'required|numeric',
        ]);

        $record = EventTickets::findOrFail($id);

        if (
            $record->price == $fields['price'] 
            && $record->user_id == $fields['user_id']
            && $record->event_id == $fields['event_id']
            && $record->room_id == $fields['room_id']
            && $record->seat_id == $fields['seat_id']
            && $record->ticket_status_id == $fields['ticket_status_id']
        )
        {
            return redirect()->back()->with('error', 'Данные идентичны!');
        }
        else if (EventTickets::where('price', $fields['price'])
                            ->where('user_id', $fields['user_id'])
                            ->where('event_id', $fields['event_id'])
                            ->where('room_id', $fields['room_id'])
                            ->where('seat_id', $fields['seat_id'])
                            ->where('ticket_status_id', $fields['ticket_status_id'])
                            ->exists())
        {
            return redirect()->back()->with('error', 'Такая запись уже сущетсвует!');
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
        $record = EventTickets::findOrFail($id);
        
        try {
            $record->delete();
            return redirect()->back()->with('success', 'Запись удалена!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Ошибка при удалении записи: ' . $e->getMessage());
        }
    }
}
