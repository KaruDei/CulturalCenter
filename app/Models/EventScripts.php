<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventScripts extends Model
{
    public function events () {
        return $this->hasMany(Events::class);
    }
}
