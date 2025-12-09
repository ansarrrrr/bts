<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BtsModel extends Model {
    use HasFactory;

    protected $table = 'tbl_bts';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = ['kd_site', 'pemilik', 'alamat', 'lat', 'lng', 'kd_kab','kd_kec','kd_desa','desa', 'tinggi', 'luas', 'status', 'tahun', 'provider', 'keterangan', 'created_id','created_at', 'updated_id', 'updated_at'];
}