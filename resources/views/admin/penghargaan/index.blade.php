@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Daftar Penghargaan</h1>
        <a href="{{ route('admin.penghargaan.create') }}" class="btn btn-primary">Tambah Baru</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Judul</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($penghargaans as $key => $penghargaan)
                <tr>
                    <td>{{ $penghargaans->firstItem() + $key }}</td>
                    <td>
                        @if($penghargaan->gambar)
                            <img src="{{ asset('storage/' . $penghargaan->gambar) }}" alt="{{ $penghargaan->judul }}" width="100">
                        @else
                            -
                        @endif
                    </td>
                    <td>{{ $penghargaan->judul }}</td>
                    <td>{{ \Carbon\Carbon::parse($penghargaan->tanggal)->format('d F Y') }}</td>
                    <td>
                        <a href="{{ route('admin.penghargaan.edit', $penghargaan->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.penghargaan.destroy', $penghargaan->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">Tidak ada data.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    {{ $penghargaans->links() }}
</div>
@endsection