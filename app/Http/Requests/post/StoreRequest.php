<?php

namespace App\Http\Requests\post;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class StoreRequest extends FormRequest
{
    /**
     * Summary of prepareForValidation
     * @return void
     */
    protected function prepareForValidation(){
        $this->merge([
            //'url' => Str::slug($this->titulo)
            //'url' => Str::of($this->titulo)->slug()
            'url' => str($this->titulo)->slug()

        ]);
    }
    static public function misReglas(){
        return [
            //titulo,url,contenido,descripcion,imagen,posted,categorias_id
            "titulo"=>"required|min:5|max:500",
            "url"=>"required|min:5|max:500|unique:posts",
            "contenido"=>"required|min:7",
            "descripcion"=>"required|min:7",
            "posted"=>"required",
            "categoria_id"=>"required|integer"
            

        ];
    }
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
        /*
        puedes hacerlo aqui abajo o arriba y devolverloa qui abajo
        return [
            //titulo,url,contenido,descripcion,imagen,posted,categorias_id
            "titulo"=>"required|min:5|max:500",
            "url"=>"required|min:5|max:500",
            "contenido"=>"required|min:7",
            "descripcion"=>"required|min:7",
            "posted"=>"required",
            "categoria_id"=>"required|integer"

        ];*/

        return $this->misReglas();
    }
}
