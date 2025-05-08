{{--
@extends('user.layouts.main')
@section('title')
    Trang chủ
@endsection
@section('content')
@if (session('success'))
    <div class="alert alert-success mt-3 text-center">
        {{ session('success') }}
</div>
@endif
<!-- Begin Slider Area Three -->
<div class="slider-area slider-area-3">

    <div class="kenne-element-carousel home-slider home-slider-3 arrow-style" data-slick-options='{
        "slidesToShow": 1,
        "slidesToScroll": 1,
        "infinite": true,
        "arrows": true,
        "dots": false,
        "autoplay" : true,
        "fade" : true,
        "autoplaySpeed" : 5000,
        "pauseOnHover" : false,
        "pauseOnFocus" : false
        }' data-slick-responsive='[
        {"breakpoint":768, "settings": {
        "slidesToShow": 1
        }},
        {"breakpoint":575, "settings": {
        "slidesToShow": 1
        }}
    ]'>
        <div class="slide-item bg-5 animation-style-01">
            <div class="slider-progress"></div>
            <div class="container">
                <div class="slide-content">
                    <span>Ưu Đãi Đặc Biệt - Giảm 20% Tuần Này</span>
                    <h2>iPhone 15 Pro Max <br> Hiệu Năng Đỉnh Cao</h2>
                    <p class="short-desc">Trải nghiệm sức mạnh vượt trội với chip A17 Bionic, màn hình ProMotion 120Hz
                        mượt mà.</p>
                    <div class="slide-btn">
                        <a class="kenne-btn" href="#">Mua ngay</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="slide-item bg-6 animation-style-01">
            <div class="slider-progress"></div>
            <div class="container">
                <div class="slide-content">
                    <span>Ưu Đãi Đặc Biệt - Giảm 10% Tuần Này</span>
                    <h2>Samsung Galaxy S24 Ultra <br> Camera 200MP - Chụp Đỉnh Cao</h2>
                    <p class="short-desc-2">Công nghệ chụp ảnh tiên tiến, màn hình Dynamic AMOLED 2X sống động.</p>
                    <div class="slide-btn">
                        <a class="kenne-btn" href="#">Mua ngay</a>
                    </div>
                </div>
            </div>
        </div>


    </div>

</div>
<!-- Slider Area Three End Here -->

<!-- Begin Service Area -->
<div class="service-area">
    <div class="container">
        <div class="service-nav">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="service-item">
                        <div class="content">
                            <h6>Giao hàng</h6>
                            <p>Miễn phí giao hàng</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="service-item">
                        <div class="content">
                            <h6>Hoàn tiền</h6>
                            <p>Hoàn tiền trong 30 ngày khi lỗi</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="service-item">
                        <div class="content">
                            <h6>Hỗ trợ</h6>
                            <p>Hỗ trợ 24/7</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service Area End Here -->

<!-- Begin Banner Area -->
<div class="banner-area">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-6 custom-xxs-col">
                <div class="banner-item img-hover_effect">
                    <div class="banner-img">
                        <a href="#">
                            <img src="{{ asset('assets/images/banner/1-9.jpg') }}" alt="Banner" width="350px" height="250px">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-6 custom-xxs-col">
                <div class="banner-item img-hover_effect">
                    <div class="banner-img">
                        <a href="#">
                            <img src="{{ asset('assets/images/banner/1-8.jpg') }}" alt="Banner" width="350px" height="250px">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-6 custom-xxs-col">
                <div class="banner-item img-hover_effect">
                    <div class="banner-img">
                        <a href="#">
                            <img src="{{ asset('assets/images/banner/1-7.jpg') }}" alt="Banner" width="350px" height="250px">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Area End Here -->

<!-- Search Product Area -->


<div class="product-area ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h3>SẢN PHẨM NỔI BẬT
                    </h3>

                    <div class="product-arrow"></div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="kenne-element-carousel product-tab_slider slider-nav product-tab_arrow" data-slick-options='{
                        "slidesToShow": 4,
                        "slidesToScroll": 1,
                        "infinite": false,
                        "arrows": true,
                        "dots": false,
                        "spaceBetween": 30
                        }' data-slick-responsive='[
                        {"breakpoint":992, "settings": {
                        "slidesToShow": 3
                        }},
                        {"breakpoint":768, "settings": {
                        "slidesToShow": 2
                        }},
                        {"breakpoint":575, "settings": {
                        "slidesToShow": 1
                        }}
                    ]'>


                    @foreach ($topProducts as $product)
                    <div class="product-item">

                        <div class="single-product">
                            <div class="product-img">
                                <a href="{{ route('singleProduct', ['id' => $product->id]) }}">
                                    <img class="primary-img" src="{{ asset('storage/' . $product->image) }}" style="width: 200px; height: 250px; object-fit: cover;" alt="{{ $product->name }}">
                                </a>
                                <span class="sticker">Mới</span>
                                <div class="add-actions">
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-desc_info">
                                    <h3 class="product-name"><a href="{{ route('singleProduct', ['id' => $product->id]) }}">
                                            {{ $product->name }} </a></h3>
                                    <div class="price-box">
                                        <span class="new-price"> {{ number_format($product->price, 0, ',', '.') }}đ
                                        </span>
                                        <span class="old-price">
                                            {{ number_format($product->old_price, 0, ',', '.') }}đ </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    @endforeach
                </div>
            </div>
            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-md-8 text-center">
                        <div class="alert fs-2 text-danger" role="alert">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Area End Here -->



