<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class AdminController extends Controller
{
    public function show(){
        $data = Order::all();  //select * from orders
        return view('admin.admin_dashboard', compact( 'data'));
    }

    // public function orderDetails()
    // {
    //     return view('admin.order_details');
    // }
}

