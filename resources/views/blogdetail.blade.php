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
                                        {!!$blog->deskripsi!!}
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

    <!--Scripts-->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins.min.js')}}"></script>
    <script src="{{asset('assets/js/main-scripts.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <script src="{{asset('assets/js/demo.js')}}"></script>
    <!--/-->
</body>

</html>
