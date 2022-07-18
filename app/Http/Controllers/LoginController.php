<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function doLogin(Request $request)
    {
        $email = $request->post('email');
        $password = $request->post('password');
        $data = array(
            'email'=>$email,
            // 'role'=>0,
            'password'=>$password
        );
        if(Auth::attempt($data)){
            $user = UserServices::Where('email',$email)->get();
            $request->session()->put('role',$user->first()->role);
            $request->session()->put('name',$user->first()->name);
            if($user->first()->role == 0){
                return Redirect('admin/dashboard');
            }else{
                return Redirect::to('/');
            }
            
        }else{
            return back()->with('error','Email or password invalid !!');
        }
    }

}
