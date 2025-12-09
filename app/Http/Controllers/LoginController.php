<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Session;

use App\Models\DesaModel;

use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function proses(Request $request)
    {
        $request->validate([
            'no_hp'    => 'required',
            'password' => 'required',
        ]);

        $no_hp    = $request->input('no_hp');
        $password = $request->input('password');
        $users    = DB::table('tbl_admin')->where('no_hp', $no_hp)->where('password', $password)->get();

        if ($users->isEmpty()) {
            return redirect('/login')->with('error', 'Nomor HP atau password salah!');
        }
        
        else {
             $request->session()->put('login', true);
        
             Session::put('session_no_hp', $no_hp);

            return redirect('/dashboard');
        }
    }

    public function logout(Request $request) {
        Session::flush();
    
        return redirect('/login')->with('success', 'Anda berhasil logout');
    }

    public static function getUserLogin() {
        $login_no_hp = Session::get('session_no_hp');
        
        if (!$login_no_hp) {
            return null;
        }
    
        return DB::table('tbl_admin')->where('no_hp', $login_no_hp)->first();
    }
}