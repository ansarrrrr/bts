<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KabupatenModel;

class KabupatenController extends Controller
{
    public function index()
    {
        $data = KabupatenModel::all();
        return view('kabupaten.index', compact('data'));
    }

    public function create()
    {
        return view('kabupaten.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kd_kab' => 'required',
            'kabupaten' => 'required',
        ]);

        KabupatenModel::create($request->only(['kd_kab', 'kabupaten']));
        return redirect('/kabupaten')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $kabupaten = KabupatenModel::findOrFail($id);
        return view('kabupaten.edit', compact('kabupaten'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kd_kab' => 'required',
            'kabupaten' => 'required',
        ]);

        $kabupaten = KabupatenModel::findOrFail($id);
        $kabupaten->update($request->only(['kd_kab', 'kabupaten']));
        return redirect('/kabupaten')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        $kabupaten = KabupatenModel::findOrFail($id);
        $kabupaten->delete();
        return redirect('/kabupaten')->with('success', 'Data berhasil dihapus');
    } 
}
