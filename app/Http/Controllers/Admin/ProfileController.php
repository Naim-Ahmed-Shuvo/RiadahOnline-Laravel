<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    //

    public function index()
    {
        # code...
        $user = Auth::user();

        return view('admin.profile.profile',['user'=>$user ]);
    }

    public function update(Request $request)
    {
        // return $request;
        # code...
        if($request->img){
            $img = $request->file('img');
            $img_name = time().'.'.$img->getClientOriginalExtension();
            $img->move(public_path('userimg'), $img_name);

            $user_updated = User::where('id',$request->user_id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'role'=> $request->role,
                'mobile_number'=> $request->phone,
                'company_name'=> $request->company_name,
                'img'=> 'public/userimg/'.$img_name,
                'updated_at' => Carbon::now()
            ]);
            Session::flash('message', 'profile updated');
            return back();
        } else{
            $user_updated = User::where('id',$request->user_id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'role'=> $request->role,
                'mobile_number'=> $request->phone,
                'company_name'=> $request->company_name,
                // 'img'=> 'public/images'.$img_name,
                'updated_at' => Carbon::now()
            ]);
            Session::flash('message', 'profile updated');
            return back();
        }
    }

    public function view()
    {
        # code...

        $users = User::latest()->get();
        return view('admin.users.index',['users'=>$users]);
    }

   


}
