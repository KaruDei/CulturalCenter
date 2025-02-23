<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventOrders;

class EventOrderController extends Controller
{
    // Получение всех записей
    public function GetAllRecords()
    {
        return EventOrders::all()->toArray();
    }

    // Получение одной записи
    public function GetRecord($id)
    {
        return EventOrders::findOrFail($id)->toArray();
    }

    // Создание новой записи
    public function Create(Request $request)
    {
        $fields = $request->validate([
            'title' => 'required|min:3|max:255|unique:event_orders',
            'description' => 'required|min:3',
            'event_type_id' => 'required|numeric',
            'duration' => 'required|numeric|gte:0',
            'price' => 'required|numeric|gte:0',
            'picture' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'bigpicture' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'script' => 'required',
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
            EventOrders::create($fields);
            return redirect()->back()->with('success', 'Запись добавлена!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Ошибка при добавлении записи: ' . $e->getMessage());
        }
    }

    // Изменение записи
    public function Update(Request $request, $id)
    {
        $fields = $request->validate([
            'title' => 'required|min:3|max:255|unique:event_orders,title,' . $id,
            'description' => 'required|min:3',
            'event_type_id' => 'required|numeric',
            'duration' => 'required|numeric|gte:0',
            'price' => 'required|numeric|gte:0',
            'picture' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'bigpicture' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'script' => 'required',
            'event_status_id' => 'required|numeric'
        ]);

        $record = EventOrders::findOrFail($id);

        if (!$record)
        {
            return redirect()->back()->with('error', 'Запись не найдена!');
        }

        if ($request->hasFile('picture'))
        {
            $image = $request->file('picture');
            $name = time() . '-' . $image->getClientOriginalName();
            $destinationPath = public_path('/images/orders');
            $image->move($destinationPath, $name);
            $fields['picture'] = '/images/orders/' . $name;
        }
        else 
        {
            $fields['picture'] = $record->picture;
        }

        if ($request->hasFile('bigpicture'))
        {
            $image = $request->file('bigpicture');
            $name = time() . '-' . $image->getClientOriginalName();
            $destinationPath = public_path('/images/orders');
            $image->move($destinationPath, $name);
            $fields['bigpicture'] = '/images/orders/' . $name;
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
        $record = EventOrders::findOrFail($id);
        
        try {
            $record->delete();
            return redirect()->back()->with('success', 'Запись удалена!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Ошибка при удалении записи: ' . $e->getMessage());
        }
    }
}
