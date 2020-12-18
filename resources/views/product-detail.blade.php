<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    @section('title','Product Detail')
    @include('layouts.head')
</head>

<body>
    <!--Preloader-->
    <div id="preloader" class="preloader">
        <div class="preloader-inner">
            <div class="preloader-6">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <!--/-->
    <!--Header-->
    <header class="app-header app-header-1 ${props.class} light">
        <div class="header-nav bg-primary">
            @include('layouts.mainmenu')
        </div>
    </header>
    <!--/-->
    <!--Sidenav-->
    <div class="app-sidenav app-sidenav-1">
        @include('layouts.sidemainmenu')
    </div>
    <!--/-->
    <!--Shopping Cart-->
    <div class="app-shopping-cart app-shopping-cart-1">
        @include('layouts.cartlist');
    </div>
    <!--/-->
    <!--Checkout-->
    <section class="section section-page section-product-detail section-product-detail-1">
        <div class="display-spacing mt-space">
            <div class="container mb-space">
                <div class="row">
                    <!--Images-->
                    <div class="col-lg-6">
                        <div class="product-images">
                            @if ($product->stok == 0)
                            <div id="hoverEditFoto" class="hover-edit d-block" style="z-index: 100">
                                <div class="option text-center" style="background-color: transparent;border:none">
                                    <h2 style="font-weight: bolder">Stok Sudah Habis</h2>
                                </div>
                            </div>
                            @endif
                            <div class="el-slider el-slider-product-image el-slider-product-image-1">
                                <!-- Swiper -->
                                <div class="el-swiper-product-images el-swiper-product-images-1 swiper-container"
                                    data-slider-index="4">
                                    <div class="swiper-wrapper pb-100">
                                        <div class="swiper-slide">
                                            <div class="el-product-image">
                                                <img src="{{asset('assets/images/products/'.$product->gambar)}}"
                                                    data-zoom-image="{{asset('assets/images/products/'.$product->gambar)}}"
                                                    class="el-image-zoom" alt="--Alternative--" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="el-product-image">
                                                <img src="{{asset('assets/images/products/'.$product->gambar)}}"
                                                    data-zoom-image="{{asset('assets/images/products/'.$product->gambar)}}"
                                                    class="el-image-zoom" alt="--Alternative--" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="el-product-image">
                                                <img src="{{asset('assets/images/products/'.$product->gambar)}}"
                                                    data-zoom-image="{{asset('assets/images/products/'.$product->gambar)}}"
                                                    class="el-image-zoom" alt="--Alternative--" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="el-product-image">
                                                <img src="{{asset('assets/images/products/'.$product->gambar)}}"
                                                    data-zoom-image="{{asset('assets/images/products/'.$product->gambar)}}"
                                                    class="el-image-zoom" alt="--Alternative--" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Add Pagination -->
                                    <div class="el-swiper-dots"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/-->
                    <!--Details-->
                    <div class="col-lg-6">
                        <div class="product-detail social">
                            <h1>
                                {{__($product->nama)}}
                            </h1>
                            <div class="price">
                                <span class="title">{{__('Harga:')}}</span>
                                <span class="new-price">{{__('Rp '.$product->harga)}}</span>
                            </div>
                            <div class="product-table">
                                <ul>
                                    <li>
                                        <span class="var">{{__('Berat')}}</span>
                                        <span class="val">{{__($product->berat.' Kg')}}</span>
                                    </li>
                                    <li>
                                        <span class="var">{{__('Kondisi')}}</span>
                                        <span class="val">{{__($product->kondisi)}}</span>
                                    </li>
                                    <li>
                                        <span class="var">{{__('Stok')}}</span>
                                        <span class="val">{{__($product->stok.' Kg')}}</span>
                                    </li>
                                    <li>
                                        <span class="var">{{__('Kategori')}}</span>
                                        <span class="val">{{__($product->kategori)}}</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="row row-0">
                                <div class="col-12">
                                    @if ($product->stok == 0)
                                    <button class="button button-md button-block text-center" disabled
                                        style="background-color: #888888">
                                        <span class="ti-bag text-light"></span>
                                        <span class="text-light">BELI</span>
                                    </button>
                                    @else
                                    <a href="{{route('checkout-screen',$product->id)}}">
                                        <button class="button button-md button-block button-dark text-center">
                                            <span class="ti-bag"></span>
                                            <span class="text">BELI</span>
                                        </button>
                                    </a>
                                    @endif
                                </div>
                            </div>
                            <div class="shareit">
                                <ul class="el-social-icons block">
                                    <li class="bg-facebook">
                                        <a href="{{__($fbShare)}}" target="blank">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="bg-twitter">
                                        <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" target="blank"
                                            data-show-count="false"><i class="ti-twitter"></i></a>
                                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8">
                                        </script>
                                    </li>
                                    <li class="bg-instagram">
                                        <a href="#">
                                            <i class="ti-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--/-->
                </div>
            </div>
            <div class="container">
                <div class="el-tabs">
                    <!--Links-->
                    <div class="el-tabs-links el-tabs-links-2">
                        <ul>
                            <li class="active" data-tab-link="tab-1">
                                <span class="text">Description</span>
                            </li>
                            <li data-tab-link="tab-3">
                                <span class="text mr-2">{{__('Review')}}</span>
                                @if ($rataFinal == 5)
                                <i class="fa fa-star" style="color: goldenrod"></i>
                                <span>{{__(round($rataFinal,1))}}</span>
                                @endif
                                @if($rataFinal > 0 && $rataFinal < 5) <i class="fa fa-star-half-o"
                                    style="color: goldenrod"></i>
                                    <span>{{__(round($rataFinal,1))}}</span>
                                    @endif
                                    @if ($rataFinal == 0)
                                    <i class="fa fa-star-o" style="color: goldenrod"></i>
                                    <span>{{__(round($rataFinal,1))}}</span>
                                    @endif
                            </li>
                        </ul>
                    </div>
                    <!--/-->
                    <!--Content-->
                    <div class="el-tabs-content">
                        <ul>
                            <li class="active" data-tab-content="tab-1">
                                <div class="content">
                                    <h2>Product Infomation</h2>
                                    {!!$product->deskripsi!!}
                                </div>
                            </li>
                            <li data-tab-content="tab-3">
                                <div class="content">
                                    <h2>{{__('('.count($review).') '.' Review for this product')}}</h2>
                                    @foreach ($review as $item)
                                    <div class="el-comments">
                                        <ul>
                                            <li>
                                                <div class="el-comments-avatar">
                                                    <img src="{{asset('assets/images/people/'.$item->foto)}}"
                                                        alt="Foto Profile" />
                                                </div>
                                                <div class="el-comments-content">
                                                    <div class="el-comments-info">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <span
                                                                    class="el-comments-author">{{__($item->nama_lengkap)}}</span>
                                                            </div>
                                                            <div class="col-6 text-right d-rtl">
                                                                <span
                                                                    class="el-comments-date">{{__($item->created_at)}}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p>
                                                        {{__($item->review)}}
                                                    </p>
                                                    @if ($item->rating == 5)
                                                    <ul class="el-stars">
                                                        <li>
                                                            <i class="ti-star active"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ti-star active"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ti-star active"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ti-star active"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ti-star active"></i>
                                                        </li>
                                                    </ul>
                                                    @endif
                                                    @if ($item->rating == 4)
                                                    <ul class="el-stars">
                                                        <li>
                                                            <i class="ti-star active"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ti-star active"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ti-star active"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ti-star active"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ti-star"></i>
                                                        </li>
                                                    </ul>
                                                    @endif
                                                    @if ($item->rating == 3)
                                                    <ul class="el-stars">
                                                        <li>
                                                            <i class="ti-star active"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ti-star active"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ti-star active"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ti-star "></i>
                                                        </li>
                                                        <li>
                                                            <i class="ti-star"></i>
                                                        </li>
                                                    </ul>
                                                    @endif
                                                    @if ($item->rating == 2)
                                                    <ul class="el-stars">
                                                        <li>
                                                            <i class="ti-star active"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ti-star active"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ti-star "></i>
                                                        </li>
                                                        <li>
                                                            <i class="ti-star "></i>
                                                        </li>
                                                        <li>
                                                            <i class="ti-star "></i>
                                                        </li>
                                                    </ul>
                                                    @endif
                                                    @if ($item->rating == 1)
                                                    <ul class="el-stars">
                                                        <li>
                                                            <i class="ti-star active"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ti-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ti-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ti-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ti-star"></i>
                                                        </li>
                                                    </ul>
                                                    @endif
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    @endforeach
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--/-->
                </div>
            </div>
        </div>
    </section>
    <!--/-->

    <!--Footer-->
    <footer class="app-footer app-footer-1">
        <div class="footer-copyright">
            <div class="container">
                <p><span class="text-bold">WG FARM</span> organic and wellness.</p>
                <p class="text-2">© 2020 All Rights Reserved</p>
            </div>
        </div>
    </footer>
    <!--/-->
    <div class="afra-demo">
        <div class="afra-demo-panel">
            <span class="afra-demo-close">
                <i class="ti-close"></i>
            </span>
            <span class="afra-demo-title">Demo Options</span>
            <span class="afra-demo-subtitle">- Color Schemes</span>
            <ul class="afra-demo-colors">
                <li class="afra-demo-color-1" style="background-color: orange"></li>
                <li class="afra-demo-color-2" style="background-color: #de5881"></li>
                <li class="afra-demo-color-3" style="background-color: #0b7554"></li>
                <li class="afra-demo-color-4" style="background-color: #7b1f29"></li>
                <li class="afra-demo-color-5" style="background-color: #00b7b8"></li>
                <li class="afra-demo-color-6" style="background-color: #33b5e5"></li>
            </ul>
            <ul class="afra-demo-colors">
                <li class="afra-demo-color-7" style="background-color: #1d3268"></li>
                <li class="afra-demo-color-8" style="background-color: #00897b"></li>
                <li class="afra-demo-color-9" style="background-color: #ff5e14"></li>
                <li class="afra-demo-color-10" style="background-color: #fdb415"></li>
                <li class="afra-demo-color-11" style="background-color: #c89454"></li>
                <li class="afra-demo-color-12" style="background-color: hotpink"></li>
            </ul>
            <ul class="afra-demo-colors">
                <li class="afra-demo-color-13" style="background-color: #ac5f33"></li>
                <li class="afra-demo-color-14" style="background-color: #e79e7e"></li>
                <li class="afra-demo-color-15" style="background-color: #ffcdb4"></li>
                <li class="afra-demo-color-16" style="background-color: #e8a384"></li>
                <li class="afra-demo-color-17" style="background-color: #f9b689"></li>
                <li class="afra-demo-color-18" style="background-color: #ffcba6"></li>
            </ul>
            <ul class="afra-demo-colors">
                <li class="afra-demo-color-19" style="background-color: #a45223"></li>
                <li class="afra-demo-color-20" style="background-color: #d88c75"></li>
                <li class="afra-demo-color-21" style="background-color: #f7c3b6"></li>
                <li class="afra-demo-color-22" style="background-color: #dc9263"></li>
                <li class="afra-demo-color-23" style="background-color: #e9b876"></li>
                <li class="afra-demo-color-24" style="background-color: #d78150"></li>
            </ul>
        </div>
        <div class="afra-demo-toggle">
            <i class="ti-settings"></i>
        </div>
    </div>
    <!--Scripts-->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins.min.js')}}"></script>
    <script src="{{asset('assets/js/main-scripts.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <script src="{{asset('assets/js/demo.js')}}"></script>
    <!--/-->
</body>

</html>
