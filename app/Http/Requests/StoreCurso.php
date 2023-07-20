<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    //Lógica que se encarga si tiene o no permisos
    //Si es true, pasa a las rules y verifica
    //Si es false, la validación falla y el usuario no es autorizado
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:10',
            'description' => 'required',
            'category' => 'required'

        ];
    }

    public function attributes()
    {
        return[
            'name' => 'nombre del curso',
        ];
    }

    public function messages()
    {
        return[
            'description.required' => 'Debe ingresar una descripción del curso' 
        ];
    }
}
