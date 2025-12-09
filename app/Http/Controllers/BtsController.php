<?php
namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;
use App\Models\BtsModel;
use App\Models\KabupatenModel;
use App\Models\KecamatanModel;
use App\Models\DesaModel;

use Illuminate\Support\Facades\DB;


class BtsController extends Controller {
    
    // INDEX
    // ---------------- versi ANSAR ---------------- //
    public function index() {

        $data = BtsModel::select(
            'tbl_bts.*', 
            'tbl_desa.desa AS nama_desa',
            'tbl_kecamatan.kecamatan AS nama_kecamatan',
            'tbl_kabupaten.kabupaten AS nama_kabupaten'
        )
        ->leftJoin('tbl_desa', 'tbl_bts.kd_desa', '=', 'tbl_desa.kd_desa')
        ->leftJoin('tbl_kecamatan', 'tbl_bts.kd_kec', '=', 'tbl_kecamatan.kd_kec')
        ->leftJoin('tbl_kabupaten', 'tbl_bts.kd_kab', '=', 'tbl_kabupaten.kd_kab')
        ->orderBy('tbl_bts.kd_site', 'ASC')
        ->paginate(10);
        // ->get();

        return view('bts.index', compact('data'));
    }

    public function _index() {
        // ---------------- versi BAPAK ---------------- //

        $data = DB::table('tbl_bts') ->leftJoin('tbl_desa', 'tbl_bts.kd_desa', '=', 'tbl_desa.kd_desa')->select ('tbl_bts.id','tbl_bts.pemilik', 'tbl_bts.lat', 'tbl_bts.lng', 'tbl_bts.kd_site', 'tbl_bts.tinggi','tbl_bts.kd_desa', 'tbl_desa.desa') ->get();

        return view('bts.index', compact('data'));
    }

    // CREATE
    public function create() {
        // ---------------- versi ANSAR ---------------- //

        $existing_kd_site = BtsModel::pluck('kd_site')->toArray();

        return view('bts.create', [
            'kab' => KabupatenModel::all(),
            'kec' => KecamatanModel::all(),
            'desa' => DesaModel::all(),
            'existing_kd_site' => $existing_kd_site
        ]);
    }

    public function _create() {
        // ---------------- versi BAPAK ---------------- //

        $kab = KabupatenModel::all();
        $kec = KecamatanModel::all();
        $desa = DesaModel::all();
    
        return view('bts.create', compact('kab', 'kec', 'desa'));
    }

    // STORE
    public function store(Request $request) {
        // ---------------- versi ansar ---------------- //
        $data = $request->validate([
            'kd_site'   => 'required|unique:tbl_bts,kd_site',
            'pemilik'   => 'required',
            'alamat'    => 'required',
            'lat'       => 'required',
            'lng'       => 'required',
            'kd_kab'    => 'required',
            'kd_kec'    => 'required',
            'kd_desa'   => 'required',
            'tinggi'    => 'required',
            // 'luas'      => 'required',
            // 'status'    => 'required',
            'tahun'     => 'required',
            'provider'  => 'required',

            'keterangan'=> 'nullable',
        ]);
        
        BtsModel::create($data);
    
        return redirect('/data-bts')->with('success', 'Data berhasil ditambahkan');
    }

    public function _store(Request $request) {
        // ---------------- versi bapak ---------------- //
        
        $request->validate([
            'kd_site' => 'required',
            'pemilik' => 'required',
            'lat'     => 'required',
            'lng'     => 'required',
            'kd_kab'  => 'required',
            'kd_kec'  => 'required',
            'kd_desa' => 'required',
            'tinggi'  => 'required',
            'luas'    => 'required',
            'status'  => 'required',
            'tahun'   => 'required',
        ]);
        
        BtsModel::create($request->only([
            'kd_site', 'pemilik','lat','lng', 'kd_kab',
            'kd_kec', 'kd_desa', 'tinggi', 'luas',
            'status','tahun', 'keterangan'
        ]));
        return redirect('/data-bts')->with('success', 'Data berhasil ditambahkan');
    }
    
