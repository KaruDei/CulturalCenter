<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actors extends Model
{
    public function actorRoles () {
        return $this->belongsTo(ActorRoles::class);
    }
}