<!-- Begin Product Area -->
<div class="product-area ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h3>SẢN PHẨM MỚI</h3>
                    <div class="product-arrow"></div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="kenne-element-carousel product-tab_slider slider-nav product-tab_arrow" data-slick-options='{
                        "slidesToShow": 4,
                        "slidesToScroll": 1,
                        "infinite": false,
                        "arrows": true,
                        "dots": false,
                        "spaceBetween": 30
                        }' data-slick-responsive='[
                        {"breakpoint":992, "settings": {
                        "slidesToShow": 3
                        }},
                        {"breakpoint":768, "settings": {
                        "slidesToShow": 2
                        }},
                        {"breakpoint":575, "settings": {
                        "slidesToShow": 1
                        }}
                    ]'>
                    @foreach ($newProducts as $product)
                    <div class="product-item">

                        <div class="single-product">
                            <div class="product-img">
                                <a href="{{ route('singleProduct', ['id' => $product->id]) }}">
                                    <img class="primary-img" src="{{ asset('storage/' . $product->image) }}" style="width: 200px; height: 250px; object-fit: cover;" alt="{{ $product->name }}">
                                </a>
                                <span class="sticker">Mới</span>
                                <div class="add-actions">
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-desc_info">
                                    <h3 class="product-name"><a href="{{ route('singleProduct', ['id' => $product->id]) }}">
                                            {{ $product->name }} </a></h3>
                                    <div class="price-box">
                                        <span class="new-price">
                                            {{ number_format($product->price, 0, ',', '.') }}đ </span>
                                        <span class="old-price">
                                            {{ number_format($product->old_price, 0, ',', '.') }}đ </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Product Area End Here -->

<!-- Begin Banner Area Two -->
<div class="banner-area banner-area-2">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="banner-item img-hover_effect">
                    <div class="banner-img">
                        <a href="#">
                            <img class="img-full" src="{{ asset('assets/images/banner/4-3.jpg') }}" alt="Banner">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="banner-item img-hover_effect">
                    <div class="banner-img">
                        <a href="#">
                            <img class="img-full" src="{{ asset('assets/images/banner/4-4.jpg') }}" alt="Banner">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Area Two End Here -->

