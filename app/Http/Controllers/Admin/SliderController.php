<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        return view('admin.slider.index');
    }

    public function store(Request $request)
    {
        if($request->img!==null){
           $img = $request->file('img');
           $img_name = time().'.'.$img->getClientOriginalExtension();
           $path = public_path('sliderimg');
           $img->move($path,$img_name);

           $slider = Slider::create([
             'image'=>'sliderimg/'.$img_name
           ]);

           if($slider){
               return response()->json(['success'=>'Slider  Added Successfully'],200);
           } else{
            return response()->json(['error'=>'Slider  Added Successfully'],500);
           }
        }

    }

    public function fetchslider()
    {
        # code...
        $sliders = Slider::latest()->get();
         return response()->json($sliders);
    }

    function editSlider($id)
    {
        $slider = Slider::find($id);
        return response()->json($slider,200);
    }

    public function updateSlider(Request $request)
    {
        # code...
        if($request->img!==null){
            $img_info = Slider::find($request->slider_id);
            if($img_info->image!==null){
                unlink($img_info->image);
            }

            $img = $request->file('img');
            $img_name = time().'.'.$img->getClientOriginalExtension();
            $path = public_path('sliderimg');
            $img->move($path,$img_name);

            $slider = Slider::where('id',$request->slider_id)->update([
              'image'=>'sliderimg/'.$img_name
            ]);

            if($slider){
                return response()->json(['success'=>'Slider  updated '],200);
            } else{
             return response()->json(['error'=>'Something wrong'],500);
            }
         }
        // return response()->json($request->all());
    }

    public function deleteSlider($id)
    {
        # code...
        $slider = Slider::find($id);
        if($slider->image!==null) unlink($slider->image);
        $slider->delete();
         return response()->json(['success'=>'slider deleted']);
    }
}
