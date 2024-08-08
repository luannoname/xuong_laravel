@extends('layouts.client')

@section('content')
<!-- OffCanvas Cart Start -->
<div id="offcanvas-cart" class="offcanvas offcanvas-cart">
    <div class="inner">
        <div class="head">
            <span class="title">Giỏ hàng</span>
            <button class="offcanvas-close">×</button>
        </div>
        <div class="body customScroll">
            <ul class="minicart-product-list">
                <li>
                    <a href="single-product.html" class="image"><img src="{{ url('client') }}/assets/images/product-image/1.jpg" alt="Cart product Image"></a>
                    <div class="content">
                        <a href="single-product.html" class="title">Walnut Cutting Board</a>
                        <span class="quantity-price">1 x <span class="amount">$91.86</span></span>
                        <a href="#" class="remove">×</a>
                    </div>
                </li>
                <li>
                    <a href="single-product.html" class="image"><img src="{{ url('client') }}/assets/images/product-image/2.jpg" alt="Cart product Image"></a>
                    <div class="content">
                        <a href="single-product.html" class="title">Lucky Wooden Elephant</a>
                        <span class="quantity-price">1 x <span class="amount">$453.28</span></span>
                        <a href="#" class="remove">×</a>
                    </div>
                </li>
                <li>
                    <a href="single-product.html" class="image"><img src="{{ url('client') }}/assets/images/product-image/3.jpg" alt="Cart product Image"></a>
                    <div class="content">
                        <a href="single-product.html" class="title">Fish Cut Out Set</a>
                        <span class="quantity-price">1 x <span class="amount">$87.34</span></span>
                        <a href="#" class="remove">×</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="foot">
            <div class="sub-total">
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="text-start">Sub-Total :</td>
                            <td class="text-end">$523.30</td>
                        </tr>
                        <tr>
                            <td class="text-start">Eco Tax (-2.00) :</td>
                            <td class="text-end">$4.52</td>
                        </tr>
                        <tr>
                            <td class="text-start">VAT (20%) :</td>
                            <td class="text-end">$104.66</td>
                        </tr>
                        <tr>
                            <td class="text-start">Total :</td>
                            <td class="text-end theme-color">$632.48</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="buttons">
                <a href="cart.html" class="btn btn-dark btn-hover-primary mb-30px">view cart</a>
                <a href="checkout.html" class="btn btn-outline-dark current-btn">checkout</a>
            </div>
            <p class="minicart-message">Free Shipping on All Orders Over $100!</p>
        </div>
    </div>
</div>
<!-- OffCanvas Cart End -->

