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
            'title' => 'required',
            'description' => 'nullable',
            'product_type_id' => 'required',
            'product_category_id' => 'required',
            'file_types' => 'required',
            'accessibility' => 'required',
            'thumbnail_image' => 'nullable|image|mimes:jpg,jpeg,png,gif,webp',
            'main_file' => 'nullable|mimes:jpg,jpeg,png,gif,webp,mp3,wav,mp4,mov,avi,pdf,zip',
            'status' => 'required',
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
