<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/register', [AuthController::class, 'showRegister'])->name('register.show');

Route::get('/', [HomeController::class,'index'])->name('home');
//Route::get('/login', [LoginController::class,'index'])->name('login.index');
//Route::post('/login', [LoginController::class,'store'])->name('login.store');
//Route::get('/logout', [LoginController::class,'destroy'])->name('login.destroy');

require __DIR__.'/auth.php';
