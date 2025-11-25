<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\DashboardModel;

use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        // if(Session::get('session_islogin') ==false) {
        //     return redirect('/logout');
        // }
        // if(Session::get('session_login') ==false) {
        //     return redirect('/logout');
        // }
        
        return view('dashboard.index');
    }
}
