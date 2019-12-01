@extends('template/main')

@section('title', 'Daftar Siswa')

@section('container')

<div class="siswa">
    <h2>Detail Siswa</h2>

    <hr>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $siswa->nama_siswa }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $siswa->nisn }}</h6>
            <p class="card-text">{{ $siswa->tanggal_lahir }}</p>
            <a href="/siswa" class="card-link">kembali</a>
        </div>
    </div>
</div>
@endsection