<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;
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



Route::get("/",[Homecontroller::class,"index"]);

Route::get("/users",[Admincontroller::class,"user"]);

Route::get("/food",[Homecontroller::class,"food"]);

Route::get("/getintouch",[Homecontroller::class,"getintouch"]);

Route::post("/getintouch",[Admincontroller::class,"getintouch"]);

Route::get("/foodmenu",[Admincontroller::class,"foodmenu"]);

Route::post("/uploadfood",[Admincontroller::class,"upload"]);

Route::get("/deleteuser/{id}",[Admincontroller::class,"deleteuser"]);

Route::get("/deletemenu/{id}",[Admincontroller::class,"deletemenu"]);

Route::get("/updateview/{id}",[Admincontroller::class,"updateview"]);

Route::post("/update/{id}",[Admincontroller::class,"update"]);

Route::get("/redirects",[Homecontroller::class,"redirects"]); 

Route::post("/reservation",[Admincontroller::class,"reservation"]);

Route::get("/viewreservation",[Admincontroller::class,"viewreservation"]);

Route::get("/viewchef",[Admincontroller::class,"viewchef"]);

Route::get("/messageadmin",[Admincontroller::class,"messageadmin"]);

Route::post("/uploadchef",[Admincontroller::class,"uploadchef"]);

Route::get("/updatechef/{id}",[Admincontroller::class,"updatechef"]);

Route::post("/updatefoodchef/{id}",[Admincontroller::class,"updatefoodchef"]);

Route::get("/deletechef/{id}",[Admincontroller::class,"deletechef"]);

Route::post("/addcart/{id}",[Homecontroller::class,"addcart"]);

Route::get("/showcart/{id}",[Homecontroller::class,"showcart"]);

Route::get("/remove/{id}",[Homecontroller::class,"remove"]);

Route::get("/delete/{id}",[Homecontroller::class,"delete"]);

Route::post("/orderconfirm",[Homecontroller::class,"orderconfirm"]);

Route::get("/orders",[Admincontroller::class,"orders"]);

Route::get("/search",[Admincontroller::class,"search"]);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
