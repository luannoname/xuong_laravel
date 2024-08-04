@extends('layouts.client')

@section('content')
    <!-- breadcrumb-area start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row breadcrumb_box  align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-12 text-center text-md-start">
                        <h2 class="breadcrumb-title">Shop</h2>
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list text-center text-md-end">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Cart</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- breadcrumb-area end -->

<!-- Cart Area Start -->
<div class="cart-main-area pt-100px pb-100px">
    <div class="container">
        <h3 class="cart-page-title">Đơn hàng của bạn</h3>
        <div class="row">
            
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    
                    <form action="" method="post">
                        <input type="hidden" name="_token" value="kutK8yLb79ahYvY7B2vQakqAzgtWhs9LlMkvqHaf" autocomplete="off">                        <div class="table-content table-responsive cart-table-content">
                            <table>
                                <thead>
                                    <tr>
                                        <th>mã đơn hàng</th>
                                        <th>Ngày đặt</th>
                                        <th>Trạng thái</th>
                                        <th>Tổng tiền</th>
                                        <th>Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $item)
                                        <tr>
                                            <td class="product-name">
                                                {{ $item->id }}
                                            </td>
                                            <td class="product-price-cart">
                                                {{ $item->created_at->format('d-m-Y') }}
                                            </td>
                                            <td class="product-price-cart">
                                                {{ $orderStatus[$item->order_status] }}
                                            </td>
                                            <td class="product-name">
                                                {{ number_format($item->total_price, 0, '', '.') }} vnđ
                                            </td>
                                            <td class="product-name">
                                                <form action="{{ route('client.order.update', $item->id) }}" method="post">
                                                    <a class="btn-custom" style="color: #fff" href="{{ route('client.order.show', $item->id) }}">Xem</a>
                                                    @csrf
                                                    @method('PUT')
                                                    @if ($item->order_status === $type_pending)
                                                        <input type="hidden" name="cancel" value="1">
                                                        <button type="submit" class="btn-custom" onclick="return confirm('Bạn có xác nhận hủy đơn hàng?')" style="background: #DC3545">Hủy</button>
                                                    @elseif ($item->order_status === $type_shipping)
                                                    <input type="hidden" name="cancel" value="1">
                                                    <button type="submit" class="btn-custom" onclick="return confirm('Xác nhận đã nhận hàng?')" style="background: #DC3545">Đã nhận hàng</button>
                                                    @endif

                                                    
                                                </form>
                                                
                                            </td>
                                            
                                        </tr>   
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="cart-shiping-update-wrapper">
                                    <div class="cart-shiping-update">
                                        <a href="#">Tiếp tục mua sắm</a>
                                    </div>
                                    <div class="cart-clear">
                                        <button>Cập nhật giỏ hàng</button>
                </form>
                                    <a href="http://127.0.0.1:8000/client/order/create">Tiến hành thanh toán</a>
                <form action="http://127.0.0.1:8000/client/order/store " method="post">
                    <input type="hidden" name="_token" value="kutK8yLb79ahYvY7B2vQakqAzgtWhs9LlMkvqHaf" autocomplete="off">                        <input type="hidden" name="productVariants" value="[{&quot;product_variant_id&quot;:36,&quot;product_name&quot;:&quot;\u00c1o s\u01a1 mi n\u00e2u \u0111\u1eadm&quot;,&quot;product_sku&quot;:&quot;ASM003&quot;,&quot;product_image_thumb&quot;:&quot;uploads\/products\/4AJZGupyPybLAQtkeaJln6oncBpHjJjAFiIWFUHO.jpg&quot;,&quot;product_price&quot;:400000,&quot;product_price_sale&quot;:169000,&quot;variant_size_name&quot;:&quot;S&quot;,&quot;variant_color_name&quot;:&quot;Tr\u1eafng&quot;,&quot;quantity&quot;:2},{&quot;product_variant_id&quot;:9,&quot;product_name&quot;:&quot;\u00c1o s\u01a1 mi Caro&quot;,&quot;product_sku&quot;:&quot;str5-1&quot;,&quot;product_image_thumb&quot;:&quot;uploads\/products\/Boftmo64KhvsmHJPPPteRu7nZeTpAbRcn9QNHEjf.jpg&quot;,&quot;product_price&quot;:500000,&quot;product_price_sale&quot;:149000,&quot;variant_size_name&quot;:&quot;S&quot;,&quot;variant_color_name&quot;:&quot;Tr\u1eafng&quot;,&quot;quantity&quot;:1}]">
                        <input type="hidden" name="totalAmount" value="487000">
                        <input type="hidden" name="userId" value="1">
                                    </div>
                                </div>
                            </div>
                        </div>
               
                    
                        
                    </div>
                </div>
            </form>
            
        </div>
    </div>
</div>
    
@endsection