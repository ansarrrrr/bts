@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header bg-primary text-white">
        <h3 class="card-title">Tambah Data Kabupaten</h3>
    </div>

    <div class="card-body">
        <form method="POST" action="{{ url('/kabupaten/simpan-data') }}">
            @csrf
            <div class="form-group">
                <label for="kd_kab">Kode Kabupaten</label>
                <input type="text" name="kd_kab" id="kd_kab" class="form-control" placeholder="Masukkan kode kabupaten" required>
            </div>

            <div class="form-group">
                <label for="kabupaten">Nama Kabupaten</label>
                <input type="text" name="kabupaten" id="kabupaten" class="form-control" placeholder="Masukkan nama kabupaten" required>
            </div>

            <div class="mt-3">
                <button type="submit" class="btn btn-success">
                    <i class="fas fa-save"></i> Simpan
                </button>
                <a href="{{ url('/kabupaten') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