<!-- OffCanvas Menu Start -->
<div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
    <button class="offcanvas-close"></button>
    <div class="inner customScroll">

        <div class="offcanvas-menu mb-20px">
            <ul>
                <li><a href="#"><span class="menu-text">Home</span></a>
                    <ul class="sub-menu">
                        <li><a href="index.html"><span class="menu-text">Home 1</span></a></li>
                        <li><a href="index-2.html"><span class="menu-text">Home 2</span></a></li>
                    </ul>
                </li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="#"><span class="menu-text">Shop</span></a>
                    <ul class="sub-menu">
                        <li>
                            <a href="#"><span class="menu-text">Shop Page</span></a>
                            <ul class="sub-menu">
                                <li><a href="shop-3-column.html">Shop 3 Column</a></li>
                                <li><a href="shop-4-column.html">Shop 4 Column</a></li>
                                <li><a href="shop-left-sidebar.html">Shop Grid Left Sidebar</a></li>
                                <li><a href="shop-right-sidebar.html">Shop Grid Right Sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span class="menu-text">product Details Page</span></a>
                            <ul class="sub-menu">
                                <li><a href="single-product.html">Product Single</a></li>
                                <li><a href="single-product-variable.html">Product Variable</a></li>
                                <li><a href="single-product-affiliate.html">Product Affiliate</a></li>
                                <li><a href="single-product-group.html">Product Group</a></li>
                                <li><a href="single-product-tabstyle-2.html">Product Tab 2</a></li>
                                <li><a href="single-product-tabstyle-3.html">Product Tab 3</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span class="menu-text">Single Product Page</span></a>
                            <ul class="sub-menu">
                                <li><a href="single-product-slider.html">Product Slider</a></li>
                                <li><a href="single-product-gallery-left.html">Product Gallery Left</a>
                                </li>
                                <li><a href="single-product-gallery-right.html">Product Gallery Right</a>
                                </li>
                                <li><a href="single-product-sticky-left.html">Product Sticky Left</a></li>
                                <li><a href="single-product-sticky-right.html">Product Sticky Right</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span class="menu-text">Other Pages</span></a>
                            <ul class="sub-menu">
                                <li><a href="cart.html">Cart Page</a></li>
                                <li><a href="checkout.html">Checkout Page</a></li>
                                <li><a href="compare.html">Compare Page</a></li>
                                <li><a href="wishlist.html">Wishlist Page</a></li>
                                <li><a href="my-account.html">Account Page</a></li>
                                <li><a href="login.html">Login & Register Page</a></li>
                                <li><a href="empty-cart.html">Empty Cart Page</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="#"><span class="menu-text">Pages</span></a>
                    <ul class="sub-menu">
                        <li><a href="404.html">404 Page</a></li>
                        <li><a href="privacy-policy.html">Privacy Policy</a></li>
                        <li><a href="faq.html">Faq Page</a></li>
                        <li><a href="coming-soon.html">Coming Soon Page</a></li>
                    </ul>
                </li>
                <li><a href="#"><span class="menu-text">Blog</span></a>
                    <ul class="sub-menu">
                        <li><a href="#"><span class="menu-text">Blog Grid</span></a>
                            <ul class="sub-menu">
                                <li><a href="blog-grid-left-sidebar.html">Blog Grid Left Sidebar</a></li>
                                <li><a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><span class="menu-text">Blog List</span></a>
                            <ul class="sub-menu">
                                <li><a href="blog-list-left-sidebar.html">Blog List Left Sidebar</a></li>
                                <li><a href="blog-list-right-sidebar.html">Blog List Right Sidebar</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><span class="menu-text">Blog Single</span></a>
                            <ul class="sub-menu">
                                <li><a href="blog-single-left-sidebar.html">Blog Single Left Sidebar</a></li>
                                <li><a href="blog-single-right-sidebar.html">Blog Single Right Sidbar</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="contact.html">Contact Us</a></li>
            </ul>
        </div>
        <!-- OffCanvas Menu End -->

        <!-- Language Currency start -->
        <div class="offcanvas-userpanel mt-8">
            <ul>
                <!-- Language Start -->
                <li class="offcanvas-userpanel__role">
                    <a href="#">English <i class="ion-ios-arrow-down"></i></a>
                    <ul class="user-sub-menu">
                        <li><a class="current" href="#">English</a></li>
                        <li><a href="#"> Italiano</a></li>
                        <li><a href="#"> Français</a></li>
                        <li><a href="#"> Filipino</a></li>
                    </ul>
                </li>
                <!-- Language End -->
                <!-- Currency Start -->
                <li class="offcanvas-userpanel__role">
                    <a href="#">USD $ <i class="ion-ios-arrow-down"></i></a>
                    <ul class="user-sub-menu">
                        <li><a class="current" href="#">USD $</a></li>
                        <li><a href="#">EUR €</a></li>
                        <li><a href="#">POUND £</a></li>
                        <li><a href="#">FRANC ₣</a></li>
                    </ul>
                </li>
                <!-- Currency End -->
            </ul>
        </div>
        <!-- Language Currency End -->
        <div class="offcanvas-social mt-auto">
            <ul>
                <li>
                    <a href="#"><i class="ion-social-facebook"></i></a>
                </li>
                <li>
                    <a href="#"><i class="ion-social-twitter"></i></a>
                </li>
                <li>
                    <a href="#"><i class="ion-social-google"></i></a>
                </li>
                <li>
                    <a href="#"><i class="ion-social-youtube"></i></a>
                </li>
                <li>
                    <a href="#"><i class="ion-social-instagram"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- OffCanvas Menu End -->


