<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

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

// navbar navigation

Route::get("/",[HomeController::class,"index"])->name("home.index");
Route::get("/shop",[ShopController::class,"index"])->name("shop.index");
Route::get("/contact",[ContactController::class,"index"])->name("contact.index");
Route::get("/cart",[CartController::class,"index"])->name("cart.index");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


//admin
Route::get('/admin', [AdminController::class, 'index'])
    ->name('admin.index')
    ->middleware('admin');
    Route::get('/admin/users', [AdminController::class, 'users'])
    ->name('admin.users')
    ->middleware('admin');

//product
 //page
 Route::get("/admin/products",[AdminController::class,"products"])->name("admin.products");

 //createpage
 Route::get("/admin/products/create/page",[AdminController::class,"createPage"])->name("admin.createProducts.page");
//create
Route::post("/admin/products/create",[ProductController::class,"storeProducts"])->name("admin.createProducts");

//show

Route::get('/products/show/{id}' , [HomeController::class , "show"])->name("product.show");

// delete
Route::delete('/admin/products/delete/{product}', [ProductController::class,"delete"])->name('product.destroy');
//update
Route::get("/admin/products/update/page/{id}",[AdminController::class,"updatePage"])->name("admin.updateProducts.page");
Route::put("/admin/products/update/{product}",[ProductController::class,"update"])->name("product.update");
// users 

//delete
Route::delete('/admin/users/{user}/delete', [AdminController::class,"destroy"])->name('user.destroy');

Route::post('/admin/user/{userId}/update-role', [AdminController::class,"updateRole"])->name('admin.user.updateRole');