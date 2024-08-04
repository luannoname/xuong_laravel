@component('mail::message')
    # Xác nhận đơn hàng

    Xin chào {{ $order->receiver_name }},

    Cảm ơn bạn đã đặt hàng từ cửa hàng của chúng tôi. Đây là thông tin đơn hàng của bạn

    *** Mã đơn hàng ** {{ $order->id }}

    *** Sản phẩm đã đặt **

    @foreach ($order->orderItems as $orderItem)
        - {{ $orderItem->product_name }} * {{ $orderItem->quantity }}: {{ number_format($orderItem->quantity * $orderItem->product_price_sale ?: $orderItem->product_price, 0, '', '.') }} VNĐ
    @endforeach

    *** Tổng tiền: ** {{ $order->total_price }} VNĐ

    Chúng tôi sẽ liên hệ với bạn sớm nhất để xác nhận thông tin giao hàng.

    Cảm ơn bạn đã mua sắm tại cửa hàng của chúng tôi!

    Trân trọng,
@endcomponent