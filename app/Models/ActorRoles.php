<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActorRoles extends Model
{
    protected $fillable = [
        'role',
    ];

    public function events () {
        return $this->hasMany(Actors::class);
    }
}
