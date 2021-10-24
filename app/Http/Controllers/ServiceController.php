<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::latest()->get();
        return view('admin.service.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = DB::table('categories')->pluck('id','name');
        return view('admin.service.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         if($request->img){
             $img_name = time().'.'.$request->file('img')->getClientOriginalExtension();
             $request->img->move(public_path('images'), $img_name);

             $service = Service::create([
                 'title'=>$request->title,
                 'title_ar'=>$request->title_ar,
                 'cat_id'=>$request->cat_id,
                 'description'=>$request->description,
                 'description_ar'=>$request->description_ar,
                 'image'=> 'images/'.$img_name
             ]);


             return back()->with('success','You have successfully added serivce');
         }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return response()->json($service);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

        if ($request->img != null) {

            $service_info = Service::where('id', $id)->first();
            if ( $service_info->image != null ) {
                unlink($service_info->image);
            }

            $img = $request->file('img');
            $img_name = rand().'.'.$img->getClientOriginalExtension();
            $destinaton_path = public_path('images');
            $img->move($destinaton_path, $img_name);

         Service::where('id',$id)->update([
                'title'=>$request->title,
                'title_ar'=>$request->title_ar,
                'cat_id'=>$request->cat_id,
                'description'=>$request->description,
                'description_ar'=>$request->description_ar,
                'image' => 'images/'.$img_name,
                'created_at' => Carbon::now(),
            ]);

            return response()->json(['seccues'=>'with image']);
        }

        else{
           Service::where('id',$id)->update([
                'title'=>$request->title,
                'title_ar'=>$request->title_ar,
                'cat_id'=>$request->cat_id,
                'description'=>$request->description,
                'description_ar'=>$request->description_ar,
                'created_at' => Carbon::now(),
            ]);

            return response()->json(['seccues'=>$request->all()]);
        }
        return response()->json(['seccues'=>$request->all()]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id);

        if($service->image){
            unlink($service->image);
        }

        $service->delete();

        return response()->json(['success'=>'service deleted success fully']);
    }
}
