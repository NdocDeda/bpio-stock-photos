<?php

use Illuminate\Support\Facades\Route;
#use App\Http\Controllers\TagController;
#use App\Http\Controllers\PhotoController;


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

//Route::middleware(['auth'])->group(function () {
Route::resource('tags',TagController::class);
Route::resource('photos',PhotoController::class);
Route::resource('roles',RoleController::class);
Route::resource('payouts',PayoutController::class);
Route::resource('users',UserController::class); // Za administraciju usera
//});



/* ovdje su rute za login, registraciju, change password, itd. */
require __DIR__.'/auth.php';