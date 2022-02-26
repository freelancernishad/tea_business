<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderInfoController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\frontendController;
use App\Http\Controllers\cart;


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

Route::get('/', function () {
    return view('index');
});

    Route::get('/',[frontendController::class,'index']);
    Route::get('/category/{slug}',[frontendController::class,'category']);
    Route::get('/shop',[frontendController::class,'shop']);
    Route::get('/product/{id}',[frontendController::class,'product_details']);
    Route::get('/checkout',[frontendController::class,'checkout']);
    Route::post('/checkout',[frontendController::class,'checkoutpost']);

    Route::get('/my-account',[frontendController::class,'my_account']);
    Route::get('/my-account/logout',[frontendController::class,'logout']);
    Route::post('/my-account',[frontendController::class,'my_account_login']);
    Route::post('/my-account/register',[frontendController::class,'my_account_register']);
    Route::post('/my-account/update',[frontendController::class,'my_account_update']);


Route::get('cart', [cart::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [cart::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [cart::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [cart::class, 'remove'])->name('remove.from.cart');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('dashboad')->group(function () {

    Route::resources([
        'customers' => CustomerController::class,
        'orders-info' => OrderInfoController::class,
        'orders' => OrderController::class,
        'product-category' => ProductCategoryController::class,
        'products' => ProductController::class,
        'blogs' => BlogController::class,
        'blog-category' => BlogCategoryController::class,

        ]);




});



Route::view('dashboad','dashboard.index');
