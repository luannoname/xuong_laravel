@extends('layouts.client')
@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label='Close'></button>
    </div>
@endif
@section('content')
<!-- OffCanvas Cart Start -->
<div id="offcanvas-cart" class="offcanvas offcanvas-cart">
    <div class="inner">
        <div class="head">
            <span class="title">Cart</span>
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
                            <li class="breadcrumb-item active">Checkout</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- breadcrumb-area end -->

<!-- checkout area start -->
<div class="checkout-area pt-100px pb-100px">
    <div class="container">
        <form action="" method="post">
        @csrf
        <div class="row">
            
            <div class="col-lg-12 mt-md-30px mt-lm-30px ">
                <div class="your-order-area">
                    <h3 class="text-center" @style('color: #36BC4F')>Đặt hàng thành công</h3>
                    <div class="your-order-wrap gray-bg-4">
                        <div class="your-order-product-info">
                            <div class="your-order-top">
                                <ul>
                                    <li>Tên sản phẩm</li>
                                    <li>Hình ảnh</li>
                                    <li>Giá</li>
                                    <li>Màu</li>
                                    <li>Size</li>
                                    <li>Số lượng</li>
                                </ul>
                            </div>
                            <div class="your-order-middle">
                                <ul>

                                    @foreach ($data->orderItems as $item)
                                        <li>
                                            <span class="order-middle-left">{{ $item['product_name'] }}</span> 
                                            <span class="order-price"><img src="{{ Storage::url($item['product_image_thumb']) }}" @style('width:50px') alt=""></span>
                                            <span class="order-price">{{ number_format($item['product_price_sale'] ?: $item['product_price'], 0, '', '.') }} vnđ</span>
                                            <span class="order-price">{{ $item['variant_color_name'] }}</span>
                                            <span class="order-price">{{ $item['variant_size_name'] }}</span>
                                            <span class="order-price">{{ $item['quantity'] }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                                
                            </div>
                            
                            <div class="your-order-bottom">
                                <ul>
                                    <li class="your-order-shipping">Vận chuyển</li>
                                    <li>Miễn phí ship</li>
                                </ul>
                            </div>
                            <div class="your-order-total">
                                <ul>
                                    <li class="order-total">Tổng tiền</li>
                                    <li>{{ number_format($order->total_price, 0, '', '.') }} vnđ</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped">
                        <thead>
                           <tr>
                                <th>Ngày đặt</th>
                                <th>Trạng thái</th>
                                <th>Thành tiền</th>
                                <th>Phương thức thanh toán</th>
                           </tr>
                        </thead>
                        <tbody>
                            @foreach ($order->orderItems as $item) 
                                <tr>
                                    <td class="order-price">{{ $item->created_at->format('d-m-Y') }}</td>
                                    <td class="order-price">{{ $orderStatus[$order->order_status] }}</td>
                                    <td class="order-price">{{ number_format($item->quantity * $item->product_price_sale ?: $item->product_price, 0, '', '.') }} vnđ</td>
                                    <td class="order-price">{{ $paymentStatus[$order->payment_status] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="Place-order mt-25">
                        <a @style('width: 100%; background-color: #ff7004;
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
                        transition: all .3s ease 0s;') href="{{ route('client.home') }}" class="btn-hover">Tiếp tục mua hàng</a>
                    </div>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
<!-- checkout area end -->
@endsection