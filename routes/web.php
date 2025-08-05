<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\PenghargaanController;
use App\Http\Controllers\TestimoniController;
use Illuminate\Support\Facades\Hash;

Route::get('/', function () {
    return view('auth.login');
});

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login'); // pastikan kamu punya file resources/views/auth/login.blade.php
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/home'); // arahkan setelah login sukses
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
    
}
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/penghargaan', [PenghargaanController::class, 'adminIndex'])->name('awards.admin');
    Route::post('/admin/penghargaan', [PenghargaanController::class, 'store'])->name('awards.store');
    Route::put('/admin/penghargaan/{id}', [PenghargaanController::class, 'update'])->name('awards.update');
    Route::delete('/admin/penghargaan/{id}', [PenghargaanController::class, 'destroy'])->name('awards.destroy');
});



Route::get('/home', function () {
    return view('home');
})->name('home');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::post('/testimoni', [TestimoniController::class, 'store'])->name('testimoni.store');