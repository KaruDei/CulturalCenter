<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventActors extends Model
{
    protected $fillable = [
        'event_id',
        'actor_id',
    ];

    public function actor() {
        return $this->belongsTo(Actors::class, 'id');
    }
    
    public function event() {
        return $this->belongsTo(Events::class, 'id');
    }
}