<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seats extends Model
{
    protected $fillable = [
        'room_id',
        'row',
        'number',
    ];

    public function room()
    {
        return $this->belongsTo(Rooms::class, 'id');
    }

    public function tickets()
    {
        return $this->hasMany(Seats::class, 'seat_id');
    }
}
