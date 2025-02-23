<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exhibitions extends Model
{
    protected $fillable = [
        'title',
        'description',
        'picture',
        'start_date',
        'end_date',
        'event_id',
    ];

    public function events() {
        return $this->belongsTo(Events::class, 'id');
    }
}
