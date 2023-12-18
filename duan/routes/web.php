<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\AdminController;
Use App\Http\Controllers\UserController;    
Use App\Http\Controllers\AccountController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\TinController;
use App\Models\User;
use App\Http\Requests\RuleRegister;
Use App\Http\Controllers\SessionsController;   




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
Route::get('/lienhe',[ContactController::class,'lienhe']);
Route::post('/send',[ContactController::class,'send'])->name('sendemail');
Route::get('/cuahang', 'App\Http\Controllers\TinController@timkiem')->name('timkiem');
Route::get('/cuahang/{id?}', [TinController::class, 'cuahang'])->name('cuahang');
Route::get('/chitiet/{id}',[TinController::class,'chitiet'])->name('chitiet');

//checkadmin
// Route::group(['middleware' => 'auth','checkAdmin'], function () {
    Route::prefix('/')->middleware('checkAdmin')->group(function () {

        Route::get('/admin', [AdminController::class, 'index_admin'])->name('admin');


        Route::get('/admin/list-user',[AdminController::class,'list_user'])->name('listuser');

        //quanlitintuc
        Route::get('/admin/listtintuc', [TinController::class, 'listtintuc'])->name('listtintuc');
        Route::get('/admin/themtin', [TinController::class, 'themtin'])->name('themtin');
        Route::post('/admin/themtin', [TinController::class, 'themtin_'])->name('themtin_');
        Route::get('xoa/{id}', [TinController::class, 'xoa']);
        Route::get('/admin/suatin/{id}', [TinController::class, 'suatin'])->name('suatin');
        Route::put('/admin/capnhat/{id}', [TinController::class, 'capnhat'])->name('capnhat');

        
    });
        //quanlisanpham
        Route::get('/admin/list',[ProductController::class,'list']);
        Route::get('/admin/add',[ProductController::class,'add']);
        Route::post('save',[ProductController::class,'save_add'])->name('save_add');
        Route::get('/admin/edit/{id}',[ProductController::class,'edit'])->name('edit');
        Route::put('update/{id}',[ProductController::class,'update']);
        Route::get('/del/{id}',[ProductController::class,'del']);
        Route::get('/admin/comment/list',[CommentController::class,'list']);

        //contact
        Route::get('/lienhe',[ContactController::class,'lienhe']);
        Route::post('/send',[ContactController::class,'send'])->name('sendemail');
        Route::get('/',[TinController::class, 'index']);
        //Danhmuc
        Route::get('/admin/listcate',[CategoryController::class,'listcate']);
        Route::get('/admin/addcate',[CategoryController::class,'addcate']);
        Route::post('save_cate',[CategoryController::class,'save_cate'])->name('save_cate');
        Route::get('/admin/editcate/{id}',[CategoryController::class,'edit'])->name('edit');
        // Route::put('update/{id}',[CategoryController::class,'update']);
        Route::get('/delcate/{id}',[CategoryController::class,'del']);
        //Cửahang
        // Route::get('/cuahang', 'App\Http\Controllers\TinController@timkiem')->name('timkiem');
        // Route::get('/cuahang/{id?}', [TinController::class, 'cuahang'])->name('cuahang');

        //chitiet
        // Route::get('/chitiet/{id}',[TinController::class,'chitiet'])->name('chitiet');

        // adduser
        Route::get('/adduser', [UserController::class,'create']);
        Route::post('/adduser', [UserController::class,'store_'])->name ('register_store');
        Route::get('/user/update/{id}', [UserController::class, 'edit']);
        Route::post('/user/update/{id}', [UserController::class, 'update']);

        Route::get('/user/delete/{id}', [UserController::class, 'delete']);

  
// });
// account
Route::get('login',[AccountController::class,'login'])->name('login');
Route::post('login',[AccountController::class,'login_'])->name('logingo');
Route::get('register',[AccountController::class,'register'])->name('register');
Route::post('register',[AccountController::class,'register_']);
Route::get('forgot-password1',[AccountController::class,'forgot_password'])->name('forgot-password');
Route::post('forgot-password1',[AccountController::class,'forgot_password_'])->name('password.reset');
Route::get('forgot-password',[AccountController::class,'reset_password'])->name('password.reset');
Route::delete('logout',[AccountController::class,'logout'])->name('logout');  

    
//  Route::get('404', function () {
//     return view('404');
// })->name('404');

