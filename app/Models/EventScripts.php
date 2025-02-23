<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventScripts extends Model
{
    protected $fillable = [
        'title',
        'content',
    ];

    public function events () {
        return $this->hasMany(Events::class, 'event_script_id');
    }
}
