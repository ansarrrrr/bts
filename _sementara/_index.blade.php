<!DOCTYPE html>
<html>
<head>
    <title>Data Berkas</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
</head>
<body>
    <h2>Daftar Berkas</h2>

    <a href="{{ url('/kabupaten/tambah-data') }}" 
       style="background:green; color:white; padding:8px 12px; text-decoration:none; border-radius:5px;">
       + Tambah Data
    </a>

    <br><br>

    <table id="tabelBerkas" class="display">
        <thead>
            <tr>
                <th>Aksi</th>
                <th>Kode</th>
                <th>Kabupaten</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $row)
            <tr>
                <td>
                    <a href="{{ url('/kabupaten/edit-data/'.$row->id) }}">Edit</a> |
                    <a href="{{ url('/kabupaten/hapus-data/'.$row->id) }}" 
                       onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                </td>
                <td>{{ $row->kd_kabupaten }}</td>
                <td>{{ $row->kabupaten }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <script>
        $(document).ready(function() {
            $('#tabelBerkas').DataTable();
        });
    </script>
</body>
</html>