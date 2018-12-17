<?php

namespace App\Http\Requests\Coffee;

use Illuminate\Foundation\Http\FormRequest;

class CoffeeRequest extends FormRequest
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
            "title"         =>  "required|min:4|max:20",
            "price"         =>  "required|integer|min:1|max:500",
            "description"   =>  "required|min:5|max:200"
        ];
    }
}
