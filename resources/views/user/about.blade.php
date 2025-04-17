{{-- @extends('user.layouts.main')
@section('title')
    Giới thiệu
@endsection
@section('content')
    <!-- Begin Kenne's Breadcrumb Area -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>Khác</h2>
                <ul>
                    <li><a href="{{ route('home') }}">Trang Chủ</a></li>
<li class="active">Về Chúng Tôi</li>
</ul>
</div>
</div>
</div>
<!-- Kenne's Breadcrumb Area End Here -->
<!-- Begin Kenne's About Us Area -->
<div class="about-us-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-5">
                <div class="overview-img text-center img-hover_effect">
                    <a href="#">
                        <img class="img-full" src="assets/images/banner/4-4.jpg" alt="Kenne's About Us Image">
                        <img class="img-full" src="assets/images/slider/1-4.jpg" alt="Kenne's About Us Image">
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-7 d-flex align-items-center">
                <div class="overview-content">
                    <h2>Chào mừng bạn đến với <span>Pina</span> Store!</h2>
                    <p class="short_desc">Pinastore là hệ thống cửa hàng chuyên cung cấp các dòng điện
                        thoại chính hãng với giá cả hợp lý, cam kết mang đến cho khách hàng những sản
                        phẩm chất lượng và dịch vụ tốt nhất.
                    </p>
                    <p class="h2">Tại Sao Chọn Pinastore?</p>
                    <span>✅ Sản phẩm chính hãng 100% – Cam kết cung cấp điện thoại từ các thương hiệu uy tín như Apple, Samsung, Xiaomi, Oppo, v.v.<br>
                        ✅ Giá cả cạnh tranh – Luôn mang đến giá tốt nhất cùng nhiều chương trình khuyến mãi hấp dẫn.<br>
                        ✅ Bảo hành uy tín – Hỗ trợ bảo hành theo chính sách chính hãng, đổi trả linh hoạt.<br>
                        ✅ Dịch vụ chuyên nghiệp – Đội ngũ nhân viên tận tâm, sẵn sàng hỗ trợ khách hàng 24/7.<br>
                        ✅ Giao hàng nhanh chóng – Giao hàng tận nơi, kiểm tra hàng trước khi thanh toán.</span>
                    <div class="kenne-about-us_btn-area"><br>
                        <a class="about-us_btn" href="{{route('pageCategory')}}">Mua Ngay</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Kenne's About Us Area End Here -->

<!-- Begin Kenne's Project Countdown Area -->
<div class="project-count-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-count text-center">
                    <div class="count-icon">
                        <span class="ion-ios-briefcase-outline"></span>
                    </div>
                    <div class="count-title">
                        <h2 class="count">2169</h2>
                        <span>Project Done</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-count text-center">
                    <div class="count-icon">
                        <span class="ion-ios-wineglass-outline"></span>
                    </div>
                    <div class="count-title">
                        <h2 class="count">869</h2>
                        <span>Awards Winned</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-count text-center">
                    <div class="count-icon">
                        <span class="ion-ios-lightbulb-outline"></span>
                    </div>
                    <div class="count-title">
                        <h2 class="count">689</h2>
                        <span>Hours Worked</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-count text-center">
                    <div class="count-icon">
                        <span class="ion-happy-outline"></span>
                    </div>
                    <div class="count-title">
                        <h2 class="count">2169</h2>
                        <span>Happy Customer</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Kenne's Project Countdown Area End Here -->

<!-- Begin Kenne's Team Area -->
<div class="team-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_title-2">
                    <h3>Thành Viên Nhóm</h3>
                </div>
            </div>
        </div> <!-- section title end -->
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-member">
                    <div class="team-thumb img-hover_effect">
                        <a href="#">
                            <img src="assets/images/about-us/team/1.jpg" alt="Our Team Member">
                        </a>
                    </div>
                    <div class="team-content text-center">
                        <h3>Edwin Adams</h3>
                        <p>IT Expert</p>
                        <a href="#">info@example.com</a>
                        <div class="kenne-social_link">
                            <ul>
                                <li class="facebook">
                                    <a href="https://www.facebook.com/" data-bs-toggle="tooltip" target="_blank" title="Facebook">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="twitter">
                                    <a href="https://twitter.com/" data-bs-toggle="tooltip" target="_blank" title="Twitter">
                                        <i class="fab fa-twitter-square"></i>
                                    </a>
                                </li>
                                <li class="youtube">
                                    <a href="https://www.youtube.com/" data-bs-toggle="tooltip" target="_blank" title="Youtube">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                                <li class="google-plus">
                                    <a href="https://www.plus.google.com/discover" data-bs-toggle="tooltip" target="_blank" title="Google Plus">
                                        <i class="fab fa-google-plus"></i>
                                    </a>
                                </li>
                                <li class="instagram">
                                    <a href="https://rss.com/" data-bs-toggle="tooltip" target="_blank" title="Instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!-- end single team member -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-member">
                    <div class="team-thumb img-hover_effect">
                        <a href="#">
                            <img src="assets/images/about-us/team/2.jpg" alt="Our Team Member">
                        </a>
                    </div>
                    <div class="team-content text-center">
                        <h3>Anny Adams</h3>
                        <p>Web Designer</p>
                        <a href="#">info@example.com</a>
                        <div class="kenne-social_link">
                            <ul>
                                <li class="facebook">
                                    <a href="https://www.facebook.com/" data-bs-toggle="tooltip" target="_blank" title="Facebook">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="twitter">
                                    <a href="https://twitter.com/" data-bs-toggle="tooltip" target="_blank" title="Twitter">
                                        <i class="fab fa-twitter-square"></i>
                                    </a>
                                </li>
                                <li class="youtube">
                                    <a href="https://www.youtube.com/" data-bs-toggle="tooltip" target="_blank" title="Youtube">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                                <li class="google-plus">
                                    <a href="https://www.plus.google.com/discover" data-bs-toggle="tooltip" target="_blank" title="Google Plus">
                                        <i class="fab fa-google-plus"></i>
                                    </a>
                                </li>
                                <li class="instagram">
                                    <a href="https://rss.com/" data-bs-toggle="tooltip" target="_blank" title="Instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!-- end single team member -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-member">
                    <div class="team-thumb img-hover_effect">
                        <a href="#">
                            <img src="assets/images/about-us/team/1.jpg" alt="Our Team Member">
                        </a>
                    </div>
                    <div class="team-content text-center">
                        <h3>Edvin Adams</h3>
                        <p>Content Writer</p>
                        <a href="javascript:void(0)">info@example.com</a>
                        <div class="kenne-social_link">
                            <ul>
                                <li class="facebook">
                                    <a href="https://www.facebook.com/" data-bs-toggle="tooltip" target="_blank" title="Facebook">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="twitter">
                                    <a href="https://twitter.com/" data-bs-toggle="tooltip" target="_blank" title="Twitter">
                                        <i class="fab fa-twitter-square"></i>
                                    </a>
                                </li>
                                <li class="youtube">
                                    <a href="https://www.youtube.com/" data-bs-toggle="tooltip" target="_blank" title="Youtube">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                                <li class="google-plus">
                                    <a href="https://www.plus.google.com/discover" data-bs-toggle="tooltip" target="_blank" title="Google Plus">
                                        <i class="fab fa-google-plus"></i>
                                    </a>
                                </li>
                                <li class="instagram">
                                    <a href="https://rss.com/" data-bs-toggle="tooltip" target="_blank" title="Instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!-- end single team member -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-member">
                    <div class="team-thumb img-hover_effect">
                        <a href="#">
                            <img src="assets/images/about-us/team/2.jpg" alt="Our Team Member">
                        </a>
                    </div>
                    <div class="team-content text-center">
                        <h3>Eddy Adams</h3>
                        <p>Marketing officer</p>
                        <a href="#">info@example.com</a>
                        <div class="kenne-social_link">
                            <ul>
                                <li class="facebook">
                                    <a href="https://www.facebook.com/" data-bs-toggle="tooltip" target="_blank" title="Facebook">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="twitter">
                                    <a href="https://twitter.com/" data-bs-toggle="tooltip" target="_blank" title="Twitter">
                                        <i class="fab fa-twitter-square"></i>
                                    </a>
                                </li>
                                <li class="youtube">
                                    <a href="https://www.youtube.com/" data-bs-toggle="tooltip" target="_blank" title="Youtube">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                                <li class="google-plus">
                                    <a href="https://www.plus.google.com/discover" data-bs-toggle="tooltip" target="_blank" title="Google Plus">
                                        <i class="fab fa-google-plus"></i>
                                    </a>
                                </li>
                                <li class="instagram">
                                    <a href="https://rss.com/" data-bs-toggle="tooltip" target="_blank" title="Instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!-- end single team member -->
        </div>
    </div>
</div>
<!-- Kenne's Team Area End Here -->

<!-- Begin Brand Area -->
<div class="brand-area ">
    <div class="container">
        <div class="brand-nav border-top ">
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
                            <a href="javascript:void(0)">
                                <img src="assets/images/brand/1.png" alt="Brand Images">
                            </a>
                        </div>
                        <div class="brand-item">
                            <a href="javascript:void(0)">
                                <img src="assets/images/brand/2.png" alt="Brand Images">
                            </a>
                        </div>
                        <div class="brand-item">
                            <a href="javascript:void(0)">
                                <img src="assets/images/brand/3.png" alt="Brand Images">
                            </a>
                        </div>
                        <div class="brand-item">
                            <a href="javascript:void(0)">
                                <img src="assets/images/brand/4.png" alt="Brand Images">
                            </a>
                        </div>
                        <div class="brand-item">
                            <a href="javascript:void(0)">
                                <img src="assets/images/brand/5.png" alt="Brand Images">
                            </a>
                        </div>
                        <div class="brand-item">
                            <a href="javascript:void(0)">
                                <img src="assets/images/brand/6.png" alt="Brand Images">
                            </a>
                        </div>
                        <div class="brand-item">
                            <a href="javascript:void(0)">
                                <img src="assets/images/brand/1.png" alt="Brand Images">
                            </a>
                        </div>
                        <div class="brand-item">
                            <a href="javascript:void(0)">
                                <img src="assets/images/brand/2.png" alt="Brand Images">
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scroll To Top Start -->
<a class="scroll-to-top" href="#"><i class="ion-chevron-up"></i></a>
@endsection --}}


