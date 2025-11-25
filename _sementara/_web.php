<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KabupatenController;

Route::get('/', function () {
   return view('welcome');
});

Route::get('/kabupaten', [KabupatenController::class, 'index'])->name('kabupaten.index');
Route::get('/kabupaten/tambah-data', [KabupatenController::class, 'create'])->name('kabupaten.create');
Route::post('/kabupaten/simpan-data', [KabupatenController::class, 'store'])->name('kabupaten.store');
Route::get('/kabupaten/edit-data/{id}', [KabupatenController::class, 'edit'])->name('kabupaten.edit');
Route::post('/kabupaten/update-data/{id}', [KabupatenController::class, 'update'])->name('kabupaten.update');
Route::get('/kabupaten/hapus-data/{id}', [KabupatenController::class, 'destroy'])->name('kabupaten.destroy');