<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Service;

class CartController extends Controller
{
    public function index()
    {
        return view('web.cart_page');
    }

    public function viewShopPage()
    {
        return view('web.shop_page');
    }

    public function addToCart($id)
    {
        // dd(session()->all());
        $service = Service::find($id);
        if(!$service) {
            abort(404);
        }
        $cat_name = Category::find( $service->cat_id);
        $cart = session()->get('cart');

        // dd($cart);
        // return;


        // if cart is empty then this the first product
        if(!$cart) {
            $cart = [
                    $id => [
                        "name" => $service->title,
                        "quantity" => 1,
                        "price" => $service->price,
                        "photo" => $service->image,
                        "cat_name"=>$cat_name,
                    ]
            ];
            session()->put('cart', $cart);
            // dd($cart);
            // return;
            return back()->with('success','service added to cart');
        }

        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {
            // $cart[$id]['quantity']++;
            // session()->put('cart', $cart);
            return view('web.cart_page');
        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $service->title,
            "quantity" => 1,
            "price" => $service->price,
            "photo" => $service->image,
            "cat_name"=>$cat_name,
        ];
        session()->put('cart', $cart);
        return back()->with('success','service added to cart');

    }

    function increaseQty($rowId){

        if($rowId){
           $cart = session()->get('cart');
           $cart[$rowId]['quantity']++;

           session()->put('cart',$cart);
           return response()->json(['cart'=>$cart],200);
        }

        return back()->with('success','qty increased');
    }
    function decreaseQty($rowId){


        if($rowId){
            $cart = session()->get('cart');

            if($cart[$rowId]['quantity']>=0){
                $cart[$rowId]['quantity']--;
                session()->put('cart',$cart);
                return response()->json(['cart'=>$cart],200);
            }

            session()->put('cart',$cart);
            return response()->json(['cart'=>$cart],200);
         }
        return back();
    }

    function removeCart(){
        session()->flush();
        return 'ok';
    }
}
