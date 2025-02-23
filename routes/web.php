<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckRoleAdmin;

// User
Route::get('/', [PageController::class, 'HomePage'])->name('home');

Route::get('/events', [PageController::class, 'EventsPage'])->name('events');
Route::get('/events/{id}', [PageController::class, 'EventPage'])->name('event');

Route::get('/exhibitions', [PageController::class, 'ExhibitionsPage'])->name('exhibitions');
Route::get('/exhibitions/{id}', [PageController::class, 'ExhibitionPage'])->name('exhibition');

Route::get('/aboutUs', [PageController::class, 'AboutUsPage'])->name('aboutUs');

Route::get('/contacts', [PageController::class, 'ContactsPage'])->name('contacts');

Route::get('/contacts', [PageController::class, 'ContactsPage'])->name('contacts');




// Admin
Route::get('/admin', [PageController::class, 'AdminDashboardPage'])->name('admin.dashboard');

Route::get('/admin/users', [PageController::class, 'AdminUsersPage'])->name('admin.users');

Route::get('/admin/event-orders', [PageController::class, 'AdminEventOrdersPage'])->name('admin.event-orders');

Route::get('/admin/events', [PageController::class, 'AdminEventsPage'])->name('admin.events');

Route::get('/admin/exhibitions', [PageController::class, 'AdminExhibitionsPage'])->name('admin.exhibitions');

Route::get('/admin/actors', [PageController::class, 'AdminActorsPage'])->name('admin.actors');

Route::get('/admin/actor-roles', [PageController::class, 'AdminActorRolesPage'])->name('admin.actor-roles');

Route::get('/admin/event-actors', [PageController::class, 'AdminEventActorsPage'])->name('admin.event-actors');

Route::get('/admin/event-creators', [PageController::class, 'AdminEventCreatorsPage'])->name('admin.event-creators');

Route::get('/admin/event-scripts', [PageController::class, 'AdminEventScriptsPage'])->name('admin.event-scripts');

Route::get('/admin/event-status', [PageController::class, 'AdminEventStatusPage'])->name('admin.event-status');

Route::get('/admin/event-tickets', [PageController::class, 'AdminEventTicketsPage'])->name('admin.event-tickets');

Route::get('/admin/event-types', [PageController::class, 'AdminEventTypesPage'])->name('admin.event-types');

Route::get('/admin/news', [PageController::class, 'AdminNewsPage'])->name('admin.news');

Route::get('/admin/rooms', [PageController::class, 'AdminRoomsPage'])->name('admin.rooms');

Route::get('/admin/seats', [PageController::class, 'AdminSeatsPage'])->name('admin.seats');

Route::get('/admin/ticket-status', [PageController::class, 'AdminTicketStatusPage'])->name('admin.ticket-status');

Route::get('/admin/user-roles', [PageController::class, 'AdminUserRolesPage'])->name('admin.user-roles');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [PageController::class, 'ProfilePage'])->name('profile');

    Route::get('/logout', [UserController::class, 'UserLogout'])->name('logout');

    Route::middleware(CheckRoleAdmin::class)->group(function () {
        // Позже поместить сюда все пути для админа
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

Route::get('/admin/edit/user', function () {
    return view('admin.admin-edit-user');
})->name('admin-edit-user');