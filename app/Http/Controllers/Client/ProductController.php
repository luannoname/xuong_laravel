<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductColor;
use App\Models\ProductSize;
use App\Models\ProductVariant;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = Product::query()->latest('id')->with('category')->limit(10)->get();
        // dd($products);
        return view('client.home', compact('products'));
    }

    public function checkStock(Request $request)
    {
        $variantId = $request->input('variant_id');
        $variant = ProductVariant::find($variantId);

        if ($variant) {
            return response()->json(['stock' => $variant->stock]);
        }

        return response()->json(['error' => 'Variant not found'], 404);
    }

    public function detail(string $id) {
        $product = Product::query()->with('variants')->findOrFail($id);
        // foreach ($product->variants as $key) {
        //     echo $key;
        // }
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
