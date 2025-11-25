<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\DesaModel;

class DesaController extends Controller
{
    public function index()
    {
        $data = DesaModel::all();
        return view('desa.index', compact('data'));
    }

    public function create()
    {
        return view('desa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kd_desa' => 'required',
            'desa' => 'required',
        ]);

        DesaModel::create($request->only(['kd_desa', 'desa']));
        return redirect('/desa')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $desa = DesaModel::findOrFail($id);
        return view('desa.edit', compact('desa'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kd_desa' => 'required',
            'desa' => 'required',
        ]);

        $desa = DesaModel::findOrFail($id);
        $desa->update($request->only(['kd_desa', 'desa']));
        return redirect('/desa')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        $desa = DesaModel::findOrFail($id);
        $desa->delete();
        return redirect('/desa')->with('success', 'Data berhasil dihapus');
    } 
}