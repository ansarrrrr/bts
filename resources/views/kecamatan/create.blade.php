@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header bg-primary text-white">
        <h3 class="card-title">Tambah Data Kecamatan</h3>
    </div>

    <div class="card-body">
        <form method="POST" action="{{ url('/kecamatan/simpan-data') }}">
            @csrf
            <div class="form-group">
                <label for="kd_kec">Kode Kecamatan</label>
                <input type="number" name="kd_kec" id="kd_kec" class="form-control" placeholder="Masukkan kode kecamatan" required>
            </div>

            <div class="form-group">
                <label for="kecamatan">Nama Kecamatan</label>
                <input type="text" name="kecamatan" id="kecamatan" class="form-control" placeholder="Masukkan nama kecamatan" required>
            </div>

            <div class="mt-3">
                <button type="submit" class="btn btn-success">
                    <i class="fas fa-save"></i> Simpan
                </button>
                <a href="{{ url('/kecamatan') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
            </div>
        </form>
    </div>
</div>
@endsection







<!-- <!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Berkas</title>
</head>
<body>
    <h2>Tambah Data Berkas</h2>

    <form method="POST" action="{{ url('/kecamatan/simpan-data') }}">
        @csrf
        <label>Kode:</label><br>
        <input type="text" name="kd_kec" required><br><br>

        <label>Nama Berkas:</label><br>
        <input type="text" name="kecamatan" required><br><br>

        <button type="submit">Simpan</button>
        <a href="{{ url('/kecamatan') }}">Kembali</a>
    </form>
</body>
</html> -->