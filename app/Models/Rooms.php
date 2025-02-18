<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    public function events () {
        return $this->hasMany(Events::class);
    }

    public function seats () {
        return $this->hasMany(Seats::class);
    }
}
