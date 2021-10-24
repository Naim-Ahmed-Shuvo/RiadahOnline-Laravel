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

        $categories = Category::latest()->get();

        if(isset($request->search)){
            $services =  Service::where('title','LIKE','%'.$request->search.'%')->get();
            $categories = Category::latest()->get();
            return view('web.service',compact('services','categories','cat_id'));
        }
        if(isset($request->cat_search)){
            $categories = Category::where('name','LIKE','%'.$request->cat_search.'%')->get();
            // return $categories;
        }
        # code...
        $services = $cat_id? Service::where('cat_id',$cat_id)->get() : Service::latest()->get();


        // return $services;
        return view('web.service',compact('services','categories','cat_id'));
    }

    public function getServiceByCategory($id)
    {

        $services = Service::where('cat_id',$id)->get();

        return $services;
    }

    public function serviceDetails(Request $request,$id='',$cat_id='')
    {
        // echo $cat_id?  $cat_id:'nai';
        // exit();
        $services = $cat_id? Service::where('cat_id',$cat_id)->get() :Service::latest()->get();
        $categories = Category::latest()->get();
        $service = $id?Service::find($id):'';
        $category = $cat_id?Category::find($service->cat_id):'';
        if(isset($request->search)){
            $services =  Service::where('title','LIKE','%'.$request->search.'%')->get();
            $categories = Category::latest()->get();
            // return view('web.details',['services'=>$services,'categories'=>$categories]);
        }



        return view('web.details',['service'=>$service,'services'=>$services,'category'=>$category,'categories'=>$categories,'id'=>$id,'cat_id'=>$cat_id]);
    }


}
