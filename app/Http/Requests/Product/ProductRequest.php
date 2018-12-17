<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            "title"         => "required|min:3|max:20",
            "star"          => "required|integer|min:1|max:5",
            "description"   => "required|min:10|max:300",
            "icon"          => "required|unique:products,icon|mimes:jpeg,jpg,png|dimensions:max_width=70,max_height=40",
        ];
    }
}
