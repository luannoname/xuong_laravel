@extends('layouts.client')

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
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
                            <a href="single-product.html" class="image"><img src="assets/images/product-image/1.jpg" alt="Cart product Image"></a>
                            <div class="content">
                                <a href="single-product.html" class="title">Walnut Cutting Board</a>
                                <span class="quantity-price">1 x <span class="amount">$91.86</span></span>
                                <a href="#" class="remove">×</a>
                            </div>
                        </li>
                        <li>
                            <a href="single-product.html" class="image"><img src="assets/images/product-image/2.jpg" alt="Cart product Image"></a>
                            <div class="content">
                                <a href="single-product.html" class="title">Lucky Wooden Elephant</a>
                                <span class="quantity-price">1 x <span class="amount">$453.28</span></span>
                                <a href="#" class="remove">×</a>
                            </div>
                        </li>
                        <li>
                            <a href="single-product.html" class="image"><img src="assets/images/product-image/3.jpg" alt="Cart product Image"></a>
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
                                    <li class="breadcrumb-item"><a href="shop-left-sidebar.html">Shop</a></li>
                                    <li class="breadcrumb-item active">Product Details</li>
                                </ul>
                                <!-- breadcrumb-list end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- breadcrumb-area end -->
    
        <!-- Product Details Area Start -->
        <div class="product-details-area pt-100px pb-100px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                        <!-- Swiper -->
                        <div class="swiper-container zoom-top">
                            <div class="swiper-wrapper">
    
                                <div class="swiper-slide zoom-image-hover">
                                    <img class="img-responsive m-auto" src="{{ Storage::url($product->image_thumb) }}" alt="">
                                </div>

                                @foreach ($variantPrices as $variant)
                                    <div class="swiper-slide zoom-image-hover">
                                        <img class="img-responsive m-auto" src="{{ Storage::url($variant['image']) }}" alt="" 
                                        data-variant-id="{{ $variant['id'] }}">
                                        
                                    </div>
                                @endforeach

                                

                                {{-- <div class="swiper-slide zoom-image-hover">
                                    <img class="img-responsive m-auto" src="{{ Storage::url($product->image_thumb) }}" alt="">
                                </div>
                                <div class="swiper-slide zoom-image-hover">
                                    <img class="img-responsive m-auto" src="assets/images/product-image/zoom-image/3.jpg" alt="">
                                </div>
                                <div class="swiper-slide zoom-image-hover">
                                    <img class="img-responsive m-auto" src="assets/images/product-image/zoom-image/4.jpg" alt="">
                                </div>
                                <div class="swiper-slide zoom-image-hover">
                                    <img class="img-responsive m-auto" src="assets/images/product-image/zoom-image/5.jpg" alt="">
                                </div> --}}
                            </div>
                        </div>
                        <div class="swiper-container zoom-thumbs slider-nav-style-1 small-nav mt-15px mb-15px">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto" src="{{ Storage::url($product->image_thumb) }}" alt="">
                                </div>
                                @foreach ($product->variants as $variant)
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto selectable-image" src="{{ Storage::url($variant->image) }}"
                                        data-price="{{ $variant->price }}"
                                        data-price_sale="{{ $variant->price_sale }}"
                                        data-id="{{ $variant->id }}"
                                        data-image="{{ $variant->image }}">
                                    </div>
                                @endforeach
                            </div>
                            
                            <!-- Add Arrows -->
                            <div class="swiper-buttons">
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                        <div class="product-details-content quickview-content">
                            <h2>{{ $product->name }}</h2>
                            <p class="reference">Reference:<span> demo_17</span></p>
                            <div class="pro-details-rating-wrap">
                                <div class="rating-product">
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                </div>
                                <span class="read-review"><a class="reviews" href="#">Read reviews (1)</a></span>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old not-cut">
                                    @if ($product->price_sale)
                                        <span class="new price_sale" id="variant-sale-price">{{ number_format($product->price_sale, 0, '.', '.') . ' vnđ' }} </span>
                                        <span class="old-price price" id="variant-price">{{ number_format($product->price, 0, '.', '.') . ' vnđ' }} </span>
                                    @else
                                        <span class="new price_sale">{{ number_format($product->price, 0, '.', '.') . ' vnđ' }} </span>
                                    @endif
                                    </li>
                                </ul>
                            </div>
                            <p class="quickview-para">Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco</p>
                            <form action="{{ route('client.cart.add') }}" method="POST" id="add-to-cart-form">
                                @csrf
                                <input type="text" name="price" id="price" value="{{ old('price') }}">
                                <input type="text" name="price_sale" id="price_sale" value="{{ old('price_sale') }}">
                                <input type="text" name="id" id="id" value="{{ old('id') }}">
                                <input type="text" name="image" id="image" value="{{ old('image') }}">
                                <div>
                                    <label @style('display: block') class="form-check-label">Màu sắc</label>
                                    
                                    @foreach ($variantColors as $color)
                                        <input type="radio" style="pointer-events: none; clip: rect(0,0,0,0); position:absolute" 
                                        class="btn-check" id="radio_color_{{ $color->id }}" name="product_color_id" value="{{ $color->id }}">
                                        <label for="radio_color_{{ $color->id }}" class="btn btn-light">{{ $color->name }}</label>
                                    @endforeach
                                </div>
                                <div>
                                    <label @style('display: block') class="form-check-label">Kích thước</label>
                                    @foreach ($variantSizes as $size)
                                        @if ($size->name!==null)
                                            <input type="radio" style="pointer-events: none; clip: rect(0,0,0,0); position:absolute" 
                                            class="btn-check" id="radio_size_{{ $size->id }}" name="product_size_id" value="{{ $size->id }}">
                                            <label for="radio_size_{{ $size->id }}" class="btn btn-light">{{ $size->name }}</label>
                                        @endif
                                    @endforeach
                                </div>
                            
                                <div class="pro-details-quality">
                                    {{-- <input name="quantity" value="1" @style('width: 62px; margin-right: 12px;') type="number" /> --}}
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" type="text" name="quantity" value="1" />
                                    </div>
                                    <div class="pro-details-cart">
                                        <button type="submit" class="add-cart btn btn-primary btn-hover-primary ml-4"> Thêm vào giỏ hàng</button>
                                    </div>
                                </div>
                            </form>
                            <div class="pro-details-wish-com">
                                <div class="pro-details-wishlist">
                                    <a href="wishlist.html"><i class="ion-android-favorite-outline"></i>Add to
                                        wishlist</a>
                                </div>
                                <div class="pro-details-compare">
                                    <a href="compare.html"><i class="ion-ios-shuffle-strong"></i>Add to compare</a>
                                </div>
                            </div>
                            <div class="pro-details-social-info">
                                <span>Share</span>
                                <div class="social-info">
                                    <ul class="d-flex">
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
                                            <a href="#"><i class="ion-social-instagram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pro-details-policy">
                                <ul>
                                    <li><img src="assets/images/icons/policy.png" alt="" /><span>Security Policy (Edit With
                                            Customer Reassurance Module)</span></li>
                                    <li><img src="assets/images/icons/policy-2.png" alt="" /><span>Delivery Policy (Edit
                                            With Customer Reassurance Module)</span></li>
                                    <li><img src="assets/images/icons/policy-3.png" alt="" /><span>Return Policy (Edit With
                                            Customer Reassurance Module)</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    
        <!-- product details description area start -->
        <div class="description-review-area pb-100px" data-aos="fade-up" data-aos-delay="200">
            <div class="container">
                <div class="description-review-wrapper">
                    <div class="description-review-topbar nav">
                        <a data-bs-toggle="tab" href="#des-details1">Description</a>
                        <a class="active" data-bs-toggle="tab" href="#des-details2">Product Details</a>
                        <a data-bs-toggle="tab" href="#des-details3">Reviews (2)</a>
                    </div>
                    <div class="tab-content description-review-bottom">
                        <div id="des-details2" class="tab-pane active">
                            <div class="product-anotherinfo-wrapper">
                                <ul>
                                    <li><span>Chất Liệu</span> {{ $product->material }}</li>
                                    <li><span>Đặc Điểm</span> {!! $product->description !!}</li>
                                    <li><span>Hướng dẫn sử dụng</span> {{ $product->use_manual }}</li>
                                </ul>
                            </div>
                        </div>
                        <div id="des-details1" class="tab-pane">
                            <div class="product-description-wrapper">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                </p>
                                <p>
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo consequat. Duis aute irure dolor in reprehend in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                    occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                </p>
                            </div>
                        </div>
                        <div id="des-details3" class="tab-pane">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="review-wrapper">
                                        <div class="single-review">
                                            <div class="review-img">
                                                <img src="assets/images/review-image/1.png" alt="" />
                                            </div>
                                            <div class="review-content">
                                                <div class="review-top-wrap">
                                                    <div class="review-left">
                                                        <div class="review-name">
                                                            <h4>White Lewis</h4>
                                                        </div>
                                                        <div class="rating-product">
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="review-left">
                                                        <a href="#">Reply</a>
                                                    </div>
                                                </div>
                                                <div class="review-bottom">
                                                    <p>
                                                        Vestibulum ante ipsum primis aucibus orci luctustrices posuere cubilia Curae Suspendisse viverra ed viverra. Mauris ullarper euismod vehicula. Phasellus quam nisi, congue id nulla.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-review child-review">
                                            <div class="review-img">
                                                <img src="assets/images/review-image/2.png" alt="" />
                                            </div>
                                            <div class="review-content">
                                                <div class="review-top-wrap">
                                                    <div class="review-left">
                                                        <div class="review-name">
                                                            <h4>White Lewis</h4>
                                                        </div>
                                                        <div class="rating-product">
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="review-left">
                                                        <a href="#">Reply</a>
                                                    </div>
                                                </div>
                                                <div class="review-bottom">
                                                    <p>Vestibulum ante ipsum primis aucibus orci luctustrices posuere cubilia Curae Sus pen disse viverra ed viverra. Mauris ullarper euismod vehicula.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="ratting-form-wrapper pl-50">
                                        <h3>Add a Review</h3>
                                        <div class="ratting-form">
                                            <form action="#">
                                                <div class="star-box">
                                                    <span>Your rating:</span>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="rating-form-style">
                                                            <input placeholder="Name" type="text" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="rating-form-style">
                                                            <input placeholder="Email" type="email" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="rating-form-style form-submit">
                                                            <textarea name="Your Review" placeholder="Message"></textarea>
                                                            <button class="btn btn-primary btn-hover-color-primary " type="submit" value="Submit">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- product details description area end -->
    
        <!-- New Product Start -->
        <div class="section pb-100px" data-aos="fade-up" data-aos-delay="200">
            <div class="container">
                <!-- section title start -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-start mb-11">
                            <h2 class="title">You Might Also Like</h2>
                        </div>
                    </div>
                </div>
                <!-- section title start -->
                <div class="new-product-slider swiper-container slider-nav-style-1" data-aos="fade-up" data-aos-delay="200">
                    <div class="new-product-wrapper swiper-wrapper">
                        <!-- Single Prodect -->
                        <div class="new-product-item swiper-slide">
                            <div class="product">
                                <div class="thumb">
                                    <a href="shop-left-sidebar.html" class="image">
                                        <img src="assets/images/product-image/1.jpg" alt="Product" />
                                        <img class="hover-image" src="assets/images/product-image/2.jpg" alt="Product" />
                                    </a>
                                    <span class="badges">
                                        <span class="sale">-10%</span>
                                    <span class="new">New</span>
                                    </span>
                                    <div class="actions">
                                        <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                class="icon-heart"></i></a>
                                        <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen"></i></a>
                                        <a href="compare.html" class="action compare" title="Compare"><i
                                                class="icon-refresh"></i></a>
                                    </div>
                                    <button title="Add To Cart" class=" add-to-cart">Add
                                        To Cart</button>
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="shop-left-sidebar.html">Simple minimal Chair </a></h5>
                                    <span class="price">
                                        <span class="new">$18.50</span>
                                    <span class="old">$28.50</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Single Prodect -->
                        <div class="new-product-item swiper-slide">
                            <div class="product">
                                <div class="thumb">
                                    <a href="shop-left-sidebar.html" class="image">
                                        <img src="assets/images/product-image/3.jpg" alt="Product" />
                                        <img class="hover-image" src="assets/images/product-image/4.jpg" alt="Product" />
                                    </a>
                                    <span class="badges">
                                        <span class="sale">-7%</span>
                                    </span>
                                    <div class="actions">
                                        <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                class="icon-heart"></i></a>
                                        <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen"></i></a>
                                        <a href="compare.html" class="action compare" title="Compare"><i
                                                class="icon-refresh"></i></a>
                                    </div>
                                    <button title="Add To Cart" class=" add-to-cart">Add
                                        To Cart</button>
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="shop-left-sidebar.html">Wooden decorations</a></h5>
                                    <span class="price">
                                        <span class="new">$38.50</span>
                                    <span class="old">$43.50</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Single Prodect -->
                        <div class="new-product-item swiper-slide">
                            <div class="product">
                                <div class="thumb">
                                    <a href="shop-left-sidebar.html" class="image">
                                        <img src="assets/images/product-image/5.jpg" alt="Product" />
                                        <img class="hover-image" src="assets/images/product-image/6.jpg" alt="Product" />
                                    </a>
                                    <span class="badges d-none">
                                        <span class="new">New</span>
                                    </span>
                                    <div class="actions">
                                        <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                class="icon-heart"></i></a>
                                        <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen"></i></a>
                                        <a href="compare.html" class="action compare" title="Compare"><i
                                                class="icon-refresh"></i></a>
                                    </div>
                                    <button title="Add To Cart" class=" add-to-cart">Add
                                        To Cart</button>
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="shop-left-sidebar.html">High quality vase bottle</a></h5>
                                    <span class="price">
                                        <span class="new">$38.50</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Single Prodect -->
                        <div class="new-product-item swiper-slide">
                            <div class="product">
                                <div class="thumb">
                                    <a href="shop-left-sidebar.html" class="image">
                                        <img src="assets/images/product-image/7.jpg" alt="Product" />
                                        <img class="hover-image" src="assets/images/product-image/8.jpg" alt="Product" />
                                    </a>
                                    <span class="badges">
                                        <span class="new">New</span>
                                    </span>
                                    <div class="actions">
                                        <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                class="icon-heart"></i></a>
                                        <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen"></i></a>
                                        <a href="compare.html" class="action compare" title="Compare"><i
                                                class="icon-refresh"></i></a>
                                    </div>
                                    <button title="Add To Cart" class=" add-to-cart">Add
                                        To Cart</button>
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="shop-left-sidebar.html">Living & Bedroom Chair</a></h5>
                                    <span class="price">
                                        <span class="new">$38.50</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Single Prodect -->
                        <div class="new-product-item swiper-slide">
                            <div class="product">
                                <div class="thumb">
                                    <a href="shop-left-sidebar.html" class="image">
                                        <img src="assets/images/product-image/9.jpg" alt="Product" />
                                        <img class="hover-image" src="assets/images/product-image/10.jpg" alt="Product" />
                                    </a>
                                    <span class="badges">
                                        <span class="sale">-5%</span>
                                    </span>
                                    <div class="actions">
                                        <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                class="icon-heart"></i></a>
                                        <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen"></i></a>
                                        <a href="compare.html" class="action compare" title="Compare"><i
                                                class="icon-refresh"></i></a>
                                    </div>
                                    <button title="Add To Cart" class=" add-to-cart">Add
                                        To Cart</button>
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="shop-left-sidebar.html">Living & Bedroom Table</a></h5>
                                    <span class="price">
                                        <span class="new">$38.50</span>
                                    <span class="old">$40.50</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Single Prodect -->
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-buttons">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- New Product End -->
@endsection

