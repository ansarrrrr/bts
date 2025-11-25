<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Berkas</title>
</head>
<body>
    <h2>Edit Data Berkas</h2>

    <form method="POST" action="{{ url('/kabupaten/update-data/'.$kabupaten->id) }}">
        @csrf
        <label>Kode:</label><br>
        <input type="text" name="kd_kabupaten" value="{{ $kabupaten->kd_kabupaten }}" required><br><br>

        <label>Nama Berkas:</label><br>
        <input type="text" name="kabupaten" value="{{ $kabupaten->kabupaten }}" required><br><br>

        <button type="submit">Update</button>
        <a href="{{ url('/kabupaten') }}">Kembali</a>
    </form>
</body>
</html>
