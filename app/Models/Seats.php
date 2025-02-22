<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seats extends Model
{
    protected $fillable = [
        'id_room',
        'row',
        'number',
    ];

    public function rooms()
    {
        return $this->belongsTo(Rooms::class);
    }
}
