<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exhibitions extends Model
{
    public function events() {
        return $this->belongsTo(Events::class);
    }
}
