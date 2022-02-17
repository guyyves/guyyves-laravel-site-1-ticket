<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function ConfirmOrder($order_id)
    {
        $order = Order::with('customer', 'events', 'orderTickets')->findOrFail($order_id);
        return view('pages/orders/confirm')->with('order', $order);
    }
}
