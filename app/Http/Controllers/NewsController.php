<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    // Получение всех записей
    public function GetAllRecords()
    {
        return News::all()->toArray();
    }

    // Получение одной записи
    public function GetRecord($id)
    {
        return News::findOrFail($id)->toArray();
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

        News::create($fields);

        return redirect()->back()->with('success', 'Новость добавленна!');
    }

    // Изменение записи
    public function Update(Request $request, $id)
    {
        $fields = $request->validate([
            'title' => 'required|min:3|max:255|unique:news,title,' . $id,
            'content' => 'required|min:3',
            'picture' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $news = News::findOrFail($id);

        if (!$news)
        {
            return redirect()->back()->with('error', 'Новость не найденна!');
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
            $fields['picture'] = $news->picture;
        }

        $news->update($fields);

        return redirect()->back()->with('success', 'Новость изменена!');
    }

    // Удаление записи
    public function Delete($id)
    {
        $news = News::findOrFail($id);
        try {
            $news->delete();
            return redirect()->back()->with('success', 'Новость удалена!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Ошибка при удалении новости: ' . $e->getMessage());
        }
    }
}
