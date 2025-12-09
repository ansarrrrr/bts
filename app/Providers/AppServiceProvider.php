<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            
            $login_no_hp = Session::get('session_no_hp');
            $user = null;
    
            if ($login_no_hp) {
                $user = DB::table('tbl_admin')->where('no_hp', $login_no_hp)->first();
            }
    
            $view->with('user', $user);
        });
    }
}
