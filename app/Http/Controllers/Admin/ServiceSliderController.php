<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceSlider;
use Illuminate\Http\Request;
use Image;

class ServiceSliderController extends Controller
{
    //
    function index(){
        return  view('admin.service_slider.index');
    }

    function create(){
        return view('admin.service_slider.create');
    }

    function store(Request $request){
        return $request;

        $this->validate($request,[
            'title'=>"required",
            'title_ar'=>"required",
            'sub_title'=>"required",
            'sub_title_ar'=>"required",
            'image'=>"required",
        ]);


       if($request->image !== null){
           $img = Image::make($request->file('image'))->resize(450,450);
           $img_name = time().'.'.$img->getClientOrigfinalExtension();
           $img->move(public_path('images'),$img_name);

           ServiceSlider::create([
               'title'=>$request->title,
               'title_ar'=>$request->title_ar,
               'sub_title'=>$request->title_ar,
               'sub_title_ar'=>$request->sub_title_ar,
               'image'=>"images/".$img_name,
           ]);

           return redirect()->route('service_slider');
       }


       ServiceSlider::create([
        'title'=>$request->title,
        'title_ar'=>$request->title_ar,
        'sub_title'=>$request->title_ar,
        'sub_title_ar'=>$request->sub_title_ar,

    ]);

     return redirect()->route('service_slider')->with("success","Scuusfully Stored !!");
    }

    function edit(Request $request){
        return $request->all();
    }
}
