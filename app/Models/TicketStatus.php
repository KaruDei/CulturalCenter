<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicketStatus extends Model
{
    protected $fillable = [
        'status'
    ];

    public function eventTickets()
    {
        return $this->hasMany(EventTickets::class, 'ticket_status_id');
    }
}
