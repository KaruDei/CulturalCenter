<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventCreators extends Model
{
    protected $fillable = [
        'creator',
    ];

    public function events () {
        return $this->hasMany(Events::class);
    }
}
