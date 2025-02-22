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
            'id_user' => 'required|numeric',
            'id_event' => 'required|numeric',
            'id_room' => 'required|numeric',
            'id_seat' => 'required|numeric',
            'id_ticket_status' => 'required|numeric',
        ]);

        if (EventTickets::where('price', $fields['price'])
                            ->where('id_user', $fields['id_user'])
                            ->where('id_event', $fields['id_event'])
                            ->where('id_room', $fields['id_room'])
                            ->where('id_seat', $fields['id_seat'])
                            ->where('id_ticket_status', $fields['id_ticket_status'])
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
            'id_user' => 'required|numeric',
            'id_event' => 'required|numeric',
            'id_room' => 'required|numeric',
            'id_seat' => 'required|numeric',
            'id_ticket_status' => 'required|numeric',
        ]);

        $record = EventTickets::findOrFail($id);

        if (
            $record->price == $fields['price'] 
            && $record->id_user == $fields['id_user']
            && $record->id_event == $fields['id_event']
            && $record->id_room == $fields['id_room']
            && $record->id_seat == $fields['id_seat']
            && $record->id_ticket_status == $fields['id_ticket_status']
        )
        {
            return redirect()->back()->with('error', 'Данные идентичны!');
        }
        else if (EventTickets::where('price', $fields['price'])
                            ->where('id_user', $fields['id_user'])
                            ->where('id_event', $fields['id_event'])
                            ->where('id_room', $fields['id_room'])
                            ->where('id_seat', $fields['id_seat'])
                            ->where('id_ticket_status', $fields['id_ticket_status'])
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
