<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Berkas</title>
</head>
<body>
    <h2>Tambah Data Berkas</h2>

    <form method="POST" action="{{ url('/kabupaten/simpan-data') }}">
        @csrf
        <label>Kode:</label><br>
        <input type="text" name="kd_kabupaten" required><br><br>

        <label>Nama Berkas:</label><br>
        <input type="text" name="kabupaten" required><br><br>

        <button type="submit">Simpan</button>
        <a href="{{ url('/kabupaten') }}">Kembali</a>
    </form>
</body>
</html>
