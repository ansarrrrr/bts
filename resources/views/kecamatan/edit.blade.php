<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Berkas</title>
</head>
<body>
    <h2>Edit Data Berkas</h2>

    <form method="POST" action="{{ url('/kecamatan/update-data/'.$kecamatan->id) }}">
        @csrf
        <label>Kode:</label><br>
        <input type="text" name="kd_kec" value="{{ $kecamatan->kd_kec }}" required><br><br>

        <label>Nama Berkas:</label><br>
        <input type="text" name="kecamatan" value="{{ $kecamatan->kecamatan }}" required><br><br>

        <button type="submit">Update</button>
        <a href="{{ url('/kecamatan') }}">Kembali</a>
    </form>
</body>
</html>
