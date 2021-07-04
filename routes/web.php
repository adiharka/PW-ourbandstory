<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

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
    return redirect()->route('register');
})->name('index');

Route::get('/kontak', function () {
    return view('Kontak');
})->name('contact');

Route::get('/about-us', function () {
    return view('Tentang-Kami');
})->name('about-us');

Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showFormRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);

Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('admin', AdminController::class)->names('admin');
    Route::get('admin/{id}', [AdminController::class, 'detail'])->name('admin.detail');
    Route::put('admin/terima/{id}', [AdminController::class, 'acc'])->name('admin.acc');
    Route::put('admin/tolak/{id}', [AdminController::class, 'tolak'])->name('admin.tolak');
});

Route::middleware(['auth'])->group(function () {
    Route::resource('reservasi', ReservasiController::class)->names('user.reservasi');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});

Route::get('/{any}', function () {
    return redirect()->route('login');
})->where('any', '.*');
