<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventTickets extends Model
{
    public function ticketStatus()
    {
        return $this->belongsTo(TicketStatus::class);
    }
}
