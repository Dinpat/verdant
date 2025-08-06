@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Manajemen Testimoni</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <h2 class="mt-4">Testimoni Menunggu Persetujuan (Pending)</h2>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Pesan</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($testimonisPending as $testimoni)
                    <tr>
                        <td>{{ $testimoni->nama }}</td>
                        <td>{{ $testimoni->pesan }}</td>
                        <td>{{ $testimoni->created_at->format('d M Y H:i') }}</td>
                        <td>
                            <form action="{{ route('admin.testimoni.approve', $testimoni->id) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-success btn-sm">Approve</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">Tidak ada testimoni yang menunggu persetujuan.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <h2 class="mt-5">Testimoni yang Sudah Disetujui</h2>
    <div class="table-responsive">
        {{-- Tabel untuk testimoni yang sudah disetujui bisa dibuat di sini jika perlu --}}
    </div>
</div>
@endsection