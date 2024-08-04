<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use App\Models\ProductVariant;
use App\Models\User;
use COM;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function list () {
        $userId = Auth::user()->id;
        // thông tin cart
        $cart = Cart::query()->where('user_id', $userId)->first();
        // dd($cart);

        $productVariants = $cart->cartItems()->with('productVariant.size', 'productVariant.color', 'productVariant.product')->get();

        $totalAmount = 0;

        return view('client.cart', compact('totalAmount', 'productVariants', 'userId'));
    }

    public function add (Request $request) {
        $data = $request->all();

        $userId = Auth::user()->id;
        $cart = Cart::query()->where('user_id', $userId)->first();

        // if (empty($cart)) {
        //     // kiểm tra chưa có giỏ hàng thì tạo mới
        //     $cart = Cart::query()->create(['user_id' => $userId]);
        // }

        $cartItems = [
            'cart_id' => $cart->id,
            'product_variant_id' => $data['id'],
            'quantity' => $data['quantity'],
        ];
        
        // kiểm tra nếu có product_variant_id thì phải cộng vào số lượng
        $productVariant = CartItem::query()->where('product_variant_id', $cartItems['product_variant_id'])->first();
        // dd($productVariant);
        if (empty($productVariant)) {
            CartItem::query()->create($cartItems);
        } else {
            $cartItems['quantity'] += $productVariant->quantity;
            $productVariant->update(['quantity' => $cartItems['quantity']]);
        }

        return redirect()->route('client.cart.list');
    }

    public function update (Request $request) {
        $cartItems = $request->input('cart_items');
        foreach ($cartItems as $item) {
            $productVariantId = $item['product_variant_id'];
            
            // dd($cartItems);
            $quantity = $item['quantity'];
            // Kiểm tra và cập nhật số lượng trong giỏ hàng
            if ($quantity > 0) {
                CartItem::where('product_variant_id', $productVariantId)
                    ->update(['quantity' => $quantity]);
            } else {
                // Nếu số lượng bằng 0 hoặc âm, có thể xóa sản phẩm khỏi giỏ hàng
                CartItem::where('product_variant_id', $productVariantId)->delete();
            }
        }
    

    return redirect()->route('client.cart.list')->with('success', 'Cập nhật giỏ hàng thành công!');
    }

    public function remove(Request $request)
    {
        $productVariantId = $request->input('product_variant_id');

        // Xóa sản phẩm khỏi giỏ hàng
        CartItem::where('product_variant_id', $productVariantId)->delete();

        return response()->json(['success' => true]);
    }
}
