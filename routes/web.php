<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\ResepController;

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
    return view('user');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin',
    'middleware' => ['auth', 'isAdmin']], function () {
        Route::get('/', function () {
            return view('layouts.admin');
        })->name('admin');
        Route::resource('kota', KotaController::class);
        Route::resource('/resep', ResepController::class);
    });
// Route::get('/admin', function () {
//     return view('layouts.admin');
// });
Route::get('/share', function () {
    return view('share');
});

// Route::resource('/kota', KotaController::class);
