<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryServices;
use App\Models\ProductServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Facades\Crypt;

class ProductController extends Controller
{
    public function viewProductForm()
    {
        $cate = CategoryServices::all();
        return view('admin.product.add_product',['category'=>$cate]);
    }
    public function productAdd(Request $request)
    {
        $type = $request->post('addmore');

        $name = $request->post('name');
        $details = $request->post('details');
        $price = $request->post('price');
        $discount = $request->post('discount');
        $status = $request->post('status');
        $priority = $request->post('priority');
        $category_id = $request->post('category');
        $sub_category_id = $request->post('sub_category');
        $images = $request->file('image');
        if($images){
            $image_name = $images->getClientOriginalName();
            $images->move(public_path().'/admin/files/product/', $image_name);  
               $insert = ProductServices::insert(['product_image'=>$image_name , 'product_name'=>$name,'price'=>$price,'discount'=>$discount,'priority'=>$priority, 'detail'=>$details, 'status'=>$status, 'category_id'=>$category_id, 'sub_category_id'=>$sub_category_id]);  
       
        }else{
  
            $insert = ProductServices::insert(['product_name'=>$name,'price'=>$price,'discount'=>$discount,'priority'=>$priority, 'detail'=>$details, 'status'=>$status, 'category_id'=>$category_id, 'sub_category_id'=>$sub_category_id]);  
       
        }
        
        if($insert){
            if($type == 'addmore'){
                return Redirect('product')->with('success','Product Added successfully you want to add more');
            }else{
                return Redirect('admin/product_show')->with('success','Product Added successfully');
            }
        }else{
            return back()->with('error','Product Cannot Added !!');
        }
    }

    public function showProduct()
    {
        $products = ProductServices::join('tbl_category','tbl_category.id','=','tbl_product.category_id')
        ->join('tbl_sub_category','tbl_sub_category.id','=','tbl_product.sub_category_id')
        ->get(['tbl_category.name as name', 'tbl_sub_category.sub_name as sub_name','tbl_product.*' ]);
        // dd($products);


        return view('admin.product.view_product',['product'=>$products]);
    }

    public function edit($id)
    {
        $id = Crypt::decryptstring($id);
        $category = CategoryServices::all();
        $products = ProductServices::Where('tbl_product.id',$id)
        ->join('tbl_category','tbl_category.id','=','tbl_product.category_id')
        ->join('tbl_sub_category','tbl_sub_category.id','=','tbl_product.sub_category_id')
        ->first();
        return view('admin.product.edit_product',['id'=>$id, 'type'=>'edit','category'=>$category, 'product'=>$products]);
    }

    public function update(Request $request)
    {
        $id = $request->post('id');
        $name = $request->post('name');
        $details = $request->post('details');
        $price = $request->post('price');
        $discount = $request->post('discount');
        $status = $request->post('status');
        $priority = $request->post('priority');
        $sub_category_id = $request->post('sub_category'); 
        $category_id = $request->post('category');

        $update = ProductServices::Where('id',$id)->update([
            'product_name'=>$name,
            'detail'=>$details,
            'price'=>$price,
            'discount'=>$discount,
            'status'=>$status,
            'priority'=>$priority,
            'sub_category_id'=>$sub_category_id,
            'category_id'=>$category_id
        ]);
        if($update){
            return Redirect('admin/product_show')->with('success','Product updated successfully.');
        }else{
            return back()->with('error','Product cannot updated !! ');
        }
    }

    public Function delete($id)
    {
        $id = Crypt::decryptstring($id);
        $delete = ProductServices::Where('id',$id)->delete();
        if($delete){
            return Redirect('admin/product_show')->with('success','Product Deleted successfully.');
        }else{
            return back()->with('error','Product cannot Delete !! ');
        }
    }

    public function viewProduct($id)
    {
        // $id = Crypt::decryptstring($id);
        $product_detail = ProductServices::Where('category_id',$id)->get();
        $data = [];
        $category = CategoryServices::all();
        if(count($category)>0){
            $pro = ProductServices::Where('category_id',$id)->get();
        }
        foreach($category as $cate){
            $product = ProductServices::Where('category_id',$cate->id)->get();
            $json = json_encode(['name'=>$cate->name, 'category_id'=>$cate->id, 'product_count'=>count($product)]);
            array_push($data,json_decode($json));
        }
        return view('shop',['categories'=>$data , 'product_detail'=>$product_detail , 'pro'=>$pro]);
    }


}
