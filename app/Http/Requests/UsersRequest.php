<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersRequest extends FormRequest
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

    public function attributes()
    {
        return [
            'name' => 'User name',
            'address' => 'Address',
        ];
    }

    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'address' => 'required|max:255',
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute is required!',
            'max' => ':attribute too long!',
        ];
    }
}
