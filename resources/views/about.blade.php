<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    @section('title','About')
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
            <span class="bg-color bg-primary "></span>
            <div class="display-spacing">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 text-right">
                            <h1>About Us</h1>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                            <ul class="el-breadcrumbs el-breadcrumbs-1 text-light">
                                <li>
                                    <a href="home-1.html">
                                        <span class="text">Home</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="active">
                                        <span class="text">About</span>
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
    <!--About-->
    <section class="section section-about section-about-1">
        <div class="display-spacing">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="display-spacing custom-table">
                            <header class="el-heading el-heading-3">
                                <h2>We Are 100% Trustable <br /> And Provide <span class="text-primary">Fast Delivery</span></h2>
                            </header>
                            <div class="el-content">
                                <p>Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.</p>
                                <p>Phasellus gravida semper nisi. Nullam vel sem. Pellentesque libero tortor, tincidunt et, tincidunt eget, semper nec, quam. </p>
                                <a href="page-contact.html" class="button button-md button-primary" target="_blank">
                                    <span class="text">Get in Touch</span>
                                </a>
                                <a href="page-contact.html" class="button button-md button-line-primary" target="_blank">
                                    <span class="text">Contact Us</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row row-md row-custom">
                            <div class="col-6">
                                <div class="row row-lg row-custom">
                                    <div class="col-12">
                                        <div class="item pt-100pe bg-color-2">
                                            <div class="display-center">
                                                <div class="item-inner">
                                                    <span class="numbers">1830</span>
                                                    <h3>HAPPY CLIENTS</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="item pt-100pe bg-secondary">
                                            <div class="display-center">
                                                <div class="item-inner">
                                                    <span class="numbers">540</span>
                                                    <h3>FINISHED PROJECTS</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 mt--30">
                                <div class="row row-lg row-custom">
                                    <div class="col-12">
                                        <div class="item pt-100pe bg-color-5">
                                            <div class="display-center">
                                                <div class="item-inner">
                                                    <span class="numbers">96</span>
                                                    <h3>EXPERTS</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="item pt-100pe bg-color-6">
                                            <div class="display-center">
                                                <div class="item-inner">
                                                    <span class="numbers">1080</span>
                                                    <h3>POSTS</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/plugins.min.js"></script>
    <script src="assets/js/main-scripts.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/demo.js"></script>
    <!--/-->
</body>
</html>