<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Mail\OrderConfirm;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function index () {
        $orders = Auth::user()->orders;
        $userId = Auth::user()->id;

        
        $type_pending = Order::PENDING;

        $type_shipping = Order::SHIPPING;

        // $orders = Order::query()
        // ->join('order_items', 'orders.id', '=', 'order_items.order_id')
        // ->where('orders.user_id', $userId)
        // ->get(['order_items.quantity as quantity']);

        
        $orderStatus = Order::ORDER_STATUS;

        return view('client.order', compact('orders', 'orderStatus', 'type_pending', 'type_shipping'));
        
    }

    public function bill(Order $order) {
        $order->load([
            'orderItems.productVariant.product', // Lấy thông tin sản phẩm
            'orderItems.productVariant.size',    // Lấy thông tin kích cỡ
            'orderItems.productVariant.color'    // Lấy thông tin màu sắc
        ]);

        $orderStatus = Order::ORDER_STATUS;
        $paymentStatus = Order::PAYMENT_STATUS;
        
    
        return view('client.bill', ['order' => $order, 'orderStatus' => $orderStatus, 'paymentStatus' => $paymentStatus]);
        

        // $orders = Auth::user()->orders;
        
        // // dd($orders);
        // $orderStatus = Order::ORDER_STATUS;

        // return view('client.bill', compact('orders', 'orderStatus'));
    }

    public function create() {
        $userId = Auth::user()->id;
        
        // thông tin cart
        $cart = Cart::query()->where('user_id', $userId)->first();
        // dd($cart);
        $productVariants = $cart->cartItems()->with('productVariant.size', 'productVariant.color', 'productVariant.product')->get();
        // foreach ($productVariants as $item){
        //     dd($item->productVariant);
        //     dd($item->productVariant->id);
        //     dd($item->productVariant->product->name);
        //     dd($item->productVariant->product->sku);
        //     dd($item->productVariant->image);
        //     dd($item->productVariant->price);
        //     dd($item->productVariant->price_sale);
        //     dd($item->productVariant->size->name);
        //     dd($item->productVariant->color->name);
        //     dd($item->quantity);
        // }
        $totalAmount = 0;
        foreach ($productVariants as $item) {
            $totalAmount += $item->quantity * ($item->productVariant->price_sale ?: $item->productVariant->price);
        }

        return view('client.checkout', compact('totalAmount', 'productVariants', 'userId'));
    }

    public function store(Request $request) {
        // dd($request->all());
        try {
            DB::beginTransaction();
            // dd($request->all());
            $order = Order::query()->create([
                    'user_id' => $request->userId,
                    'user_email' => $request->user_email,
                    'user_name' => $request->user_name,
                    'user_address' => $request->user_address,
                    'user_phone' => $request->user_phone,
                    'receiver_email' => $request->receiver_email,
                    'receiver_name' => $request->receiver_name,
                    'receiver_address' => $request->receiver_address,
                    'receiver_phone' => $request->receiver_phone,
                    'total_price' => $request->tota_price,
            ]);
            // dd($order->id);
            if (is_array($request->orderItems)) {
                foreach ($request->orderItems as $item) {
                    OrderItem::query()->create([
                        'product_variant_id' => $item['product_variant_id'],
                        'order_id' => $order->id,
                        'product_name' => $item['product_name'] ?? null,
                        'product_sku' => $item['product_sku'] ?? null,
                        'product_image_thumb' => $item['product_image_thumb'] ?? null,
                        'product_price' => $item['product_price'] ?? 0,
                        'product_price_sale' => $item['product_price_sale'] ?? 0,
                        'variant_size_name' => $item['variant_size_name'] ?? null,
                        'variant_color_name' => $item['variant_color_name'] ?? null,
                        'quantity' => $item['quantity'] ?? 0,
                    ]);
                }
            }
       

            // check tài khoản đăng nhập
            $cart = Cart::query()->where('user_id', $request->userId)->first();

            if ($cart && is_array($request->orderItems)) {
                foreach ($request->orderItems as $item) {
                    CartItem::query()
                        ->where('cart_id', $cart->id)
                        ->where('product_variant_id', $item['product_variant_id'])
                        ->delete();
                }
            }
            
            $order = Order::with([
                'orderItems.productVariant.product', // Tải thông tin sản phẩm từ ProductVariant
                'orderItems.productVariant.size',    // Tải thông tin kích cỡ từ ProductVariant
                'orderItems.productVariant.color'    // Tải thông tin màu sắc từ ProductVariant
            ])->find($order->id);

            DB::commit();
            // Trừ số lượng sản phẩm trong kho
            // Gửi mail khi đặt hàng thành công
            // Mail::to($order->receiver_email)->queue(new OrderConfirm($order));

            return redirect()->route('client.bill', ['order' => $order->id])->with('success', 'Đặt hàng thành công');
        } catch (\Exception $exception) {
            DB::rollBack();
            dd($exception);
            // return redirect()->route('client.cart.list')->with('error', 'Đặt hàng thành công');
        }
    }

    public function show (string $id) {
        $order = Order::query()->findOrFail($id);
        $orderStatus = Order::ORDER_STATUS;
        $paymentStatus = Order::PAYMENT_STATUS;

        return view('client.order_show', compact('order', 'orderStatus', 'paymentStatus'));
    }

    public function update(Request $request, string $id) {
        $order = Order::query()->findOrFail($id);

        try {
            DB::beginTransaction();
            if ($request->has('cancel')) {
                $order->update(['order_status' => Order::CANCEL]);
            } elseif ($request->has('delivered')) {
                $order->update(['order_status' => Order::DELIVERED]);
            }
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
        }
        return redirect()->back();
    }
    
}
