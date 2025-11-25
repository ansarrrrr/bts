@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Daftar Bts</h3>
    </div>
    <div class="card-body">
        <a href="{{ url('/data-bts/tambah-data') }}" class="btn btn-success mb-3">+ Tambah Data</a>
        <table id="tabelBerkas" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Aksi</th>
                    <th>Kode Site</th>
                    <th>Pemilik</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    <th>Kabupaten</th>
                    <th>Kecamatan</th>
                    <th>Desa</th>
                    <th>Tinggi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $row)
                <tr>
                    <td>
                        <a href="{{ url('/data-bts/edit-data/'.$row->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <a href="{{ url('/data-bts/hapus-data/'.$row->id) }}" 
                           onclick="return confirm('Yakin ingin menghapus data ini?')" 
                           class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                    <td>{{ $row->kd_site }}</td>
                    <td>{{ $row->pemilik }}</td>
                    <td>{{ $row->lat }}</td>
                    <td>{{ $row->lng }}</td>
                    <td>{{ $row->nama_kabupaten }}</td>
                    <td>{{ $row->nama_kecamatan }}</td>

                    <!-- <td>{{ $row->kd_desa }}</td> -->
                    <td>{{ $row->nama_desa }}</td>

                    <td>{{ $row->tinggi }}</td>
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