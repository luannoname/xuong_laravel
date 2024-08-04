<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'category_name' => 'required|max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'category_name.required' => 'Tên danh mục là bắt buộc',
            'category_name.max' => 'Tên danh mục không được vượt quá 255 kí tự',
        ];
    }
}
