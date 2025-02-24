<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventTickets extends Model
{
    protected $fillable = [
        'price',
        'user_id',
        'event_id',
        'room_id',
        'seat_id',
        'ticket_status_id',
    ];

    public function ticketStatus()
    {
        return $this->belongsTo(TicketStatus::class, 'id');
    }

    public function event()
    {
        return $this->belongsTo(Events::class, 'id');
    }

    public function room()
    {
        return $this->belongsTo(Rooms::class, 'id');
    }

    public function seat()
    {
        return $this->belongsTo(Seats::class, 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
}
