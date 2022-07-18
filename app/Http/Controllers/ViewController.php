<?php

namespace App\Http\Controllers;

use App\Models\ProductServices;
use Illuminate\Http\Request;
use App\Models\CategoryServices;
use App\Models\SubCategoryServices;

class ViewController extends Controller
{
    public function index()
    {
        $product = ProductServices::orderby('id','desc')->limit(8)->get();
        return view('index', ['products'=>$product]);
    }
    public function index2()
    {
        return view('index-2');
    }
    public function index3()
    {
        return view('index-3');
    }
    public function index4()
    {
        return view('index-4');
    }

    public function shopView()
    {
        $data = [];
        $category = CategoryServices::all();
        if(count($category)>0){
            $pro = ProductServices::Where('category_id',$category[0]->id)->get();
        }
        foreach($category as $cate){
            $product = ProductServices::Where('category_id',$cate->id)->get();
            $json = json_encode(['name'=>$cate->name, 'category_id'=>$cate->id, 'product_count'=>count($product)]);
            array_push($data,json_decode($json));
        }
        return view('shop',['categories'=>$data , 'pro'=>$pro]);
    }
    public function cart()
    {
        return view('cart');
    }

    public function contact()
    {
        return view('contact-us');
    }
    public function wishList()
    {
        return view('wishlist');
    }
    public function shopGridRightSidebar()
    {
        return view('shop-grid-right-sidebar');
    }
    public function shopGridFull3Col()
    {
        return view('shop-grid-full-3-col');
    }
    public function shopGridFull4Col()
    {
        return view('shop-grid-full-4-col');
    }
    public function shopListLeftSidebar()
    {
        return view('shop-list-left-sidebar');
    }
    public function shopListRightSidebar()
    {
        return view('shop-list-right-sidebar');
    }
    public function shopListFullWidth()
    {
        return view('shop-list-full-width');
    }

    public function productDetails($id)
    {
        $product_detail = ProductServices::Where('id',$id)->get();
        // dd($product_detail);
        foreach($product_detail as $sub_cate){
            $sub_category = SubCategoryServices::Where('id',$sub_cate->sub_category_id)->first();
            $product = ProductServices::Where('sub_category_id',$sub_category->id)->get();
        }
        // dd($product);
        
        return view('product-details',['s_product'=>$product_detail , 're_product'=>$product]);
    }
    public function productDetailsAffiliate()
    {
        return view('product-details-affiliate');
    }
   
    public function productDetailsVariable()
    {
        return view('product-details-variable');
    }
    public function productDetailsGroup()
    {
        return view('product-details-group');
    }
    public function myAccount()
    {
        return view('my-account');
    }
    public function login()
    {
        return view('login');
    }
    public function blogLeftSidebar()
    {
        return view('blog-left-sidebar');
    }
    public function blogRightSidebar()
    {
        return view('blog-right-sidebar');
    }
    public function blogGridFullWidth()
    {
        return view('blog-grid-full-width');
    }
    public function blogDetails()
    {
        return view('blog-details');
    }
    public function blogDetailsLeftSidebar()
    {
        return view('blog-details-left-sidebar');
    }
    public function checkout()
    {
        return view('checkout');
    }
    public function faq()
    {
        return view('faq');
    }
    public function compare()
    {
        return view('compare');
    }
    
}
