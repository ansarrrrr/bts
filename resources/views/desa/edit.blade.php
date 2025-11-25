<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Berkas</title>
</head>
<body>
    <h2>Edit Data Berkas</h2>

    <form method="POST" action="{{ url('/desa/update-data/'.$desa->id) }}">
        @csrf
        <label>Kode:</label><br>
        <input type="text" name="kd_kec" value="{{ $desa->kd_kec }}" required><br><br>

        <label>Nama Berkas:</label><br>
        <input type="text" name="desa" value="{{ $desa->desa }}" required><br><br>

        <button type="submit">Update</button>
        <a href="{{ url('/desa') }}">Kembali</a>
    </form>
</body>
</html>
