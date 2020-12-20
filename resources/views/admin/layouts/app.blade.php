<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>WGFarm</title>
    <!-- Favicon-->
    <link rel="icon" href="{{asset("assets/images/favicon/favicon.png")}}" type="image/x-icon">
    <!-- Plugins Core Css -->
    <link href="{{asset("admins/assets/css/app.min.css")}}" rel="stylesheet">
    <!-- Custom Css -->
    <link href="{{asset("admins/assets/css/style.css")}}" rel="stylesheet" />
    <!-- Theme style. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{asset("admins/assets/css/styles/all-themes.css")}}" rel="stylesheet" />
</head>

<body class="light">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30">
                <img class="loading-img-spin" src="{{asset("admins/assets/images/loading.png")}}" width="20" height="20"
                    alt="admin">
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="#" onClick="return false;" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="#" onClick="return false;" class="bars"></a>
                <a class="navbar-brand" href="index.html">
                    <img src="{{asset("assets/images/favicon/favicon.png")}}" alt="--logo--" width="36px" />
                    <span class="logo-name">WG Farm</span>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="pull-left">
                    <li>
                        <a href="#" onClick="return false;" class="sidemenu-collapse">
                            <i class="material-icons">reorder</i>
                        </a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <!-- Full Screen Button -->
                    <li class="fullscreen">
                        <a href="javascript:;" class="fullscreen-btn">
                            <i class="fas fa-expand"></i>
                        </a>
                    </li>
                    <!-- #END# Full Screen Button -->
                    <li class="dropdown user_profile">
                        <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown"
                            role="button">
                            <img src="{{asset("assets/images/people/blank-profile.webp")}}" width="32" height="32"
                                alt="User">
                        </a>
                        <ul class="dropdown-menu pullDown">
                            <li class="body">
                                <ul class="user_dw_menu">
                                    {{-- <li>
                                        <a href="#">
                                            <i class="material-icons">person</i>Profile
                                        </a>
                                    </li> --}}
                                    <li>
                                        <a href="{{route('admin.logout')}}">
                                            <i class="material-icons">power_settings_new</i>Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Tasks -->
                    <li class="pull-right">
                        <a href="#" onClick="return false;" class="js-right-sidebar" data-close="true">
                            <i class="fas fa-cog"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <div>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="sidebar-user-panel active">
                        <div class="user-panel">
                            <div class=" image">
                                <img src="{{asset("assets/images/people/blank-profile.webp")}}"
                                    class="img-circle user-img-circle" alt="User Image" />
                            </div>
                        </div>
                        <div class="profile-usertitle">
                            <div class="sidebar-userpic-name"> Admin </div>
                            <div class="profile-usertitle-job ">Administrasi </div>
                        </div>
                    </li>
                    @if ($pages == 'dashboard')
                    <li class="active">
                        @else
                    <li>
                        @endif
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i class="fas fa-home"></i>
                            <span>Home</span>
                        </a>
                        <ul class="ml-menu">
                            @if ($pages == 'dashboard')
                            <li class="active">
                                @else
                            <li>
                                @endif
                                <a href="{{route('admin.dashboard')}}">Dashboard</a>
                            </li>
                        </ul>
                    </li>
                    @if ($pages == 'daftar-pengguna' OR $pages == 'pengajuan-mitra')
                    <li class="active">
                        @else
                    <li>
                        @endif
                        <a class="menu-toggle">
                            <i class="
                            fas fa-user-friends"></i>
                            <span>Pengguna</span>
                        </a>
                        <ul class="ml-menu">
                            @if ($pages == 'daftar-pengguna')
                            <li class="active">
                                @else
                            <li>
                                @endif
                                <a href="{{route('admin.pengguna','daftar-pengguna')}}">Semua Pengguna</a>
                            </li>
                            @if ($pages == "pengajuan-mitra")
                            <li class="active">
                                @else
                            <li>
                                @endif
                                <a href="{{route('admin.pengajuan-mitra')}}">Pengajuan Mitra</a>
                            </li>
                        </ul>
                    </li>
                    @if ($pages == 'list-produk' OR $pages == 'edit-produk' OR $pages == 'new-produk' OR $pages ==
                    'penawaran-produk' OR $pages == 'detail-penawaran' OR $pages == 'patokan-harga')
                    <li class="active">
                        @else
                    <li>
                        @endif
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i class="fas fa-shopping-cart"></i>
                            <span>E-commerce</span>
                        </a>
                        <ul class="ml-menu">
                            @if ($pages == 'list-produk')
                            <li class="active">
                                @else
                            <li>
                                @endif
                                <a href="{{route('admin.list-produk','list-produk')}}">Produk</a>
                            </li>
                            @if ($pages == 'penawaran-produk')
                            <li class="active">
                                @else
                            <li>
                                @endif
                                <a href="{{route('admin.penawaran-produk')}}">Penawaran Produk Mitra</a>
                            </li>
                            @if ($pages == 'patokan-harga')
                            <li class="active">
                                @else
                            <li>
                                @endif
                                <a href="{{route('admin.patokan-harga')}}">Patokan Harga Produk</a>
                            </li>
                        </ul>
                    </li>
                    @if ($pages == 'riwayat-transaksi')
                    <li class="active">
                        @else
                    <li>
                        @endif
                        <a href="{{route('admin.riwayat-transaksi')}}">
                            <i class="fas fa-wallet"></i>
                            <span>Transaksi</span>
                        </a>
                    </li>
                    @if ($pages == 'artikel' OR $pages == 'new-artikel')
                    <li class="active">
                        @else
                    <li>
                        @endif
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i class="fab fa-blogger-b"></i>
                            <span>Blog</span>
                        </a>
                        <ul class="ml-menu">
                            @if ($pages == 'artikel')
                            <li class="active">
                                @else
                            <li>
                                @endif
                                <a href="{{route('admin.artikel')}}">Artikel</a>
                            </li>
                            @if ($pages == 'new-artikel')
                            <li class="active">
                                @else
                            <li>
                                @endif
                                <a href="{{route('admin.new-artikel')}}">Artikel Baru</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation">
                    <a href="#skins" data-toggle="tab" class="active">SKINS</a>
                </li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane in active in active stretchLeft" id="skins">
                    <div class="demo-skin">
                        <div class="rightSetting">
                            <p>SIDEBAR MENU COLORS</p>
                            <button type="button"
                                class="btn btn-sidebar-light btn-border-radius p-l-20 p-r-20">Light</button>
                            <button type="button"
                                class="btn btn-sidebar-dark btn-default btn-border-radius p-l-20 p-r-20">Dark</button>
                        </div>
                        <div class="rightSetting">
                            <p>THEME COLORS</p>
                            <button type="button"
                                class="btn btn-theme-light btn-border-radius p-l-20 p-r-20">Light</button>
                            <button type="button"
                                class="btn btn-theme-dark btn-default btn-border-radius p-l-20 p-r-20">Dark</button>
                        </div>
                        <div class="rightSetting">
                            <p>SKINS</p>
                            <ul class="demo-choose-skin choose-theme list-unstyled">
                                <li data-theme="black" class="actived">
                                    <div class="black-theme"></div>
                                </li>
                                <li data-theme="white">
                                    <div class="white-theme white-theme-border"></div>
                                </li>
                                <li data-theme="purple">
                                    <div class="purple-theme"></div>
                                </li>
                                <li data-theme="blue">
                                    <div class="blue-theme"></div>
                                </li>
                                <li data-theme="cyan">
                                    <div class="cyan-theme"></div>
                                </li>
                                <li data-theme="green">
                                    <div class="green-theme"></div>
                                </li>
                                <li data-theme="orange">
                                    <div class="orange-theme"></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </div>
    <section class="content">
        @yield('content')
    </section>
    <!-- Plugins Js -->
    <script src="{{asset("admins/assets/js/app.min.js")}}"></script>
    <script src="{{asset("admins/assets/js/chart.min.js")}}"></script>
    <script src="{{asset("admins/assets/js/table.min.js")}}"></script>
    <!-- Custom Js -->
    <script src="{{asset("admins/assets/js/admin.js")}}"></script>
    <script src="{{asset("admins/assets/js/pages/index.js")}}"></script>
    <script src="{{asset("admins/assets/js/pages/charts/jquery-knob.js")}}"></script>
    <script src="{{asset("admins/assets/js/pages/sparkline/sparkline-data.js")}}"></script>
    <script src="{{asset("admins/assets/js/pages/medias/carousel.js")}}"></script>
    <script src="{{asset("admins/assets/js/pages/tables/jquery-datatable.js")}}"></script>
</body>
