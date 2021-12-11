<?php

namespace App\Http\Requests;

use App\Models\Asignatura;

use Illuminate\Foundation\Http\FormRequest;

class AsignaturaRequest extends FormRequest
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
    public function rules()
    {
        return [
            //
            'nombre'=>'required|max:12',
            'descripcion'=>'required|max:50',
            'duracionhoras'=>'required|integer|between:100,250',
            'nivel'=>'required|integer|between:1,5',
        ];
    }

    public function attributes()
    {
        return [
            'duracionhoras'=>'duracion de la materia',
        ];
    }
}
