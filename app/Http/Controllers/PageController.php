<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Events;
class PageController extends Controller
{
    protected $actorController;
    protected $actorRoleController;
    protected $eventActorController;
    protected $eventController;
    protected $eventOrderController;
    protected $eventScriptController;
    protected $eventStatusController;
    protected $eventTicketController;
    protected $eventTypeController;
    protected $exhibitionController;
    protected $newsController;
    protected $roomController;
    protected $seatController;
    protected $TicketStatusController;
    protected $userController;
    protected $userRoleController;

    public function __construct(
        ActorController $actorController,
        ActorRoleController $actorRoleController,
        EventActorController $eventActorController,
        EventController $eventController,
        EventOrderController $eventOrderController,
        EventScriptController $eventScriptController,
        EventStatusController $eventStatusController,
        EventTicketController $eventTicketController,
        EventTypeController $eventTypeController,
        ExhibitionController $exhibitionController,
        NewsController $newsController,
        RoomController $roomController,
        SeatController $seatController,
        TicketStatusController $TicketStatusController,
        UserController $userController,
        UserRoleController $userRoleController
    ) 
    {
        $this->actorController = $actorController;
        $this->actorRoleController = $actorRoleController;
        $this->eventActorController = $eventActorController;
        $this->eventController = $eventController;
        $this->eventOrderController = $eventOrderController;
        $this->eventScriptController = $eventScriptController;
        $this->eventStatusController = $eventStatusController;
        $this->eventTicketController = $eventTicketController;
        $this->eventTypeController = $eventTypeController;
        $this->exhibitionController = $exhibitionController;
        $this->newsController = $newsController;
        $this->roomController = $roomController;
        $this->seatController = $seatController;
        $this->TicketStatusController = $TicketStatusController;
        $this->userController = $userController;
        $this->userRoleController = $userRoleController;
    }


    public function TestPage(Request $request)
    {
        dd($request);
    }


    /* 
                    User Pages
        ------------------------------------
    */

    public function AboutUsPage() {
        return view('aboutUs'); 
    }

    public function ContactsPage() {
        return view('contacts'); 
    }
    
    public function EventsPage() {
        $events = $this->eventController->GetAllRecords();
        return view('events', ['events' => $events]);
    }

    public function EventPage($id) {
        $event = $this->eventController->GetRecord($id);
        $actors = $this->actorController->GetAllRecords();
        return view('event', ['event' => $event, 'actors' => $actors]);
    }

    public function ExhibitionsPage() {
        $exhibitions = $this->exhibitionController->GetAllRecords();
        return view('exhibitions', ['exhibitions' => $exhibitions]);
    }
    
    public function ExhibitionPage($id) {
        $exhibition = $this->exhibitionController->GetRecord($id);
        return view('exhibition', ['exhibition' => $exhibition]);
    }

    public function HomePage() {
        $events = $this->eventController->GetAllRecords();
        $news = $this->newsController->GetAllRecords();

        return view('home', ['events' => $events, 'news' => $news]);
    }

    public function ProfilePage() {
        $user = Auth::user();
        return view('profile', ['user' => $user]);
    }



    /* 
                    Auth Pages
        ------------------------------------
    */

    public function RegistrationPage()
    {
        return view('auth.registration');
    }
    
    public function AuthorizationPage()
    {
        return view('auth.authorization');
    }

    

    /* 
                    Admin Pages
        ------------------------------------
    */

    public function AdminDashboardPage() {
        $exhibitions = $this->exhibitionController->GetAllRecords();
        $events = $this->eventController->GetAllRecords();
        $users = $this->userController->GetAllRecords();
        $eventOrder = $this->eventOrderController->GetAllRecords();
        $news = $this->newsController->GetAllRecords();
        return view('admin.admin-dashboard',['events' => $events, 'users' => $users, 'exhibitions' => $exhibitions, 'eventOrder' => $eventOrder, 'news' => $news]); 
    }

    public function AdminActorsPage() {
        return view('admin.admin-actors');
    }

    public function AdminActorRolesPage() {
        return view('admin.admin-actor-roles');
    }

    public function AdminEventsPage() {
        $events = $this->eventController->GetAllRecords();
        $event_statuses = $this->eventStatusController->GetAllRecords();
        $event_types = $this->eventTypeController->GetAllRecords();
        $rooms = $this->roomController->GetAllRecords();
        return view('admin.admin-events' ,[
            'events' => $events, 
            'event_statuses_json' => $event_statuses->toJson(),
            'event_types_json' => $event_types->toJson(),
            'rooms_json' => $rooms->toJson(),
        ]);
    }
    
    public function AdminEventActorsPage() {
        return view('admin.admin-event-actors');
    }

    public function AdminEventScriptsPage() {
        return view('admin.admin-event-scripts');
    }

    public function AdminEventStatusPage() {
        return view('admin.admin-event-status');
    }

    public function AdminEventTicketsPage() {
        return view('admin.admin-event-tickets');
    }

    public function AdminEventTypesPage() {
        return view('admin.admin-event-types');
    }

    public function AdminExhibitionsPage() {
        $exhibitions = $this->exhibitionController->GetAllRecords();
        return view('admin.admin-exhibitions', ['exhibitions' => $exhibitions]);
    }

    public function AdminNewsPage() {
        $news = $this->newsController->GetAllRecords();
        return view('admin.admin-news', ['news' => $news]);
    }

    public function AdminRoomsPage() {
        return view('admin.admin-rooms');
    }

    public function AdminSeatsPage() {
        return view('admin.admin-seats');
    }

    public function AdminTicketStatusPage() {
        return view('admin.admin-ticket-status');
    }

    public function AdminUsersPage() {
        $users = $this->userController->GetAllRecords();
        return view('admin.admin-users', ['users' => $users]);
    }

    public function AdminUserRolesPage() {
        return view('admin.admin-user-roles');
    }

    public function AdminEventOrdersPage() {
        $orders = $this->eventOrderController->GetAllRecords();
        return view('admin.admin-event-orders', ['orders' => $orders]);
    }
}