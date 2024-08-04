@extends('layouts.client')

@section('content')
    <!-- Hero/Intro Slider Start -->
    <div class="section ">
        <div class="hero-slider swiper-container slider-nav-style-1 slider-dot-style-1 dot-color-white">
            <!-- Hero slider Active -->
            <div class="swiper-wrapper">
                <!-- Single slider item -->
                <div class="hero-slide-item slider-height-2 swiper-slide d-flex">
                    <div class="hero-bg-image">
                        <img src="https://mixtas.novaworks.net/wp-content/uploads/2023/12/m1_slide_01.jpeg" alt="">
                    </div>
                    <div class="container align-self-center">
                        <div class="row justify-content-center">
                            <div class="col-md-8 offset-2 align-self-center m-auto">
                                <div class="hero-slide-content hero-slide-content-2 slider-animated-1 text-center">
                                    <span class="category">New Products</span>
                                    <h2 class="title-1">Flexible Sofa Set</h2>
                                    <p class="w-100">Torem ipsum dolor sit amet, consectetur adipisicing elitsed do eiusmo tempor incididunt ut labore et dolore magna</p>
                                    <a href="#" class="btn btn-lg btn-primary btn-hover-dark mt-5">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single slider item -->
                <div class="hero-slide-item slider-height-2 swiper-slide d-flex text-center">
                    <div class="hero-bg-image">
                        <img src="https://mixtas.novaworks.net/wp-content/uploads/2023/12/m1_slide_02.jpeg" alt="">
                    </div>
                    <div class="container align-self-center">
                        <div class="row justify-content-center">
                            <div class="col-md-8 offset-2 align-self-center m-auto">
                                <div class="hero-slide-content hero-slide-content-2 slider-animated-1">
                                    <span class="category">New Products</span>
                                    <h2 class="title-1">Flexible Sofa Set</h2>
                                    <p class="w-100">Torem ipsum dolor sit amet, consectetur adipisicing elitsed do eiusmo tempor incididunt ut labore et dolore magna</p>
                                    <a href="#" class="btn btn-lg btn-primary btn-hover-dark mt-5">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination swiper-pagination-white"></div>
            <!-- Add Arrows -->
            <div class="swiper-buttons">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>

    <!-- Hero/Intro Slider End -->

    <!-- Banner Section Start -->
    <div class="section pb-100px pt-100px">
        <div class="container">
            <!-- Banners Start -->
            <div class="row">
                <!-- Banner Start -->
                <div class="col-lg-4 col-12 mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="200">
                    <div class="banner-2">
                        <img src="{{ url('client') }}/assets/images/banner/5.jpg" alt="" />
                        <div class="info justify-content-start">
                            <div class="content align-self-center">
                                <h3 class="title">
                                    New Office Chair <br /> Collection
                                </h3>
                                <a href="shop-left-sidebar.html" class="shop-link">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Banner End -->

                <!-- Banner Start -->
                <div class="col-lg-4 col-12 mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="400">
                    <div class="banner-2">
                        <img src="{{ url('client') }}/assets/images/banner/6.jpg" alt="" />
                        <div class="info justify-content-start">
                            <div class="content align-self-center">
                                <h3 class="title">
                                    Living Room <br /> Collection </h3>
                                <a href="shop-left-sidebar.html" class="shop-link">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Banner End -->

                <!-- Banner Start -->
                <div class="col-lg-4 col-12" data-aos="fade-up" data-aos-delay="600">
                    <div class="banner-2">
                        <img src="{{ url('client') }}/assets/images/banner/7.jpg" alt="" />
                        <div class="info justify-content-start">
                            <div class="content align-self-center">
                                <h3 class="title">
                                    Children Room <br /> Collection
                                </h3>
                                <a href="shop-left-sidebar.html" class="shop-link">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Banner End -->
            </div>
            <!-- Banners End -->
        </div>
    </div>
    <!-- Banner Section End -->

    <!-- Product tab Area Start -->
    <div class="section product-tab-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center" data-aos="fade-up">
                    <div class="section-title mb-0">
                        <h2 class="title">Our Products</h2>
                        <p class="sub-title mb-30px">Torem ipsum dolor sit amet, consectetur adipisicing elitsed do eiusmo tempor incididunt ut labore</p>
                    </div>
                </div>

                <!-- Tab Start -->
                <div class="col-md-12 text-center mb-40px" data-aos="fade-up" data-aos-delay="200">
                    <ul class="product-tab-nav nav justify-content-center">
                        <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#tab-product-new-arrivals">Bán chạy</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-product-best-sellers">Giảm giá 40%</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-product-on-sales">Hot Online</a></li>
                    </ul>
                </div>
                <!-- Tab End -->
            </div>
            <div class="row">
                <div class="col">
                    <div class="tab-content">
                        <!-- 1st tab start -->
                        <div class="tab-pane fade show active" id="tab-product-new-arrivals">
                            <div class="row">
                                @foreach ($products as $product)
                                @if ($product->is_best_sale)
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="200">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            
                                            <a href="{{ route('client.product.detail', $product->id) }}" class="image">
                                                <img src="{{ Storage::url($product->image_thumb) }}" alt="Product" />
                                                <img class="hover-image" src="{{ Storage::url($product->image_thumb) }}" alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="new">Bán chạy</span>
                                                @if ($product->is_40_sale)
                                                    <span class="sale">-40%</span>
                                                @endif
                                                @if ($product->is_hot_online)
                                                    <span class="sale">Hot online</span>
                                                @endif
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Thêm Vào Giỏ Hàng</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">{{ $product->name }} </a></h5>
                                            <span class="price">
                                                @if ($product->price_sale)
                                                    <span class="new">{{ number_format($product->price_sale, 0, '.', '.') . ' vnđ' }} </span>
                                                    <span class="old">{{ number_format($product->price, 0, '.', '.') . ' vnđ' }}</span>
                                                @else
                                                    <span class="new">{{ number_format($product->price, 0, '.', '.') . ' vnđ' }}</span>
                                                @endif
                                            </span>
                                        </div>
                                    </div>
                                </div>    
                                @endif 
                                @endforeach
                                
                                
                            </div>
                        </div>
                        <!-- 1st tab end -->
                        <!-- 2nd tab start -->
                        <div class="tab-pane fade" id="tab-product-best-sellers">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="200">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="{{ url('client') }}/assets/images/product-image/1.jpg" alt="Product" />
                                                <img class="hover-image" src="{{ url('client') }}/assets/images/product-image/2.jpg" alt="Product" />
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
                                            <h5 class="title"><a href="shop-left-sidebar.html">Simple minimal Chair </a></h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="400">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="{{ url('client') }}/assets/images/product-image/3.jpg" alt="Product" />
                                                <img class="hover-image" src="{{ url('client') }}/assets/images/product-image/4.jpg" alt="Product" />
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
                                            <h5 class="title"><a href="shop-left-sidebar.html">Wooden decorations</a></h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                            <span class="old">$48.50</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Prodect -->
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="600">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="{{ url('client') }}/assets/images/product-image/5.jpg" alt="Product" />
                                                <img class="hover-image" src="{{ url('client') }}/assets/images/product-image/6.jpg" alt="Product" />
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
                                            <h5 class="title"><a href="shop-left-sidebar.html">High quality vase bottle</a></h5>
                                            <span class="price">
                                                <span class="new">$30.50</span>
                                            <span class="old">$38.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="800">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="{{ url('client') }}/assets/images/product-image/7.jpg" alt="Product" />
                                                <img class="hover-image" src="{{ url('client') }}/assets/images/product-image/8.jpg" alt="Product" />
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
                                    <!-- Single Prodect -->
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="200">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="{{ url('client') }}/assets/images/product-image/9.jpg" alt="Product" />
                                                <img class="hover-image" src="{{ url('client') }}/assets/images/product-image/10.jpg" alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="sale">-5%</span>
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
                                            <h5 class="title"><a href="shop-left-sidebar.html">Living & Bedroom Table</a></h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                            <span class="old">$40.50</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6  mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="400">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="{{ url('client') }}/assets/images/product-image/11.jpg" alt="Product" />
                                                <img class="hover-image" src="{{ url('client') }}/assets/images/product-image/12.jpg" alt="Product" />
                                            </a>
                                            <span class="badges">
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
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Prodect -->
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-es-30px" data-aos="fade-up" data-aos-delay="600">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="{{ url('client') }}/assets/images/product-image/13.jpg" alt="Product" />
                                                <img class="hover-image" src="{{ url('client') }}/assets/images/product-image/14.jpg" alt="Product" />
                                            </a>
                                            <span class="badges">
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
                                                <span class="new">$30.50</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 " data-aos="fade-up" data-aos-delay="800">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="{{ url('client') }}/assets/images/product-image/15.jpg" alt="Product" />
                                                <img class="hover-image" src="{{ url('client') }}/assets/images/product-image/16.jpg" alt="Product" />
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
                                    <!-- Single Prodect -->
                                </div>
                            </div>
                        </div>
                        <!-- 2nd tab end -->
                        <!-- 3rd tab start -->
                        <div class="tab-pane fade" id="tab-product-sale-item">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="200">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="{{ url('client') }}/assets/images/product-image/1.jpg" alt="Product" />
                                                <img class="hover-image" src="{{ url('client') }}/assets/images/product-image/2.jpg" alt="Product" />
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
                                            <h5 class="title"><a href="shop-left-sidebar.html">Simple minimal Chair </a></h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="400">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="{{ url('client') }}/assets/images/product-image/3.jpg" alt="Product" />
                                                <img class="hover-image" src="{{ url('client') }}/assets/images/product-image/4.jpg" alt="Product" />
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
                                            <h5 class="title"><a href="shop-left-sidebar.html">Wooden decorations</a></h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                            <span class="old">$48.50</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Prodect -->
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="600">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="{{ url('client') }}/assets/images/product-image/5.jpg" alt="Product" />
                                                <img class="hover-image" src="{{ url('client') }}/assets/images/product-image/6.jpg" alt="Product" />
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
                                            <h5 class="title"><a href="shop-left-sidebar.html">High quality vase bottle</a></h5>
                                            <span class="price">
                                                <span class="new">$30.50</span>
                                            <span class="old">$38.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="800">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="{{ url('client') }}/assets/images/product-image/7.jpg" alt="Product" />
                                                <img class="hover-image" src="{{ url('client') }}/assets/images/product-image/8.jpg" alt="Product" />
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
                                    <!-- Single Prodect -->
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="200">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="{{ url('client') }}/assets/images/product-image/9.jpg" alt="Product" />
                                                <img class="hover-image" src="{{ url('client') }}/assets/images/product-image/10.jpg" alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="sale">-5%</span>
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
                                            <h5 class="title"><a href="shop-left-sidebar.html">Living & Bedroom Table</a></h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                            <span class="old">$40.50</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6  mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="400">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="{{ url('client') }}/assets/images/product-image/11.jpg" alt="Product" />
                                                <img class="hover-image" src="{{ url('client') }}/assets/images/product-image/12.jpg" alt="Product" />
                                            </a>
                                            <span class="badges">
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
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Prodect -->
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-es-30px" data-aos="fade-up" data-aos-delay="600">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="{{ url('client') }}/assets/images/product-image/13.jpg" alt="Product" />
                                                <img class="hover-image" src="{{ url('client') }}/assets/images/product-image/14.jpg" alt="Product" />
                                            </a>
                                            <span class="badges">
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
                                                <span class="new">$30.50</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 " data-aos="fade-up" data-aos-delay="800">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="{{ url('client') }}/assets/images/product-image/15.jpg" alt="Product" />
                                                <img class="hover-image" src="{{ url('client') }}/assets/images/product-image/16.jpg" alt="Product" />
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
                                    <!-- Single Prodect -->
                                </div>
                            </div>
                        </div>
                        <!-- 3rd tab end -->
                        <!-- 4th tab start -->
                        <div class="tab-pane fade" id="tab-product-on-sales">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="200">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="{{ url('client') }}/assets/images/product-image/1.jpg" alt="Product" />
                                                <img class="hover-image" src="{{ url('client') }}/assets/images/product-image/2.jpg" alt="Product" />
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
                                            <h5 class="title"><a href="shop-left-sidebar.html">Simple minimal Chair </a></h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="400">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="{{ url('client') }}/assets/images/product-image/3.jpg" alt="Product" />
                                                <img class="hover-image" src="{{ url('client') }}/assets/images/product-image/4.jpg" alt="Product" />
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
                                            <h5 class="title"><a href="shop-left-sidebar.html">Wooden decorations</a></h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                            <span class="old">$48.50</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Prodect -->
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="600">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="{{ url('client') }}/assets/images/product-image/5.jpg" alt="Product" />
                                                <img class="hover-image" src="{{ url('client') }}/assets/images/product-image/6.jpg" alt="Product" />
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
                                            <h5 class="title"><a href="shop-left-sidebar.html">High quality vase bottle</a></h5>
                                            <span class="price">
                                                <span class="new">$30.50</span>
                                            <span class="old">$38.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="800">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="{{ url('client') }}/assets/images/product-image/7.jpg" alt="Product" />
                                                <img class="hover-image" src="{{ url('client') }}/assets/images/product-image/8.jpg" alt="Product" />
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
                                    <!-- Single Prodect -->
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="200">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="{{ url('client') }}/assets/images/product-image/9.jpg" alt="Product" />
                                                <img class="hover-image" src="{{ url('client') }}/assets/images/product-image/10.jpg" alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="sale">-5%</span>
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
                                            <h5 class="title"><a href="shop-left-sidebar.html">Living & Bedroom Table</a></h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                            <span class="old">$40.50</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6  mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="400">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="{{ url('client') }}/assets/images/product-image/11.jpg" alt="Product" />
                                                <img class="hover-image" src="{{ url('client') }}/assets/images/product-image/12.jpg" alt="Product" />
                                            </a>
                                            <span class="badges">
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
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Prodect -->
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-es-30px" data-aos="fade-up" data-aos-delay="600">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="{{ url('client') }}/assets/images/product-image/13.jpg" alt="Product" />
                                                <img class="hover-image" src="{{ url('client') }}/assets/images/product-image/14.jpg" alt="Product" />
                                            </a>
                                            <span class="badges">
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
                                                <span class="new">$30.50</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 " data-aos="fade-up" data-aos-delay="800">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="{{ url('client') }}/assets/images/product-image/15.jpg" alt="Product" />
                                                <img class="hover-image" src="{{ url('client') }}/assets/images/product-image/16.jpg" alt="Product" />
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
                                    <!-- Single Prodect -->
                                </div>
                            </div>
                        </div>
                        <!-- 4th tab end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product tab Area End -->

    <!-- Banner Section Start -->
    <div class="section pb-100px pt-100px">
        <div class="container-fluid">
            <!-- Banners Start -->
            <div class="row">
                <!-- Banner Start -->
                <div class="col-lg-6 col-md-6 col-12 mb-lm-30px" data-aos="fade-up" data-aos-delay="200">
                    <a href="shop-left-sidebar.html" class="banner-3">
                        <img src="{{ url('client') }}/assets/images/banner/1.jpg" alt="" />
                        <div class="info justify-content-end">
                            <div class="content align-self-center">
                                <h3 class="title">
                                    Sale Furniture <br /> For Summer
                                </h3>
                                <p>Great Discounts Here</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Banner End -->

                <!-- Banner Start -->
                <div class="col-lg-6 col-md-6 col-12" data-aos="fade-up" data-aos-delay="200">
                    <a href="shop-left-sidebar.html" class="banner-3">
                        <img src="{{ url('client') }}/assets/images/banner/2.jpg" alt="" />
                        <div class="info justify-content-start">
                            <div class="content align-self-center">
                                <h3 class="title">
                                    Office Chair <br /> For Best Offer</h3>
                                <p>Great Discounts Here</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Banner End -->
            </div>
            <!-- Banners End -->
        </div>
    </div>
    <!-- Banner Section End -->

    <!-- New Product Start -->
    <div class="section pb-100px">
        <div class="container">
            <!-- section title start -->
            <div class="row">
                <div class="col-md-12" data-aos="fade-up">
                    <div class="section-title text-center mb-11">
                        <h2 class="title">New Products</h2>
                        <p class="sub-title">Torem ipsum dolor sit amet, consectetur adipisicing elitsed do eiusmo tempor incididunt ut labore
                        </p>
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
                                    <img src="{{ url('client') }}/assets/images/product-image/1.jpg" alt="Product" />
                                    <img class="hover-image" src="{{ url('client') }}/assets/images/product-image/2.jpg" alt="Product" />
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
                                <h5 class="title"><a href="shop-left-sidebar.html">Simple minimal Chair </a></h5>
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
                                    <img src="{{ url('client') }}/assets/images/product-image/3.jpg" alt="Product" />
                                    <img class="hover-image" src="{{ url('client') }}/assets/images/product-image/4.jpg" alt="Product" />
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
                                <h5 class="title"><a href="shop-left-sidebar.html">Wooden decorations</a></h5>
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
                                    <img src="{{ url('client') }}/assets/images/product-image/5.jpg" alt="Product" />
                                    <img class="hover-image" src="{{ url('client') }}/assets/images/product-image/6.jpg" alt="Product" />
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
                                    <img src="{{ url('client') }}/assets/images/product-image/7.jpg" alt="Product" />
                                    <img class="hover-image" src="{{ url('client') }}/assets/images/product-image/8.jpg" alt="Product" />
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
                                    <img src="{{ url('client') }}/assets/images/product-image/9.jpg" alt="Product" />
                                    <img class="hover-image" src="{{ url('client') }}/assets/images/product-image/10.jpg" alt="Product" />
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
                                <h5 class="title"><a href="shop-left-sidebar.html">Living & Bedroom Table</a></h5>
                                <span class="price">
                                    <span class="new">$38.50</span>
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


    <!--  Blog area Start -->
    <div class="main-blog-area pb-100px">
        <div class="container">
            <!-- section title start -->
            <div class="row">
                <div class="col-md-12" data-aos="fade-up">
                    <div class="section-title text-center mb-11">
                        <h2 class="title">Latest News</h2>
                        <p class="sub-title">Torem ipsum dolor sit amet, consectetur adipisicing elitsed do eiusmo tempor incididunt ut labore
                        </p>
                    </div>
                </div>
            </div>
            <!-- section title start -->
            <div class="blog-slider swiper-container slider-nav-style-1" data-aos="fade-up" data-aos-delay="200">
                <!-- Start single blog -->
                <div class="swiper-wrapper">
                    <div class="single-blog swiper-slide">
                        <div class="blog-image">
                            <a href="blog-single-left-sidebar.html"><img src="{{ url('client') }}/assets/images/blog-image/1.jpg" class="img-responsive w-100" alt=""></a>
                        </div>
                        <div class="blog-text">
                            <div class="blog-athor-date">
                                <a class="blog-date" href="#">14 November</a>
                            </div>
                            <h5 class="blog-heading"><a class="blog-heading-link" href="blog-single-left-sidebar.html">Interior design is the art.</a></h5>
                            <p class="blog-detail-text">Lorem ipsum dolor sit amet, consectetur adipi elit, sed do eiusmod tempor incididu ut labore et dolore magna aliqua.</p>

                            <a href="#" class="btn btn-lg btn-hover-color-primary btn-color-dark mt-25px">Read More</a>
                        </div>
                    </div>
                    <!-- End single blog -->
                    <div class="single-blog swiper-slide">
                        <div class="blog-image">
                            <a href="blog-single-left-sidebar.html"><img src="{{ url('client') }}/assets/images/blog-image/2.jpg" class="img-responsive w-100" alt=""></a>
                        </div>
                        <div class="blog-text">
                            <div class="blog-athor-date">
                                <a class="blog-date" href="#">14 November</a>
                            </div>
                            <h5 class="blog-heading"><a class="blog-heading-link" href="blog-single-left-sidebar.html">Decorate your home with furns.</a></h5>
                            <p class="blog-detail-text">Lorem ipsum dolor sit amet, consectetur adipi elit, sed do eiusmod tempor incididu ut labore et dolore magna aliqua.</p>

                            <a href="#" class="btn btn-lg btn-hover-color-primary btn-color-dark mt-25px">Read More</a>
                        </div>
                    </div>
                    <!-- End single blog -->
                    <div class="single-blog swiper-slide">
                        <div class="blog-image">
                            <a href="blog-single-left-sidebar.html"><img src="{{ url('client') }}/assets/images/blog-image/3.jpg" class="img-responsive w-100" alt=""></a>
                        </div>
                        <div class="blog-text">
                            <div class="blog-athor-date">
                                <a class="blog-date" href="#">14 November</a>
                            </div>
                            <h5 class="blog-heading"><a class="blog-heading-link" href="blog-single-left-sidebar.html">Spatialize with that the furns.</a></h5>
                            <p class="blog-detail-text">Lorem ipsum dolor sit amet, consectetur adipi elit, sed do eiusmod tempor incididu ut labore et dolore magna aliqua.</p>

                            <a href="#" class="btn btn-lg btn-hover-color-primary btn-color-dark mt-25px">Read More</a>
                        </div>
                    </div>
                    <!-- End single blog -->
                    <div class="single-blog swiper-slide">
                        <div class="blog-image">
                            <a href="blog-single-left-sidebar.html"><img src="{{ url('client') }}/assets/images/blog-image/4.jpg" class="img-responsive w-100" alt=""></a>
                        </div>
                        <div class="blog-text">
                            <div class="blog-athor-date">
                                <a class="blog-date" href="#">14 November</a>
                            </div>
                            <h5 class="blog-heading"><a class="blog-heading-link" href="blog-single-left-sidebar.html">Unique products will impress.</a></h5>
                            <p class="blog-detail-text">Lorem ipsum dolor sit amet, consectetur adipi elit, sed do eiusmod tempor incididu ut labore et dolore magna aliqua.</p>

                            <a href="#" class="btn btn-lg btn-hover-color-primary btn-color-dark mt-25px">Read More</a>
                        </div>
                    </div>
                    <!-- End single blog -->
                </div>
                <!-- Add Arrows -->
                <div class="swiper-buttons">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
    <!--  Blog area End -->
@endsection