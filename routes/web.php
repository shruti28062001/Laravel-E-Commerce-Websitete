<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
// use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserproductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ThankyouController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserdashController;
use App\Http\Middleware\Frontlogin;
use Whoops\Run;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('index');
});

Route::get('/clear', function () {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return "cache cleared";
});

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/header', function () {
    return view('header');
});
Route::get('/footer', function () {
    return view('footer');
});
Route::get('dashboard/dashnavbar', function () {
    return view('dashnavbar');
});
Route::get('dashboard/sidebar', function () {
    return view('sidebar');
});
Route::get('dashboard/dashfooter', function () {
    return view('dashfooter');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});

// Route::get('/detail', function () {
//     return view('detail');
// });


Route::get('admin/login', [AdminController::class, 'login_form'])->name('login.form');
Route::post('login-functionality', [AdminController::class, 'login_functionality'])->name('login.functionality');
Route::group(['middleware' => 'admin'], function () {
Route::get('logout', [AdminController::class, 'logout'])->name('logout');
Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

Route::get('/admin/products', [ProductController::class, 'index'])->name('Products.index');
Route::get('/admin/categories', [CategoryController::class, 'index'])->name('Categories.index');
Route::get('/admin/orders', [OrderController::class, 'index'])->name('Orders.order');
});

// require __DIR__.'/auth.php';

// //admin

// Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
//     Route::namespace('Auth')->group(function(){

//         Route::get('login', [AuthenticatedSessionController::class,'create'])->name('login');
//         // Route::post('login', 'AuthenticatedSessionController@store')->name('adminlogin');
//     });
// });


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/listing/{id}', [App\Http\Controllers\HomeController::class, 'listing'])->name('listing');
Route::get('/detail/{id}', [App\Http\Controllers\HomeController::class, 'detail'])->name('detail');
Route::get('/userOrders', [App\Http\Controllers\HomeController::class, 'userOrders'])->name('userOrders');



//  Route::post('/addToCart', [CartController::class, 'addToCart'])->name('addToCart');
//  Route::get('/cart', [CartController::class, 'cart'])->name('cart');
Route::post('/addcart',[ CartController::class,'addToCart'])->name('cart');

Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show');

Route::get('/cart/remove/{cartItemId}', [CartController::class, 'removeFromCart'])->name('remove-from-cart');

Route::post('update-cart-quantity', [CartController::class, 'updateCartQuantity'])->name('update-cart-quantity');


//checkout
Route::get('/checkout', [CheckoutController::class,'showCheckoutForm'])->name('checkout');
Route::post('/checkout', [CheckoutController::class, 'processPayment'])->name('process.payment');
Route::get('/thankyou', [ThankyouController::class, 'index'])->name('thankyou');

//product
Route::get('/admin/products/create', [ProductController::class, 'create'])->name('Products.create');

Route::post('/products/store', [ProductController::class, 'store'])->name('Products.store');

Route::get('/admin/products/{id}/edit', [ProductController::class, 'edit']);
Route::put('/admin/products/{id}/update', [ProductController::class, 'update']);
Route::delete('/admin/products/{id}/delete', [ProductController::class, 'destroy'])->name('product.delete');

//Category

Route::get('/admin/categories/create', [CategoryController::class, 'create'])->name('Categories.create');
Route::post('/categories/store', [CategoryController::class, 'store'])->name('Categories.store');

Route::get('/admin/categories/{id}/edit', [CategoryController::class, 'edit']);
Route::put('/admin/categories/{id}/update', [CategoryController::class, 'update']);
Route::delete('/admin/categories/{id}/delete', [CategoryController::class, 'destroy'])->name('Categories.delete');
Route::get('/admin/showproduct', [CategoryController::class, 'showProducts'])->name('showProducts');

//Orders

// Route::get('/admin/orders',[order_controller::class,'index'])->name('admin.orders');

Route::Match(['get', 'post'], 'update-order-status', [Ordercontroller::class, 'updateStatus']);
Route::get('/admin/order_details/{order_id}',[Ordercontroller::class,'OrderDetails'])->name('Orders.order_details');

//users
Route::get('/userOrders', [UserdashController::class,'index'])->name('userOrders');
Route::get('/order_details/{id}',[Ordercontroller::class,'USerOrderDetails'])->name('userorder_details');


// Route::get('/admin/order_details/{order_id}',[Ordercontroller::class,'OrderDetails'])->name('Orders.order_details');







//user login-register
Route::match(['get','post'], 'login-register', [UserController::class, 'userLoginRegister']);
Route::match(['get','post'], 'user-login', [UserController::class, 'login'])->name('user-login');

Route::match(['get','post'], '/user-logout', [UserController::class, 'logout']);

//user login-register
Route::match(['get','post'], '/forgot-password/', [UserController::class, 'forgotPassword']);

Route::match(['get','post'],'/changePassword', [UserController::class, 'changePassword']);

//users register form submit
Route::match(['get','post'], '/user-register', [UserController::class, 'register']);

//users register form submit
Route::post('/user-register',[UserController::class,'register']);

//user account activation vie email
Route::get('confirm/{code}',[UserController::class, 'confirmAccount']);


//users logout
Route::get('/user-logout',[UserController::class, 'logout']);



//user dashboard



// Route::get('user/login', [UserdashController::class, 'login_form'])->name('user-login');
// // Route::post('login-functionality', [UserdashController::class, 'login_functionality'])->name('login.functionality');
// Route::group(['middleware' => 'admin'], function () {
// Route::get('logout', [UserdashController::class, 'logout'])->name('logout');
// Route::get('user/dashboard', [UserdashController::class, 'dashboard'])->name('dashboard');

// Route::get('/user/orders', [UserdashController::class, 'index'])->name('user_order.orders');
    
// Route::Match(['get', 'post'], 'update-order-status', [Ordercontroller::class, 'updateStatus']);
// Route::get('/User/order_details/{order_id}',[Userdashcontroller::class,'OrderDetails'])->name('user_order.order_details');

// });

Route::middleware([frontlogin::class])->group(function () {   
    Route::match(['get','post'], 'users/dashboard', [UserdashController::class, 'user_dashboard']);
    Route::match(['get','post'], 'userOrders/user_order', [UserdashController::class, 'index'])->name('user_order.orders');

});

//


 

