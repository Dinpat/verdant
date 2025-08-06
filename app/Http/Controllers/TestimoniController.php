<?php

// file: app/Http/Controllers/TestimoniController.php

namespace App\Http\Controllers;

use App\Models\Testimoni;     
use Illuminate\Http\Request;  

class TestimoniController extends Controller
{
    /**
     * Menyimpan data testimoni baru dari form.
     */
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'nama'      => 'required|string|max:100',
            'pekerjaan' => 'required|string|max:100',
            'rating'    => 'required|integer|min:1|max:5',
            'testimoni' => 'required|string|min:20',
        ]);

        
        Testimoni::create($validatedData);

    
        return redirect()->back()->with('success', 'Terima kasih! Testimoni Anda telah kami terima dan akan ditinjau terlebih dahulu.');
    }

    public function indexAdmin()
    {
        $testimonisPending = Testimoni::where('status', 'pending')->latest()->get();
        $testimonisApproved = Testimoni::where('status', 'approved')->latest()->get();
        
        return view('admin.testimoni.index', compact('testimonisPending', 'testimonisApproved'));
    }

    /**
     * Menyetujui testimoni.
     */
    public function approve(Testimoni $testimoni)
    {
        $testimoni->status = 'approved';
        $testimoni->save();

        return back()->with('success', 'Testimoni berhasil disetujui!');
    }
}