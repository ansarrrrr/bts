@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Daftar Kabupaten</h3>
    </div>
    <div class="card-body">
        <a href="{{ url('/kabupaten/tambah-data') }}" class="btn btn-success mb-3">+ Tambah Data</a>
        <table id="tabelBerkas" class="table table-bordered table-striped">
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
                        <a href="{{ url('/kabupaten/edit-data/'.$row->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <a href="{{ url('/kabupaten/hapus-data/'.$row->id) }}" 
                           onclick="return confirm('Yakin ingin menghapus data ini?')" 
                           class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                    <td>{{ $row->kd_kab }}</td>
                    <td>{{ $row->kabupaten }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
<script>
$(function() {
    $('#tabelBerkas').DataTable({
        language: { url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/id.json' }
    });
});
</script>
@endsection