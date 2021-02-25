<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEstudianteRequest extends FormRequest
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
            'nombre' => 'required',
            'activo' => 'required' // . $this->route('estudiante')->id

            // accede al id del registro que se esta procesando
            // y si se concatena con punto, va a obviar ese valor de ese registro en concreto
        ];
    }
}
