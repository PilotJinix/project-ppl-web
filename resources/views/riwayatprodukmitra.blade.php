<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
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

    <section class="section">
        <div class="display-spacing">
            <div class="container mb-4">
                <div class="row row-0">
                    <div class="m-auto">
                        <h2 class="text-bold">Riwayat Ajuan Mitra</h2>
                    </div>
                </div>
            </div>
            @foreach ($detail as $item)
            <div class="container">
                <div class="row row-0 mb-4">
                    <div class="border rounded p-4 w-75 m-auto shadow">
                        <div class="row row-0">
                            <div class="col-2">
                                <img src="{{asset($item->foto_produk)}}" alt="gambar" width="100px">
                            </div>
                            <div class="col-6">
                                <h5 class="text-bold">{{__($item->nama_produk)}}</h5>
                                <small style="font-size: 9px" class="fa fa-genderless" aria-hidden="true"></small>
                                @if ($item->status == 'Menunggu')
                                <small class="text-danger">{{_($item->status)}}</small>
                                @endif
                                @if ($item->status == 'Checking')
                                <small class="text-warning">{{_($item->status)}}</small>
                                @endif
                                @if ($item->status == 'Diterima')
                                <small class="text-success">{{_($item->status)}}</small>
                                @endif
                            </div>
                            <div class="col-4">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>



    <!--Footer-->
    <footer class="app-footer app-footer-1" style="position: absolute;bottom:0">
        <div class="footer-copyright">
            <div class="container">
                <p><span class="text-bold">WG Farm</span> organic and wellness.</p>
                <p class="text-2">© 2020 All Rights Reserved</p>
            </div>
        </div>
    </footer>
    <!--/-->
    @if (session()->has('success'))
    <div id="success-review" class="position-absolute bg-success rounded p-2 pl-5 pr-5 text-light"
        style="top: 18%;left: 50%;transform: translate(-50%,-18%)">
        <span>{{__(session()->get('success'))}}</span>
    </div>
    @endif
    <!--Scripts-->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins.min.js')}}"></script>
    <script src="{{asset('assets/js/main-scripts.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <script src="{{asset('assets/js/demo.js')}}"></script>
    <script src="{{asset('js/multi-countdown.js')}}"></script>
    <script>
        $(document).ready(function () {
            setTimeout(function () {
                $("#success-review").fadeOut(3000);
            }, 2500);

            $('#star1').click(function () {
                $('#star1').removeClass('fa-star-o');
                $('#star1').addClass('fa-star');

                $('#star5').removeClass('fa-star');
                $('#star5').addClass('fa-star-o');
                $('#star4').removeClass('fa-star');
                $('#star4').addClass('fa-star-o');
                $('#star3').removeClass('fa-star');
                $('#star3').addClass('fa-star-o');
                $('#star2').removeClass('fa-star');
                $('#star2').addClass('fa-star-o');

                $('#rating').val(1);
            });
            $('#star2').click(function () {
                $('#star1').removeClass('fa-star-o');
                $('#star1').addClass('fa-star');
                $('#star2').removeClass('fa-star-o');
                $('#star2').addClass('fa-star');

                $('#star5').removeClass('fa-star');
                $('#star5').addClass('fa-star-o');
                $('#star4').removeClass('fa-star');
                $('#star4').addClass('fa-star-o');
                $('#star3').removeClass('fa-star');
                $('#star3').addClass('fa-star-o');
                $('#rating').val(2);
            });
            $('#star3').click(function () {
                $('#star1').removeClass('fa-star-o');
                $('#star1').addClass('fa-star');
                $('#star2').removeClass('fa-star-o');
                $('#star2').addClass('fa-star');
                $('#star3').removeClass('fa-star-o');
                $('#star3').addClass('fa-star');

                $('#star5').removeClass('fa-star');
                $('#star5').addClass('fa-star-o');
                $('#star4').removeClass('fa-star');
                $('#star4').addClass('fa-star-o');
                $('#rating').val(3);
            });
            $('#star4').click(function () {
                $('#star1').removeClass('fa-star-o');
                $('#star1').addClass('fa-star');
                $('#star2').removeClass('fa-star-o');
                $('#star2').addClass('fa-star');
                $('#star3').removeClass('fa-star-o');
                $('#star3').addClass('fa-star');
                $('#star4').removeClass('fa-star-o');
                $('#star4').addClass('fa-star');

                $('#star5').removeClass('fa-star');
                $('#star5').addClass('fa-star-o');
                $('#rating').val(4);
            });
            $('#star5').click(function () {
                $('#star1').removeClass('fa-star-o');
                $('#star1').addClass('fa-star');
                $('#star2').removeClass('fa-star-o');
                $('#star2').addClass('fa-star');
                $('#star3').removeClass('fa-star-o');
                $('#star3').addClass('fa-star');
                $('#star4').removeClass('fa-star-o');
                $('#star4').addClass('fa-star');
                $('#star5').removeClass('fa-star-o');
                $('#star5').addClass('fa-star');

                $('#rating').val(5);
            });
            $('#review').click(function () {
                $('#review-screen').fadeIn('slow');
            })
            $('#back').click(function () {
                $('#review-screen').fadeOut('slow');
            });
            setTimeout(function () {
                $("#succes-review").fadeOut(3000);
            }, 2500);
        });

    </script>
    <!--/-->
</body>

</html>
