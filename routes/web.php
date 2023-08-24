<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

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
    // return redirect('about');
});


Route::view("about", "about");
Route::view("contact", "contact")->middleware('ProtectedAge', 'ProtectedName');
Route::view("noaccess", "noaccess");
Route::view("user_list", "users");
Route::view("user_list_model", "users");
Route::view("check_method", "method");
Route::view("session_flase", "method");


//for new version of laravel
Route::get("user/{id}", [UserController::class, "show"]);
Route::get("userview/{id}", [UserController::class, "loadview"]);
Route::get("admin", [AdminController::class, "showadmin"]);
Route::post("user", [AdminController::class, "getdata"]);
Route::get("user_list", [AdminController::class, "getuser"]);
Route::get("user_list_model", [AdminController::class, "getmodeluser"]);
Route::get("fetch_apidata", [AdminController::class, "fetch_apidata"]);

Route::post("user_post", [AdminController::class, "method_post"]);
Route::put("user_put", [AdminController::class, "method_put"]);
Route::delete("user_delete", [AdminController::class, "method_delete"]);
Route::get("user_get", [AdminController::class, "method_get"]);


Route::post("user_login", [AuthController::class, "userlogin"]);


Route::get('/login', function () {
    if(session('user')){
        return redirect('profile');
    }
    return view('login');
});

Route::get('/profile', function () {
    if(!session('user')){
        return redirect('login');
    }
    
    return view('profile');
});

Route::get('/logout', function () {
    if(session('user')){
        session()->pull('user', null);
    }
    return redirect('login');
});



Route::post("session_flase", [AdminController::class, "session_flash"]);


Route::match(['get', 'post', 'put', 'delete'], 'method_user',[AdminController::class, "method_use"]);

//for old version of laravel
// Route::get("user", "UserController@show");

Route::group(['middleware'=>['admin', 'admin_age']], function(){
    Route::view("user", "users");
});