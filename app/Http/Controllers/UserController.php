<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserRoles;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function UserRegistration(Request $request) 
    {
        // Validation
        $fields = $request->validate([
            'full_name' => 'required|min:3|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:3|max:255|confirmed',
        ]);

        // Registration
        $user = User::create(
            [
                'full_name' => $fields['full_name'],
                'email' => $fields['email'],
                'password' => $fields['password'],
                'id_user_role' => UserRoles::first()->where('role', 'user')->value('id'),
            ]
        );

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
            return redirect()->intended('profile');
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
    public function UserUpdate(Request $request, $id)
    {
        // Validation
        $fields = $request->validate([
            'full_name' => 'required|min:3|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:3|max:255|confirmed',
        ]);

        // Update data
        $user = User::first()->where('id', $id);
        $user->full_name = $fields['full_name'];
        $user->email = $fields['email'];
        $fields['password'] = password_hash($fields['password']);
        $user->password = $fields['password'];
        $user->save();

        // Redirect
        return redirect()->route('profile')->with('success', 'Данные успешно измененны');
    }

    // Проверить!
    public function UserDelete($id)
    {
        // Delete user
        User::first()->where('id', $id)->delete();
        
        // Redirect
        return redirect()->route('home');
    }
}