<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderTicket extends Model
{
    use HasFactory;
    protected $table = 'orders_tickets';
    protected $with = ['ticket'];

    public function Ticket()
    {
        return $this->hasmany(Ticket::class, 'id', 'ticket_id');
    }
}
