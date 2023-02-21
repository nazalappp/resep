<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\ResepController;
use App\Http\Controllers\ShareController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AllresepController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Frontend\ResepUserController;
// use App\Http\Controllers\Auth\LoginController;

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
//     return view('user');
// });

Route::get('/',[ResepUserController::class, 'resep']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function(){
    // Route::get('/profile',function(){
    //     return view('share');
    // });
    Route::resource('/share', ShareController::class);
});


Route::group(['prefix' => 'admin',
    'middleware' => ['auth', 'isAdmin']], function () {
        Route::get('/dashboard', function () {
            return view('home');
        })->name('admin');
        Route::resource('kota', KotaController::class);
        Route::resource('resep', ResepController::class);
        Route::resource('allresep', AllresepController::class);
    });
// Route::get('/admin', function () {
//     return view('layouts.admin');
// });

// Route::get('/errors', function () {
//     return view('errors.403');
// });
// Route::get('/share', function () {
//     return view('share');
// });
Route::post('register', [RegisterController::class,'create'])->name('register-create');
// Route::get('login-user', [LoginController::class , 'login'])->name('loginpost');

// Route::resource('/kota', KotaController::class);