    // EDIT
    public function _edit($id) {
        // ---------------- versi ansar ---------------- //

        return view('bts.edit', [
            'kab'  => KabupatenModel::all(),
            'kec'  => KecamatanModel::all(),
            'desa' => DesaModel::all(),
            'bts'  => BtsModel::findOrFail($id),
        ]);
    }

    public function edit($id) {
        // ---------------- versi bapak ---------------- //

        $kab = KabupatenModel::all();
        $kec = KecamatanModel::all();
        $desa = DesaModel::all();
        $bts = BtsModel::findOrFail($id);
        
        return view('bts.edit', compact('kab', 'kec', 'desa', 'bts'));
    }

    // UPDATE
    public function update(Request $request, $id) {
        // ---------------- versi ANSAR ---------------- //

        $validated = $request->validate([
            'kd_site' => 'required',
            'pemilik' => 'required',
            'alamat'  => 'required',
            'lat'     => 'required',
            'lng'     => 'required',
            'kd_kab'  => 'required',
            'kd_kec'  => 'required',
            'kd_desa' => 'required',
            'tinggi'  => 'required',
            'luas'    => 'required',
            'status'  => 'required',
            'tahun'   => 'required',
            'provider'=> 'required',
        ]);
        
        BtsModel::findOrFail($id)->update($validated);
    
        return redirect('/data-bts')->with('success', 'Data berhasil diperbarui');
    }

    public function _update(Request $request, $id) {
        // ---------------- versi bapak ---------------- //

        $request->validate([
            'kd_site' => 'required',
            'pemilik' => 'required',
            'alamat'  => 'required',
            'lat'     => 'required',
            'lng'     => 'required',
            'kd_kab'  => 'required',
            'kd_kec'  => 'required',
            'kd_desa' => 'required',
            'tinggi'  => 'required',
            'luas'    => 'required',
            'status'  => 'required',
            'tahun'   => 'required',
            'provider'=> 'required',
        ]);

        $bts = BtsModel::findOrFail($id);
        $bts->update($request->only([
            'kd_site', 'pemilik', 'alamat', 'lat', 'lng','kd_kab',
            'kd_kec', 'kd_desa', 'tinggi', 'luas',
            'status','tahun', 'provider', 'keterangan'
        ]));

        return redirect('/data-bts')->with('success', 'Data berhasil diperbarui');
    }

    // DESTROY
    public function destroy($id) {
        // ---------------- versi bapak ---------------- //
        
        $bts = BtsModel::findOrFail($id);
        $bts->delete();
        return redirect('/data-bts')->with('success', 'Data berhasil dihapus');
    }

    public function _destroy($id) {
        // ---------------- versi bapak ---------------- //
        
        $bts = BtsModel::findOrFail($id);
        $bts->delete();
        return redirect('/data-bts')->with('success', 'Data berhasil dihapus');
    }
    
    // EXPORT PDF
    public function exportPDF() {
        $data = BtsModel::select(
            'tbl_bts.*', 
            'tbl_desa.desa AS nama_desa',
            'tbl_kecamatan.kecamatan AS nama_kecamatan',
            'tbl_kabupaten.kabupaten AS nama_kabupaten'
        )
        ->leftJoin('tbl_desa', 'tbl_bts.kd_desa', '=', 'tbl_desa.kd_desa')
        ->leftJoin('tbl_kecamatan', 'tbl_bts.kd_kec', '=', 'tbl_kecamatan.kd_kec')
        ->leftJoin('tbl_kabupaten', 'tbl_bts.kd_kab', '=', 'tbl_kabupaten.kd_kab')
        ->orderBy('tbl_bts.kd_site', 'ASC')
        ->get();
        
        $pdf = PDF::loadView('bts.report-pdf', compact('data'));
        return $pdf->download('data_bts.pdf');
    }
}