<!DOCTYPE html>
<html lang="en">

<head>
    @section('title','Profile')
    @include('layouts.head')
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
    <header class="app-header app-header-1 light">
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

    <main class="section section-hero ">
        <div class="display-spacing">
            <div class="container " style="min-height: 50vh">
                <div class="row">
                    <div class="card w-100 rounded p-5 h-100">
                        <div class="container">
                            <div class="row">
                                @if (session()->has('mitra-success'))
                                <div id="message" class="w-100 position-absolute"
                                    style="z-index: 5;margin-top: -2.5rem;left:40%">
                                    <div class="bg-success w-25 pl-4 p-2 text-light d-flex align-items-center text-center"
                                        style="border-radius: 5px">
                                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                                        <span class="ml-2">{{session()->get('mitra-success')}}</span>
                                    </div>
                                </div>
                                @endif
                                @if (session()->has('successMundur'))
                                <div id="message" class=" position-absolute"
                                    style="z-index: 5;margin-top: -2.5rem;left:40%;min-width:100%">
                                    <div class="bg-success w-25 pl-4 p-2 text-light d-flex align-items-center text-center"
                                        style="border-radius: 5px">
                                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                                        <span class="ml-2">{{session()->get('successMundur')}}</span>
                                    </div>
                                </div>
                                @endif
                                @if (session()->has('edit-success'))
                                <div id="message" class="w-100 position-absolute"
                                    style="z-index: 5;margin-top: -2.5rem;left:40%">
                                    <div class="bg-success w-25 pl-4 p-2 text-light d-flex align-items-center text-center"
                                        style="border-radius: 5px">
                                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                                        <span class="ml-2">{{session()->get('edit-success')}}</span>
                                    </div>
                                </div>
                                @endif
                                <div class="col-md-6 col-lg-4 text-center">
                                    <div class="card card-shadow border-0 rounded bg-secondary w-100">
                                        <a href="#" class="text-center"><img
                                                src="{{asset('assets/images/people/'.$akun->foto)}}"
                                                class="card-img-top w-auto" alt="__FOTO__"></a>
                                        <div class="card-body bg-primary rounded">
                                            <a href="#" class="text-light">
                                                <h5 class="card-title text-center h5">{{$akun->nama_lengkap}}</h5>
                                            </a>
                                        </div>
                                    </div>
                                    <a href="{{route('edit-profile')}}" class="link">
                                        <button class="rounded button-primary mt-2 p-2 pl-4 pr-4 w-100">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                            <span role="button">Edit Profile</span>
                                        </button>
                                    </a>
                                    @if ($akun->status != 'mitra')
                                    <a href="{{route('upgrade-mitra')}}" class="link">
                                        <button class="button-primary rounded p-2 pl-3 pr-3 mt-2 w-100">
                                            <i class="fa fa-arrow-circle-o-up" aria-hidden="true"></i>
                                            Upgrade Menjadi Mitra
                                        </button>
                                    </a>
                                    @else
                                    <button id="mundurMitra" class="btn-danger rounded p-2 pl-3 pr-3 mt-2 w-100">
                                        Mengundurkan Diri Dari Mitra
                                    </button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--Footer-->
    <footer class="app-footer app-footer-1">

        <div class="footer-copyright">
            <div class="container">
                <p><span class="text-bold">WG Farm</span> organic and wellness.</p>
                <p class="text-2">© 2020 All Rights Reserved</p>
            </div>
        </div>
    </footer>
    <!--/-->
    <div id="modalMundurMitra" class="pos-fixed" style="display: none">
        <div class="option w-50">
            <div class="card p-3">
                <div class="card-body text-center">
                    <i class="fa fa-exclamation-circle text-warning" aria-hidden="true" style="font-size: 15rem;"></i>
                    <p class="text-bold">Anda yakin akan mengundurkan diri dari mitra?</p>
                </div>
                <div class="w-100 text-center">
                    <a href="{{route('mundur-mitra',$akun->id)}}">
                        <button class="btn btn-primary w-25">Konfirmasi</button>
                    </a>
                    <button id="batalMundur" class="btn btn-danger w-25">Batal</button>
                </div>
            </div>
        </div>
    </div>

    <!--Scripts-->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins.min.js')}}"></script>
    <script src="{{asset('assets/js/main-scripts.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <script src="{{asset('assets/js/demo.js')}}"></script>
    <script>
        $(document).ready(function () {
            setTimeout(function () {
                $("#message").fadeOut(3000);
            }, 3000);

            $('#mundurMitra').click(function () {
                $('#modalMundurMitra').fadeIn();
            });
            $('#batalMundur').click(function () {
                $('#modalMundurMitra').fadeOut();
            })
        });

    </script>
    <!--/-->
</body>

</html>
