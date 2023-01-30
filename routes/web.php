<?php

use App\Http\Controllers\LabController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarketplaceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;

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


//Route Marketplace
Route::controller(MarketplaceController::class)->group(function () {
    Route::get('/marketplace', 'index')->name('marketplace');
    Route::get('/product/{slug_product}', 'productDetails')->name('product');
});

//Route Dashboard Customer
Route::controller(CustomerController::class)->group(function () {
    Route::get('/customer', 'index')->name('d_customer');
});

//Route Login

//Dashbaord Laboratorium
Route::get('dashboards/lab', [LabController::class, 'index'])->middleware('role:admin')->name('dahboardlab');
Route::get('dashboards/setting-lab/{id}', [LabController::class, 'settinglab'])->middleware('role:admin')->name('settinglab');
Route::put('dashboards/setting-lab/update/{id}', [LabController::class, 'settinglabUpdate'])->middleware('role:admin');

//Dashbaord products
Route::middleware('role:admin')->group(function(){
    Route::get('dashboards/products', [ProductController::class, 'index'])->name('products');
    Route::get('dashboards/add-product', [ProductController::class, 'add'])->name('add-product');
    Route::post('dashboards/add-product/store', [ProductController::class, 'store'])->name('store-product');
    Route::get('dashboards/delete/{id}', [ProductController::class, 'destroy']);
});




Route::get('user', function () {
    return 'Hi, User';

})->middleware('role:user');

Route::get('/', function () {
    return view('landingPage.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
