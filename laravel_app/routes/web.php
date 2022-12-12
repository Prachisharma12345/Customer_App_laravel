<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\IndexController;
use App\Models\Customer;
use Illuminate\Http\Request;
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
//protected

Route::get('/login',function(){
session()->put('user_id');
return redirect('/');
});
// Route::get('/noaccess',function (){
//     echo "You are not allowed to access the page";
//     die;
// });
Route::get('/data',[IndexController::class,'index']);
Route::get('/group/{id}',[IndexController::class,'group']);

Route::get('/',[DemoController::class,'index']);
// Route::get('/about','App\Http\Controllers\DemoController@about');
//old method in laravel7 was Route::get('/about','DemoController@about);
Route::get('/about',[DemoController::class,'about']);
Route::get('/courses',SingleActionController::class);
Route::resource('/photo', PhotoController::class);
Route::get('/register',[RegistrationController::class,'index']);
Route::post('/register',[RegistrationController::class,'register']);
// Route::get('/customer',function(){
//     $customers=Customer::all();
//     echo "<pre>";
//     print_r($customers->toArray());
// });

Route::group(['prefix'=>'/customer'],function(){
    Route::get('/create',[CustomerController::class,'create'])->name('customer.create');
    Route::get('/',[CustomerController::class,'view']);
    Route::get('/trash',[CustomerController::class,'trash']);
    Route::post('/',[CustomerController::class,'store']);
    Route::get('delete/{id}',[CustomerController::class,'delete'])->name('customer.delete');
    Route::get('restore/{id}',[CustomerController::class,'restore'])->name('customer.restore');
    Route::get('force-delete/{id}',[CustomerController::class,'forceDelete'])->name('customer.force-delete');
    Route::get('edit/{id}',[CustomerController::class,'edit'])->name('customer.edit');
    Route::post('update/{id}',[CustomerController::class,'update'])->name('customer.update');
});
Route::get('/get-all-session',function(){
$session=session()->all();
p($session);
});
Route::get('/set-session',function(Request $req){
    $req->session()->put('username','Laravel App 8');
    $req->session()->put('user_id','12');
    $req->session()->flash('status','Success');
    return redirect('get-all-session');
});
Route::get('destroy-session',function(){
    session()->forget(['username','user_id']);
    return redirect('get-all-session');
});
