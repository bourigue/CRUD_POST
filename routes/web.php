<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postController;
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
});
Route::get('/post', function () {
    return view('post');
});
Route::get('/index',postController::class.'@index')->name("index");
Route::get('/index/delete/{id}',postController::class.'@delete')->name("post.delete");
Route::get('/index/create',postController::class.'@create')->name("post.create");
Route::get('/index/edit/{id}',postController::class.'@edit')->name("post.edit");
Route::post('/index/edit/update/{id}',postController::class.'@update')->name("post.update");
Route::post('/index/create/store',postController::class.'@store')->name("post.store");