<div class="offcanvas-overlay"></div>
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
        <h3 class="cart-page-title">Giỏ hàng của bạn</h3>
        <div class="row">
            
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    
                    <form action="{{ route('client.carts.update') }}" method="post">
                        @csrf
                        <div class="table-content table-responsive cart-table-content">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Hình ảnh</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Giá</th>
                                        <th>Màu sắc</th>
                                        <th>Kích cỡ</th>
                                        <th>Số lượng</th>
                                        <th>Tạm tính</th>
                                        <th>Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cartItems as $item)
                                        {{-- <input type="hidden" name="{{ $item->product_image_thumb }}" value="{{ $item->product_image_thumb }}">
                                        <input type="hidden" name="{{ $item->product_name }}" value="{{ $item->product_name }}">
                                        <input type="hidden" name="{{ $item->product_price_sale ?: $item->product_price }}" value="{{ $item->product_price_sale ?: $item->product_price }}">
                                        <input type="hidden" name="{{ $item->product_name }}" value="{{ $item->product_name }}">
                                        <input type="hidden" name="{{ $item->variant_color_name }}" value="{{ $item->variant_color_name }}">
                                        <input type="hidden" name="{{ $item->variant_size_name }}" value="{{ $item->variant_size_name }}"> --}}

                                        <input type="hidden" name="cart_items[{{ $item->productVariant->id }}][product_variant_id]" value="{{ $item->productVariant->id }}">
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="#"><img class="img-responsive ml-15px" src="{{ Storage::url($item->productVariant->image) }}" alt="" /></a>
                                            </td>
                                            <td class="product-name"><a href="#">{{ $item->productVariant->product->name }}</a></td>
                                            <td class="product-price-cart">
                                                <span class="amount">{{ number_format($item->productVariant->price_sale ?: $item->productVariant->price, 0, '.' , '.') }}vnđ</span>
                                                @if ($item->productVariant->price_sale)
                                                    <p class="amount old-price-sm" style="text-decoration: line-through">{{number_format($item->productVariant->price , 0, '.' , '.') }}vnđ</p>
                                                @endif
                                            </td>
                                            <td class="product-name"><a href="#">{{ $item->color->name }}</a></td>
                                            <td class="product-name"><a href="#">{{ $item->size->name }}</a></td>
                                            <td class="product-quantity">
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box quantityInput" name="cart_items[{{ $item->product_variant_id }}][quantity]" data-stock="{{ $item->productVariant->quantity }}"
                                                    data-price="{{ $item->productVariant->price_sale ?: $item->productVariant->price }}" type="text" value="{{ $item->quantity }}" />
                                                </div>
                                            </td>
                                            <td class="product-subtotal">
                                                <span class="subtotal">
                                                    {{ number_format($item->quantity * ($item->productVariant->price_sale ?: $item->productVariant->price), 0, '.', '.') . ' vnđ' }}
                                                </span>
                                            </td>
                                            <td class="product-remove" data-order-item-id="{{ $item->id }}">
                                                {{-- <a href="#"><i class="icon-pencil"></i></a> --}}
                                                <a href="#"><i class="icon-close remove-item"></i></a>
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
                                    <a href="{{ route('client.order.create') }}">Tiến hành thanh toán</a>
                <form action="{{ route('client.order.store') }} " method="post">
                    @csrf
                        {{-- <input type="hidden" name="productVariants" value="{{ $productVariants }}"> --}}
                        {{-- <input type="hidden" name="product_color_id" value="{{ $productColorId }}">
                        <input type="hidden" name="product_size_id" value="{{ $productSizeId }}"> --}}
                        <input type="hidden" name="totalAmount" value="{{ $totalAmount }}">
                        <input type="hidden" name="userId" value="{{ $userId }}">
                                    </div>
                                </div>
                            </div>
                        </div>
               
                    
                        <div class="grand-totall">
                            {{-- <div class="title-wrap">
                                <h4 class="cart-bottom-title section-bg-gary-cart">Cart Total</h4>
                            </div>
                            <h5>Total products <span>{{ number_format($totalAmount, 0, '.', '.') }}vnđ</span></h5>
                            <div class="total-shipping">
                                <h5>Total shipping</h5>
                                <ul>
                                    <li><input type="checkbox" /> Standard <span>$20.00</span></li>
                                    <li><input type="checkbox" /> Express <span>$30.00</span></li>
                                </ul>
                            </div> --}}
                            <h4 class="grand-totall-title">Tổng cộng <span class="total-amount">{{ number_format($totalAmount, 0, '.', '.') . ' vnđ' }}</span></h4>
                            <button @style('width: 100%; background-color: #ff7004;
                                            border-radius: 0;
                                            color: #fff;
                                            display: block;
                                            font-size: 14px;
                                            font-weight: 700;
                                            line-height: 1;
                                            padding: 18px 10px 17px;
                                            text-align: center;
                                            text-transform: uppercase;
                                            text-transform: uppercase;
                                            -webkit-transition: all .3s ease 0s;
                                            transition: all .3s ease 0s;') type="submit">Tiến hành thanh toán</button>
                        </div>
                    </div>
                </div>
            </form>
            
        </div>
    </div>
</div>
<!-- Cart Area End -->
@endsection

@section('js')
    <script>
        /*----------------------------
            Cart Plus Minus Button
        ------------------------------ */
        var CartPlusMinus = $(".cart-plus-minus");
CartPlusMinus.prepend('<div class="dec qtybutton">-</div>');
CartPlusMinus.append('<div class="inc qtybutton">+</div>');

$(".qtybutton").on("click", function() {
    var $button = $(this);
    var $input = $button.parent().find("input");
    var oldValue = $input.val();
    var price = $input.data('price');
    var stock = $input.data('stock');

    var newVal;
    if ($button.text() === "+") {
        newVal = parseFloat(oldValue) + 1;
        if (newVal > stock) {
            alert("Số lượng sản phẩm trong kho không đủ.");
            return;
        }
    } else {
        if (oldValue > 1) {
            newVal = parseFloat(oldValue) - 1;
        } else {
            newVal = 1;
        }
    }

    $input.val(newVal);

    // Cập nhật giá trị subtotal
    var subtotal = newVal * price;
    $button.closest('tr').find('.subtotal').text(subtotal.toLocaleString('en-US') + ' vnđ');

    updateTotal();
});

        $('.product-remove').on('click', function () {
            
            event.preventDefault();
            if (confirm('Bạn có chắc chắn muốn xóa sản phẩm này khỏi giỏ hàng?')) {
                var $row = $(this).closest('tr');
                $row.remove(); //xóa hàng
    
                updateTotal();
    
                var $cartItem = $(this).closest('.product-remove');
                var OrderItemId = $cartItem.data('order-item-id');
                // Xóa sản phẩm khỏi cơ sở dữ liệu qua AJAX
                $.ajax({
                    url: '{{ route('client.carts.remove') }}',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        OrderItemId: OrderItemId
                    },
                    success: function(response) {
                        // Nếu xóa thành công, xóa sản phẩm khỏi giao diện
                        $cartItem.remove();
                    },
                    error: function(xhr) {
                        console.error('Error removing item:', xhr.responseText);
                    }
                });
            }
        })

        function updateTotal () {
            var subTotal = 0;
            // tính tổng tiền trong giỏ hàng
            $('.quantityInput').each(function() {
                var $input = $(this);
                var price = parseFloat($input.data('price'));
                var quantity = parseFloat($input.val());
                subTotal += price * quantity;
            })

            // lấy tiền ship (không dùng)
            var shipping = parseFloat($('.shipping').text().replace(/\./g,'').replace(' vnđ', ''));

            // cập nhật giá trị
            $('.sub-total').text(subTotal.toLocaleString('vi-VN') + ' vnđ');
            $('.total-amount').text(subTotal.toLocaleString('vi-VN') + ' vnđ');
        }
        updateTotal();
    </script>
@endsection