@extends('user.layouts.master')
@section('title', 'About')
@section('content')

<div class="page-header page-header-bg text-left" style="background: 50%/cover #D4E1EA url('theme/client/images/page-header-bg.jpg');">
    <div class="container">
        <h1><span>ABOUT US</span>
            OUR COMPANY</h1>
        <a href="contact.html" class="btn btn-dark">Contact</a>
    </div>
</div>

<nav aria-label="breadcrumb" class="breadcrumb-nav">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="demo4.html"><i class="icon-home"></i></a></li>
            <li class="breadcrumb-item active" aria-current="page">About Us</li>
        </ol>
    </div><!-- End .container -->
</nav>

<div class="about-section">
    <div class="container">
        <h2 class="subtitle">OUR STORY</h2>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
            of type and scrambled it to make a type specimen book. It has survived not only five centuries,
            but also the leap into electronic typesetting, remaining essentially unchanged.</p>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
            of type and scrambled it to make a type specimen book.</p>

        <p class="lead">“ Many desktop publishing packages and web page editors now use Lorem Ipsum as their
            default model search for evolved over sometimes by accident, sometimes on purpose ”</p>
    </div><!-- End .container -->
</div><!-- End .about-section -->

<div class="features-section bg-gray">
    <div class="container">
        <h2 class="subtitle">WHY CHOOSE US</h2>
        <div class="row">
            <div class="col-lg-4">
                <div class="feature-box bg-white">
                    <i class="icon-shipped"></i>

                    <div class="feature-box-content p-0">
                        <h3>Free Shipping</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum has been the industr.</p>
                    </div><!-- End .feature-box-content -->
                </div><!-- End .feature-box -->
            </div><!-- End .col-lg-4 -->

            <div class="col-lg-4">
                <div class="feature-box bg-white">
                    <i class="icon-us-dollar"></i>

                    <div class="feature-box-content p-0">
                        <h3>100% Money Back Guarantee</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum has been the industr.</p>
                    </div><!-- End .feature-box-content -->
                </div><!-- End .feature-box -->
            </div><!-- End .col-lg-4 -->

            <div class="col-lg-4">
                <div class="feature-box bg-white">
                    <i class="icon-online-support"></i>

                    <div class="feature-box-content p-0">
                        <h3>Online Support 24/7</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum has been the industr.</p>
                    </div><!-- End .feature-box-content -->
                </div><!-- End .feature-box -->
            </div><!-- End .col-lg-4 -->
        </div><!-- End .row -->
    </div><!-- End .container -->
