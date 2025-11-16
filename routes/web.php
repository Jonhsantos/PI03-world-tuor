<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PacoteController;
use App\Http\Controllers\AuthController;


// Rotas com autenticação
Route::middleware(['auth'])->group(function () {

    // Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

    // Rotas Admin - Pacotes
    Route::prefix('admin')->group(function () {
        Route::post('/pacotes', [PacoteController::class, 'store'])->name('pacotes.store');
    });

    // Perfil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Autenticação e Home
Route::get('/register', [AuthController::class, 'showRegister'])->name('register.show');
Route::get('/', [HomeController::class, 'index'])->name('home');

//Route::get('/login', [LoginController::class,'index'])->name('login.index');
//Route::post('/login', [LoginController::class,'store'])->name('login.store');
//Route::get('/logout', [LoginController::class,'destroy'])->name('login.destroy');

require __DIR__.'/auth.php';