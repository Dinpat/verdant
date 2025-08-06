@extends('layouts.admin') {{-- Menggunakan layout admin yang baru kita buat --}}

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
    </div>

    <div class="alert alert-success" role="alert">
        Selamat datang kembali, **{{ Auth::user()->name }}**!
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Navigasi Cepat</div>
                <div class="card-body">
                    <p>Anda dapat mengelola konten website melalui menu di sebelah kiri.</p>
                    <ul>
                        <li><strong>Manajemen Prestasi:</strong> Untuk menambah, mengubah, atau menghapus data penghargaan perusahaan.</li>
                        <li><strong>Persetujuan Testimoni:</strong> Untuk melihat dan menyetujui testimoni yang dikirim oleh klien.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection