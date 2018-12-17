<?php

namespace App\Http\Requests\Information;

use Illuminate\Foundation\Http\FormRequest;

class InformationRequest extends FormRequest
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
            "title"         =>  "required|min:5|max:50",
            "process"       =>  "min:5|max:20",
            "clients"       =>  "min:5|max:20",
            "video"         =>  "required|url",
            // "image"         =>  "required",
            "description"   =>  "required|min:10|max:500",
        ];
    }
}
