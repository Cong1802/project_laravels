<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AccountController;

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
Route::get('/', [HomeController::class, 'index']);
Route::group(['prefix' => 'admin','middleware'   =>['CheckUsers']],function () {
    Route::get('/login', [AdminController::class, 'ShowViewLogin']);
    Route::post('/LoginAdmin', [AdminController::class, 'postLogin']);
});
Route::group(['prefix' =>  'admin','middleware' => ['checkAdminlogin']], function(){
    Route::get('/', [AdminController::class, 'index']);
    Route::get('/role', [AccountController::class, 'ShowViewRole']);
    Route::get('/customer', [AccountController::class, 'ShowViewCustomer']);
    Route::get('/manager', [AccountController::class, 'ShowViewManager']);
    Route::post('/delete_user', [AccountController::class, 'DeleteUser']);
    Route::get('/logout', [AdminController::class, 'LogoutAdmin']);
    Route::get('/addUser', [AccountController::class, 'AddUser']);
    Route::post('/ajaxCity', [AccountController::class, 'ajaxCity']);
    Route::post('/insertUser', [AccountController::class, 'InsertUser']);
});

