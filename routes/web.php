<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Home
Route::get('/', function () {
    return view('home');
})->name('home');

// Events
Route::get('/events', function () {
   return view('events'); 
})->name('events');
Route::get('/events/{id}', function ($id) {
    return view('event', ['id' => $id]); 
})->name('event');

 // Exhibitions
Route::get('/exhibitions', function () {
    return view('exhibitions'); 
})->name('exhibitions');
Route::get('/exhibition/{id}', function ($id) {
    return view('exhibition', ['id' => $id]); 
})->name('exhibition');;

// About us
Route::get('/about-us', function () {
    return view('about-us'); 
})->name('aboutUs');

// Contacts
Route::get('/contacts', function () {
    return view('contacts'); 
})->name('contacts');

// Profile
Route::get('/profile', function () {
    return view('profile'); 
})->name('profile');

// Authorization
Route::get('/authorization', function () {
    return view('Auth.authorization');
})->name('authorization');

// Registration
Route::get('/registration', function () {
    return view('Auth.registration'); 
})->name('registration');

// Logout
Route::get('/logout', function () {
    return redirect()->route('home'); 
})->name('logout');

// Admin Panel
Route::get('/admin-panel', function () {
    return view('Admin.adminPanel'); 
})->name('adminPanel');