<?php

use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\EtudiantController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('etudiant', EtudiantController::class);

Route::namespace('App\Http\Controllers\admin')->prefix('admin')->name('admin.')->group(function() {
    Route::resource('user', UserController::class);
});
