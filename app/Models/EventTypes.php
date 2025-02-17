<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventTypes extends Model
{
    public function events () {
        return $this->hasMany(Events::class);
    }
}
