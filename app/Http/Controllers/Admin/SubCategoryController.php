<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCategoryServices;
use App\Models\CategoryServices;
use Illuminate\Support\Facades\Crypt;

class SubCategoryController extends Controller
{
    public function storeSubCategory(Request $request)
    {
        $data = [];
        $category_id = $request->post('category');
        $sub_name = $request->post('name');
        $sub_description = $request->post('description');    
        $sub_images = $request->file('image');


        for($i = 0; $i < count($sub_name); $i++){
            $image_name = $sub_images[$i]->getClientOriginalName();
            $sub_images[$i]->move(public_path().'/admin/files/subcategory/', $image_name);  
                array_push($data, ['sub_image'=>$image_name , 'sub_name'=>$sub_name[$i], 'sub_description'=>$sub_description[$i], 'status'=>1, 'category_id'=>$category_id]);  
        }
       
        $insert = SubCategoryServices::insert($data);
        if($insert){
            return Redirect('admin/sub_category')->with('success','Sub Category Added Successfully');
        }else{
            return back()->with('error','Sub Category Cannot not Added');
        }

    }

    public function updateSubCategory(Request $request)
    {
        $id = $request->post('id');
        $category_id = $request->post('category');
        $sub_category_name = $request->post('name');
        $sub_description = $request->post('description');

        $update = SubCategoryServices::Where('id',$id)->update([
            'category_id'=>$category_id,
            'sub_name'=>$sub_category_name,
            'sub_description'=>$sub_description
        ]);
        if($update){
            return Redirect('admin/sub_category')->with('success','Sub Category Updated successfully.');
        }else{
            return back()->with('error','Sub Category Cannot update !!');
        }
    }

    public function viewSubCategory($id)
    {
        $sub_category = SubCategoryServices::Where('category_id',$id)->get();
        return view('admin.view_sub_category',['sub_cate'=>$sub_category, 'type'=>'withid' , 'id'=>$id]);
    }

    public function addSubCategoryWithId($id)
    {
        $record = CategoryServices::all();
        return view('admin.add_sub_category',['records'=>$record, 'id'=>$id ,'type'=>'withid']);
    }

    public function deleteSubCategory($id)
    {
        $id = Crypt::decryptstring($id);
        $delete = SubCategoryServices::Where('id',$id)->delete();
        if($delete){  
            return back()->with('success','Sub Category Successfully Deleted');
        }else{
            return back()->with('error','Sub Category Cannot not Delete');
        }
        
       
    }
    public function editSubCategory($id)
    {
        $id = Crypt::decryptstring($id);
        $record = CategoryServices::all();
        $sub_category = SubCategoryServices::Where('id',$id)->first();
        return view('admin.edit_sub_category',['sub_category'=>$sub_category, 'category'=>$record]);
    }
    public function addSubCategory()
    {
        $record = CategoryServices::all();
        return view('admin.add_sub_category',['records'=>$record , 'type'=>'show']);
    }

    public function subCategory()
    {
        $sub_category = SubCategoryServices::join('tbl_category', 'tbl_sub_category.category_id','=','tbl_category.id')->get(['tbl_sub_category.*','tbl_category.name as name']);
        return view('admin.view_sub_category',['sub_cate'=>$sub_category, 'type'=>'show']);
    }

}
