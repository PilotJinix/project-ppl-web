<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title>Orwell</title>
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
        <span class="sidenav-close"></span>
    </div>
    <!--/-->
    <!--Shopping Cart-->
    <div class="app-shopping-cart app-shopping-cart-1">
        @include('layouts.cartlist')
    </div>
    <!--/-->
    <!--Blog-->
    <section class="section section-single-post section-single-post-1">
        <div class="display-spacing display-spacing-plus">
            <div class="container">
                <div class="row row-md">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
                        <div class="page-content page-content-1">
                            <div class="single-post">
                                <div class="el-panel-body">
                                    <div class="image">
                                        <img src="{{asset('assets/images/blog/'.$blog->gambar)}}"
                                            alt="--Alternative for single post image--">
                                    </div>
                                    <div class="details">
                                        <h1>{{__($blog->judul)}}</h1>
                                        {{__($blog->deskripsi)}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Sidebar-->
                    <aside class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                        <!--Widget-->
                        <div class="widget el-widget-posts el-panel">
                            <div class="widget-head el-panel-head">
                                <h3>Artikel Terbaru</h3>
                                <span class="line"></span>
                            </div>
                            <div class="widget-body el-panel-body">
                                <ul>
                                    @foreach ($latestBlog as $item)
                                    <li>
                                        <a href="{{route('blog-detail', $item->id)}}">
                                            <div class="row row-sm">
                                                <div class="col-4">
                                                    <div class=" overlay-image">
                                                        <img src="{{asset('assets/images/blog/'.$item->gambar)}}"
                                                            alt="--bg--">
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="details">
                                                        <h4>{{__($item->judul)}}</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <!--/-->
                    </aside>
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
                <p><span class="text-bold">WGFARM</span> organic and wellness.</p>
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
                <li class="afra-demo-color-1" style="background-color: orange;"></li>
                <li class="afra-demo-color-2" style="background-color: #de5881;"></li>
                <li class="afra-demo-color-3" style="background-color: #0b7554;"></li>
                <li class="afra-demo-color-4" style="background-color: #7b1f29;"></li>
                <li class="afra-demo-color-5" style="background-color: #00b7b8;"></li>
                <li class="afra-demo-color-6" style="background-color: #33b5e5;"></li>
            </ul>
            <ul class="afra-demo-colors">
                <li class="afra-demo-color-7" style="background-color: #1d3268;"></li>
                <li class="afra-demo-color-8" style="background-color: #00897b;"></li>
                <li class="afra-demo-color-9" style="background-color: #ff5e14;"></li>
                <li class="afra-demo-color-10" style="background-color: #fdb415;"></li>
                <li class="afra-demo-color-11" style="background-color: #c89454;"></li>
                <li class="afra-demo-color-12" style="background-color: hotpink;"></li>
            </ul>
            <ul class="afra-demo-colors">
                <li class="afra-demo-color-13" style="background-color: #ac5f33;"></li>
                <li class="afra-demo-color-14" style="background-color: #e79e7e;"></li>
                <li class="afra-demo-color-15" style="background-color: #ffcdb4;"></li>
                <li class="afra-demo-color-16" style="background-color: #e8a384;"></li>
                <li class="afra-demo-color-17" style="background-color: #f9b689;"></li>
                <li class="afra-demo-color-18" style="background-color: #ffcba6;"></li>
            </ul>
            <ul class="afra-demo-colors">
                <li class="afra-demo-color-19" style="background-color: #a45223;"></li>
                <li class="afra-demo-color-20" style="background-color: #d88c75;"></li>
                <li class="afra-demo-color-21" style="background-color: #f7c3b6;"></li>
                <li class="afra-demo-color-22" style="background-color: #dc9263;"></li>
                <li class="afra-demo-color-23" style="background-color: #e9b876;"></li>
                <li class="afra-demo-color-24" style="background-color: #d78150;"></li>
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
