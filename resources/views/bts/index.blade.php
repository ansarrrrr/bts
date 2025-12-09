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
        <h3 class="card-title">Daftar Bts</h3>
    </div>
    <div class="card-body">
        <a href="{{ url('/data-bts/tambah-data') }}" class="btn btn-success mb-3">+ Tambah Data</a>

        <!--##### tombol - EXCEL #####-->
        <a href="{{ url('/data-bts/export-excel') }}" class="btn btn-info mb-3">Export Excel</a>

        <!--##### tombol - PDF #####-->
        <a href="{{ url('/data-bts/export-pdf') }}" class="btn btn-warning mb-3">Export PDF</a>

        <!--##### tombol - PRINT #####-->
        <a href="{{ url('/data-bts/print') }}" target="_blank" class="btn btn-secondary mb-3">Print</a>

        <div style="overflow-x: auto;">
            <table id="tabelBerkas" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Aksi</th>
                        <th>Kode Site</th>
                        <th>Kabupaten</th>
                        <th>Kecamatan</th>
                        <th>Desa</th>
                        <th>Pemilik</th>
                        <th>Alamat</th>
                        <th>Lat</th>
                        <th>Lng</th>
                        <th>Tinggi</th>
                        <th>Tahun</th>
                        <th>Provider</th>
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
                        <td>{{ $row->nama_kabupaten }}</td>
                        <td>{{ $row->nama_kecamatan }}</td>
                        <td>{{ $row->nama_desa }}</td>
                        <td>{{ $row->pemilik }}</td>
                        <td>{{ $row->alamat }}</td>
                        <td>{{ $row->lat }}</td>
                        <td>{{ $row->lng }}</td>
                        <td>{{ $row->tinggi }}</td>
                        <td>{{ $row->tahun }}</td>
                        <td>{{ $row->provider }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-2">
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