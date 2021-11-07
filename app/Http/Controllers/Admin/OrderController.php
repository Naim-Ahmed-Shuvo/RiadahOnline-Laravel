<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Checkout;
use App\Models\Orders;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    function getAllOrders(){
        $orders = Orders::latest()->get();
        return view('admin.orders.index',['orders'=>$orders]);
    }

    function removeOrder(Orders $order){
        $checkout = Checkout::find($order->checkout_id);

        if($checkout){
            $checkout->delete();
        }
        $order->delete();
        // return $order;

        return back()->with('success','Order remove!!');
    }
    function confirmOrder($id){
         Orders::where('id',$id)->update([
               'status'=>'confirmed'
         ]);
         return back()->with('success','Order confirmed!!');
    }
}
