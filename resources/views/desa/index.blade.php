@extends('layouts.app')

@section('content')

<style>
.pagination li a, 
.pagination li span {
    padding: 3px 8px !important;
    font-size: 20px !important;
}
</style>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Daftar Desa</h3>
    </div>
    <div class="card-body">
        <a href="{{ url('/desa/tambah-data') }}" class="btn btn-success mb-3">+ Tambah Data</a>
        <table id="tabelBerkas" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Aksi</th>
                    <th>Kode</th>
                    <th>Desa</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $row)
                <tr>
                    <td>
                        <a href="{{ url('/desa/edit-data/'.$row->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <a href="{{ url('/desa/hapus-data/'.$row->id) }}" 
                           onclick="return confirm('Yakin ingin menghapus data ini?')" 
                           class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                    <td>{{ $row->kd_desa }}</td>
                    <td>{{ $row->desa }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <!-- Pagination -->
        <div class="mt-3">
            {{ $data->onEachSide(1)->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>

<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>

<!-- <script>
$(function() {
    $('#tabelBerkas').DataTable({
        language: { url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/id.json' }
    });
});
</script> -->
@endsection







<!-- <!DOCTYPE html>
<html>
<head>
    <title>Data Berkas</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
</head>
<body>
    <h2>Daftar Berkas</h2>

    <a href="{{ url('/desa/tambah-data') }}" 
       style="background:green; color:white; padding:8px 12px; text-decoration:none; border-radius:5px;">
       + Tambah Data
    </a>

    <br><br>

    <table id="tabelBerkas" class="display">
        <thead>
            <tr>
                <th>Aksi</th>
                <th>Kode</th>
                <th>desa</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $row)
            <tr>
                <td>
                    <a href="{{ url('/desa/edit-data/'.$row->id) }}">Edit</a> |
                    <a href="{{ url('/desa/hapus-data/'.$row->id) }}" 
                       onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                </td>
                <td>{{ $row->kd_desa }}</td>
                <td>{{ $row->desa }}</td>
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
</html> -->