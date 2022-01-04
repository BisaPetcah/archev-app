<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthGoogleController;
use App\Http\Controllers\DivisiController;

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
    return redirect()->route('login');
});

Route::get('/google/sign-in', [AuthGoogleController::class, 'auth'])->name('auth.google');
Route::get('/auth/google/callback', [AuthGoogleController::class, 'callback'])->name('auth.google.callback');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'show'])->name('dashboard');
    Route::get('/anggota', [AnggotaController::class, 'all'])->name('anggota');
    Route::get('/anggota/aktif', [AnggotaController::class, 'active'])->name('anggota.aktif');
    Route::get('/anggota/pasif', [AnggotaController::class, 'passive'])->name('anggota.pasif');
    Route::get('/divisi', [DivisiController::class, 'show'])->name('divisi');
    Route::get('/divisi/detail/{divisi:slug}', [DivisiController::class, 'detail'])->name('divisi.detail');

    // Route::group(['middleware' => 'role:admin', 'prefix' => 'admin', 'as' => 'admin.'], function () {
    //     require_once __DIR__ . '/role/admin.php';
    // });

    // Route::group(['middleware' => 'role:user', 'prefix' => 'user', 'as' => 'user.'], function () {
    //     require_once __DIR__ . '/role/user.php';
    // });
});

require_once __DIR__ . '/jetstream.php';
