<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
     $this->validarCodigo();   
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    private function validarCodigo(){
        Validator::extend('codigo_producto',function($attribute,$value,$parameters){
            // 10005-2000-3000
            return preg_match('/0[0-9]{8}/',$value);
        });
    }
}
