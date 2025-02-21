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

    public function __construct(EventController $eventController, ActorController $actorController, NewsController $newsController) 
    {
        $this->eventController = $eventController;
        $this->actorController = $actorController;
        $this->newsController = $newsController;
    }

    public function HomePage() {
        $events = $this->eventController->GetAllRecords();
        $actors = $this->actorController->GetAllRecords();
        $news = $this->newsController->GetAllRecords();

        return view('home', ['events' => $events, 'actors' => $actors, 'news' => $news]);
    }

    public function EventsPage() {
        $events = $this->eventController->GetAllRecords();
        return view('events', ['events' => $events]);
    }

    public function EventPage($id) {
        $event = $this->eventController->GetRecord($id);
        return view('event', ['event' => $event]);
    }

    public function ProfilePage() {
        $user = Auth::user();
        return view('profile', ['user' => $user]);
    }
}
