<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventStatus extends Model
{
    protected $fillable = [
        'status',
    ];

    public function events () {
        return $this->hasMany(Events::class);
    }
}
