<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Validator;
use App\Producto;
use Input;
use Mail;
use App\Mail\ProductoEmail;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(){
        $this->validarCodigo();   
        $this->eventosModelos();
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
            return preg_match('/[0-9]{5}-[0-9]{4}-[0-9]{4}/',$value);
        });
    }

    private function eventosModelos(){
        Producto::deleted(function ($prod) {
            $emails=['xxxxxx@hotmail.com'];
            Mail::to($emails)->send(new ProductoEmail($prod));
        });
        Producto::creating(function ($prod) {
            if(Input::hasFile('imagen')){
                $image = Input::file('imagen');
                $prod->imagen=base64_encode(file_get_contents($image->getRealPath()));
                $prod->mimetype= $image->getMimeType();
            }
        });
        Producto::updating(function ($prod) {
            if(Input::has('idproducto')){
                $id=Input::get('idproducto');
                $producto=Producto::findOrFail($id);

                if(Input::hasFile('imagen') && $prod->imagen!=null){
                    $image = Input::file('imagen');
                    if($image!=null){
                        $prod->imagen=base64_encode(file_get_contents($image->getRealPath()));
                        $prod->mimetype= $image->getMimeType();
                    }
                }else{
                    $prod->imagen=stream_get_contents($producto->imagen);
                    $prod->mimetype= $producto->mimetype;
                }
            }
        });
    }
}
