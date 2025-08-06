@extends('layouts.app') {{-- Menggunakan layout standar untuk user --}}

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profil Saya</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <div class="text-center mb-4">
                            @if (Auth::user()->profile_photo_path)
                                <img src="{{ asset('storage/' . Auth::user()->profile_photo_path) }}" alt="{{ Auth::user()->name }}" class="rounded-circle" width="150" height="150" style="object-fit: cover;">
                            @else
                                {{-- Tampilkan avatar default jika tidak ada foto --}}
                                <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&color=7F9CF5&background=EBF4FF" alt="{{ Auth::user()->name }}" class="rounded-circle" width="150">
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input id="name" type="text" class="form-control" value="{{ Auth::user()->name }}" disabled>
                        </div>
                        
                        <div class="mb-3">
                            <label for="email" class="form-label">Alamat Email</label>
                            <input id="email" type="email" class="form-control" value="{{ Auth::user()->email }}" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="photo" class="form-label">Upload Foto Profil Baru</label>
                            <input id="photo" name="photo" type="file" class="form-control">
                            @error('photo')
                                <span class="text-danger mt-2">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">
                                Simpan Foto
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection