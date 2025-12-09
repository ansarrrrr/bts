<html>
<body>
<h3>Report Data BTS</h3>
<table border="1" cellspacing="0" cellpadding="5">
    <tr>
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
    @foreach($data as $row)
    <tr>
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
</table>
</body>
</html>
