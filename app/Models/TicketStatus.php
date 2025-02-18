<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicketStatus extends Model
{
    public function eventTickets()
    {
        return $this->hasMany(EventTickets::class);
    }
}
