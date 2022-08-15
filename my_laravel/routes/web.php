<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\DemoController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RegistrationController;
use\App\Http\Controllers\CustomersController;
use App\Models\Customers;

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
Route::get('/customers',function(){
    $customers=Customers::all();
    echo "<pre>";
    print_r($customers->toArray());
});

Route::get('/customer',[CustomersController::class,'index']);
Route::post('/customer',[CustomersController::class,'store']);

Route::get('/register',[RegistrationController::class,'index']);
Route::post('/register',[RegistrationController::class,'register']);
Route::get('/',[DemoController::class,'index']);
Route::get('/about','App\Http\Controllers\DemoController@about');//2nd way to call controller using namespace
// Route::get('/about','DemoController@about');//laravel 7 uses this way
Route::get('/courses',SingleActionController::class);
Route::resource('/photo',PhotoController::class);

// Route::get('/', function () {
//     return view('welcome');
// });
// // Route::get('/demo',function(){
// //     echo "Hello World";
// // });

// // Route::post('/test',function(){
// //     echo "testing the route";
// // });
// Route::any('/test',function(){
//     echo "testing the route";
// });

// Route::get('/demo',function(){
//    return view('demo');
// });

// Route::get('/demo/{name}',function($name){
//     echo $name;
// });
// // Route::get('/demo/{name}/{id?}',function($name,$id=null){
// //     echo $name." ";
// //     echo $id;
// // });
// Route::get('/demo/{name}/{id?}',function($name,$id=null){
//     $data=compact('name','id');
//     return view('demo')->with($data);
// });

// Route::get('/{name?}',function($name=null){
//     $demo="<h2>laravel 8</h2>";
//     $data=compact('name','demo');
//     return view('home')->with($data);
// });
// Route::get('/',function(){
//     return view ('home');
// });
// Route::get('/about',function(){
//     return view ('about');
// });
// Route::get('/courses',function(){
//     return view('courses');
// });
