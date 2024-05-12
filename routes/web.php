<?php
use App\Http\Controllers\Controller;
use App\Http\Controllers\PostController;
use App\Http\Controllers\InfoController;
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
Route::get('news',[Controller::class,'news']);
Route::get('bill',[Controller::class,'billtemp']);
Route::get('login',[Controller::class,'login']);


Route::get('/backend',[BackController::class,'index']);
Route::get('/posts',[PostController::class,'index']);
Route::get('create',[PostController::class,'create']);
Route::post('/post',[PostController::class,'store']);
Route::get('show/{id}',[PostController::class,'show']);
Route::get('edit/{id}',[PostController::class,'edit']);
Route::post('update/{id}',[PostController::class,'update']);
Route::get('delete/{id}',[PostController::class,'destroy']);

Route::get('/info',[InfoController::class,'index']);
Route::get('/createInfo',[InfoController::class,'create']);
Route::post('/storeInfo',[InfoController::class,'store']);
Route::get('show/info/{id}',[InfoController::class,'show']);
Route::get('edit/info/{id}',[InfoController::class,'edit']);
Route::post('update/info/{id}',[InfoController::class,'update']);
Route::get('delete/{id}',[InfoController::class,'destroy']);