<?php

use App\Http\Controllers\BlackWatchController;
use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskForce141Controller;

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

Route::resource('blackwatch', BlackWatchController::class);
Route::post('bwPhoto', [BlackWatchController::class, 'createImage'])->name('bwphoto.create');

//Route::resource('image', ImageController::class);
Route::get('home',[HomeController::class, 'home'])->name('home');

Route::resource('taskforce141', TaskForce141Controller::class);

Route::get('tfImage', [ImageController::class, "updateTaskforce"])->name('updateTaskForce');
