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

        return  view('admin.service_slider.index',['items'=>ServiceSlider::latest()->get()]);
    }

    function create(){
        return view('admin.service_slider.create');
    }

    function store(Request $request){
        // dd($request);

        $request->validate([
            'title'=>"required",
            'title_ar'=>"required",
            'sub_title'=>"required",
            'sub_title_ar'=>"required",
            'img' => 'required|image|mimes:jpg,png,jpeg,gif,svg'
        ]);


       if($request->img){
        // $img = Image::make($request->file('img'))->resize(300, 200)->save('foo.jpg');
        // return $img->response('jpg');

        //
           $img = Image::make($request->file('img'))->resize(300,200);
           $img_name = time().'.'.$request->file('img')->getClientOriginalExtension();
           $img->save('service_slider_images/'.$img_name);

           ServiceSlider::create([
                'title'=>$request->title,
                'title_ar'=>$request->title_ar,
                'sub_title'=>$request->sub_title,
                'sub_title_ar'=>$request->sub_title_ar,
               'image'=>"service_slider_images/".$img_name,
           ]);

           return back()->with('success','Saved');
       }



    }

    function edit(ServiceSlider $id){
        return view('admin.service_slider.edit',['item'=>$id]);
    }

    function update(Request $request,$id){
    //    dd($request->all());
      if($request->img){

        //removing old image if any
          $old_img = ServiceSlider::where('id',$id)->first();
          if($old_img->image){
              unlink($old_img->image);
          }

          //updating
           $img = Image::make($request->file('img'))->resize(300,200);
           $img_name = time().'.'.$request->file('img')->getClientOriginalExtension();
           $img->save('service_slider_images/'.$img_name);

           ServiceSlider::where('id',$id)->update([
               'title'=>$request->title,
               'title_ar'=>$request->title_ar,
               'sub_title'=>$request->sub_title,
               'sub_title_ar'=>$request->sub_title_ar,
               'image'=>"service_slider_images/".$img_name,
           ]);

           return redirect()->route('service_slider')->with('success','Updated Successfully');
      }

        ServiceSlider::where('id',$id)->update([
            'title'=>$request->title,
            'title_ar'=>$request->title_ar,
            'sub_title'=>$request->sub_title,
            'sub_title_ar'=>$request->sub_title_ar,
        ]);

        return redirect()->route('service_slider')->with('success','Updated Successfully');

    }

    function delete($id){
        //
      $item = ServiceSlider::find($id);
      $item->image? unlink($item->image):"";

      //
      $item->delete();
      return back()->with('success','Deleted SuccessFully');
    }
}
