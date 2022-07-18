<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CategoryServices;
use App\Models\SubCategoryServices;
use Illuminate\Support\Facades\Crypt;

class CategoryController extends Controller
{
    public function viewCategory()
    {
        $record = CategoryServices::all();
        return view('admin.view_category',['records'=>$record]);
    }
   
    public function addCategory()
    {
        return view('admin.add_category');
    }
   
    public function editCategory($id)
    {
        $id = Crypt::decryptstring($id);
        $record = CategoryServices::Where('id',$id)->get()->first();
        return view('admin.edit_category',['category'=>$record]);
    }
    public function deleteCategory($id)
    {
        $id = Crypt::decryptstring($id);
        $delete = CategoryServices::Where('id',$id)->delete();
        if($delete){
            $subdelete = SubCategoryServices::Where('category_id', $id)->delete();
            if($subdelete){
                return back()->with('success','Category Successfully Deleted');
            }else{
                return back()->with('error','Category Cannot not Delete');
            }
            
        } 
    }
   
    public function category(Request $request)
    {
        $data = [];
        $name = $request->post('name');
        $description = $request->post('description');    
        $images = $request->file('image');

        for($i = 0; $i < count($name); $i++){
            $image_name = $images[$i]->getClientOriginalName();
            $images[$i]->move(public_path().'/admin/files/', $image_name);  
                array_push($data, ['image'=>$image_name , 'name'=>$name[$i], 'description'=>$description[$i], 'status'=>1]);  
        }
       
        $insert = CategoryServices::insert($data);
        if($insert){
            return Redirect('admin/category')->with('success','Category Added Successfully');
        }else{
            return back()->with('error','Category Cannot not Added');
        }
        
    }
    public function update(Request $request)
    {
        $id = $request->post('id');
        $name = $request->post('name');
        $description = $request->post('description');
        $update = CategoryServices::Where('id',$id)->update([
            'name'=>$name,
            'description'=>$description
        ]);
        if($update){
            return Redirect('admin/category')->with('success','Category Updated Successfully');
        }else{
            return back()->with('error','Category Cannot not updeted');
        }
    }
    

    
}
