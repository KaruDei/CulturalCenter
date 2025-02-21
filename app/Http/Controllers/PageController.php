<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    protected $eventController;
    protected $actorController;
    protected $newsController;
    protected $exhibitionController;

    public function __construct(EventController $eventController, ActorController $actorController, NewsController $newsController, ExhibitionController $exhibitionController) 
    {
        $this->eventController = $eventController;
        $this->actorController = $actorController;
        $this->newsController = $newsController;
        $this->exhibitionController = $exhibitionController;
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
        return view('event', ['event' => $event]);
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
