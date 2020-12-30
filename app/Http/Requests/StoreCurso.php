<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // return false;
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
                'nameCouse'=>'required|max:10',
                'description'=>'required|min:5'
                ];
    }

    public function attributes()
    {
        return [
            'nameCouse'=>'Nombre del Curso',
            'description'=>'Descripcion',
            ];
    }

    public function messages()
    {
        return [
            'description.required'=>'Debe ingresar una descripccion del curso',
            ];
    }
}
