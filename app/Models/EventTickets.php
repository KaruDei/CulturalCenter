<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventTickets extends Model
{
    protected $fillable = [
        'price',
        'id_user',
        'id_event',
        'id_room',
        'id_seat',
        'id_ticket_status',
    ];

    public function ticketStatus()
    {
        return $this->belongsTo(TicketStatus::class);
    }
}
