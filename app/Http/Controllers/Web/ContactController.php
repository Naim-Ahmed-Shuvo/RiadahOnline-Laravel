<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
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
