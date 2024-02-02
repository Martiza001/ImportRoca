<?php

namespace App\Http\Requests;

use Illuminate\Validation\Factory as validationFactory;
use Illuminate\Foundation\Http\FormRequest;


class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'nombre' => 'required',
            'contrasena' => 'required'
        ];
    }
    public function getCredentials()
    {
        $nombre = $this->get('nombre');

        if ($this->isEmail($nombre)) {
            return [
                'email' =>  $nombre,
                'contrasena' => $this->get('contrasena')
            ];
        }
        return $this->only('nombre','contrasena');
    }

    public function isEmail($value)
    {
        $factory = $this->container->make(validationFactory::class);

        return !$factory->make(['nombre' => $value], ['nombre' => 'email'])->fails();
    }
}
