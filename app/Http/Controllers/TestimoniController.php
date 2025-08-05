<?php

// file: app/Http/Controllers/TestimoniController.php

namespace App\Http\Controllers;

use App\Models\Testimoni;     // <-- Jangan lupa import Model
use Illuminate\Http\Request;  // <-- Jangan lupa import Request

class TestimoniController extends Controller
{
    /**
     * Menyimpan data testimoni baru dari form.
     */
    public function store(Request $request)
    {
        // 1. Validasi data yang masuk
        $validatedData = $request->validate([
            'nama'      => 'required|string|max:100',
            'pekerjaan' => 'required|string|max:100',
            'rating'    => 'required|integer|min:1|max:5',
            'testimoni' => 'required|string|min:20',
        ]);

        // 2. Simpan data ke database
        // Status akan otomatis 'pending' sesuai default di migration
        Testimoni::create($validatedData);

        // 3. Redirect kembali ke halaman sebelumnya dengan pesan sukses
        return redirect()->back()->with('success', 'Terima kasih! Testimoni Anda telah kami terima dan akan ditinjau terlebih dahulu.');
    }
}