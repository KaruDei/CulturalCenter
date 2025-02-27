<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\EventOrderController;
use App\Http\Controllers\ExhibitionController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventTicketController;
use App\Http\Middleware\CheckRoleAdmin;

// User
Route::get('/', [PageController::class, 'HomePage'])->name('home');

Route::get('/events', [PageController::class, 'EventsPage'])->name('events');
Route::get('/events/{id}', [PageController::class, 'EventPage'])->name('event');
Route::post('/events/{id}', [EventTicketController::class, 'Create'])->name('event');

Route::get('/exhibitions', [PageController::class, 'ExhibitionsPage'])->name('exhibitions');
Route::get('/exhibitions/{id}', [PageController::class, 'ExhibitionPage'])->name('exhibition');

Route::get('/aboutUs', [PageController::class, 'AboutUsPage'])->name('aboutUs');

Route::get('/contacts', [PageController::class, 'ContactsPage'])->name('contacts');

Route::get('/contacts', [PageController::class, 'ContactsPage'])->name('contacts');

Route::get('/test', [PageController::class, 'TestPage'])->name('test');
Route::post('/test', [PageController::class, 'TestPage'])->name('test');





Route::middleware('auth')->group(function () {
    Route::get('/profile', [PageController::class, 'ProfilePage'])->name('profile');
    Route::patch('/profile', [UserController::class, 'UserUpdate'])->name('profile');
    
    Route::get('/logout', [UserController::class, 'UserLogout'])->name('logout');
    
    // Admin
    Route::middleware(CheckRoleAdmin::class)->group(function () {
        Route::get('/admin', [PageController::class, 'AdminDashboardPage'])->name('admin.dashboard');
        
        Route::get('/admin/users', [PageController::class, 'AdminUsersPage'])->name('admin.users');
        Route::patch('/admin/users', [UserController::class, 'UserUpdate'])->name('admin.users.update');
        Route::delete('/admin/users/{id}', [UserController::class, 'UserDelete'])->name('admin.users.delete');
        
        Route::get('/admin/event-orders', [PageController::class, 'AdminEventOrdersPage'])->name('admin.event-orders');
        Route::patch('/admin/event-orders', [EventOrderController::class, 'Update'])->name('admin.event-orders.update');
        Route::delete('/admin/event-orders/{id}', [EventOrderController::class, 'Delete'])->name('admin.event-orders.delete');
        
        Route::get('/admin/events', [PageController::class, 'AdminEventsPage'])->name('admin.events');
        Route::post('/admin/events', [EventController::class, 'Create'])->name('admin.events.create');
        Route::patch('/admin/events', [EventController::class, 'Update'])->name('admin.events.update');
        Route::delete('/admin/events/{id}', [EventController::class, 'Delete'])->name('admin.events.delete');
        
        Route::get('/admin/exhibitions', [PageController::class, 'AdminExhibitionsPage'])->name('admin.exhibitions');
        Route::post('/admin/exhibitions', [ExhibitionController::class, 'Create'])->name('admin.exhibitions.create');
        Route::patch('/admin/exhibitions', [ExhibitionController::class, 'Update'])->name('admin.exhibitions.update');
        Route::delete('/admin/exhibitions/{id}', [ExhibitionController::class, 'Delete'])->name('admin.exhibitions.delete');
        
        Route::get('/admin/actors', [PageController::class, 'AdminActorsPage'])->name('admin.actors');
        
        Route::get('/admin/actor-roles', [PageController::class, 'AdminActorRolesPage'])->name('admin.actor-roles');
        
        Route::get('/admin/event-actors', [PageController::class, 'AdminEventActorsPage'])->name('admin.event-actors');
        
        Route::get('/admin/event-scripts', [PageController::class, 'AdminEventScriptsPage'])->name('admin.event-scripts');
        
        Route::get('/admin/event-status', [PageController::class, 'AdminEventStatusPage'])->name('admin.event-status');
        
        Route::get('/admin/event-tickets', [PageController::class, 'AdminEventTicketsPage'])->name('admin.event-tickets');
        
        Route::get('/admin/event-types', [PageController::class, 'AdminEventTypesPage'])->name('admin.event-types');
        
        Route::get('/admin/news', [PageController::class, 'AdminNewsPage'])->name('admin.news');
        Route::post('/admin/news', [NewsController::class, 'Create'])->name('admin.news.create');
        Route::patch('/admin/news', [NewsController::class, 'Update'])->name('admin.news.update');
        Route::delete('/admin/news/{id}', [NewsController::class, 'Delete'])->name('admin.news.delete');
        
        Route::get('/admin/rooms', [PageController::class, 'AdminRoomsPage'])->name('admin.rooms');
        
        Route::get('/admin/seats', [PageController::class, 'AdminSeatsPage'])->name('admin.seats');
        
        Route::get('/admin/ticket-status', [PageController::class, 'AdminTicketStatusPage'])->name('admin.ticket-status');
        
        Route::get('/admin/user-roles', [PageController::class, 'AdminUserRolesPage'])->name('admin.user-roles');
    });
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

