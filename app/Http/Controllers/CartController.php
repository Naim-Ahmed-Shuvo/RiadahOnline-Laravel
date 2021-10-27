<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Session;

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
        $service = Service::find($id);
        if(!$service) {
            abort(404);
        }
        $cat_name = Category::find( $service->cat_id);
        $cart = session()->get('cart');


        // if cart is empty then this the first product
        if(!$cart) {
            $cart = [
                    $id => [
                        "name" => $service->title,
                        "quantity" => 1,
                        "price" => $service->price,
                        "photo" => $service->image
                    ]
            ];
            session()->put('cart', $cart);
            return view('web.cart_page',['cat_name'=>$cat_name->name]);
        }

        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            return view('web.cart_page',['cat_name'=>$cat_name->name]);
        }
        
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $service->title,
            "quantity" => 1,
            "price" => $service->price,
            "photo" => $service->image
        ];
        session()->put('cart', $cart);
        return view('web.cart_page',['cat_name'=>$cat_name->name]);
    }

    function increaseQty($rowId){
        // echo 'hello';
         Cart::get($rowId)->qty+1;

        return back();
    }
    function decreaseQty($rowId){
        // echo 'hello';
         Cart::get($rowId)->qty-1;

        return back();
    }

    function removeCart(){
        Cart::destroy();
        return "ok";
    }
}
