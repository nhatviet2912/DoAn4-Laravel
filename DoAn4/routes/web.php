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


Route::controller(App\Http\Controllers\HomeController::class) -> group(function(){
    Route::get('/', 'index') -> name('FptShop/index');
    Route::get('/categories/{id?}', 'categories') -> name('FptShop/categories');
    Route::get('/productDetails/{id?}', 'productDetails') -> name('FptShop/productDetails');
    Route::get('/login', 'login') -> name('login');
    Route::get('/register', 'register') -> name('register');
    Route::get('/tragop', 'tragop') -> name('tragop');

    Route::post('/search', 'search') -> name('FptShop/search');

});
Route::controller(App\Http\Controllers\CartController::class) -> group(function(){
    Route::get('/cart', 'cart') -> name('FptShop/cart');
    Route::post('/addcart', 'addCart') -> name('cart.addCart');

    Route::post('/updatecart', 'updateCart')->name('cart.update');

    Route::post('/removeCart', 'removeCart')->name('cart.removeCart');

    Route::post('clear', 'clearAllCart')->name('cart.clear');

    Route::get('/checkout', 'checkout') -> name('checkout');
    Route::post('/checkoutpost', 'checkoutpost') -> name('checkout.checkoutpost');

});


Route::controller(App\Http\Controllers\AdminController::class) -> group(function(){
    Route::get('/admin/index', 'index') -> name('admin.auth.index');


    Route::get('/admin/login', 'Login') -> name('admin.auth.login');
    Route::post('/admin/postLogin', 'postLogin') -> name('admin.auth.postLogin');

    Route::get('/admin/logout', 'logout') -> name('admin.auth.logout');


    Route::get('/admin/register', 'register') -> name('admin.auth.register');
    Route::post('/admin/postRegister', 'postRegister') -> name('admin.auth.postRegister');

    

});

Route::controller(App\Http\Controllers\LoaiSanPhamController::class) -> group(function(){
    Route::get('/admin/loaisanpham/index', 'index') -> name('admin.loaisanpham.index');

    Route::get('/admin/loaisanpham/create', 'create') -> name('admin.loaisanpham.create') -> middleware('authrole');
    Route::post('/admin/loaisanpham/store', 'store') -> name('admin.loaisanpham.store');
    
    Route::get('/admin/loaisanpham/edit/{id}', 'edit') -> name('admin.loaisanpham.edit') -> middleware('authrole');
    Route::post('/admin/loaisanpham/update/{id}', 'update') -> name('admin.loaisanpham.update');


    Route::get('/admin/loaisanpham/delete/{id}', 'destroy') -> name('admin.loaisanpham.destroy') -> middleware('authrole');
 
});

Route::controller(App\Http\Controllers\SanPhamController::class) -> group(function(){
    Route::get('/admin/sanpham/index', 'index') -> name('admin.sanpham.index');

    Route::get('/admin/sanpham/create', 'create') -> name('admin.sanpham.create') -> middleware('authrole');
    Route::post('/admin/sanpham/store', 'store') -> name('admin.sanpham.store');

    Route::get('/admin/sanpham/edit/{id}', 'edit') -> name('admin.sanpham.edit') -> middleware('authrole');
    Route::post('/admin/sanpham/update/{id}', 'update') -> name('admin.sanpham.update');


    Route::get('/admin/sanpham/delete/{id}', 'destroy') -> name('admin.sanpham.destroy') -> middleware('authrole');

});

Route::controller(App\Http\Controllers\NhapHangController::class) -> group(function(){
    Route::get('/admin/hoadonnhap/index', 'index') -> name('admin.hoadonnhap.index');

    Route::get('/admin/hoadonnhap/create', 'create') -> name('admin.hoadonnhap.create') -> middleware('authrole');
    Route::post('/admin/hoadonnhap/store', 'store') -> name('admin.hoadonnhap.store');

    Route::get('/admin/hoadonnhap/details/{id}', 'details') -> name('admin.hoadonnhap.details') ;


});

Route::controller(App\Http\Controllers\KhoController::class) -> group(function(){
    Route::get('/admin/kho/index', 'index') -> name('admin.kho.index');

});

Route::controller(App\Http\Controllers\DonHangController::class) -> group(function(){
    Route::get('/admin/donhang/index', 'index') -> name('admin.donhang.index');

    Route::get('/admin/donhang/chitietdonhang/{id}', 'OderDetail') -> name('admin.donhang.chitietdonhang');

    Route::get('/admin/donhang/confirm', 'OderConfirm') -> name('admin.donhang.donhangdaxacnhan');

    Route::get('/admin/donhang/unconfirm', 'OderUnConfirm') -> name('admin.donhang.donhangchuaxacnhan');

    Route::post('/admin/donhang/confirmcheckout/{id}', 'ConfirmCheckout') -> name('admin.donhang.ConfirmCheckout') -> middleware('authrole');
    Route::post('/admin/donhang/CancelCheckout/{id}', 'CancelCheckout') -> name('admin.donhang.CancelCheckout') -> middleware('authrole');  
    
    Route::get('/admin/donhang/viewoder/{id}', 'Viewoder') -> name('admin.donhang.viewoder');

});

Route::controller(App\Http\Controllers\HoaDonBanController::class) -> group(function(){
    Route::get('/admin/hoadonban/index', 'index') -> name('admin.hoadonban.index');
    Route::get('/admin/hoadonban/detail/{id}', 'detailhoadonban') -> name('admin.hoadonban.detail');

});


Route::controller(App\Http\Controllers\UserController::class) -> group(function(){
    Route::get('/admin/user/index', 'index') -> name('admin.user.index');
    
    Route::post('/admin/user/postQuyen', 'postQuyen') -> name('admin.user.postQuyen');

});

Route::controller(App\Http\Controllers\ThongKeController::class) -> group(function(){
    Route::get('/admin/thongke/index', 'index') -> name('admin.thongke.index');
    
    Route::post('/admin/thongke/theongay', 'theongay') ->name('admin.thongke.theongay');

    Route::get('/admin/thongke/theothang', 'theothangget') ->name('admin.thongke.theothangget');

    Route::post('/admin/thongke/theothang', 'theothang') ->name('admin.thongke.theothang');

    Route::get('/admin/thongke/khachhang', 'khachhang') ->name('admin.thongke.khachhang');


});


