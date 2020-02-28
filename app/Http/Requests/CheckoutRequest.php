<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutRequest extends FormRequest
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
            'phone' => 'Phone',
            'address' => 'Address',
        ];
    }

    public function rules()
    {
        return [
            'address' => 'required|max:255',
            'phone' => ['regex:/(03|07|08|09)+[0-9]{8}/'],
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute is required!',
            'max' => ':attribute too long!',
            'regex' => ':attribute not a phone number'
        ];
    }
}
