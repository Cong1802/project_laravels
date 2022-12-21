<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
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
Route::post('/RenderContent', [HomeController::class, 'RenderContent']);


Route::group(['middleware'   =>['CheckUsers']],function () {
    Route::get('/login', [UsersController::class, 'ShowViewLogin']);
    Route::post('/LoginUser', [UsersController::class, 'postLogin']);
});
Route::group(['middleware' => ['checkAdminlogin']], function(){
    Route::get('/logout', [UsersController::class, 'LogoutAdmin']);
    Route::get('/ListChannel', [UsersController::class, 'ListChannel']);
    Route::get('/FormChannel', [UsersController::class, 'FormChannel']);
    Route::post('/PushChannel', [UsersController::class, 'PushChannel']);
    Route::post('/remove_channel', [UsersController::class, 'RemoveChannel']);
    Route::get('/Edit-Channel/{id_channel}', [UsersController::class, 'EditChannel']);
    Route::post('/updateChannel', [UsersController::class, 'UpdateChannel']);

    Route::get('/Categories', [UsersController::class, 'Categories']);
    Route::get('/FormCategory', [UsersController::class, 'FormCategory']);
    Route::post('/PushCategory', [UsersController::class, 'PushCategory']);
    Route::post('/remove_category', [UsersController::class, 'RemoveCategory']);
    Route::get('/Edit-Category/{id_category}', [UsersController::class, 'EditCategory']);
    Route::post('/updateCategory', [UsersController::class, 'UpdateCategory']);
});

