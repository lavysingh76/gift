<?php

namespace App\Http\Controllers;

use App\Models\UserServices;
use Illuminate\Http\Request;
use App\Models\CategoryServices;
use App\models\SubCategoryServices;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class AdminController extends Controller
{
    





    public function doLogout(Request $request)
    {
        Auth::logout();
        $request->session()->flush();
        $request->session()->forget('name');
       
        // $request->session()->forget('status');
        return Redirect('/admin/login');
    }
   
}
