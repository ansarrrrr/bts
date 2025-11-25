<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KecamatanModel;

class KecamatanController extends Controller
{
    public function index()
    {
        $data = KecamatanModel::all();
        return view('kecamatan.index', compact('data'));
    }

    public function create()
    {
        return view('kecamatan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kd_kec' => 'required',
            'kecamatan' => 'required',
        ]);

        KecamatanModel::create($request->only(['kd_kec', 'kecamatan']));
        return redirect('/kecamatan')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $kecamatan = KecamatanModel::findOrFail($id);
        return view('kecamatan.edit', compact('kecamatan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kd_kec' => 'required',
            'kecamatan' => 'required',
        ]);

        $kecamatan = KecamatanModel::findOrFail($id);
        $kecamatan->update($request->only(['kd_kec', 'kecamatan']));
        return redirect('/kecamatan')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        $kecamatan = KecamatanModel::findOrFail($id);
        $kecamatan->delete();
        return redirect('/kecamatan')->with('success', 'Data berhasil dihapus');
    } 
}
