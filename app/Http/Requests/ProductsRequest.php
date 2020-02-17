<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductsRequest extends FormRequest
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
            'name' => 'Product name',
            'price' => 'Price',
            'quantity' => 'Quantity',
            'description' => 'Description',
            'image' => 'Product Image'
        ];
    }

    public function rules()
    {
        return [
            'name' => 'required|max:255|',
            'price' => 'required|numeric|gt:0',
            'quantity' => 'required|numeric|gt:0',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute is required!',
            'max' => ':attribute :attribute must be less than :max !',
            'unique' => ':attribute already exists!',
            'numeric' => ':attribute must be a number!',
            'image' => ':attribute must be a image!',
            'mimes' => ':attribute must be in jpeg,png,jpg,gif,svg format!',
            'gt' => ':attribute must be greater than :gt'
        ];
    }
}
