<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [App\Http\Controllers\ViewController::class, 'index']);
Route::get('home_2',[App\Http\Controllers\ViewController::class, 'index2']);
Route::get('home_3',[App\Http\Controllers\ViewController::class, 'index3']);
Route::get('home_4',[App\Http\Controllers\ViewController::class, 'index4']);


Route::get('shop',[App\Http\Controllers\ViewController::class, 'shopView']);
Route::get('contact_us',[App\Http\Controllers\ViewController::class, 'contact']);
Route::get('wishlist',[App\Http\Controllers\ViewController::class, 'wishList']);
Route::get('shop_grid_right_sidebar',[App\Http\Controllers\ViewController::class, 'shopGridRightSidebar']);
Route::get('shop_grid_full_3_col',[App\Http\Controllers\ViewController::class, 'shopGridFull3Col']);
Route::get('shop_grid_full_4_col',[App\Http\Controllers\ViewController::class, 'shopGridFull4Col']);
Route::get('shop_list_left_sidebar',[App\Http\Controllers\ViewController::class, 'shopListLeftSidebar']);
Route::get('shop_list_right_sidebar',[App\Http\Controllers\ViewController::class, 'shopListRightSidebar']);
Route::get('shop_list_full_width',[App\Http\Controllers\ViewController::class, 'shopListFullWidth']);
Route::get('cart',[App\Http\Controllers\ViewController::class, 'cart']);


Route::get('product_details/{id}',[App\Http\Controllers\ViewController::class, 'productDetails']);
Route::get('product_details_affiliate',[App\Http\Controllers\ViewController::class, 'productDetailsAffiliate']);
Route::get('product_details_variable',[App\Http\Controllers\ViewController::class, 'productDetailsVariable']);
Route::get('product_details_group',[App\Http\Controllers\ViewController::class, 'productDetailsGroup']);

Route::get('my_account',[App\Http\Controllers\ViewController::class, 'myAccount']);
Route::get('login',[App\Http\Controllers\ViewController::class, 'login']);
Route::get('register',[App\Http\Controllers\ViewController::class, 'login']);

Route::get('blog_left_sidebar',[App\Http\Controllers\ViewController::class, 'blogLeftSidebar']);
Route::get('blog_right_sidebar',[App\Http\Controllers\ViewController::class, 'blogRightSidebar']);
Route::get('blog_grid_full_width',[App\Http\Controllers\ViewController::class, 'blogGridFullWidth']);
Route::get('blog_details',[App\Http\Controllers\ViewController::class, 'blogDetails']);
Route::get('blog_details_left_sidebar',[App\Http\Controllers\ViewController::class, 'blogDetailsLeftSidebar']);
Route::get('checkout',[App\Http\Controllers\ViewController::class, 'checkout']);
Route::get('faq',[App\Http\Controllers\ViewController::class, 'faq']);
Route::get('compare',[App\Http\Controllers\ViewController::class, 'compare']);

// Admin
Route::get('admin/login', function(){
    return view('admin.login');
});
Route::get('logout',[App\Http\Controllers\AdminController::class, 'doLogout']);
Route::post('do_login', [App\Http\Controllers\LoginController::class , 'doLogin']);
Route::get('admin/dashboard', [App\Http\Controllers\Admin\CategoryController::class, 'viewCategory']);
Route::get('admin/category', [App\Http\Controllers\Admin\CategoryController::class, 'viewCategory']);
Route::get('admin/sub_category', [App\Http\Controllers\Admin\SubCategoryController::class, 'subCategory']);
Route::get('add_category', [App\Http\Controllers\Admin\CategoryController::class, 'addCategory']);
Route::get('add_sub_category', [App\Http\Controllers\Admin\SubCategoryController::class, 'addSubCategory']);
Route::post('admin/add_category',[App\Http\Controllers\Admin\CategoryController::class , 'category']);
Route::post('admin/sub_category',[App\Http\Controllers\Admin\SubCategoryController::class , 'storeSubCategory']);
Route::get('admin/sub_category/{id}', [App\Http\Controllers\Admin\SubCategoryController::class, 'viewSubCategory']);
Route::get('add_sub_category/{id}', [App\Http\Controllers\Admin\SubCategoryController::class, 'addSubCategoryWithId']);

// edit
Route::get('edit/{id}',[App\Http\Controllers\Admin\CategoryController::class, 'editCategory']);
Route::post('admin/edit_category',[App\Http\Controllers\Admin\CategoryController::class, 'update']);
Route::get('delete/{id}',[App\Http\Controllers\Admin\CategoryController::class, 'deleteCategory']);
Route::get('delete_sub/{id}',[App\Http\Controllers\Admin\SubCategoryController::class, 'deleteSubCategory']);
Route::get('edit_sub/{id}',[App\http\Controllers\Admin\SubCategoryController::class, 'editSubCategory']);
Route::post('admin/update_sub_category',[App\Http\Controllers\Admin\SubCategoryController::class ,'updateSubCategory']);

//product add
Route::get('product',[App\Http\Controllers\Admin\ProductController::class, 'viewProductForm']);
Route::post('category_id',[App\Http\Controllers\Admin\AjaxController::class , 'getSubCategory']);
Route::post('add_product', [App\Http\Controllers\Admin\ProductController::class, 'productAdd']);
Route::get('admin/product_show',[App\Http\Controllers\Admin\ProductController::class, 'showProduct']);

//product edit
Route::get('product_edit/{id}',[App\Http\Controllers\Admin\ProductController::class, 'edit']);
Route::post('edit_product',[App\Http\Controllers\Admin\ProductController::class , 'update']);
Route::get('product_delete/{id}',[App\Http\Controllers\Admin\ProductController::class, 'delete']);
Route::get('category_page/{id}',[App\Http\Controllers\Admin\ProductController::class, 'viewProduct']);