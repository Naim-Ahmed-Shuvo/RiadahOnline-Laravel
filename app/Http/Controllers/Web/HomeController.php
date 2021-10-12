<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;
        # code...
        if(isset($request->search)){
            $services =  Service::where('title','LIKE','%'.$search.'%')->get();
            return view('web.index',compact('services','search'));
        }
        $services =  Service::latest()->get();
        return view('web.index',compact('services'));
    }
}
