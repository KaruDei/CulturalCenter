<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventActors extends Model
{
    public function actors() {
        return $this->hasMany(Actors::class);
    }
    
    public function events() {
        return $this->hasMany(Events::class);
    }
}