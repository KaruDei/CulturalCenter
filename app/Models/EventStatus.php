<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventStatus extends Model
{
    public function events () {
        return $this->hasMany(Events::class);
    }
}
