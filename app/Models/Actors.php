<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actors extends Model
{
    protected $fillable = [
        'full_name',
        'description',
        'id_actor_role',
        'picture',
    ];

    public function actorRoles() {
        return $this->belongsTo(ActorRoles::class);
    }

    public function eventActors() {
        return $this->hasMany(EventActors::class);
    }
}
