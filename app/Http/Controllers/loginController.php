<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class loginController extends Controller
{
    //
    public function loginData(Request $request)
    {

        
      $user= User::where(['email'=>$request->email])->first();
    
      
      if(!$user || !Hash::check($request->password,$user->password))
      {
          return "username or password not matched";
      }
      else
      {
          $request->session()->put('user',$user);
          return redirect('/log');
      }

    }
}
