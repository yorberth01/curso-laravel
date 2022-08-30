<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUsuario extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
          'nombre' => 'required|max:10',//asi se coloca si se quiere poner mas de una validacion
        'apellido' => 'required|min:3'
        ];
    }

    public function attributes()//con este metodo modificamos los atributos que se muestran en pantalla
    {
      return['nombre' => 'nombre del Usuario',
            'apellido' => 'apellido del Usuario'];
    }

    public function messages()//con este metodo puedo personalizar los mensajes(atributos) que se muestran en pantalla
    {
      return['nombre.max' => 'El Nombre no puedo Tener mas de 10 caracteres'];
    }
}
