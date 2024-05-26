<?php
use App\Http\Controllers\Controller;
use App\Http\Controllers\PostController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackController;
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
Route::get('/',[Controller::class,'index']);
Route::get('activity',[Controller::class,'activity']);
Route::get('bill',[Controller::class,'billtemp']);
Route::get('show/news/{id}',[Controller::class,'showPost']);
Route::get('/search',[Controller::class,'search']);
Route::get('/searchBy',[Controller::class,'searchBy']);

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home',[BackController::class,'index']);
    Route::get('/posts',[PostController::class,'index']);
    Route::get('create',[PostController::class,'create']);
    Route::post('/post',[PostController::class,'store']);
    Route::get('show/post/{id}',[PostController::class,'show']);
    Route::get('edit/post/{id}',[PostController::class,'edit']);
    Route::put('update/post/{id}',[PostController::class,'update']);
    Route::get('delete/post/{id}',[PostController::class,'destroy']);
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/user/admin/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
});


// Route::get('/backend',[BackController::class,'index']);
