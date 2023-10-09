<?php

namespace App\Http\Requests\post;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

/**
 * Summary of PutRequest
 */
class PutRequest extends FormRequest
{
    /**
     * Summary of prepareForValidation
     * @return void
     */
    /**
     * Summary of misReglas
     * @return array
     */
    
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
        //dd($this->route("post"));
        return [
            //titulo,url,contenido,descripcion,imagen,posted,categorias_id
            "titulo"=>"required|min:5|max:500",
            "url"=>"required|min:5|max:500|unique:posts,url,".$this->route("post")->id,
            "contenido"=>"required|min:7",
            "descripcion"=>"required|min:7",
            "posted"=>"required",
            "categoria_id"=>"required|integer",
            "imagen" => "mimes:jpeg,jpg,png|max:10240"
            

        ];
    }
}
