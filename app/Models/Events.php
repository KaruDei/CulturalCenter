<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    // Add links
    public function rooms() {
        return $this->belongsTo(Rooms::class);
    }

    public function eventStatus() {
        return $this->belongsTo(EventStatus::class);
    }

    public function eventTypes() {
        return $this->belongsTo(EventTypes::class);
    }

    public function creators() {
        return $this->belongsTo(EventCreators::class);
    }

    public function eventScripts() {
        return $this->belongsTo(EventScripts::class);
    }
}
