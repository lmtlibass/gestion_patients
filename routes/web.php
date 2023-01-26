<?php

use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\ServiceController;
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
Route::resource('service', ServiceController::class);

Route::namespace('App\Http\Controllers\admin')->prefix('admin')->name('admin.')->middleware('can:administration')->group(function() {
    Route::get('etudiant', [EtudiantController::class, 'getEtudiantInfo']);
    Route::resource('user', UserController::class);
});
