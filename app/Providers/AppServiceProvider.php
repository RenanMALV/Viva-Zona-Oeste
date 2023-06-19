<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
    
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //die();
        setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
        //die();
        //setlocale(LC_TIME, 'pt-br');
        //setlocale(LC_TIME, 'es');
        //Carbon::setlocale(LC_TIME, 'pt_BR');
        Paginator::useBootstrap();
        //
    }
}
