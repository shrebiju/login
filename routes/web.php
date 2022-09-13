<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Sms\CustomerController;

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
    return view('welcome');
});

//frontend customer

Route::get('frontend/customer/{id?}',[App\Http\Controllers\Frontend\CustomerController::class,'create'])->name('frontend.customer.create');
Route::post('frontend/customers/store',[App\Http\Controllers\Frontend\CustomerController::class,'store'])->name('frontend.customer.store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){
    Route::get('/dashboard',[App\Http\Controllers\Admin\DashboardController::class,'index'])->name('dashboard');
    //Customer route
    Route::get('customers/{id}',[App\Http\Controllers\Admin\CustomerController::class,'index'])->name('customer.index');
    Route::get('customerscreate',[App\Http\Controllers\Admin\CustomerController::class,'create'])->name('customer.create');
    Route::post('customers/store',[App\Http\Controllers\Admin\CustomerController::class,'store'])->name('customer.store');
    Route::get('customers/edit/{id}',[App\Http\Controllers\Admin\CustomerController::class,'edit'])->name('customer.edit');
    Route::post('customers/update/{id}',[App\Http\Controllers\Admin\CustomerController::class,'update'])->name('customer.update');
    Route::delete('destroy/{id}',[App\Http\Controllers\Admin\CustomerController::class,'destroy'])->name('customer.destroy');
    // User Fetch Data
    Route::get('user',[App\Http\Controllers\Admin\CustomerController::class,'user'])->name('user.list');
    Route::get('link',[App\Http\Controllers\Admin\LinkController::class,'index'])->name('link.list');
    Route::get('link/create',[App\Http\Controllers\Admin\LinkController::class,'create'])->name('link.create');
    Route::post('link/store',[App\Http\Controllers\Admin\LinkController::class,'store'])->name('link.store');


});



   
   

