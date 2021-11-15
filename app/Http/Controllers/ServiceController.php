<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
use App\Models\Vendor;
use Carbon\Carbon;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session as FacadesSession;

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
        // return $request->all();
         if($request->img){
             $img_name = time().'.'.$request->file('img')->getClientOriginalExtension();
             $request->img->move(public_path('images'), $img_name);

             //inserting vendor data
              $vendor_id= Vendor::insertGetId([
                'name'=>$request->v_name,
                'email'=>$request->v_email,
                'phone'=>$request->v_phone,
                'company_name'=>$request->v_c_name,
                'created_at'=>Carbon::now()
              ]);

              //inserting service data
             $service = Service::create([
                 'title'=>$request->title,
                 'title_ar'=>$request->title_ar,
                 'cat_id'=>$request->cat_id,
                 'description'=>$request->description,
                 'description_ar'=>$request->description_ar,
                 'image'=> 'images/'.$img_name,
                 'tags'=> $request->tags,
                 'price'=> $request->price,
                 'information'=>$request->information,
                 'information_ar'=>$request->information_ar,
                 'vendor'=> $vendor_id,
                 'reviews'=> '5',
                 'created_at'=>Carbon::now()
             ]);

             return back()->with('success','You have successfully added serivce');
         }


         //inserting vendor data
         $vendor_id= Vendor::insertGetId([
            'name'=>$request->v_name,
            'email'=>$request->v_email,
            'phone'=>$request->v_phone,
            'company_name'=>$request->v_c_name,
            'created_at'=>Carbon::now()
          ]);

          //inserting service data
         $service = Service::create([
             'title'=>$request->title,
             'title_ar'=>$request->title_ar,
             'cat_id'=>$request->cat_id??'',
             'description'=>$request->description,
             'description_ar'=>$request->description_ar,
            //  'image'=> 'images/'.$img_name,
             'tags'=> $request->tags,
             'price'=> $request->price,
             'information'=>$request->information,
             'information_ar'=>$request->information_ar,
             'vendor'=> $vendor_id,
             'reviews'=> '5',
             'created_at'=>Carbon::now()
         ]);
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
        $categories = Category::all();
        $vendor = Vendor::find($service->vendor);
        return view('admin.service.edit',compact('service','vendor','categories'));
        // return response()->json($service);
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

        // return $request->all();
        if ($request->img != null) {

            $service_info = Service::where('id', $id)->first();
            if ( $service_info->image != null ) {
                unlink($service_info->image);
            }

            $img = $request->file('img');
            $img_name = rand().'.'.$img->getClientOriginalExtension();
            $destinaton_path = public_path('images');
            $img->move($destinaton_path, $img_name);

            //update vendor data
            $vendor_id= Vendor::where('id',$request->vendor_id)->update([
                'name'=>$request->v_name,
                'email'=>$request->v_email,
                'phone'=>$request->v_phone,
                'company_name'=>$request->v_c_name,
                'updated_at'=>Carbon::now()
            ]);

         Service::where('id',$id)->update([
            'title'=>$request->title,
            'title_ar'=>$request->title_ar,
            'cat_id'=>$request->cat_id,
            'description'=>$request->description,
            'description_ar'=>$request->description_ar,
            'image'=> 'images/'.$img_name,
            'tags'=> $request->tags,
            'price'=> $request->price,
            'information'=>$request->information,
            'information_ar'=>$request->information_ar,
            'vendor'=> $request->vendor_id,
            'reviews'=> '5',
            'updated_at'=>Carbon::now()
            ]);

            FacadesSession::flash("success","service updated");
            return redirect()->route('service.index');
        }

        else{

             //update vendor data
            $vendor_id= Vendor::where('id',$request->vendor_id)->update([
                'name'=>$request->v_name,
                'email'=>$request->v_email,
                'phone'=>$request->v_phone,
                'company_name'=>$request->v_c_name,
                'updated_at'=>Carbon::now()
            ]);

            //
           Service::where('id',$id)->update([
            'title'=>$request->title,
            'title_ar'=>$request->title_ar,
            'cat_id'=>$request->cat_id,
            'description'=>$request->description,
            'description_ar'=>$request->description_ar,
            'tags'=> $request->tags,
            'price'=> $request->price,
            'information'=>$request->information,
            'information_ar'=>$request->information_ar,
            'vendor'=> $request->vendor_id,
            'reviews'=> '5',
            'updated_at'=>Carbon::now()
            ]);

            FacadesSession::flash("success","service updated");

            return redirect()->route('service.index');
        }
        // return response()->json(['seccues'=>$request->all()]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        // return "hello";
        $service = Service::find($id);

        Vendor::where('id',$service->vendor)->delete();

        if($service->image){
            unlink($service->image);
        }

        $service->delete();

        FacadesSession::flash("success",'service deleted');

        return redirect()->back();
    }
}


// CREATE TABLE users (
//     id int NOT NULL PRIMARY KEY,
//     name varchar(255),
//     email varchar(255),
//     phone varchar(255),
//     password varchar(255)
// );
