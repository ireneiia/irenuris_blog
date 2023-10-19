<?php

namespace App\Http\Requests\category;
use Illuminate\Http\Response;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class StoreRequest extends FormRequest
{
    /**
     * Summary of prepareForValidation
     * @return void
     */
    protected function prepareForValidation(){
        $this->merge([
            'url' => str($this->titulo)->slug()

        ]);
    }
    static public function misReglas(){
        return [
            "titulo"=>"required|min:5|max:500",
            "url"=>"required|min:5|max:500|unique:posts",
        ];
    }

    public function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    {
        if($this -> expectsJson()){
            $response = new Response($validator->errors(),422);
            throw new ValidationException($validator, $response);
        }
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
        return $this->misReglas();
    }
}
