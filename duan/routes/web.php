<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\TinController;
use App\Models\User;
use App\Http\Requests\RuleRegister;
use App\Http\Controllers\SessionsController;




//chỉ có tài khoản đã đăng nhập mới được vào
// Route::group(['middleware' => 'auth'], function () {
//     Route::get('/account', function () {
//         return view('trangtestdangnhap');
//     })->name('account');
// });


//giaodien
Route::get('/', [TinController::class, 'index']);
Route::get('/news', [TinController::class, 'news']);
Route::get('/gioithieu', [TinController::class, 'gioithieu']);
Route::get('/news/{id}', [TinController::class, 'chitietnew'])->name('chitietnew');
Route::get('/lienhe', [ContactController::class, 'lienhe']);
Route::post('/send', [ContactController::class, 'send'])->name('sendemail');
Route::get('/cuahang', 'App\Http\Controllers\TinController@timkiem')->name('timkiem');
Route::get('/cuahang/{id?}', [TinController::class, 'cuahang'])->name('cuahang');
Route::post('/cuahang', [TinController::class, 'filterProducts'])->name('filter.products');
Route::get('/chitiet/{id}', [TinController::class, 'chitiet'])->name('chitiet');
Route::post('/comment/{idProduct}', [TinController::class, 'post_comment'])->name('comment');
Route::get('/favorite/{product}', [TinController::class, 'favorite'])->name('chitiet.favorite');
Route::post('/cuahang/loctheogia', [TinController::class, 'filterProducts'])->name('filter.products');

//checkadmin
// Route::group(['middleware' => 'auth','checkAdmin'], function () {
Route::controller(AdminController::class)->group(function () {
    Route::get('/admin', function () {
        return view('admin.admin');
    })->middleware(['auth', 'checkAdmin'])->name('admin');

    // });
    // Route::prefix('/login')->middleware('checkAdmin')->group(function () {

    // Route::get('/admin', [AdminController::class, 'index_admin'])->name('admin');
    Route::get('/admin/list-user', [AdminController::class, 'list_user'])->middleware(['auth', 'checkAdmin'])->name('admin');
});
Route::controller(TinController::class)->group(function () {
    Route::get('/admin', function () {
        return view('admin.admin');
    })->middleware(['auth', 'checkAdmin'])->name('admin');
    //quanlitintuc
    Route::get('/admin/listtintuc', [TinController::class, 'listtintuc'])->name('listtintuc');
    Route::get('/admin/themtin', [TinController::class, 'themtin'])->name('themtin');
    Route::post('/admin/themtin', [TinController::class, 'themtin_'])->name('themtin_');
    Route::get('xoa/{id}', [TinController::class, 'xoa']);
    Route::get('/admin/suatin/{id}', [TinController::class, 'suatin'])->name('suatin');
    Route::put('/admin/capnhat/{id}', [TinController::class, 'capnhat'])->name('capnhat');


    // });
    //quanlisanpham
    Route::get('/admin/list', [ProductController::class, 'list'])->middleware(['auth', 'checkAdmin'])->name('admin');
    Route::get('/admin/add', [ProductController::class, 'add']);
    Route::post('save', [ProductController::class, 'save_add'])->name('save_add');
    Route::get('/admin/edit/{id}', [ProductController::class, 'edit'])->name('edit');
    Route::put('update/{id}', [ProductController::class, 'update']);
    Route::get('/delproduct/{id}', [ProductController::class, 'delproduct']);
    Route::get('/admin/comment/list', [ProductController::class, 'list']);
    Route::get('/del/{id}', [ProductController::class, 'del']);
    //contact
    Route::get('/lienhe', [ContactController::class, 'lienhe']);
    Route::post('/send', [ContactController::class, 'send'])->name('sendemail');
    // Route::get('/',[TinController::class, 'index']);
    //Danhmuc
    Route::get('/admin/listcate', [CategoryController::class, 'listcate']);
    Route::get('/admin/addcate', [CategoryController::class, 'addcate']);
    Route::post('save_cate', [CategoryController::class, 'save_cate'])->name('save_cate');
    Route::get('/admin/editcate/{id}', [CategoryController::class, 'editcate'])->name('editcate');
    Route::put('updatecate/{id}', [CategoryController::class, 'updatecate']);
    Route::get('/delcate/{id}', [CategoryController::class, 'delcate']);

    // adduser
    Route::get('/adduser', [UserController::class, 'create']);
    Route::post('/adduser', [UserController::class, 'store_'])->name('register_store');
    Route::get('/user/update/{id}', [UserController::class, 'edit']);
    Route::post('/user/update/{id}', [UserController::class, 'update']);
    Route::get('/user/delete/{id}', [UserController::class, 'delete']);
});
// account
Route::get('login', [AccountController::class, 'login'])->name('login');
Route::post('login', [AccountController::class, 'login_'])->name('logingo');
Route::get('register', [AccountController::class, 'register'])->name('register');
Route::post('register', [AccountController::class, 'register_']);
Route::get('forgot-password1', [AccountController::class, 'forgot_password'])->name('forgot-password');
Route::post('forgot-password1', [AccountController::class, 'forgot_password_'])->name('password.reset');
Route::get('forgot-password', [AccountController::class, 'reset_password'])->name('password.reset');
Route::delete('logout', [AccountController::class, 'logout'])->name('logout');
Route::get('/profile/edit', [AccountController::class, 'edit'])->name('profile.edit')->middleware('auth');
Route::post('/profile/update', [AccountController::class, 'update'])->name('profile.update')->middleware('auth');
Route::get('/favorite', [AccountController::class, 'favorite'])->name('favorite');
//  Route::get('404', function () {
//     return view('404');
// })->name('404');
Route::get('/giohang',[CartController::class,'cart'])->name('giohang');
Route::get('/thanhtoan',[CartController::class,'cartcheck']);
Route::post('/thanhtoan',[CartController::class,'cartcheck'])->name('thanhtoan');
Route::post('/quatrinh-thanhtoan',[CartController::class,'processCheckout'])->name('quatrinhtt');
Route::any('add-to-cart/{id}', [CartController::class,'addToCart'])->name('add_to_cart');
Route::put('update-cart', [CartController::class,'updateCart'])->name('update_cart');
Route::delete('remove-from-cart', [CartController::class,'remove'])->name('remove_from_cart');

Route::get('/cart_check', [Checkout::class, 'index'])->name('checkout');
//Pay offline
Route::post('/order/store', [Checkout::class, 'store'])->name('order.store');
Route::get('/order/confirm', [Checkout::class, 'confirm'])->name('order.confirm');

//Pay online
Route::any('/checkout', [CartController::class, 'checkout'])->name('checkout');
Route::get('/success', [CartController::class, 'success'])->name('success');
Route::get('/cancel', [CartController::class, 'cancel'])->name('cancel');

