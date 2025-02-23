<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actors extends Model
{
    protected $fillable = [
        'full_name',
        'description',
        'actor_role_id',
        'picture',
    ];

    public function actorRole() {
        return $this->belongsTo(ActorRoles::class, 'id');
    }

    public function eventActors() {
        return $this->hasMany(EventActors::class, 'actor_id');
    }
}
