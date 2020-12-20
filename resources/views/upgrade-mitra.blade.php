<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    @section('title','Upgrade akun')
    @include('layouts.head')
    {{-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> --}}
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
                    <h2>Upgrade Akunmu Menjadi Mitra Sekarang</h2>
                    <p>Made with love for designers & developers.</p>
                </header>
                <form class="form form-1" method="POST" action="{!! route('create-mitra') !!}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row row-sm">
                        <div class="col-12">
                            <div class="form-item">
                                <label>Nama Lengkap</label>
                                <input type="text" readonly name="nama_lengkap"
                                    class="input-icon @error('nama_lengkap') is invalid @enderror"
                                    placeholder="Nama Lengkap" value="{{__($akun->nama_lengkap)}}" />
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
                                <label>Email address</label>
                                <input type="email" readonly class="input-icon @error('email') is invalid! @enderror"
                                    placeholder="name@example.com" name="email" value="{{__($akun->email)}}" />
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
                                <label>Alamat Lengkap</label>
                                <input type="text" name="alamat"
                                    class="input-icon @error('alamat') is invalid @enderror" placeholder="Alamat"
                                    value="{{__($akun->alamat)}}" />
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
                                <label>NIK</label>
                                <input type="text" name="nik" class="input-icon @error('nik') is invalid @enderror"
                                    placeholder="NIK" />
                                <div class="icon">
                                    <i class="fa fa-address-card" aria-hidden="true"></i>
                                </div>
                            </div>
                            @error('nik')
                            <span class="text-danger invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <div class="form-item">
                                <label>Foto KTP</label>
                                <div class="rounded" style="border: 1px solid #e1e1e1;padding: 13px;border-radius: 5px">
                                    <input type="file" class="@error('ktp') is fail @enderror"
                                        style="cursor: pointer;border: none" name="ktp">
                                </div>
                            </div>
                            @error('ktp')
                            <span class="text-danger invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <div class="form-item">
                                <label>No. Rekening</label>
                                <input type="number" name="rekening"
                                    class="input-icon @error('rekening') is invalid @enderror"
                                    placeholder="No. Rekening" />
                                <div class="icon">
                                    <i class="fa fa-credit-card" aria-hidden="true"></i>
                                </div>
                            </div>
                            @error('rekening')
                            <span class="text-danger invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <div class="form-item">
                                <label>Nomor HP</label>
                                <input type="number" name="nomer_hp" value="{{__($akun->nomer_hp)}}"
                                    class="input-icon @error('nomer_hp') is invalid @enderror" placeholder="85***"
                                    style="padding-left: 74px" />
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
                                <input type="submit" class="button button-lg button-block button-primary"
                                    value="{{__('Upgrade')}}">
                            </div>
                        </div>
                    </div>
                </form>
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
                                <a href="home-1.html">
                                    <span class="text">Home</span>
                                </a>
                            </li>
                            <li>
                                <a href="shop-special-1.html">
                                    <span class="text">Best Sales</span>
                                </a>
                            </li>
                            <li>
                                <a href="page-about.html">
                                    <span class="text">About Us</span>
                                </a>
                            </li>
                            <li>
                                <a href="page-contact.html">
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
    <!--/--->
    @if ($status == 'proses')
    <div class="pos-fixed">
        <div class="option">
            <div class="option-header">
                <span class="text-title">Ooppps!</span>
            </div>
            <div class="option-body">
                <p>Kamu sudah mengirim ajuan!</p>
            </div>
            <div class="btn-option">
                <a class="button button-primary rounded" href="{{url()->previous()}}"
                    style="padding: 0 20px"><span>OK</span></a>
            </div>
        </div>
    </div>
    @endif
    <!--Scripts-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/plugins.min.js"></script>
    <script src="assets/js/main-scripts.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/demo.js"></script>
    <!--/-->
</body>

</html>
