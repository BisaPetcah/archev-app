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

    Route::prefix('/admin')->group(function () {
        Route::middleware('role:admin')->group(function () {
            require_once __DIR__ . '/role/admin.php';
        });
    });

    Route::prefix('/user')->group(function () {
        Route::middleware('role:user')->group(function () {
            require_once __DIR__ . '/role/user.php';
        });
    });
});

require_once __DIR__ . '/jetstream.php';
