@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Edit Penghargaan</h1>
    <form action="{{ route('admin.penghargaan.update', $penghargaan->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul', $penghargaan->judul) }}" required>
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" required>{{ old('deskripsi', $penghargaan->deskripsi) }}</textarea>
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ old('tanggal', $penghargaan->tanggal) }}" required>
        </div>
        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar Baru (Opsional)</label>
            <input type="file" class="form-control" id="gambar" name="gambar">
            @if($penghargaan->gambar)
                <div class="mt-2">
                    <small>Gambar saat ini:</small><br>
                    <img src="{{ asset('storage/' . $penghargaan->gambar) }}" alt="{{ $penghargaan->judul }}" width="150">
                </div>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('admin.penghargaan.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection