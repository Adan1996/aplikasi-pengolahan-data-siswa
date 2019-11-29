@extends('template/main')

@section('title', 'Daftar Siswa')

@section('container')

<div class="siswa">
    <h2>Siswa</h2>

    <hr>

    <ul>
        @foreach ($siswa as $s)
        <li>{{ $s }}</li>
        @endforeach
    </ul>
</div>
@endsection