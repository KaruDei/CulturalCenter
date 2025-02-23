<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventCreators extends Model
{
    protected $fillable = [
        'user_id',
    ];

    public function events () {
        return $this->hasMany(Events::class, 'event_creator_id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'id');
    }

    public function eventOrders () {
        return $this->hasMany(EventOrders::class, 'event_creator_id');
    }
}
