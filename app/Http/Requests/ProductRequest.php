<?php

namespace App\Http\Requests;

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
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:120',
            'description' => 'required|string|max:500',
            'price' => 'required|numeric',
            'image' => 'required|image|jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'required|integer',
        ];
    }
}
