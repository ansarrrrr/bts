<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginModel extends Model
{
    use HasFactory;

    protected $table = 'tbl_admin';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'nama', 'email', 
        'no_hp', 'password', 
        'aktivasi','created_id',
        'created_at', 'updated_id', 
        'updated_at'];
}