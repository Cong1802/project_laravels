<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SkillController;


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
Route::get('/creator', [HomeController::class, 'creator']);
Route::get('/Contact', [HomeController::class, 'Contact']);

Route::group(['prefix' => 'admin','middleware'   =>['CheckUsers']],function () {
    Route::get('/login', [AdminController::class, 'ShowViewLogin']);
    Route::get('/register', [AdminController::class, 'ShowViewRegister']);
    Route::post('/LoginAdmin', [AdminController::class, 'postLogin']);
    Route::get('/register', [AdminController::class, 'RegisterView']);
    Route::get('/repass', [AdminController::class, 'ForogtPassword']);
});
Route::group(['prefix' =>  'admin','middleware' => ['checkAdminlogin']], function(){
    Route::get('/', [AdminController::class, 'index']);
    Route::get('/setting', [AdminController::class, 'Setting']);
    Route::post('/postSetting', [AdminController::class, 'postSetting']);

    Route::get('/education', [EducationController::class, 'index']);
    Route::post('/deleteBoxEducation', [EducationController::class, 'deleteBoxEducation']);
    Route::post('/postEducation', [EducationController::class, 'postEducation']);

    Route::get('/skill', [SkillController::class, 'index']);
    Route::get('/addSkill', [SkillController::class, 'addSkill']);
    Route::post('/deleteSkill', [SkillController::class, 'deleteSkill']);
    Route::prefix('profile')->group(function () {
        Route::get('/timeline', [ProfileController::class, 'timeline']);
        Route::get('/setting', [ProfileController::class, 'setting']);
        Route::get('/activity', [ProfileController::class, 'activity']);
        Route::post('/editprofile', [ProfileController::class, 'EditProfile']);
        Route::post('/updateAVT', [ProfileController::class, 'UpdateAVT']);
    });
    Route::get('/customer', [AccountController::class, 'ShowViewCustomer']);
    Route::get('/manager', [AccountController::class, 'ShowViewManager']);
    Route::post('/delete_user', [AccountController::class, 'DeleteUser']);
    Route::get('/logout', [AdminController::class, 'LogoutAdmin']);
    Route::get('/addUser', [AccountController::class, 'AddUser']);
    Route::post('/ajaxCity', [AccountController::class, 'ajaxCity']);
    Route::post('/insertUser', [AccountController::class, 'InsertUser']);
});

