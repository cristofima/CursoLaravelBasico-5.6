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
        return [
            'nombreproducto'=>'required | string | max:10',
            'stockproducto'=>'required | numeric |min:0',
            'precioproducto'=>'required | numeric |min:0.01',
            'idusuario'=>'required | exists:users,id'
        ];
    }
}
