<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seats extends Model
{
    public function rooms()
    {
        return $this->belongsTo(Rooms::class);
    }
}
