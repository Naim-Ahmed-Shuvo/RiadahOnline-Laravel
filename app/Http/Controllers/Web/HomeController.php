<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Contact;
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

    public function submit(Request $request)
    {
        Contact::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone_number'=>$request->phone_number,
            'company_name'=>$request->company_name,
            'city'=>$request->city,
            'message'=>$request->message,
        ]);

        return back();
    }
}
