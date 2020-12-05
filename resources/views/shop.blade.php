<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    @section('title','Shop')
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
    <header class="app-header app-header-1 boxed light">
        <div class="header-nav bg-primary">
            @include('layouts.mainmenu')
        </div>
    </header>
    <!--/-->
    <!--Sidenav-->
    <div class="app-sidenav app-sidenav-1">
        @include('layouts.sidemainmenu')
        <span class="sidenav-close"></span>
    </div>
    <!--/-->
    <!--Shopping Cart-->
    <div class="app-shopping-cart app-shopping-cart-1">
        @include('layouts.cartlist')
    </div>
    <!--/-->
    <!--Banner-->
    <section class="section section-clearfix-1">
        <header class="el-banner el-banner-1 overlay overlay-color">
            <span class="bg-color bg-primary"></span>
            <div class="display-spacing">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 text-right">
                            <h1>Product Kami</h1>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                            <ul class="el-breadcrumbs el-breadcrumbs-1 text-light">
                                <li>
                                    <a href="{{route('home')}}">
                                        <span class="text">Beranda</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="active">
                                        <span class="text">Featured Products</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </section>
    <!--/-->
    <!--Products-->
    <section class="section section-products section-products-1">
        <div class="display-spacing">
            <div class="container">
                <div class="el-data-filters">
                    <div class="el-data-filters-links">
                        <ul>
                            <li data-filter="all" class="active">Product Kami</li>
                        </ul>
                    </div>
                    <div class="el-data-filters-content">
                        <ul class="row row-sm justify-content-md-center">
                            <!--Item-->
                            @foreach ($product as $item)
                            <li class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3" data-filter="products-1-3">
                                <div class="el-card el-card-product el-card-product-1 hover-1">
                                    <div class="image">
                                        <a href="{{route('product',$item->id)}}">
                                            <img src="{{asset('assets/images/products/'.$item->gambar)}}"
                                                alt="--Alternative--" />
                                        </a>
                                    </div>
                                    <div class="details">
                                        <h3 class="title">
                                            <a href="{{route('product',$item->id)}}"
                                                title="Fila Locker Room Varsity Jacket">
                                                <span class="text">{{__($item->nama)}}</span>
                                            </a>
                                        </h3>
                                        <div class="footer">
                                            <p class="price">
                                                <span class="new-price">{{__('Rp '.$item->harga)}}</span>
                                            </p>
                                            <ul class="el-stars" title="4 Stars">
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
                                        </div>
                                    </div>
                                    <ul class="labels labels-left">
                                        <li>
                                            @if ($item->stok == 0)
                                            <span class="label label-text"
                                                style="background-color: #525252">{{__('Stok Habis')}} </span>
                                            @else
                                            <span class="label label-text bg-danger">{{__('Tersedia')}} </span>
                                            @endif
                                        </li>
                                    </ul>
                                    <ul class="labels labels-right">
                                        <li>
                                            <a href="#" class="label label-icon label-icon-wishlist"
                                                title="Add to wishlist">
                                                <i class="ti-heart"></i>
                                            </a>
                                        </li>
                                        <li>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            @endforeach
                            <!--/-->
                        </ul>
                    </div>
                </div>
                <div class="el-pagination text-center pt-space-half">
                    {{$product->links()}}
                </div>
            </div>
        </div>
        <!--Footer-->
        <footer class="app-footer app-footer-1">
            <div class="footer-copyright">
                <div class="container">
                    <p><span class="text-bold">WG FARM</span> sayuran dan buah segar</p>
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
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/plugins.min.js"></script>
        <script src="assets/js/main-scripts.js"></script>
        <script src="assets/js/custom.js"></script>
        <script src="assets/js/demo.js"></script>
        <!--/-->
</body>

</html>
