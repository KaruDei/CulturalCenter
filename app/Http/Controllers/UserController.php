<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserRoles;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function GetAllRecords()
    {
        return User::all();
    }

    // Получение одной записи
    public function GetRecord($id)
    {
        return User::findOrFail($id);
    }

    public function UserRegistration(Request $request) 
    {
        // Validation
        $fields = $request->validate([
            'full_name' => 'required|min:3|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:3|max:255|confirmed',
            'picture' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $fields['user_role_id'] = UserRoles::first()->where('role', 'user')->value('id');

        if ($request->hasFile('picture'))
        {
            $image = $request->file('picture');
            $name = time() . '-' . $image->getClientOriginalName();
            $destinationPath = public_path('/images/user');
            $image->move($destinationPath, $name);
            $fields['picture'] = '/images/user/' . $name;
        }

        // Registration
        $user = User::create($fields);

        //Login
        Auth::login($user);
        
        // Redirect
        return redirect()->route('profile');
    }

    public function UserAuthorization(Request $request) 
    {
        // Validation
        $filleds = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Authorization
        if (Auth::attempt($filleds, $request->remember))
        {
            return redirect()->route('profile');
        }
        else
        {
            return back()->withErrors([
                'failAuth' => "Данные не совпадают с нашими записями",
            ]);
        }
    }

    public function UserLogout (Request $request) 
    {
        // Logout
        Auth::logout();

        // Clear sessions
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect
        return redirect()->route('home');
    }

    // Проверить!
    public function UserUpdate(Request $request)
    {
        // Validation
        $fields = $request->validate([
            'full_name' => 'required|min:3|max:255',
            'email' => 'required|email|unique:users,email,' . $request['user_id'],
            'password' => 'required|min:3|max:255',
            'picture' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        $fields['password'] = Hash::make($fields['password']);

        $user = User::findOrFail($request['user_id']);
        
        if ($request->hasFile('picture'))
        {
            $image = $request->file('picture');
            $name = time() . '-' . $image->getClientOriginalName();
            $destinationPath = public_path('/images/user');
            $image->move($destinationPath, $name);
            $fields['picture'] = '/images/user/' . $name;
        }
        else 
        {
            $fields['picture'] = $user->picture;
        }
        
        // Update data
        
        $user->update($fields);

        // Redirect
        return redirect()->back()->with('success', 'Данные успешно измененны');
    }

    // Проверить!
    public function UserDelete($id)
    {
        // Delete user
        User::first()->where('id', $id)->delete();
        
        // Redirect
        return redirect()->back()->with('success', 'Данные успешно удалены');
    }
}