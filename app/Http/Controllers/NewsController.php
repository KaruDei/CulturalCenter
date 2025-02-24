<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    // Получение всех записей
    public function GetAllRecords()
    {
        return News::all();
    }

    // Получение одной записи
    public function GetRecord($id)
    {
        return News::findOrFail($id);
    }

    // Создание новой записи
    public function Create(Request $request)
    {
        $fields = $request->validate([
            'title' => 'required|min:3|max:255|unique:news',
            'content' => 'required|min:3',
            'picture' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('picture'))
        {
            $image = $request->file('picture');
            $name = time() . '-' . $image->getClientOriginalName();
            $destinationPath = public_path('/images/news');
            $image->move($destinationPath, $name);
            $fields['picture'] = '/images/news/' . $name;
        }

        try {
            News::create($fields);
            return redirect()->back()->with('success', 'Запись добавлена!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Ошибка при добавлении записи: ' . $e->getMessage());
        }
    }

    // Изменение записи
    public function Update(Request $request, $id)
    {
        $fields = $request->validate([
            'title' => 'required|min:3|max:255|unique:news,title,' . $id,
            'content' => 'required|min:3',
            'picture' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $record = News::findOrFail($id);

        if (!$record)
        {
            return redirect()->back()->with('error', 'Запись не найдена!');
        }

        if ($request->hasFile('picture'))
        {
            $image = $request->file('picture');
            $name = time() . '-' . $image->getClientOriginalName();
            $destinationPath = public_path('/images/news');
            $image->move($destinationPath, $name);
            $fields['picture'] = '/images/news/' . $name;
        }
        else 
        {
            $fields['picture'] = $record->picture;
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
        $record = News::findOrFail($id);
        
        try {
            $record->delete();
            return redirect()->back()->with('success', 'Запись удалена!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Ошибка при удалении записи: ' . $e->getMessage());
        }
    }
}
