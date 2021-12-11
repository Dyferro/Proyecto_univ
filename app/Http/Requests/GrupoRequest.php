<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GrupoRequest extends FormRequest
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
            'nombregrupo'=>'required|max:6',
            'totalestudiantes'=>'required|max:2',
            'nivel'=>'required|integer|between:1,5',
            'profesorguia'=>'required|max:30'
        ];
    }

    public function attributes()
    {
        return [
            'nombregrupo'=>'nombre del grupo',
            'totalestudiantes'=>'total de estudiantes',
        ];
    }
}
