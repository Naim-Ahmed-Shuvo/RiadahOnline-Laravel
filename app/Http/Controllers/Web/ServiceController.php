<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    public function index(Request $request,$cat_id='')
    {

        if(isset($request->search)){
            $services =  Service::where('title','LIKE','%'.$request->search.'%')->get();
            $categories = Category::latest()->get();
            return view('web.service',compact('services','categories'));
        }
        # code...
        $services = $cat_id? Service::where('cat_id',$cat_id)->get() :Service::latest()->get();
        $categories = Category::latest()->get();

        // return $services;
        return view('web.service',compact('services','categories'));
    }

    public function getServiceByCategory($id)
    {
        # code...
        $services = Service::where('cat_id',$id)->get();

        return $services;
    }


}
