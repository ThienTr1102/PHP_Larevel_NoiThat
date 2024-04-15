@extends('main')

@section('content')
    <style>
        .block1-txt-child1 {
            position: absolute; /* Đặt phần tử con là absolute */
            top: 50%; /* Đặt top là 50% */
            left: 50%; /* Đặt left là 50% */
            transform: translate(-50%, -50%); /* Dịch chuyển phần tử con đi -50% theo cả hai chiều, để căn giữa */
            background-color: transparent;
            border-radius: 40px;
            padding: 20px;
            display: inline-block;
            transition: background-color 0.3s;
            text-align: center;
        }
        .block1 {
            position: relative;
            border: 1px solid #e6e6e6;
            border-radius: 40px;
            overflow: hidden;
        }
        .block1-txt:hover {
            background-color: rgba(79, 60, 45, 0.344);
        }
        .block1-txt-child1 .background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: white;
            border-radius: 40px;
            z-index: -1; /* Đảm bảo nền trắng nằm dưới văn bản */
        }
    </style>
    <!-- Location Section -->
{{--    <section class="location-home">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-6 col-sm-6 col-xs-12">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-lg-1 col-md-1 col-sm-2 col-xs-1">--}}
{{--                            <img src="/template/images/icon-location.png" width="16" height="21">--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-11 col-md-11 col-sm-10 col-xs-11">--}}
{{--                            <p>--}}
{{--                                <b>Showrom:</b> 43 Cây keo, Tam Phú, Thủ Đức, TP.HCM (08h00 - 20h00, T2 - CN)--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6 col-sm-6 col-xs-12">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-lg-1 col-md-1 col-sm-2 col-xs-1">--}}
{{--                            <img src="/template/images/icon-phone.png" width="21" height="21">--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-11 col-md-11 col-sm-10 col-xs-11">--}}
{{--                            <p class="hotline">--}}
{{--                                <b>Hotline:</b> <a>0962487159 (call, zalo 24/7)</a>--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- Slider -->
    <section class="section-slide">
        <div class="wrap-slick1">
            <div class="slick1">

                @foreach($sliders as $slider)

                    <div class="item-slick1" style="background-image: url({{ $slider->thumb }});">
                        <div class="container h-full">
                            <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                                <div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
                            <span class="ltext-101 cl2 respon2">
                                HOT 2024
                            </span>
                                </div>

                                <div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
                                    <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
                                        {{ $slider->name }}
                                    </h2>
                                </div>

                                <div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
                                    <a href="{{ $slider->url }}" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                        Shop Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <!-- Banner -->
    <div class="sec-banner bg0 p-t-80 p-b-50">
        <div class="container">
            <div class="row" >
{{--                @foreach($menus as $menu)--}}
{{--                    <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">--}}
{{--                        <!-- Block1 -->--}}
{{--                        <div class="block1 wrap-pic-w">--}}
{{--                            <img src="/template/images/phongkhach.png">--}}

{{--                            <a href="/danh-muc/{{ $menu->id }}-{{ \Str::slug($menu->name, '-') }}.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">--}}
{{--                                <div class="block1-txt-child1 flex-col-l">--}}
{{--                            <span class="block1-name ltext-102 trans-04 p-b-8">--}}
{{--                                {{ $menu->name }}--}}
{{--                            </span>--}}

{{--                                    <span class="block1-info stext-102 trans-04">--}}
{{--                                HOT 2024--}}
{{--                            </span>--}}
{{--                                </div>--}}

{{--                                <div class="block1-txt-child2 p-b-4 trans-05">--}}
{{--                                    <div class="block1-link stext-101 cl0 trans-09">--}}
{{--                                        Shop Now--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--                =================================================================--}}
                <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                    <!-- Block1 -->
                    <div class="block1 wrap-pic-w">
                        <img src="/template/images/trangtria.jpg">

                        <a href="/danh-muc/6-do-trang-tri.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                            <div class="block1-txt-child1 flex-col-l">
                            <span class="block1-name ltext-102 trans-04 p-b-8">
{{--                                Đồ Trang Trí--}}
                            </span>

                                <span class="block1-info stext-102 trans-04">
{{--                                HOT 2024--}}
                            </span>
                            </div>

                            <div class="block1-txt-child2 p-b-4 trans-05">
                                <div class="block1-link stext-101 cl0 trans-09">
                                    Shop Now
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                    <!-- Block1 -->
                    <div class="block1 wrap-pic-w">
                        <img src="/template/images/phongkhacha.jpg">

                        <a href="/danh-muc/1-phong-khach.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                            <div class="block1-txt-child1 flex-col-l">
                            <span class="block1-name ltext-102 trans-04 p-b-8">
{{--                                Phòng Khách--}}
                            </span>

                                <span class="block1-info stext-102 trans-04">
{{--                                HOT 2024--}}
                            </span>
                            </div>

                            <div class="block1-txt-child2 p-b-4 trans-05">
                                <div class="block1-link stext-101 cl0 trans-09">
                                    Shop Now
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                    <!-- Block1 -->
                    <div class="block1 wrap-pic-w">
                        <img src="/template/images/phonglamvieca.jpg">

                        <a href="/danh-muc/5-phong-lam-viec.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                            <div class="block1-txt-child1 flex-col-l">
                            <span class="block1-name ltext-102 trans-04 p-b-8">
{{--                                Phòng Làm Việc--}}
                            </span>

                                <span class="block1-info stext-102 trans-04">
{{--                                HOT 2024--}}
                            </span>
                            </div>

                            <div class="block1-txt-child2 p-b-4 trans-05">
                                <div class="block1-link stext-101 cl0 trans-09">
                                    Shop Now
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                    <!-- Block1 -->
                    <div class="block1 wrap-pic-w">
                        <img src="/template/images/phongngua.jpg">

                        <a href="/danh-muc/3-phong-ngu.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                            <div class="block1-txt-child1 flex-col-l">
                            <span class="block1-name ltext-102 trans-04 p-b-8">
{{--                                Phòng Ngủ--}}
                            </span>

                                <span class="block1-info stext-102 trans-04">
{{--                                HOT 2024--}}
                            </span>
                            </div>

                            <div class="block1-txt-child2 p-b-4 trans-05">
                                <div class="block1-link stext-101 cl0 trans-09">
                                    Shop Now
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                    <!-- Block1 -->
                    <div class="block1 wrap-pic-w">
                        <img src="/template/images/ngoaithata.jpg">

                        <a href="/danh-muc/23-ngoai-that.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                            <div class="block1-txt-child1 flex-col-l">
                            <span class="block1-name ltext-102 trans-04 p-b-8">
{{--                                Ngoại Thất--}}
                            </span>

                                <span class="block1-info stext-102 trans-04">
{{--                                HOT 2024--}}
                            </span>
                            </div>

                            <div class="block1-txt-child2 p-b-4 trans-05">
                                <div class="block1-link stext-101 cl0 trans-09">
                                    Shop Now
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                    <!-- Block1 -->
                    <div class="block1 wrap-pic-w">
                        <img src="/template/images/phongbepa.jpg">

                        <a href="/danh-muc/2-phong-bep.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                            <div class="block1-txt-child1 flex-col-l">
                            <span class="block1-name ltext-102 trans-04 p-b-8">
{{--                                Phòng Bếp--}}
                            </span>

                                <span class="block1-info stext-102 trans-04">
{{--                                HOT 2024--}}
                            </span>
                            </div>

                            <div class="block1-txt-child2 p-b-4 trans-05">
                                <div class="block1-link stext-101 cl0 trans-09">
                                    Shop Now
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

{{--              ====================================================================  --}}
            </div>
        </div>
    </div>


    <!-- Product -->
    <section class="bg0 p-t-23 p-b-140" >
        <div class="container" >
            <div class="p-b-10">
                <h3 class="ltext-103 cl5" style="color: #4c1b0d;
    font-size: 35px;
    font-family: 'Raleway Bold';text-align: center;
    ">
                    All Products
                </h3>
            </div>


            <div class="flex-w flex-sb-m p-b-52">
                <div class="flex-w flex-l-m filter-tope-group m-tb-10">

                </div>
            </div>

            <div id="loadProduct">
                @include('products.list')
            </div>


            <!-- Load more -->
            <div class="flex-c-m flex-w w-full p-t-45" id="button-loadMore" style="color: #a00; ">
                <input type="hidden" value="1" id="page">
                <a onclick="loadMore()" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
                    Load More
                </a>
            </div>
        </div>
    </section>

{{--    <!-- Login and Register Buttons -->--}}
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-md-6">--}}
{{--                <div class="text-center">--}}
{{--                    <a href="{{ route('login') }}" class="btn btn-primary mr-2">Login</a>--}}
{{--                    <a href="{{ route('register') }}" class="btn btn-success">Register</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

@endsection
