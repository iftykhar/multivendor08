<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Apitesting;
use App\Http\Controllers\Vendor\VendorController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\ApitestingController;
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

Route::get('/apitest',[Apitesting::class,'index']);


Route::get('/', function () {
    return view('dashboard');
});


Route::get('/dashboard', function () {
    return view('userdashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// for admin  before login 
Route::get('admin/login',[AdminController::class,'login']);
// for admin  after login 
Route::middleware('auth','role:admin')->group(function(){
    Route::get('/admin/dashboard',[AdminController::class,'index'])->name('admin.dashboard');
    Route::get('/admin/profile',[AdminController::class,'profile'])->name('admin.profile');
    Route::get('/admin/changepassword',[AdminController::class,'changepassword'])->name('admin.changepassword');
    Route::post('/admin/updatepassword',[AdminController::class,'updatepassword'])->name('admin.updatepassword');
    Route::group(['prefix'=>'/category'],function(){
        Route::get('/add',[CategoryController::class,'index'])->name('add.category');
        Route::post('/store',[CategoryController::class,'store'])->name('store.category');
        Route::get('/show',[CategoryController::class,'show'])->name('show.category');
    });
});
// for vendor before login 
Route::get('vendor/login',[VendorController::class,'login']);
// for vendor after login 
Route::middleware('auth','role:vendor')->group(function(){
    Route::get('/vendor/dashboard',[VendorController::class,'index'])->name('vendor.dashboard');
    Route::get('/vendor/profile',[VendorController::class,'profile'])->name('vendor.profile');
    Route::get('/vendor/changepassword',[VendorController::class,'changepassword'])->name('vendor.changepassword');
    Route::post('/vendor/updatepassword',[VendorController::class,'updatepassword'])->name('vendor.updatepassword');
});


// // for backend operation 
// Route::middleware('auth','role:admin')->group(function(){
    
// });


require __DIR__.'/auth.php';
