<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
