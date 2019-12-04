@extends('template/main')

@section('title', 'Daftar Siswa')

@section('container')

<div class="siswa">
    <div class="row">
        <div class="col">
            <h2>Daftar Siswa</h2>
        </div>
        <div class="col-lg-2">
            <div>
                <a href="siswa/create" class="btn btn-primary">Tambah Siswa</a>
            </div>
        </div>
    </div>

    <hr>

    <table id="data" class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">NISN</th>
                <th scope="col">Tgl Lahir</th>
                <th scope="col">JK</th>
                <th scope="col">Action</th>
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
                <td>
                    <a href="siswa/{{ $s->id }}" class="btn btn-primary">detail</a>
                    <a href="siswa/{{ $s->id }}/edit" class="btn btn-success">edit</a>
                    <form action="siswa/{{ $s->id }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{-- <div class="pull-left">
        <strong>Jumlah Siswa: {{ $jumlah_siswa }}</strong>
</div> --}}
</div>
@endsection