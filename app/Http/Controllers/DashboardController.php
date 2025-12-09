<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\DashboardModel;
use App\Http\Controllers\LoginController;

use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function index(Request $request) {
        
        return view('dashboard.index');
    }
}

// @php
// $login_nohp = Session::get('session_no_hp');
// $user = DB::table('tbl_admin')->where('no_hp', $login_nohp)->first();
// @endphp