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
        'user_id',
        'event_status_id',
    ];

    public function eventStatus() {
        return $this->belongsTo(EventStatus::class, 'id');
    }

    public function eventType() {
        return $this->belongsTo(EventTypes::class, 'event_type_id');
    }
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
