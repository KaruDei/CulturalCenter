<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActorRoles extends Model
{
    protected $fillable = [
        'role',
    ];

    public function actors () {
        return $this->hasMany(Actors::class, 'actor_role_id');
    }
}
