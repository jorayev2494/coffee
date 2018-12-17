<?php

namespace App\Http\Requests\Navigate;

use Illuminate\Foundation\Http\FormRequest;

class NavigateRequest extends FormRequest
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
            "title" => "required|min:3|max:20",
            "slug"  => "required|alpha|min:3|max:20"
        ];
    }
}