<!-- Begin Product Tab Area -->
<div class="product-tab_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h3>TẤT CẢ SẢN PHẨM</h3>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="tab-content kenne-tab_content">
                    <div id="bag" class="tab-pane active show" role="tabpanel">
                        <div class="kenne-element-carousel product-tab_slider slider-nav product-tab_arrow" data-slick-options='{
                                    "slidesToShow": 4,
                                    "slidesToScroll": 1,
                                    "infinite": false,
                                    "arrows": true,
                                    "dots": false,
                                    "spaceBetween": 30
                                    }' data-slick-responsive='[
                                    {"breakpoint":992, "settings": {
                                    "slidesToShow": 3
                                    }},
                                    {"breakpoint":768, "settings": {
                                    "slidesToShow": 2
                                    }},
                                    {"breakpoint":575, "settings": {
                                    "slidesToShow": 1
                                    }}
                                ]'>
                            @foreach ($products as $product)
                            <div class="product-item">

                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="{{ route('singleProduct', ['id' => $product->id]) }}">
                                            <img class="primary-img" src="{{ asset('storage/' . $product->image) }}" style="width: 200px; height: 250px; object-fit: cover;" alt="{{ $product->name }}">
                                        </a>
                                        <span class="sticker">Mới</span>
                                        <div class="add-actions">
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <h3 class="product-name"><a href="{{ route('singleProduct', ['id' => $product->id]) }}">
                                                    {{ $product->name }} </a>
                                            </h3>
                                            <div class="price-box">
                                                <span class="new-price">
                                                    {{ number_format($product->price, 0, ',', '.') }}đ </span>
                                                <span class="old-price">
                                                    {{ number_format($product->old_price, 0, ',', '.') }}đ </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            @endforeach

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

<!-- Begin Brand Area -->
<div class="brand-area pt-90">
    <div class="container">
        <div class="brand-nav border-top border-bottom">
            <div class="row">
                <div class="col-lg-12">
                    <div class="kenne-element-carousel brand-slider slider-nav" data-slick-options='{
                                "slidesToShow": 6,
                                "slidesToScroll": 1,
                                "infinite": false,
                                "arrows": false,
                                "dots": false,
                                "spaceBetween": 30
                                }' data-slick-responsive='[
                                {"breakpoint":992, "settings": {
                                "slidesToShow": 4
                                }},
                                {"breakpoint":768, "settings": {
                                "slidesToShow": 3
                                }},
                                {"breakpoint":576, "settings": {
                                "slidesToShow": 2
                                }}
                            ]'>

                        <div class="brand-item">
                            <a href="#">
                                <img src="{{ asset('assets/images/brand/1.png') }}" alt="Brand Images">
                            </a>
                        </div>
                        <div class="brand-item">
                            <a href="#">
                                <img src="{{ asset('assets/images/brand/2.png') }}" alt="Brand Images">
                            </a>
                        </div>
                        <div class="brand-item">
                            <a href="#">
                                <img src="{{ asset('assets/images/brand/3.png') }}" alt="Brand Images">
                            </a>
                        </div>
                        <div class="brand-item">
                            <a href="#">
                                <img src="{{ asset('assets/images/brand/4.png') }}" alt="Brand Images">
                            </a>
                        </div>
                        <div class="brand-item">
                            <a href="#">
                                <img src="{{ asset('assets/images/brand/5.png') }}" alt="Brand Images">
                            </a>
                        </div>
                        <div class="brand-item">
                            <a href="#">
                                <img src="{{ asset('assets/images/brand/6.png') }}" alt="Brand Images">
                            </a>
                        </div>
                        <div class="brand-item">
                            <a href="#">
                                <img src="{{ asset('assets/images/brand/1.png') }}" alt="Brand Images">
                            </a>
                        </div>
                        <div class="brand-item">
                            <a href="#">
                                <img src="{{ asset('assets/images/brand/2.png') }}" alt="Brand Images">
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Brand Area End Here -->



<!-- Mirrored from htmldemo.net/kenne/kenne/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Nov 2023 10:13:37 GMT -->

</html>
@endsection --}}


@extends('user.layouts.master')
@section('title', 'Pina Ecommerce')

@section('content')
<!-- home-slider -->
@include('user.layouts.components.banner-home')
<!-- info-boxes-slider -->
<div class="container">
    @include('user.layouts.components.info-boxes-slider')

    @include('user.layouts.components.categories-home-slider')
