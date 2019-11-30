@extends('template/main')

@section('title', 'Daftar Siswa')

@section('container')

<div id="siswa">

    <div class="col-lg-6">
        <form action="/siswa" method="post">
            @csrf
            <div class="form-group">
                <label for="nisn">NISN</label>
                <input type="text" class="form-control" id="nisn" placeholder="Masukkan NISN" name="nisn">
            </div>
            <div class="form-group">
                <label for="nama_siswa">Nama</label>
                <input type="text" class="form-control" id="nama_siswa" placeholder="Masukkan Nama" name="nama_siswa">
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">Tgl Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" placeholder="Masukkan NISN"
                    name="tanggal_lahir">
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin :</label>
                <div class="custom-control custom-radio">
                    <input type="radio" id="jenis_kelamin" name="jenis_kelamin" class="custom-control-input" value="L">
                    <label class="custom-control-label" for="jenis_kelamin">Laki-laki</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="jenis_kelamin" name="jenis_kelamin" class="custom-control-input" value="P">
                    <label class="custom-control-label" for="jenis_kelamin">Perempuan</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block">Simpan</button>
        </form>
    </div>

</div>
@endsection