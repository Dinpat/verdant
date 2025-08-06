<?php


namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\PenghargaanController;
use App\Http\Controllers\TestimoniController;
// use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Hash;

Route::get('/', function () {
    return view('auth.login');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/admin/penghargaan', [PenghargaanController::class, 'adminIndex'])->name('awards.admin');
    Route::post('/admin/penghargaan', [PenghargaanController::class, 'store'])->name('awards.store');
    Route::put('/admin/penghargaan/{id}', [PenghargaanController::class, 'update'])->name('awards.update');
    Route::delete('/admin/penghargaan/{id}', [PenghargaanController::class, 'destroy'])->name('awards.destroy');
});



Route::get('/home', function () {
    return view('home');
})->name('home');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
});

// --- GRUP ROUTE ADMIN ---
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    
    
    Route::get('/dashboard', function () {
        return view('admin.dashboard'); // Nanti kita buat view ini
    })->name('dashboard');

    
    Route::resource('penghargaan', PenghargaanController::class);

    
    Route::get('testimoni', [TestimoniController::class, 'indexAdmin'])->name('testimoni.index');
    Route::patch('testimoni/{testimoni}/approve', [TestimoniController::class, 'approve'])->name('testimoni.approve');
});
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::post('/testimoni', [TestimoniController::class, 'store'])->name('testimoni.store');
Route::get('/testimoni', [TestimoniController::class, 'index'])->name('testimoni.index.public');

