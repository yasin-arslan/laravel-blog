<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\RegisterController;
use  App\Http\Controllers\PostController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\AdminPostController;
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

Route::get('/', [PostController::class,'index'])
    ->name('home');
Route::post('posts/{post:slug}/comments',[PostCommentsController::class,'store']);
Route::get('posts/{post}',[PostController::class, 'showPost']);
Route::get('/home', function(){
    return redirect()->route('home');
});
Route::get('register',[RegisterController::class, 'create'])->middleware('guest');
Route::post('register',[RegisterController::class, 'store'])->middleware('guest');
Route::get('logout',[SessionsController::class, 'destroy'])->middleware('auth');
Route::get('login',[SessionsController::class, 'create'])->middleware('guest');
Route::post('login',[SessionsController::class, 'store'])->middleware('guest');

//Admin Area
Route::get('admin/posts/create',[AdminPostController::class, 'create'])->middleware('admin');
Route::post('admin/posts',[AdminPostController::class, 'store'])->middleware('admin');
Route::get('admin/posts',[AdminPostController::class, 'index'])->middleware('admin');
Route::get('admin/posts/{post}/edit',[AdminPostController::class, 'edit'])->middleware('admin');
Route::post('admin/posts/{post}/edit',[AdminPostController::class, 'postedit'])->name('admin.post.edit')->middleware('admin');
