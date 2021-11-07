<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Orders;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    function getAllOrders(){
        $orders = Orders::latest()->get();
        return view('admin.orders.index',['orders'=>$orders]);
    }
}
