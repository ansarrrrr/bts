<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Foundation\Auth\User as Authenticatable;
//use Illuminate\Notifications\Notifiable;
//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DesaModel extends Model
{
    use HasFactory;

    protected $table = 'tbl_desa';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = ['kd_desa', 'desa', 'created_id','created_at', 'updated_id', 'updated_at'];
}