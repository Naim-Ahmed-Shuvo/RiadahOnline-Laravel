<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //

    public function storeUser(Request $request)
    {
        # code...
        if($request->img!==null){



            $img = $request->file('img');
            $img_name = time().'.'.$img->getClientOriginalExtension();
            $img->move(public_path('userimg'),$img_name);

            $user = User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>Hash::make($request->password),
                'role'=>$request->role,
                'img'=>'public/userimg/'.$img_name,
                'company_name'=>$request->company_name,
                'mobile_number'=>$request->phone,
                'created_at'=>Carbon::now()
            ]);


            if($user){
                return response()->json([
                   'success' => 'User created Successfully',
                ]);
            } else{
               return response()->json([
                   'error' => 'Something wrong',
                ]);
           }
        } else{
            $user = User::create([
                'name'=>$request->name ,
                'email'=>$request->email ,
                'password'=>Hash::make($request->password),
                'role'=>$request->role ,
                // 'img'=>'public/userimg/'.$img_name,
                'company_name'=>$request->company_name ,
                'mobile_number'=>$request->phone ,
                'created_at'=>Carbon::now()
            ]);


            if($user){
                return response()->json([
                   'success' => 'User created Successfully',
                ]);
            } else{
               return response()->json([
                   'error' => 'Something wrong',
                ]);
           }
        }
    }

    public function getUser($id)
    {
        # code...
        return response()->json(User::find($id));
    }


    public function updateUser(Request $request,$id)
    {
        # code...
        $img_info = User::find($id);
        if($request->img!==null){

            if($img_info->img){
                unlink($img_info->img);
            }

            $img = $request->file('img');
            $img_name = time().'.'.$img->getClientOriginalExtension();
            $img->move(public_path('userimg'),$img_name);

            $updated_user = User::where('id',$id)->update([
                'name'=>$request->name??$img_info->name ,
                'email'=>$request->email??$img_info->email,
                'password'=>$request->password?Hash::make($request->password):$img_info->password,
                'role'=>$request->role??$img_info->role,
                'img'=>'public/userimg/'.$img_name,
                'company_name'=>$request->company_name??$img_info->company_name,
                'mobile_number'=>$request->phone??$img_info->mobile_number,
                'updated_at'=>Carbon::now()
            ]);


            if($updated_user){
                return response()->json([
                   'success' => 'User Updated Successfully',
                ]);
            } else{
               return response()->json([
                   'error' => 'Something wrong',
                ]);
           }
        } else{
            $updated_user = User::where('id',$id)->update([
                'name'=>$request->name??$img_info->name ,
                'email'=>$request->email??$img_info->email,
                'password'=>$request->password?Hash::make($request->password):$img_info->password,
                'role'=>$request->role??$img_info->role,
                // 'img'=>'public/userimg/'.$img_name,
                'company_name'=>$request->company_name??$img_info->company_name,
                'mobile_number'=>$request->phone??$img_info->mobile_number,
                'updated_at'=>Carbon::now()
            ]);


            if($updated_user){
                return response()->json([
                   'success' => 'User Updated Successfully',
                ]);
            } else{
               return response()->json([
                   'error' => 'Something wrong',
                ]);
           }
        }

    }

    public function deleteUser($id)
    {
        # code...
        $user = User::find($id);
        if($user->img!==null){
            unlink($user->img);
        }
        $user->delete();

        return response()->json(['success'=>$user ]);
    }
}
