@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header bg-primary text-white">
        <h3 class="card-title">Tambah Data Site</h3>
    </div>

    <div class="card-body">
        <form method="POST" action="{{ url('/data-bts/simpan-data') }}">
            @csrf
            <!-- kode site -->
            <div class="form-group">
                <label for="kd_site">Kode Site</label>
                <input type="text" name="kd_site" id="kd_site" class="form-control" placeholder="Masukkan kode site" required>
            </div>

            <!-- nama pemilik -->
            <div class="form-group">
                <label for="pemilik">Nama Pemilik</label>
                <input type="text" name="pemilik" id="pemilik" class="form-control" placeholder="Masukkan nama pemilik" required>
            </div>

            <!-- latitude -->
            <div class="form-group">
                <label for="lat">Latitude</label>
                <input type="text" name="lat" id="lat" class="form-control" placeholder="Masukkan latitude" required>
            </div>

            <!-- longitude -->
            <div class="form-group">
                <label for="lng">Longitude</label>
                <input type="text" name="lng" id="lng" class="form-control" placeholder="Masukkan longitude" required>
            </div>
            
            <!-- kabupaten -->
            <div class="form-group">
                <label for="kd_kab">Kabupaten</label>
                <select name="kd_kab" id="kd_kab" class="form-control" placeholder="Masukkan kabupaten" required>
                    <option value="">-- Pilih Kabupaten --</option>
                    @foreach($kab as $row)
                    <option value="{{ $row->kd_kab }}">{{ $row->kabupaten }}</option>
                    @endforeach
                </select>
            </div>
            
            <!-- kecamatan -->
            <div class="form-group">
                <label for="kd_kec">Kecamatan</label>
                <select name="kd_kec" id="kd_kec" class="form-control" placeholder="Masukkan kecamatan" required>
                    <option value="">-- Pilih Kecamatan --</option>
                    @foreach($kec as $row)
                    <option value="{{ $row->kd_kec }}">{{ $row->kecamatan }}</option>
                    @endforeach
                </select>
            </div>

            <!-- desa -->
            <div class="form-group">
                <label for="kd_desa">Desa</label>
                <select name="kd_desa" id="kd_desa" class="form-control" placeholder="Masukkan desa" required>
                    <option value="">-- Pilih Desa --</option>
                    @foreach($desa as $row)
                    <option value="{{ $row->kd_desa }}">{{ $row->desa }}</option>
                    @endforeach
                </select>
            </div>

            <!-- tinggi -->
            <div class="form-group">
                <label for="tinggi">Tinggi</label>
                <input type="number" name="tinggi" id="tinggi" class="form-control" placeholder="Masukkan tinggi" required>
            </div>

            <!-- luas -->
            <div class="form-group">
                <label for="luas">Luas</label>
                <input type="text" name="luas" id="luas" class="form-control" placeholder="Masukkan luas" required>
            </div>

            <!-- status -->
            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control" placeholder="Masukkan status" required>
                    <option value="">-- Pilih Status --</option>
                    <option value="1">Aktif</option>
                    <option value="0">Tidak Aktif</option>
                </select>
            </div>

            <!-- tahun -->
            <div class="form-group">
                <label for="tahun">Tahun</label>
                <input type="number" name="tahun" id="tahun" class="form-control" placeholder="Masukkan tahun" required>
            </div>

            <!-- keterangan -->
            <div class="form-group">
                <label for="keterangan"> Keterangan </label>
                <input type="text" name="keterangan" id="keterangan" class="form-control" placeholder="Masukkan keterangan">
            </div>

            <!-- button - simpan & kembali -->
            <div class="form-group">
                <button type="submit" class="btn btn-success">
                    <i class="fas fa-save"></i> Simpan
                </button>
                <a href="{{ url('/data-bts') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
            </div>
        </form>
    </div>
</div>
@endsection