</div><!-- End .features-section -->

<div class="testimonials-section">
    <div class="container">
        <h2 class="subtitle text-center">HAPPY CLIENTS</h2>

        <div class="testimonials-carousel owl-carousel owl-theme images-left" data-owl-options="{
            'margin': 20,
            'lazyLoad': true,
            'autoHeight': true,
            'dots': false,
            'responsive': {
                '0': {
                    'items': 1
                },
                '992': {
                    'items': 2
                }
            }
        }">
            <div class="testimonial">
                <div class="testimonial-owner">
                    <figure>
                        <img src="{{ asset('theme/client/images/clients/client1.png') }}" alt="client">
                    </figure>

                    <div>
                        <strong class="testimonial-title">John Smith</strong>
                        <span>SMARTWAVE CEO</span>
                    </div>
                </div><!-- End .testimonial-owner -->

                <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur elitad adipiscing Cras non placerat mipsum
                        dolor sit amet, consectetur elitad adipiscing cas non placerat mi.</p>
                </blockquote>
            </div><!-- End .testimonial -->

            <div class="testimonial">
                <div class="testimonial-owner">
                    <figure>
                        <img src="{{ asset('theme/client/images/clients/client2.png') }}" alt="client">
                    </figure>

                    <div>
                        <strong class="testimonial-title">Bob Smith</strong>
                        <span>SMARTWAVE CEO</span>
                    </div>
                </div><!-- End .testimonial-owner -->

                <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur elitad adipiscing Cras non placerat mipsum
                        dolor sit amet, consectetur elitad adipiscing cas non placerat mi.</p>
                </blockquote>
            </div><!-- End .testimonial -->

            <div class="testimonial">
                <div class="testimonial-owner">
                    <figure>
                        <img src="{{ asset('theme/client/images/clients/client1.png') }}" alt="client">
                    </figure>

                    <div>
                        <strong class="testimonial-title">John Smith</strong>
                        <span>SMARTWAVE CEO</span>
                    </div>
                </div><!-- End .testimonial-owner -->

                <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur elitad adipiscing Cras non placerat mipsum
                        dolor sit amet, consectetur elitad adipiscing cas non placerat mi.</p>
                </blockquote>
            </div><!-- End .testimonial -->
        </div><!-- End .testimonials-slider -->
    </div><!-- End .container -->
