<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function showOrderDetails($orderId)
    {
        $orderDetails = Order::with('customer', 'orderDetails.product')
            ->where('order_id', $orderId)
            ->first();

        return view('admin.order_details', compact('orderDetails'));
    }
}
