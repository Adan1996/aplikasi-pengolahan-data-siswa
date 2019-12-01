@extends('template/main')

@section('title', 'Daftar Siswa')

@section('container')

<div class="siswa">
    <h2>Siswa</h2>

    <hr>

    <table id="data" class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">NISN</th>
                <th scope="col">Tgl Lahir</th>
                <th scope="col">Jenis Kelamin</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($siswa as $s)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $s->nama_siswa }}</td>
                <td>{{ $s->nisn }}</td>
                <td>{{ $s->tanggal_lahir }}</td>
                <td>{{ $s->jenis_kelamin }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection