<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seats;

class SeatController extends Controller
{
    // Получение всех записей
    public function GetAllRecords()
    {
        return Seats::all()->toArray();
    }

    // Получение одной записи
    public function GetRecord($id)
    {
        return Seats::findOrFail($id)->toArray();
    }

    // Создание новой записи
    public function Create(Request $request)
    {
        $fields = $request->validate([
            'room_id' => 'required|numeric',
            'row' => 'required|numeric',
            'number' => 'required|numeric',
        ]);

        if (Seats::where('room_id', $fields['room_id'])
                ->where('row', $fields['row'])
                ->where('number', $fields['number'])
                ->exists())
        {
            return redirect()->back()->with('error', 'Такая запись уже сущетсвует!');
        }

        try {
            Seats::create($fields);
            return redirect()->back()->with('success', 'Запись добавлена!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Ошибка при добавлении записи: ' . $e->getMessage());
        }
    }

    // Изменение записи
    public function Update(Request $request, $id)
    {
        $fields = $request->validate([
            'room_id' => 'required|numeric',
            'row' => 'required|numeric',
            'number' => 'required|numeric',
        ]);

        $record = Seats::findOrFail($id);

        if (
            $record->price == $fields['room_id'] 
            && $record->user_id == $fields['row']
            && $record->event_id == $fields['number']
        )
        {
            return redirect()->back()->with('error', 'Данные идентичны!');
        }
        else if (Seats::where('room_id', $fields['room_id'])
                            ->where('row', $fields['row'])
                            ->where('number', $fields['number'])
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
        $record = Seats::findOrFail($id);
        
        try {
            $record->delete();
            return redirect()->back()->with('success', 'Запись удалена!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Ошибка при удалении записи: ' . $e->getMessage());
        }
    }
}
