<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
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
Route::get('/test', [HomeController::class, 'test']);


Route::group(['middleware'   =>['CheckUsers']],function () {
    Route::get('/login', [UsersController::class, 'ShowViewLogin']);
    Route::get('/register', [UsersController::class, 'ShowViewRegister']);
    Route::post('/LoginUser', [UsersController::class, 'postLogin']);
    Route::get('/register', [UsersController::class, 'RegisterView']);
    Route::post('/RegisterAccount', [UsersController::class, 'RegisterAccount']);
    Route::get('/repass', [UsersController::class, 'ForogtPassword']);
});
Route::group(['middleware' => ['checkAdminlogin']], function(){
    Route::get('/dashboard', [UsersController::class, 'index']);
    Route::get('/setting', [UsersController::class, 'Setting']);
    Route::post('/postSetting', [UsersController::class, 'postSetting']);

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
    Route::get('/logout', [UsersController::class, 'LogoutAdmin']);
    Route::get('/addUser', [AccountController::class, 'AddUser']);
    Route::post('/ajaxCity', [AccountController::class, 'ajaxCity']);
    Route::post('/insertUser', [AccountController::class, 'InsertUser']);
});

