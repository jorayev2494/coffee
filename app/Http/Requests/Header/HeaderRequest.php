<?php

namespace App\Http\Requests\Header;

use Illuminate\Foundation\Http\FormRequest;

class HeaderRequest extends FormRequest
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

    public $message = [
        "background.dimensions" => "(1920 x 920)"
    ];

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "link"          =>  "required|url",
            "title"         =>  "required|min:5|max:100",
            "background"    =>  "required|mimes:jpeg,jpg,png|dimensions:max_width=1920,max_height=920",
        ];
    }
}
