<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Order;
use App\Models\OrderTicket;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketConroller extends Controller
{
    public function showBuyTicketForm($eventId)
    {
        $event = Event::findOrFail($eventId);
        return view('pages.buyTicketForm')->withevent($event);
    }

    public function orderTicket($eventId, Request $request)
    {
        $event = Event::findOrFail($eventId);
        $order = null;

        //koppeling van tabellen
        $customer_id = auth()->user()->customer->id;

        \DB::transaction(function()use($event, $customer_id, $eventId, $request , $order, &$order_id){
        $order = new Order();
        $order->customer_id = $customer_id;
        $order->event_id = $eventId;
        $order->order_number = $customer_id . rand(1 , 1000);
        $order->order_date = Date('Y-m-d');
        $order->status = 'open';
        $order->save();
        $this->order = $order;
        $order_id = $order->id;

        for ($i= 0;$i < $request->amount ;$i++)
        {
            $ticket = new Ticket();
            $ticket->status = 0;
            $ticket->price_per_ticket = $event->ticket_price;
            $ticket->save();

            $orderTicket = new OrderTicket();
            $orderTicket->order_id = $order->id;
            $orderTicket->ticket_id = $ticket->id;
            $orderTicket->save();
        }
        });
        return redirect()->route('events.confirmOrder', $order->id)->with('message', 'Uw tickets zijn besteld!');

        //return redirect()->route('events.ConfirmOrder', $order_id);

        //$event = Event::findOrFail($eventId);
        //return view('pages.orderTickets')->withevent($event);
    }



}
