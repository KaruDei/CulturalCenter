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
        'user_id',
        'event_status_id',
    ];

    // Add links
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function room() {
        return $this->belongsTo(Rooms::class, 'room_id');
    }

    public function eventStatus() {
        return $this->belongsTo(EventStatus::class, 'event_status_id');
    }

    public function eventType() {
        return $this->belongsTo(EventTypes::class, 'event_type_id');
    }

    public function eventScript() {
        return $this->belongsTo(EventScripts::class, 'event_script_id');
    }

    public function exhibition() {
        return $this->belongsTo(Exhibitions::class, 'event_id');
    }

    public function tickets() {
        return $this->hasMany(EventTickets::class, 'event_id');
    }
}
