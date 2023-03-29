<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;


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
})->name('welcome');

//for view(regestration page)
Route::get('register', [MainController::class, 'register'])->name('register');
//store the value
Route::post('register', [AuthController::class, 'register'])->name('register');
//for view(regestration page)
Route::get('login', [MainController::class, 'login'])->name('login');
//store the value
Route::post('login', [AuthController::class, 'login'])->name('login');
//logout the session and auth
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'auth'], function () {
    Route::get('dashboard', [MainController::class, 'dashboard'])->name('dashboard');
    Route::get('manage', [MainController::class, 'manage'])->name('manage');
    Route::get('add', [MainController::class, 'add'])->name('add');
    Route::post('add', [MainController::class, 'addStore'])->name('add.store');
    Route::get('profile', [MainController::class, 'profile'])->name('profile');
    Route::post('profile', [MainController::class, 'profileStore'])->name('profile.store');
    Route::post('profileUpload', [MainController::class, 'profileUpload'])->name('profileUpload');
    Route::get('update/{id}', [MainController::class, 'edit'])->name('update');
    Route::post('expense/{id}/update', [MainController::class, 'update'])->name('update.store');
});
