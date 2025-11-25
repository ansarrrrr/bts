@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Daftar Bts</h3>
    </div>
    <div class="card-body">
    <h2>Edit Data Berkas</h2>

    <form method="POST" action="{{ url('/data-bts/update-data/'.$bts->id) }}">
        @csrf
       
        <!-- kode site -->
        <div class="form-group">
            <label for="kd_site">Kode Site</label>
            <input type="text" name="kd_site" id="kd_site" class="form-control" placeholder="Masukkan kode site" required value="{{ $bts->kd_site }}">
        </div>

        <!-- nama pemilik -->
        <div class="form-group">
            <label for="pemilik">Nama Pemilik</label>
            <input type="text" name="pemilik" id="pemilik" class="form-control" placeholder="Masukkan nama pemilik" required value="{{ $bts->pemilik }}">
        </div>

        <!-- latitude -->
        <div class="form-group">
            <label for="lat">Latitude</label>
            <input type="text" name="lat" id="lat" class="form-control" placeholder="Masukkan latitude" required value="{{ $bts->lat }}">
        </div>

        <!-- longitude -->
        <div class="form-group">
            <label for="lng">Longitude</label>
            <input type="text" name="lng" id="lng" class="form-control" placeholder="Masukkan longitude" required value="{{ $bts->lng }}">
        </div>
        
        <!-- kabupaten -->
        <div class="form-group">
            <label for="kd_kab">Kabupaten</label>

            <!------------ VERSI BAPAK ------------>
            <!-- <select name="kd_kab" id="kd_kab" class="form-control" placeholder="Masukkan kabupaten" required oninvalid="this.setCustomValidity('Silahkan pilih kabupaten')" oninput="this.setCustomValidity('')">
                <option value="">-- Pilih Kabupaten --</option>
                @foreach($kab as $row)
                <option value="{{ $row->kd_kab }}">{{ $row->kabupaten }}</option>
                @endforeach
            </select> -->

            <!------------ VERSI ANSAR ------------>
            <select name="kd_kab" id="kd_kab" class="form-control">
                @foreach($kab as $row)
                    <option value="{{ $row->kd_kab }}" {{ $bts->kd_kab == $row->kd_kab ? 'selected' : '' }}> {{ $row->kabupaten }}
                    </option>
                @endforeach
            </select>

        </div>
        
        <!-- kecamatan -->
        <div class="form-group">
            <label for="kd_kec">Kecamatan</label>

            <!------------ VERSI BAPAK ------------>
            <!-- <select name="kd_kec" id="kd_kec" class="form-control" placeholder="Masukkan kecamatan" required oninvalid="this.setCustomValidity('Silahkan pilih kecamatan')" oninput="this.setCustomValidity('')">
                <option value="">-- Pilih Kecamatan --</option>
                @foreach($kec as $row)
                <option value="{{ $row->kd_kec }}">{{ $row->kecamatan }}</option>
                @endforeach
            </select> -->

            <!------------ VERSI ANSAR ------------>
            <select name="kd_kec" id="kd_kec" class="form-control">
                @foreach($kec as $row)
                    <option value="{{ $row->kd_kec }}" {{ $bts->kd_kec == $row->kd_kec ? 'selected' : '' }}> {{ $row->kecamatan }}
                    </option>
                @endforeach
            </select>

        </div>

        <!-- desa -->
        <div class="form-group">
            <label for="kd_desa">Desa</label>

            <!------------ VERSI BAPAK ------------>
            <!-- <select name="kd_desa" id="kd_desa" class="form-control" placeholder="Masukkan desa" required oninvalid="this.setCustomValidity('Silahkan pilih desa')" oninput="this.setCustomValidity('')">
                <option value="">-- Pilih Desa --</option>
                @foreach($desa as $row)
                <option value="{{ $row->kd_desa }}">{{ $row->desa }}</option>
                @endforeach
            </select> -->

            <!------------ VERSI ANSAR ------------>
            <select name="kd_desa" id="kd_desa" class="form-control">
                @foreach($desa as $row)
                    <option value="{{ $row->kd_desa }}" {{ $bts->kd_desa == $row->kd_desa ? 'selected' : '' }}> {{ $row->desa }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- tinggi -->
        <div class="form-group">
            <label for="tinggi">Tinggi</label>
            <input type="number" name="tinggi" id="tinggi" class="form-control" placeholder="Masukkan tinggi" required value="{{ $bts->tinggi }}">
        </div>

        <!-- luas -->
        <div class="form-group">
            <label for="luas">Luas</label>
            <input type="text" name="luas" id="luas" class="form-control" placeholder="Masukkan luas" required value="{{ $bts->luas }}">
        </div>

        <!-- status -->
        <div class="form-group">
            <label for="status">Status</label>

            <!------------ VERSI BAPAK ------------>
            <!-- <select name="status" id="status" class="form-control" placeholder="Masukkan status" required >
                <option value="1">Aktif</option>
                <option value="0">Tidak Aktif</option>
            </select> -->

            <!------------ VERSI ANSAR ------------>
            <select name="status" id="status" class="form-control" required>
                <option value="1" {{ $bts->status == 1 ? 'selected' : '' }}>Aktif</option>
                <option value="0" {{ $bts->status == 0 ? 'selected' : '' }}>Tidak Aktif</option>
            </select>

        </div>

        <!-- tahun -->
        <div class="form-group">
            <label for="tahun">Tahun</label>
            <input type="number" name="tahun" id="tahun" class="form-control" placeholder="Masukkan tahun" required value="{{ $bts->tahun }}">
        </div>

        <!-- keterangan -->
        <div class="form-group">
            <label for="keterangan"> Keterangan </label>
            <input type="text" name="keterangan" id="keterangan" class="form-control" placeholder="Masukkan keterangan" value="{{ $bts->keterangan }}">
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
@endsection