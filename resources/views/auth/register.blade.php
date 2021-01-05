<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    @section('title','Register')
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
    <header class="app-header app-header-1 light">
        <div class="header-nav bg-primary">
            @include('layouts.mainmenu')
        </div>
    </header>
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
    <!--Auth-->
    <section class="section section-auth section-auth-login">
        <div class="display-spacing">
            <div class="container">
                <header class="el-heading el-heading-1 center">
                    <h2>Buat Akun</h2>
                    <p>Agar lebih luar untuk berselancar</p>
                </header>
                <form class="form form-1" method="POST" action="{!! route('create') !!}">
                    @csrf
                    <div class="row row-sm">
                        <div class="col-12">
                            <div class="form-item">
                                <label>Nama Lengkap</label>
                                <input type="text" name="nama_lengkap"
                                    class="input-icon @error('nama_lengkap') is invalid @enderror" placeholder="Name" />
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                </div>
                            </div>
                            @error('nama_lengkap')
                            <span class="text-danger invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <div class="form-item">
                                <label>Username</label>
                                <input type="text" name="username"
                                    class="input-icon @error('username') is invalid @enderror" placeholder="Username" />
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                </div>
                            </div>
                            @error('username')
                            <span class="text-danger invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <div class="form-item">
                                <label>Email address</label>
                                <input type="email" class="input-icon @error('email') is invalid! @enderror"
                                    placeholder="name@example.com" name="email" />
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-at-sign">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path>
                                    </svg>
                                </div>
                            </div>
                            @error('email')
                            <span class="text-danger invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <div class="form-item">
                                <label>Nomor HP</label>
                                <input type="number" name="nomer_hp"
                                    class="input-icon @error('nomer_hp') is invalid @enderror" placeholder="85***"
                                    style="padding-left: 72px" />
                                <div class="icon d-flex">
                                    <div>
                                        <i style="font-size:24px" class="fa">&#xf095;</i>
                                    </div>
                                    <div style="margin-left: 7px; padding: 0 5px;margin-top: 1px">
                                        <i class="fa">+62</i>
                                    </div>
                                </div>
                            </div>
                            @error('nomer_hp')
                            <span class="text-danger invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <div class="form-item">
                                <label>Alamat</label>
                                <input type="text" name="alamat"
                                    class="input-icon @error('alamat') is invalid @enderror" placeholder="Alamat" />
                                <div class="icon">
                                    <i class="fa fa-address-card" aria-hidden="true"></i>
                                </div>
                            </div>
                            @error('alamat')
                            <span class="text-danger invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <div class="form-item">
                                <label>Password</label>
                                <input type="password" class="input-icon @error('password') is invalid @enderror"
                                    placeholder="*******" name="password" />
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
                            <span class="text-danger invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <div class="form-item">
                                <label>Password Re-Type</label>
                                <input type="password"
                                    class="input-icon @error('password_confirmation') is invalid @enderror"
                                    placeholder="*******" name="password_confirmation" />
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
                            @error('password_confirmation')
                            <span class="text-danger invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        {{-- <div class="col-12 mb-10">
                <div class="form-item">
                  <label class="input-checkbox">
                    <input type="checkbox" />
                    <span class="checkbox-mark"></span>
                    <span class="checkbox-label"
                      >I agree to the terms and conditions</span
                    >
                  </label>
                </div>
              </div> --}}
                        <div class="col-12">
                            <div class="form-item">
                                <input type="submit" class="button button-lg button-block button-primary"
                                    value="Register">
                            </div>
                        </div>
                    </div>
                </form>
                <div class="pt-25 text-center">
                    <span class="text-color">Sudah punya akun ?</span>
                    <a href="{{url('/login')}}" class="text-primary">login</a>
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
                                <a href="{{route('dashboard')}}">
                                    <span class="text">beranda</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('shop')}}">
                                    <span class="text">Best Sales</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('about')}}">
                                    <span class="text">Tentang Kami</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('about')}}">
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

<!-- Mirrored from demo.afracode.com/orwell/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Nov 2020 04:08:43 GMT -->

</html>
