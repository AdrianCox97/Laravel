<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class categorias_form_request extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        /*Cambiar el estado false a true para dar permitir la ejecución de las reglas*/
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            /*Se agregan los campos a validar*/
            'nombre'=>'required|unique:Categorias'
        ];
    }
}