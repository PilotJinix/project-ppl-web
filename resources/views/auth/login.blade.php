<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    @section('title','Login')
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
    <!--Shopping Cart-->
    <div class="app-shopping-cart app-shopping-cart-1">
        @include('layouts.cartlist')
    </div>
    <!--/-->
    <!--Auth-->
    <section class="section section-auth section-auth-login">
        <div class="display-spacing">
            <div class="container">
                <header class="el-heading el-heading-1 center">
                    <h2>User login</h2>
                    <p>Login dengan akun anda.</p>
                    @if (session()->get('success'))
                    <div class="bg-success p-2 rounded">
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                        <label class="m-0">Register Berhasil! Silahkan Login</label>
                    </div>
                    @endif
                </header>
                <form class="form form-1" method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="row row-sm">
                        <div class="col-12">
                            <div class="form-item">
                                <label>Username</label>
                                <input type="text" class="input-icon @error('email') is invalid @enderror"
                                    name='username' />
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                </div>
                            </div>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <div class="form-item">
                                <label>Password</label>
                                <span class="label-side el-show-password">Show password</span>
                                <input type="password" class="input-icon @error('password') is invalid @enderror"
                                    name="password" />
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-key">
                                        <path
                                            d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <div class="form-item">
                                <input type="submit" class="button button-lg button-block button-primary" value="Login">
                            </div>
                        </div>
                        @if (session()->has('error'))
                        <div class="ml-3 mr-3 w-100  alert alert-danger">
                            {{session()->get('error')}}
                        </div>
                        @endif
                    </div>
                </form>
                <div class="pt-20 text-center">
                    <span class="text-color">Belum memiliki akun?</span>
                    <a href="{{route('register')}}" class="text-primary">Buat Akun</a>
                </div>
            </div>
        </div>
    </section>
    <!--/-->
    <!--Footer-->
    <footer class="app-footer app-footer-0 app-footer-4 ${props.class}">
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                    </div>
                    <div class="hidden-lg-down col-lg-6">
                        <ul class="menu">
                            <li>
                                <a href="{{url('/')}}">
                                    <span class="text">Beranda</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('/')}}">
                                    <span class="text">Best Sales</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('about')}}">
                                    <span class="text">Tentang Kami</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('/')}}">
                                    <span class="text">Contact Us</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-3 text-right">
                        <p>© 2020 All rights reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--Scripts-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/plugins.min.js"></script>
    <script src="assets/js/main-scripts.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/demo.js"></script>
    <!--/-->
</body>

</html>
