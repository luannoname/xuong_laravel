<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductColor;
use App\Models\ProductSize;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = Product::query()->latest('id')->with('category')->limit(8)->get();
        // dd($products);
        return view('client.home', compact('products'));
    }

    public function detail(string $id) {
        $product = Product::query()->with('variants')->findOrFail($id);
        $products = Product::query()->get();

        $colors = [];
        $sizes = [];
        $variantPrices = [];
        foreach ($product->variants as $variant) {
            $colors[] = $variant->color;
            $sizes[] = $variant->size;
            
            $variantPrices[] = [
                'id' => $variant->id,
                'price' => $variant->price,
                'sale_price' => $variant->sale_price,
                'image' => $variant->image
            ];
        }
        $variantColors = array_unique($colors);
        $variantSizes = array_unique($sizes);
        
        return view('client.product_detail', compact('product', 'products', 'variantColors', 'variantSizes', 'variantPrices'));
    }
}
