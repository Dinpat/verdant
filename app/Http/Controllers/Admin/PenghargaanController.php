<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Penghargaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PenghargaanController extends Controller
{
    public function adminIndex()
{
    $penghargaan = penghargaan::all();
    return view('admin.penghargaan.index', compact('penghargaan'));
}

public function store(Request $request)
{
    $data = $request->validate([
       'tahun'=> 'required',
        'nama_penghargaan'=> 'required',
        'penyelenggara'=> 'required',
        'deskripsi'=> 'required',
        'foto'=> 'image|nullable',
    ]);

    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->store('penghargaan', 'public');
    }

    penghargaan::create($data);
    return back()->with('success', 'Penghargaan ditambahkan.');
}

public function update(Request $request, $id)
{
    $penghargaan = penghargaan::findOrFail($id);

    $data = $request->validate([
        'tahun'=> 'required',
        'nama_penghargaan'=> 'required',
        'penyelenggara'=> 'required',
        'deskripsi'=> 'required',
        'foto'=> 'image|nullable',
    ]);

    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->store('penghargaan', 'public');
    }

    $penghargaan->update($data);
    return back()->with('success', 'Penghargaan diperbarui.');
}

public function destroy($id)
{
    $penghargaan = penghargaan::findOrFail($id);
    $penghargaan->delete();
    return back()->with('success', 'Penghargaan dihapus.');
}
}