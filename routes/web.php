<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductDetailsController;
use App\Http\Controllers\ClientsCotroller;
use App\Http\Controllers\AdminController;

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
// Clients Route
Route::get('/', [ClientsCotroller::class, 'index'])->name('home');
Route::get('/cart', [ClientsCotroller::class, 'cart'])->name('cart');
Route::get('/contact-us', [ClientsCotroller::class, 'contact_us'])->name('contact-us');
Route::get('/about-us', [ClientsCotroller::class, 'about_us'])->name('about-us');
Route::get('/shop', [ClientsCotroller::class, 'shop'])->name('shop');
Route::get('/blog', [ClientsCotroller::class, 'blog'])->name('blog');
Route::get('/Error', [ClientsCotroller::class, 'Error'])->name('Error');
Route::get('/wishlist', [ClientsCotroller::class, 'wishlist'])->name('wishlist');
Route::get('/checkout', [ClientsCotroller::class, 'checkout'])->name('checkout');


Route::get('/product-details', [ProductDetailsController::class, 'index'])->name('product-details');




Route::get('/register', [AuthController::class, 'loadRegister']);
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/login', [AuthController::class, 'loadLogin']);
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout']);






Route::group(['prefix' => 'admin', 'middleware' => ['web', 'isAdmin']], function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::get('/users', [AdminController::class, 'users'])->name('superAdminUsers');
    Route::get('/user/create', [AdminController::class, 'createUser'])->name('createUsers');
    Route::post('/users', [AdminController::class, 'store'])->name('storeUsers');
    Route::get('/user/{user}/edit', [AdminController::class, 'editUser'])->name('editUser');
    Route::put('/user/{user}/update', [AdminController::class, 'updateUser'])->name('updateUser');

    Route::get('/manage-role', [AdminController::class, 'manageRole'])->name('manageRole');
    Route::post('/update-role', [AdminController::class, 'updateRole'])->name('updateRole');
});


Route::group(['middleware' => ['web', 'isUser']], function () {
    Route::get('/dashboard', [UserController::class, 'dashboard']);
});
