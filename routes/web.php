<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    if (Auth::check()) {
        return view('dashboard');
    }

    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/new-user', [ResultController::class, 'newuser'])->name('newclient');
Route::get('/new-user', [ResultController::class, 'create']);

// withdraw
Route::middleware(['auth'])->group(function () {
    Route::post('/withdraw', [ResultController::class, 'withdrawValue'])->name('withdraw');
    Route::get('/withdraw', [ResultController::class, 'withdraw'])->name('withdraw');

    // deposit
    Route::post('/savings', [ResultController::class, 'savings'])->name('savings');
    Route::get('/savings', [ResultController::class, 'deposit'])->name('savings');
});



require __DIR__.'/auth.php';
