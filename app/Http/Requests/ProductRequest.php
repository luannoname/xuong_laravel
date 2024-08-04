<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|max:255',
            'sku' => 'required|max:10|unique:products,sku,' . $this->route('id'),
            'image_thumb' => 'image|mimes:jpg,jpeg,png,gif',
            'price' => 'required|numeric|min:0',
            'price_sale' => 'numeric|min:0|lt:price',

            // 'product_variants' => 'required|array|min:1',
            // 'product_variants.*.product_size_id' => 'required|exists:sizes,id',
            // 'product_variants.*.product_color_id' => 'required|exists:colors,id',
            // 'product_variants.*.quantity' => 'nullable|numeric|min:0',
            // 'product_variants.*.price' => 'nullable|numeric|min:0',
            // 'product_variants.*.price_sale' => 'nullable|numeric|min:0|lt:product_variants.*.price',
        ];
    }

    public function messages(): array
    {
        return [
            'category_id' => 'required|exists:categories,id',
            'category_id' => 'required|exists:categories,id',
            'name.required' => 'Tên sản phẩm bắt buộc nhập.',
            'name.max' => 'Tên sản phẩm không được vượt quá 255 ký tự.',
            'sku.required' => 'Mã sản phẩm bắt buộc nhập.',
            'sku.max' => 'Mã sản phẩm không được vượt quá 10 ký tự.',
            'sku.unique' => 'Mã sản phẩm đã tồn tại.',
            'image_thumb.image' => 'Hình ảnh không hợp lệ.',
            'image_thumb.mimes' => 'Hình ảnh không hợp lệ.',
            'price.required' => 'Giá sản bắt buộc nhập.',
            'price.numeric' => 'Giá sản phải là số.',
            'price.min' => 'Giá sản phẩm phải lớn hơn hoặc bằng 0.',
            'price_sale.numeric' => 'Giá khuyến mãi phải là số.',
            'price_sale.min' => 'Giá khuyến mãi phải lớn hơn hoặc bằng 0.',
            'price_sale.lt' => 'Giá khuyến mãi phải nhỏ hơn giá sản phẩm.',

            // 'product_variants.*.size.required' => 'Size is required for all variants',
            // 'product_variants.*.size.exists' => 'Selected size does not exist',
            // 'product_variants.*.color.required' => 'Color is required for all variants',
            // 'product_variants.*.color.exists' => 'Selected color does not exist',
            // 'product_variants.*.quantity.required' => 'Quantity is required for all variants',
            // 'product_variants.*.quantity.integer' => 'Quantity must be an integer',
            // 'product_variants.*.quantity.min' => 'Quantity must be at least 0',
            // 'product_variants.*.price.required' => 'Price is required for all variants',
            // 'product_variants.*.price.numeric' => 'Price must be a number',
            // 'product_variants.*.price.min' => 'Price must be at least 0',
            // 'product_variants.*.price_sale.numeric' => 'Sale price must be a number',
            // 'product_variants.*.price_sale.min' => 'Sale price must be at least 0',
            // 'product_variants.*.price_sale.lt' => 'Sale price must be less than the price',
            // 'product_variants.*.image.image' => 'Image must be an image file',
            // 'product_variants.*.image.mimes' => 'Image must be a file of type: jpg, jpeg, png, gif',
        ];
    }
}
