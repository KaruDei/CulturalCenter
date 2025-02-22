<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventActors;

class EventActorController extends Controller
{
    // Получение всех записей
    public function GetAllRecords()
    {
        return EventActors::all()->toArray();
    }

    // Получение одной записи
    public function GetRecord($id)
    {
        return EventActors::findOrFail($id)->toArray();
    }

    // Создание новой записи
    public function Create(Request $request)
    {
        $fields = $request->validate([
            'id_event' => 'required|numeric',
            'id_actor' => 'required|numeric',
        ]);

        if (EventActors::where('id_event', $fields['id_event'])->where('id_actor', $fields['id_actor'])->exists())
        {
            return redirect()->back()->with('error', 'Актёр уже привязан к этому мероприятию');
        }

        try {
            EventActors::create($fields);
            return redirect()->back()->with('success', 'Запись добавлена!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Ошибка при добавлении записи: ' . $e->getMessage());
        }
    }

    // Изменение записи
    public function Update(Request $request, $id)
    {
        $fields = $request->validate([
            'id_event' => 'required|numeric',
            'id_actor' => 'required|numeric',
        ]);

        $record = EventActors::findOrFail($id);

        if ($record->id_event == $fields['id_event'] && $record->id_actor == $fields['id_actor'])
        {
            return redirect()->back()->with('error', 'Этот актёр уже привязан к этому мероприятию');
        }
        else if (EventActors::where('id_event', $fields['id_event'])->where('id_actor', $fields['id_actor'])->exists())
        {
            return redirect()->back()->with('error', 'Этот актёр уже привязан к этому мероприятию');
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
        $record = EventActors::findOrFail($id);
        
        try {
            $record->delete();
            return redirect()->back()->with('success', 'Запись удалена!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Ошибка при удалении записи: ' . $e->getMessage());
        }
    }
}
