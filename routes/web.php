<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::view('/post/add','post.add');
Route::view('/post/list','post.list');
Route::get('/post/edit/{id}',function($id){
    return view('post.edit',['id'=>$id]);
});
Route::get('/post/artikel',function(){
    return view('post/artikel');
});
Route::get('/post/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/post/login', [LoginController::class, 'authenticate']);
Route::post('/post/logout', [LoginController::class, 'logout']);

Route::get('/post/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/post/register', [RegisterController::class,'store']);

Route::get('/post/dashboard', [DashboardController::class, 'index'])->middleware('auth');