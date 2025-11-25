<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KabupatenController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\DesaController;

use App\Http\Controllers\LoginController;

use App\Http\Controllers\AuthController;

use App\Http\Controllers\DashboardController;

use App\Http\Controllers\BtsController;

Route::get('/', function () {
    return redirect ('/login');
});

Route::get('/kabupaten',                   [KabupatenController::class, 'index'])  ->name('kabupaten.index');
Route::get('/kabupaten/tambah-data',       [KabupatenController::class, 'create']) ->name('kabupaten.create');
Route::post('/kabupaten/simpan-data',      [KabupatenController::class, 'store'])  ->name('kabupaten.store');
Route::get('/kabupaten/edit-data/{id}',    [KabupatenController::class, 'edit'])   ->name('kabupaten.edit');
Route::post('/kabupaten/update-data/{id}', [KabupatenController::class, 'update']) ->name('kabupaten.update');
Route::get('/kabupaten/hapus-data/{id}',   [KabupatenController::class, 'destroy'])->name('kabupaten.destroy');

Route::get('/kecamatan',                   [KecamatanController::class, 'index'])  ->name('kecamatan.index');
Route::get('/kecamatan/tambah-data',       [KecamatanController::class, 'create']) ->name('kecamatan.create');
Route::post('/kecamatan/simpan-data',      [KecamatanController::class, 'store'])  ->name('kecamatan.store');
Route::get('/kecamatan/edit-data/{id}',    [KecamatanController::class, 'edit'])   ->name('kecamatan.edit');
Route::post('/kecamatan/update-data/{id}', [KecamatanController::class, 'update']) ->name('kecamatan.update');
Route::get('/kecamatan/hapus-data/{id}',   [KecamatanController::class, 'destroy'])->name('kecamatan.destroy');

Route::get ('/desa',                   [DesaController::class, 'index'])  ->name('desa.index');
Route::get ('/desa/tambah-data',       [DesaController::class, 'create']) ->name('desa.create');
Route::post('/desa/simpan-data',       [DesaController::class, 'store'])  ->name('desa.store');
Route::get ('/desa/edit-data/{id}',    [DesaController::class, 'edit'])   ->name('desa.edit');
Route::post('/desa/update-data/{id}',  [DesaController::class, 'update']) ->name('desa.update');
Route::get ('/desa/hapus-data/{id}',   [DesaController::class, 'destroy'])->name('desa.destroy');

Route::get('/data-bts',                   [BtsController::class, 'index'])  ->name('data-bts.index');
Route::get('/data-bts/tambah-data',       [BtsController::class, 'create']) ->name('data-bts.create');
Route::post('/data-bts/simpan-data',      [BtsController::class, 'store'])  ->name('data-bts.store');
Route::get('/data-bts/edit-data/{id}',    [BtsController::class, 'edit'])   ->name('data-bts.edit');
Route::post('/data-bts/update-data/{id}', [BtsController::class, 'update']) ->name('data-bts.update');
Route::get('/data-bts/hapus-data/{id}',   [BtsController::class, 'destroy'])->name('data-bts.destroy');

Route::get('/login',                   [LoginController::class, 'index'])->name('login.index');
Route::post('/login/proses-data',      [LoginController::class, 'proses'])->name('login.proses');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');