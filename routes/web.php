<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthGoogleController;
use App\Http\Controllers\DivisiController;
use App\Models\Member;

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

// gk jalan
Route::get('/google/sign-in', [AuthGoogleController::class, 'auth'])->name('auth.google');
Route::get('/auth/google/callback', [AuthGoogleController::class, 'callback'])->name('auth.google.callback');

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'show'])->name('dashboard');
    Route::get('/anggota', [AnggotaController::class, 'all'])->name('anggota');
    Route::get('/divisi', [DivisiController::class, 'show'])->name('divisi');
    Route::get('/divisi/{divisi:slug}', [DivisiController::class, 'detail'])->name('divisi.detail');

    Route::group(['prefix' => 'anggota', 'as' => 'anggota.'], function () {
        Route::middleware('role:admin')->group(function () {
            Route::post('/', [AnggotaController::class, 'store'])->name('store');
            Route::get('/tambah', [AnggotaController::class, 'create'])->name('create');
            Route::get('/edit/{member}', [AnggotaController::class, 'edit'])->name('edit');
            Route::put('/{member}', [AnggotaController::class, 'update'])->name('update');
            Route::delete('/{member}', [AnggotaController::class, 'destroy'])->name('delete');
        });
        Route::get('/aktif', [AnggotaController::class, 'active'])->name('aktif');
        Route::get('/pasif', [AnggotaController::class, 'passive'])->name('pasif');
        Route::get('/{member}', [AnggotaController::class, 'detail'])->name('detail');
    });
});

require_once __DIR__ . '/jetstream.php';
