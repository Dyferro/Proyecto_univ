<?php

namespace App\Http\Requests;

use App\Models\Profesor;
use Illuminate\Foundation\Http\FormRequest;

class ProfesorRequest extends FormRequest
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
            'nombre'=>'required|max:20',
            'direccion'=>'required|max:30',
            'asignatura'=>'required|max:20',
            'esguia'=>'required',
            'grupo'=>'required|max:6',
            'catedra'=>'required|max:30',
            'edad'=>'required|max:2',
        ];
    }
}
