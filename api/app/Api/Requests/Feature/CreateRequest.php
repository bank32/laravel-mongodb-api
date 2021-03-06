<?php

namespace Api\Requests\Feature;

use Dingo\Api\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'name'         => 'required|string|unique:features|max:255',
            'display_name' => 'required|string|max:255',
            'description'  => 'required|string',
        ];
    }
}
