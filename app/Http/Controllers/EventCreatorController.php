<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventCreators;

class EventCreatorController extends Controller
{
    // Получение всех записей
    public function GetAllRecords()
    {
        return EventCreators::all()->toArray();
    }

    // Получение одной записи
    public function GetRecord($id)
    {
        return EventCreators::findOrFail($id)->toArray();
    }

    // Создание новой записи
    public function Create(Request $request)
    {
        $fields = $request->validate([
            'creator' => 'required|min:3|max:255|unique:event_creators',
        ]);

        try {
            EventCreators::create($fields);
            return redirect()->back()->with('success', 'Запись добавлена!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Ошибка при добавлении записи: ' . $e->getMessage());
        }
    }

    // Изменение записи
    public function Update(Request $request, $id)
    {
        $fields = $request->validate([
            'creator' => 'required|min:3|max:255|unique:event_creators,creator,' . $id,
        ]);

        $record = EventCreators::findOrFail($id);

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
        $record = EventCreators::findOrFail($id);
        
        try {
            $record->delete();
            return redirect()->back()->with('success', 'Запись удалена!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Ошибка при удалении записи: ' . $e->getMessage());
        }
    }
}
