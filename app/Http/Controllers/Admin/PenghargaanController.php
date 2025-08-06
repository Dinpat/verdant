<?php

namespace App\Http\Controllers\Admin;



use App\Http\Controllers\Controller;
use App\Models\Penghargaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 

class PenghargaanController extends Controller
{
    public function index()
    {
        $penghargaans = Penghargaan::latest()->paginate(10);
        return view('admin.penghargaan.index', compact('penghargaans'));
    }

    public function create()
    {
        return view('admin.penghargaan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tanggal' => 'required|date',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $data = $request->except('gambar');

        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('penghargaan', 'public');
            $data['gambar'] = $path;
        }

        Penghargaan::create($data);

        return redirect()->route('admin.penghargaan.index')->with('success', 'Penghargaan berhasil ditambahkan.');
    }

    public function show(Penghargaan $penghargaan)
    {
        return view('admin.penghargaan.show', compact('penghargaan'));
    }

    public function edit(Penghargaan $penghargaan)
    {
        return view('admin.penghargaan.edit', compact('penghargaan'));
    }

    public function update(Request $request, Penghargaan $penghargaan)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tanggal' => 'required|date',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $data = $request->except('gambar');

        if ($request->hasFile('gambar')) {
            
            if ($penghargaan->gambar) {
                Storage::disk('public')->delete($penghargaan->gambar);
            }
            $path = $request->file('gambar')->store('penghargaan', 'public');
            $data['gambar'] = $path;
        }

        $penghargaan->update($data);

        return redirect()->route('admin.penghargaan.index')->with('success', 'Penghargaan berhasil diperbarui.');
    }

    public function destroy(Penghargaan $penghargaan)
    {
        if ($penghargaan->gambar) {
            Storage::disk('public')->delete($penghargaan->gambar);
        }
        $penghargaan->delete();

        return redirect()->route('admin.penghargaan.index')->with('success', 'Penghargaan berhasil dihapus.');
    }
}