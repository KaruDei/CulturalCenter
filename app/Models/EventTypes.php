<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventTypes extends Model
{
    protected $fillable = [
        'type',
    ];

    public function events () {
        return $this->hasMany(Events::class);
    }
}