</div><!-- End .testimonials-section -->

<div class="counters-section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-6 col-md-4 count-container">
                <div class="count-wrapper">
                    <span class="count-to" data-from="0" data-to="200" data-speed="2000" data-refresh-interval="50">200</span>+
                </div><!-- End .count-wrapper -->
                <h4 class="count-title">MILLION CUSTOMERS</h4>
            </div><!-- End .col-md-4 -->

            <div class="col-6 col-md-4 count-container">
                <div class="count-wrapper">
                    <span class="count-to" data-from="0" data-to="1800" data-speed="2000" data-refresh-interval="50">1800</span>+
                </div><!-- End .count-wrapper -->
                <h4 class="count-title">TEAM MEMBERS</h4>
            </div><!-- End .col-md-4 -->

            <div class="col-6 col-md-4 count-container">
                <div class="count-wrapper line-height-1">
                    <span class="count-to" data-from="0" data-to="24" data-speed="2000" data-refresh-interval="50">24</span><span>HR</span>
                </div><!-- End .count-wrapper -->
                <h4 class="count-title">SUPPORT AVAILABLE</h4>
            </div><!-- End .col-md-4 -->

            <div class="col-6 col-md-4 count-container">
                <div class="count-wrapper">
                    <span class="count-to" data-from="0" data-to="265" data-speed="2000" data-refresh-interval="50">265</span>+
                </div><!-- End .count-wrapper -->
                <h4 class="count-title">SUPPORT AVAILABLE</h4>
            </div><!-- End .col-md-4 -->

            <div class="col-6 col-md-4 count-container">
                <div class="count-wrapper line-height-1">
                    <span class="count-to" data-from="0" data-to="99" data-speed="2000" data-refresh-interval="50">99</span><span>%</span>
                </div><!-- End .count-wrapper -->
                <h4 class="count-title">SUPPORT AVAILABLE</h4>
            </div><!-- End .col-md-4 -->
        </div><!-- End .row -->
    </div><!-- End .container -->
</div><!-- End .counters-section -->

@endsection
