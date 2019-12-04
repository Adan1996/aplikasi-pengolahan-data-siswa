@extends('template/main')

@section('title', 'Daftar Siswa')

@section('container')

<div id="siswa">

    <div class="col-lg-6">
        <form action="/siswa/{{ $siswa->id }}" method="post">
            @method('patch')
            @csrf
            <div class="form-group">
                <label for="nisn">NISN</label>
                <input type="text" class="form-control" id="nisn" placeholder="Masukkan NISN" name="nisn"
                    value="{{ $siswa->nisn }}">
            </div>
            <div class="form-group">
                <label for="nama_siswa">Nama</label>
                <input type="text" class="form-control" id="nama_siswa" placeholder="Masukkan Nama" name="nama_siswa"
                    value="{{ $siswa->nama_siswa }}">
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">Tgl Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" placeholder="Masukkan NISN"
                    name="tanggal_lahir" value="{{ $siswa->tanggal_lahir }}">
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin :</label>
                <div class="custom-control custom-radio">
                    <input type="radio" id="L" name="jenis_kelamin" class="custom-control-input" value="L"
                        @if($siswa->jenis_kelamin == 'L') checked @endif>
                    <label class="custom-control-label" for="L">L</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="P" name="jenis_kelamin" class="custom-control-input" value="P"
                        @if($siswa->jenis_kelamin == 'P') checked @endif>
                    <label class="custom-control-label" for="P">P</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block">Edit</button>
        </form>
    </div>

</div>
@endsection