@section('js')

<script>
    $(document).ready(function() {
        // Bắt sự kiện khi click vào ảnh
        $('.selectable-image').click(function() {
            // Lấy giá trị price từ data attribute của ảnh được chọn
            var price = $(this).data('price');
            var price_sale = $(this).data('price_sale');
            var id = $(this).data('id');
            var image = $(this).data('image');
            
            // Cập nhật giá trị của input hidden và hiển thị lên giao diện
            $('#price').val(price);
            $('.price').text(price.toLocaleString('vi-VN') + ' vnđ');
            $('.price_sale').text(price_sale.toLocaleString('vi-VN') + ' vnđ');
            $('#price_sale').val(price_sale);
            $('#id').val(id);
            $('#image').val(image);
        });
    });
</script>
    <script>
        
        
        /*----------------------------
            Cart Plus Minus Button
        ------------------------------ */
        var CartPlusMinus = $(".cart-plus-minus");
        CartPlusMinus.prepend('<div class="dec qtybutton">-</div>');
        CartPlusMinus.append('<div class="inc qtybutton">+</div>');
        $(".qtybutton").on("click", function() {
            var $button = $(this);
            var oldValue = $button.parent().find("input").val();
            if ($button.text() === "+") {
                var newVal = parseFloat(oldValue) + 1;
            } else {
                // Don't allow decrementing below zero
                if (oldValue > 1) {
                    var newVal = parseFloat(oldValue) - 1;
                } else {
                    newVal = 1;
                }
            }
            $button.parent().find("input").val(newVal);
        });
    </script>
@endsection