<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    protected $actorController;
    protected $actorRoleController;
    protected $eventActorController;
    protected $eventController;
    protected $eventCreatorController;
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
        EventCreatorController $eventCreatorController,
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
        $this->eventCreatorController = $eventCreatorController;
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

    public function HomePage() {
        $events = $this->eventController->GetAllRecords();
        $news = $this->newsController->GetAllRecords();

        return view('home', ['events' => $events, 'news' => $news]);
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

    public function ProfilePage() {
        $user = Auth::user();
        return view('profile', ['user' => $user]);
    }
}
