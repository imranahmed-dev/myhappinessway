<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Validator;
use Auth;

class LoginRegistrationController extends Controller
{

    public function signup_store(Request $request){
         $validator = Validator::make($request->all(), [
            'email' => 'required|unique:users',
            'password' => 'required|min:8'
        ]);
        if ($validator->fails()){
            $notification = array(
                'message' => 'Email already Exist!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }else{
        
        $data = new User;
        $data->usertype  = "User";
        $data->email     = $request->email;
        $data->password  = bcrypt($request->password);
        $data->save();
        
        $notification = array(
                'message' => 'Registration Successfully Complete.. Please update your profile',
                'alert-type' => 'success'
                 );
                 
            Auth::login($data,true);
            return redirect('/myaccount/dashboard/')->with($notification);
        
    }
    }
}
