<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Input;

class ProductoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(){
        if(Input::has('idproducto')){
            $id=Input::get('idproducto');
            return [
                'nombreproducto'=>'required | string | max:10',
                'stockproducto'=>'required | numeric |min:0',
                'precioproducto'=>'required | numeric |min:0.01',
                'idusuario'=>'required | exists:users,id',
                'codigoproducto'=>'required |codigo_producto |string | unique:productos,codigoproducto,'.$id.',idproducto',
                'imagen' => 'nullable|file|mimes:jpeg,png,jpg,bmp,JPG|dimensions:min_width=300,min_height=300,max_width=2000,max_height=2000|max:2048'
            ];
        }else{
            return [
                'nombreproducto'=>'required | string | max:10',
                'stockproducto'=>'required | numeric |min:0',
                'precioproducto'=>'required | numeric |min:0.01',
                'idusuario'=>'required | exists:users,id',
                'codigoproducto'=>'required |codigo_producto |string | size:15 | unique:productos',
                'imagen' => 'required|file|mimes:jpeg,png,jpg,bmp,JPG|dimensions:min_width=300,min_height=300,max_width=2000,max_height=2000|max:2048',
            ];
        }
    }
}