</div>

<section class="products-section pt-0">
    @include('user.layouts.components.products-slider', ['title' => 'Sản phẩm nổi bật', 'products' => $products])
</section>

<section class="products-section pt-0">
    @include('user.layouts.components.products-slider', ['title' => 'Sản phẩm mới', 'products' => $products])

    <div class="container">
        <div class="banner banner-big-sale appear-animate" data-animation-delay="200" data-animation-name="fadeInUpShorter" style="background: #2A95CB center/cover url('/assets/theme/client/images/demoes/demo4/banners/banner-4.jpg')">
            <div class="banner-content row align-items-center mx-0">
                <div class="col-md-9 col-sm-8">
                    <h2 class="text-white text-uppercase text-center text-sm-left ls-n-20 mb-md-0 px-4">
                        <b class="d-inline-block mr-3 mb-1 mb-md-0">Big Sale</b> All new fashion brands
                        items up to 70% off
                        <small class="text-transform-none align-middle">Online Purchases Only</small>
                    </h2>
                </div>
                <div class="col-md-3 col-sm-4 text-center text-sm-right">
                    <a class="btn btn-light btn-white btn-lg" href="category.html">View Sale</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="products-section pt-0">
    @include('user.layouts.components.products-slider', ['title' => 'Tất cả sản phẩm', 'products' => $products])
</section>

<section class="feature-boxes-container">
    <div class="container appear-animate" data-animation-name="fadeInUpShorter">
        <div class="row">
            <div class="col-md-4">
                <div class="feature-box px-sm-5 feature-box-simple text-center">
                    <div class="feature-box-icon">
                        <i class="icon-earphones-alt"></i>
                    </div>

                    <div class="feature-box-content p-0">
                        <h3>Hỗ trợ khách hàng</h3>
                        <h5>Bạn sẽ không cô đơn</h5>

                        <p>
                            Chúng tôi thực sự quan tâm đến bạn và trang web của bạn nhiều như bạn. Mua porto hoặc bất kỳ chủ đề nào khác từ chúng tôi, bạn nhận được hỗ trợ miễn phí 100%.
                        </p>
                    </div>
                    <!-- End .feature-box-content -->
                </div>
                <!-- End .feature-box -->
            </div>
            <!-- End .col-md-4 -->

            <div class="col-md-4">
                <div class="feature-box px-sm-5 feature-box-simple text-center">
                    <div class="feature-box-icon">
                        <i class="icon-credit-card"></i>
                    </div>

                    <div class="feature-box-content p-0">
                        <h3>Hoàn toàn có thể tùy chỉnh</h3>
                        <h5>Hàng tấn tùy chọn</h5>

                        <p>
                            Với Pina, bạn có thể tùy chỉnh bố cục, màu sắc và kiểu dáng chỉ trong vài phút. Bắt đầu tạo một trang web tuyệt vời ngay bây giờ!
                        </p>
                    </div>
                    <!-- End .feature-box-content -->
                </div>
                <!-- End .feature-box -->
            </div>
            <!-- End .col-md-4 -->

            <div class="col-md-4">
                <div class="feature-box px-sm-5 feature-box-simple text-center">
                    <div class="feature-box-icon">
                        <i class="icon-action-undo"></i>
                    </div>
                    <div class="feature-box-content p-0">
                        <h3>Quản trị viên mạnh mẽ</h3>
                        <h5>Rất hân hạnh được phục vụ bạn</h5>

                        <p>
                            Pina có các tính năng quản trị rất mạnh để giúp khách hàng xây dựng cửa hàng của riêng họ trong vài phút mà không có bất kỳ kỹ năng đặc biệt nào trong phát triển web.
                        </p>
                    </div>
                    <!-- End .feature-box-content -->
                </div>
                <!-- End .feature-box -->
            </div>
            <!-- End .col-md-4 -->
        </div>
        <!-- End .row -->
    </div>
    <!-- End .container-->
</section>

@endsection
