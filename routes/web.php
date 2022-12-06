<?php

use Illuminate\Support\Facades\Route;

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

Route::view('/', 'home');
Route::get('user/{id}/post/create', \App\Http\Livewire\PostCreate::class);
Route::get('user/{id}/post/{slug}', \App\Http\Livewire\Post::class);
Route::get('post/{slug}', \App\Http\Livewire\Post::class);
Route::get('user/{id}', \App\Http\Livewire\User::class);
Route::get('users', \App\Http\Livewire\Users::class);
Route::get('all', \App\Http\Livewire\All::class);






Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
