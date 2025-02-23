<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventOrders extends Model
{
    protected $fillable = [
        'title',
        'description',
        'event_type_id',
        'duration',
        'price',
        'picture',
        'bigpicture',
        'script',
        'event_creator_id',
        'event_status_id',
    ];

    public function eventStatus() {
        return $this->belongsTo(EventStatus::class, 'id');
    }

    public function eventTypes() {
        return $this->belongsTo(EventTypes::class, 'id');
    }

    public function eventCreator() {
        return $this->belongsTo(EventCreators::class, 'id');
    }
}
