<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;


class HomeController extends BaseController
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
{
    // Logika untuk mengarahkan user setelah login
    if (auth()->user()->role == 'admin') {
        return redirect()->route('admin.dashboard');
    }

    // Jika bukan admin, arahkan ke halaman utama atau halaman user
    return redirect('home'); 
}
}