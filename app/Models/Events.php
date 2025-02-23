<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $fillable = [
        'title',
        'description',
        'event_type_id',
        'room_id',
        'date',
        'time',
        'duration',
        'price',
        'picture',
        'bigpicture',
        'event_script_id',
        'event_creator_id',
        'event_status_id',
    ];

    // Add links
    public function room() {
        return $this->belongsTo(Rooms::class, 'id');
    }

    public function eventStatus() {
        return $this->belongsTo(EventStatus::class, 'id');
    }

    public function eventType() {
        return $this->belongsTo(EventTypes::class, 'id');
    }

    public function eventCreator() {
        return $this->belongsTo(EventCreators::class, 'id');
    }

    public function eventScript() {
        return $this->belongsTo(EventScripts::class, 'id');
    }

    public function exhibition() {
        return $this->belongsTo(Exhibitions::class, 'event_id');
    }
}
