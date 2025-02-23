<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventOrders extends Model
{
    protected $fillable = [
        'title',
        'description',
        'id_event_type',
        'duration',
        'price',
        'picture',
        'bigpicture',
        'script',
        'id_creator',
        'id_event_status',
    ];

    public function eventStatus() {
        return $this->belongsTo(EventStatus::class);
    }

    public function eventTypes() {
        return $this->belongsTo(EventTypes::class);
    }

    public function eventCreator() {
        return $this->belongsTo(EventCreators::class);
    }
}
