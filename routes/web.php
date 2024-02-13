<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\CartController;


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

route::get('/',[HomeController::class,'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [HomeController::class,'redirect'])->name('dashboard');
});
// testing
route::get('/test',[HomeController::class,'test']);
// view category page
route::get('/view_category',[AdminController::class,'view_category']);
// view order page
route::get('/view_order',[AdminController::class,'view_order']);
// view reservation
route::get('/reservation_admin',[AdminController::class,'reservation']);
// view delivered order page
route::get('/delivered_order',[AdminController::class,'delivered_order']);
// add food page

route::get('/view_food',[AdminController::class,'view_food']);
// show product page
// route::get('/show_product',[AdminController::class,'show_product']);
route::get('/show_food',[AdminController::class,'show_food']);
// adding category
route::post('/add_category',[AdminController::class,'add_category']);
// show banner
route::get('/view_banner',[AdminController::class,'view_banner']);
// side banner
route::get('/view_side_banner',[AdminController::class,'view_side_banner']);
// for adding product
// route::post('/add_product',[AdminController::class,'add_product']);
route::post('/add_food',[AdminController::class,'add_food']);
// for adding banner
route::post('/add_banner',[AdminController::class,'add_banner']);

// add cart
route::get('/add_cart/{id}',[HomeController::class,'add_cart']);

// selected menu
route::get('/categoryfood/{id}',[HomeController::class,'categoryfood']);



// Edit Product
// route::get('/edit_product/{id}',[AdminController::class,'edit_product']);
route::get('/edit_food/{id}',[AdminController::class,'edit_food']);

// category ways product Product
route::get('/category_product/{id}',[HomeController::class,'category_product']);
// show cart
route::get('/show_cart',[HomeController::class,'show_cart']);

// menus
route::get('/our_menu',[HomeController::class,'our_menu']);
// blog
route::get('/blog',[HomeController::class,'blog']);

// read blog
route::get('/read_blog/{id}',[HomeController::class,'read_blog']);
// contact
route::get('/contact',[HomeController::class,'contact']);

// for adding mini banner
route::post('/add_mini_banner',[AdminController::class,'add_mini_banner']);
// reservation
route::post('/reservation',[HomeController::class,'reservation']);

// send feedback
route::post('/send_feedback',[HomeController::class,'send_feedback']);

// view feedback
route::get('/read_feedback',[AdminController::class,'read_feedback']);

// for Ratting
route::post('/add_rating',[HomeController::class,'add_rating']);
// add middle banner
route::post('/add_middle_banner',[AdminController::class,'add_middle_banner']);
// cash_on_delivery
route::post('/cash_on_delivery',[StripeController::class,'cash_on_delivery']);

route::get('/view_middle_banner',[AdminController::class,'view_middle_banner']);
// address url
route::get('/address',[HomeController::class,'address']);
// demo
route::get('/demo',[HomeController::class,'demo']);


// address url
route::get('/details/{id}',[HomeController::class,'details']);

// Delete Product
route::get('/delete_product/{id}',[AdminController::class,'delete_product']);

// Delete blog
route::get('/delete_blog/{id}',[AdminController::class,'delete_blog']);

// cancel Order
route::get('/cancel_order/{id}',[HomeController::class,'cancel_order']);
// cancel Order
route::get('/view_cancel_request',[AdminController::class,'view_cancel_request']);


// delete user
route::get('/delete_user/{id}',[AdminController::class,'delete_user']);
// delete banner
route::get('/delete_banner/{id}',[AdminController::class,'delete_banner']);

route::get('/delete_category/{id}',[AdminController::class,'delete_category']);

// My order
route::get('/order',[HomeController::class,'order']);
// reservation
route::get('/reservation',[HomeController::class,'reservation_status']);

// for posting blog
route::get('/post_blog',[AdminController::class,'post_blog']);

// for show blog
route::get('/show_blog',[AdminController::class,'show_blog']);

// add blog
route::post('/add_blog',[AdminController::class,'add_blog']);

// user_handle
route::get('/user_handle',[AdminController::class,'user_handle']);
// Search
route::get('/search',[HomeController::class,'search']);

// ordercheckout
route::get('/ordercheckout',[HomeController::class,'ordercheckout']);





// // Testing url
// route::get('/flashselltime',[HomeController::class,'flashselltime']);
// update address
route::post('/update_address/{id}',[HomeController::class,'update_address']);
// update Product
route::post('/update_product/{id}',[AdminController::class,'update_product']);

// remove cart
route::get('/remove_cart/{id}',[HomeController::class,'remove_cart']);

// quantity
route::get('/update_quantity/{id}',[HomeController::class,'update_quantity']);

Route::patch('/products/{product}/toggle-feature', [ProductController::class, 'toggleFeature']);

Route::patch('/products/{id}/toggle-flash-sell', [ProductController::class, 'toggleFlashSell'])->name('products.toggleFlashSell');


route::get('/checkout/{id}',[StripeController::class,'checkout']);
Route::post('stripe/create-charge', [StripeController::class, 'createCharge'])->name('stripe.create-charge');


Route::patch('/products/{product}/toggle-order', [ProductController::class, 'toggleOrderStatus'])->name('products.toggle-order');
// // Reservation Status
// have to change this part 
Route::patch('/products/{product}/toggle-reserv', [AdminController::class, 'toggleOrderStatus'])->name('products.toggle-reserv');


Route::patch('/products/{product}/toggle-delivery_status', [ProductController::class, 'toggleDeliveryStatus'])->name('products.toggle-delivery_status');


Route::patch('/products/{product}/toggle-cancel', [ProductController::class, 'toggleCancelStatus'])->name('products.toggle-cancel');



// update cart quantity
// routes/web.php
// routes/web.php
Route::post('/update-cart-quantity', 'CartController@updateQuantity')->name('update.cart.quantity');