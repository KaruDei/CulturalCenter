<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ActorRoles;

class ActorRoleController extends Controller
{
    // Получение всех записей
    public function GetAllRecords()
    {
        return ActorRoles::all();
    }

    // Получение одной записи
    public function GetRecord($id)
    {
        return ActorRoles::findOrFail($id);
    }

    // Создание новой записи
    public function Create(Request $request)
    {
        $fields = $request->validate([
            'role' => 'required|min:1|max:255|unique:actor_roles',
        ]);

        try {
            ActorRoles::create($fields);
            return redirect()->back()->with('success', 'Запись добавлена!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Ошибка при добавлении записи: ' . $e->getMessage());
        }
    }

    // Изменение записи
    public function Update(Request $request, $id)
    {
        $fields = $request->validate([
            'role' => 'required|min:1|max:255|unique:actor_roles,role,' . $id,
        ]);

        $record = ActorRoles::findOrFail($id);

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
        $record = ActorRoles::findOrFail($id);
        
        try {
            $record->delete();
            return redirect()->back()->with('success', 'Запись удалена!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Ошибка при удалении записи: ' . $e->getMessage());
        }
    }
}
