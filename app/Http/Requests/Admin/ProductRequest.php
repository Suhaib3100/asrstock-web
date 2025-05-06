<?php

namespace App\Http\Requests\Admin;

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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'nullable',
            'product_type_id' => 'nullable',
            'product_category_id' => 'nullable',
            'thumbnail_image' => 'nullable|mimes:jpg,jpeg,png',
            'status' => 'nullable'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Title is required',
            'product_type_id.required' => 'Product type is required',
            'product_category_id.required' => 'Category is required',
            'file_types.required' => 'File type is required',
            'accessibility.required' => 'Accessibility is required',
            'status.required' => 'Status is required',
        ];
    }
}
