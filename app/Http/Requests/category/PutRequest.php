<?php

namespace App\Http\Requests\category;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

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
    public function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    {
        if($this -> expectsJson()){
            $response = new Response($validator->errors(),422);
            throw new ValidationException($validator, $response);
        }
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "titulo"=>"required|min:5|max:500",
            "url"=>"required|min:5|max:500|unique:posts,url,".$this->route("category")->id
        ];
    }
}
