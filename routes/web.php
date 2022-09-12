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
Route::get('customers',[App\Http\Controllers\Frontend\CustomerController::class,'index'])->name('customer.index');
Route::get('customers/create',[App\Http\Controllers\Frontend\CustomerController::class,'create']);
Route::post('customers/store',[App\Http\Controllers\Frontend\CustomerController::class,'store'])->name('customer.store');
Route::get('customers/edit/{id}',[App\Http\Controllers\Frontend\CustomerController::class,'edit'])->name('customer.edit');
Route::post('customers/update/{id}',[App\Http\Controllers\Frontend\CustomerController::class,'update'])->name('customer.update');
Route::delete('destroy/{id}',[App\Http\Controllers\Frontend\CustomerController::class,'destroy'])->name('customer.destroy');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){
    Route::get('/dashboard',[App\Http\Controllers\Admin\DashboardController::class,'index'])->name('dashboard');
    //Customer route
    Route::get('customers',[App\Http\Controllers\Admin\CustomerController::class,'index'])->name('customer.index');
    Route::get('customers/create',[App\Http\Controllers\Admin\CustomerController::class,'create']);
    Route::post('customers/store',[App\Http\Controllers\Admin\CustomerController::class,'store'])->name('customer.store');
    Route::get('customers/edit/{id}',[App\Http\Controllers\Admin\CustomerController::class,'edit'])->name('customer.edit');
    Route::post('customers/update/{id}',[App\Http\Controllers\Admin\CustomerController::class,'update'])->name('customer.update');
    Route::delete('destroy/{id}',[App\Http\Controllers\Admin\CustomerController::class,'destroy'])->name('customer.destroy');
    // User Fetch Data
    Route::get('user',[App\Http\Controllers\Admin\CustomerController::class,'user'])->name('user.list');
});



   
   

