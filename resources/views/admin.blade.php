@extends('layouts.app') {{-- atau layout yang kamu pakai --}}
@section('content')
<div class="container">
    <h3 class="mb-4">Kelola Penghargaan</h3>

    {{-- Form Tambah Penghargaan --}}
    <form action="{{ route('awards.store') }}" method="POST" enctype="multipart/form-data" class="mb-5">
        @csrf
        <div class="row g-2">
            <div class="col-md-3">
                <input type="text" name="title" class="form-control" placeholder="Judul" required>
            </div>
            <div class="col-md-3">
                <input type="text" name="organizer" class="form-control" placeholder="Penyelenggara" required>
            </div>
            <div class="col-md-2">
                <input type="text" name="year" class="form-control" placeholder="Tahun" required>
            </div>
            <div class="col-md-4">
                <input type="text" name="description" class="form-control" placeholder="Deskripsi" required>
            </div>
            <div class="col-md-4 mt-2">
                <input type="file" name="image" class="form-control">
            </div>
            <div class="col-md-2 mt-2">
                <button class="btn btn-success w-100">Tambah</button>
            </div>
        </div>
    </form>

    {{-- Daftar Penghargaan --}}
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Penyelenggara</th>
                <th>Tahun</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        @foreach($awards as $award)
            <tr>
                <td>{{ $award->title }}</td>
                <td>{{ $award->organizer }}</td>
                <td>{{ $award->year }}</td>
                <td>{{ $award->description }}</td>
                <td>
                    @if($award->image)
                        <img src="{{ asset('storage/' . $award->image) }}" alt="" width="80">
                    @endif
                </td>
                <td>
                    {{-- Update: Bisa pakai modal jika ingin --}}
                    <form action="{{ route('awards.destroy', $award->id) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                    {{-- Edit tombol/modal bisa kamu tambahkan di sini --}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
