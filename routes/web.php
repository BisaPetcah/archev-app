<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthGoogleController;
use App\Http\Controllers\RedirectDashboardController;
use Illuminate\Support\Facades\Auth;
use Laravel\Jetstream\Http\Controllers\Livewire\UserProfileController;

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
    Route::get('/dashboard', [RedirectDashboardController::class, 'redirect'])->name('dashboard');
    Route::get('/anggota', function () {
        return view('dashboard');
    })->name('anggota');
    Route::get('/anggota/aktif', function () {
        return view('dashboard');
    })->name('anggota.aktif');
    Route::get('/anggota/pasif', function () {
        return view('dashboard');
    })->name('anggota.pasif');
    Route::get('/divisi', function () {
        return view('dashboard');
    })->name('divisi');

    Route::group(['middleware' => 'role:admin', 'prefix' => 'admin', 'as' => 'admin.'], function () {
        require_once __DIR__ . '/role/admin.php';
    });

    Route::group(['middleware' => 'role:user', 'prefix' => 'user', 'as' => 'user.'], function () {
        require_once __DIR__ . '/role/user.php';
    });
});

require_once __DIR__ . '/jetstream.php';
