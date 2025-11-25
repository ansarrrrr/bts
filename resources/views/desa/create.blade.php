<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Berkas</title>
</head>
<body>
    <h2>Tambah Data Berkas</h2>

    <form method="POST" action="{{ url('/desa/simpan-data') }}">
        @csrf
        <label>Kode:</label><br>
        <input type="text" name="kd_desa" required><br><br>

        <label>Nama Berkas:</label><br>
        <input type="text" name="desa" required><br><br>

        <button type="submit">Simpan</button>
        <a href="{{ url('/desa') }}">Kembali</a>
    </form>
</body>
</html>
