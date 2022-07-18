<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SubCategoryServices;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\SubscribedService;

class AjaxController extends Controller
{
    public function getSubCategory(Request $request)
    {
        $category_id = $request->post('category_id');
        $sub_category = SubCategoryServices::Where('category_id',$category_id)->get();

        return ['sub_category'=>$sub_category,'status'=>'success'];
    }
}
