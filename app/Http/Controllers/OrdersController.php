<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use App\Models\Orders;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    function index(){
        return view('web.shop_page');
    }

    public function storeOrder(Request $request)
    {
        $checkout = Checkout::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'contact'=>$request->contact,
            'budget'=>$request->budget,
            'description'=>$request->description,
            'created_at' => Carbon::now()
        ]);

        // dd(session()->get('cart'));
        $carts = session()->get('cart');
        // chec_id 	service_id 	service_name 	service_qty 	subtotal 	vat 	total 	created_at

        $sub_total = 0;

        foreach($carts as $idx=>$cart){
            $sub_total += $cart['price'] * $cart['quantity'];
            $order = Orders::insert([
                'chec_id'=>$checkout->id,
                'service_id'=>$idx,
                'service_name'=>$cart['name'],
                'service_qty'=>$cart['quantity'],
                'subtotal'=>$sub_total,
                'vat'=>'5',
                'total'=>$sub_total+5,
                'created_at' => Carbon::now()
            ]);
        }
        session()->flush();
        return redirect()->route('order.success');
    }

    public function orderSuccess()
    {
        return view('web.order_succes');
    }
}
