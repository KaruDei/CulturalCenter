<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Home
Route::get('/', [PageController::class, 'HomePage'])->name('home');

// Events
Route::get('/events', [PageController::class, 'EventsPage'])->name('events');
Route::get('/events/{id}', [PageController::class, 'EventPage'])->name('event');

 // Exhibitions
Route::get('/exhibitions', [PageController::class, 'ExhibitionsPage'])->name('exhibitions');
Route::get('/exhibitions/{id}', [PageController::class, 'ExhibitionPage'])->name('exhibition');

// About us
Route::get('/aboutUs', function () {
    return view('aboutUs'); 
})->name('aboutUs');

// Contacts
Route::get('/contacts', function () {
    return view('contacts'); 
})->name('contacts');

// Admin Panel
Route::get('/adminPanel', function () {
    return view('Admin.adminPanel'); 
})->name('adminPanel');

// User
Route::get('/adminUser', function () {
    return view('Admin.adminUser'); 
})->name('adminUser');

// Orders
Route::get('/adminOrders', function () {
    return view('Admin.adminOrders'); 
})->name('adminOrders');

// Events
Route::get('/adminEvents', function () {
    return view('Admin.adminEvents'); 
})->name('adminEvents');

// Exhibitions
Route::get('/adminExhibitions', function () {
    return view('Admin.adminExhibitions'); 
})->name('adminExhibitions');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [PageController::class, 'ProfilePage'])->name('profile');

    Route::get('/logout', [UserController::class, 'UserLogout'])->name('logout');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', function () {
            return view('Auth.authorization');
    })->name('login');
    Route::post('/login', [UserController::class, 'UserAuthorization']);

    Route::get('/reg', function () {
        return view('Auth.registration'); 
    })->name('registration');
    Route::post('/reg', [UserController::class, 'UserRegistration']);
});