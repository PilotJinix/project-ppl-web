<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title>Orwell</title>
    <?php echo $__env->make('layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
            <?php echo $__env->make('layouts.mainmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </header>
    <!--/-->
    <!--Sidenav-->
    <div class="app-sidenav app-sidenav-1">
        <?php echo $__env->make('layouts.sidemainmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <span class="sidenav-close"></span>
    </div>
    <!--/-->
    <!--Shopping Cart-->
    <div class="app-shopping-cart app-shopping-cart-1">
        <?php echo $__env->make('layouts.cartlist', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                            <h1>Checkout</h1>
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
                                        <span class="text">Checkout</span>
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
    <!--Checkout-->
    <section class="section section-page section-checkout section-checkout-1">
        <div class="page-body">
            <div class="display-spacing">
                <form action="<?php echo e(route('checkout',$detail->id)); ?>" class="form-3" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="container">
                        <div class="row row-sm">
                            <div class="col-lg-8">
                                <header class="el-heading el-heading-3">
                                    <h2>Billing Details</h2>
                                    <div class="divider divider-line"></div>
                                </header>
                                <div class="row row-sm">
                                    <div class="col-md-12">
                                        <div class="form-item">
                                            <label>Nama Lengkap*</label>
                                            <input type="text" class="mt-2 <?php if ($errors->has('nama_lengkap')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nama_lengkap'); ?> is invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                                                name="nama_lengkap" value="<?php echo e(__($akun->nama_lengkap)); ?>" />
                                        </div>
                                        <?php if ($errors->has('nama_lengkap')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nama_lengkap'); ?>
                                        <span class="text-danger invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-item">
                                            <label>Email*</label>
                                            <input type="text" class="mt-2 <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                                                name="email" value="<?php echo e(__($akun->email)); ?>" />

                                        </div>
                                        <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                                        <span class="text-danger invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-item">
                                            <label>Nomer HP*</label>
                                            <input type="number" class="mt-2 <?php if ($errors->has('no_hp')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('no_hp'); ?> is invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                                                name="no_hp" value="<?php echo e(__($akun->nomer_hp)); ?>" />
                                        </div>
                                        <?php if ($errors->has('no_hp')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('no_hp'); ?>
                                        <span class="text-danger invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-item">
                                            <label>Alamat*</label>
                                            <input type="text" class="mt-2 <?php if ($errors->has('alamat')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('alamat'); ?> is invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                                                name="alamat" value="<?php echo e(__($akun->alamat)); ?>" />
                                        </div>
                                        <?php if ($errors->has('alamat')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('alamat'); ?>
                                        <span class="text-danger invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-item">
                                            <label>apartemen,toko,dll(opsional)</label>
                                            <input type="text" class="mt-2 <?php if ($errors->has('label_alamat')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('label_alamat'); ?> is invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                                                name="label_alamat" />
                                        </div>
                                        <?php if ($errors->has('label_alamat')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('label_alamat'); ?>
                                        <span class="text-danger invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-item">
                                            <label>Kode Pos*</label>
                                            <input type="text" name="kode_pos"
                                                class="mt-2 <?php if ($errors->has('kode_pos')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('kode_pos'); ?> is invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" />
                                        </div>
                                        <?php if ($errors->has('kode_pos')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('kode_pos'); ?>
                                        <span class="text-danger invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-item">
                                            <label>Nama Kota*</label>
                                            <input type="text" name="kota"
                                                class="mt-2 <?php if ($errors->has('kota')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('kota'); ?> is invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" />
                                        </div>
                                        <?php if ($errors->has('kota')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('kota'); ?>
                                        <span class="text-danger invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-item">
                                            <label>Catatan Pembelian(opsional)</label>
                                            <textarea type="text" name="catatan_pembelian"
                                                class="mt-2 <?php if ($errors->has('catatan_pembelian')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('catatan_pembelian'); ?> is invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"></textarea>
                                        </div>
                                        <?php if ($errors->has('catatan_pembelian')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('catatan_pembelian'); ?>
                                        <span class="text-danger invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <header class="el-heading el-heading-3">
                                    <h2>Order Details</h2>
                                    <div class="divider divider-line"></div>
                                </header>
                                <div class="el-table-order el-table-order-1">
                                    <ul>
                                        <li>
                                            <span class="var">Product</span>
                                            <ul class="pl-0">
                                                <li class="p-3" style="border: 1px solid #e3e3e3; border-radius: 5px">
                                                    <div class="row row-0 d-flex align-items-center">
                                                        <img src="<?php echo e(asset('assets/images/products/'.$detail->gambar)); ?>"
                                                            alt="" width="70px">
                                                        <div class="pl-2 pt-1" style="width: 73%">
                                                            <label class="var"><?php echo e(__($detail->nama)); ?></label>
                                                            <div class="d-flex align-items-center">
                                                                <span>Rp</span>
                                                                <input type="text"
                                                                    class="val text-right <?php if ($errors->has('harga')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('harga'); ?> is invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                                                                    value="<?php echo e(__($detail->harga)); ?>" readonly id="harga"
                                                                    style="width: 40px;">
                                                            </div>
                                                        </div>
                                                        <?php if ($errors->has('harga')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('harga'); ?>
                                                        <span class="text-danger invalid-feedback" role="alert">
                                                            <strong><?php echo e($message); ?></strong>
                                                        </span>
                                                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="row row-sm">
                                                <div class="col-12">
                                                    <select name="" class="w-100" id="kurir">
                                                        <option disabled selected>Pilih Kurir</option>
                                                        <option id="jnt" value="25000">J&T - Rp 25.000</option>
                                                        <option id="jne" value="20000">JNE Reg - Rp 20.000</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row row-sm">
                                                <div class="col-6">
                                                    <span class="var">Jumlah</span>
                                                </div>
                                                <div class="col-6">
                                                    <div class="add-to-cart">
                                                        <div class="el-counter el-counter-1 d-block empty">
                                                            <button id="kurang" type="button"
                                                                class="button button-minus"
                                                                style="background-color: rgb(151, 151, 151)">
                                                                <i class="ti-minus text-light"></i>
                                                            </button>
                                                            <span class="label">1</span>
                                                            <input class="<?php if ($errors->has('jumlah')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('jumlah'); ?> is invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                                                                id="jumlah" type="number" value="1" min="1"
                                                                max="<?php echo e(__($detail->stok)); ?>" step="1" name="jumlah">
                                                            <button id="tambah" type="button" class="button button-plus"
                                                                style="background-color: rgb(151, 151, 151)">
                                                                <i class="ti-plus text-light"></i>
                                                            </button>
                                                        </div>
                                                        <?php if ($errors->has('jumlah')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('jumlah'); ?>
                                                        <span class="text-danger invalid-feedback" role="alert">
                                                            <strong><?php echo e($message); ?></strong>
                                                        </span>
                                                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row row-sm">
                                                <div class="col-6">
                                                    <span class="var">Biaya Pengiriman</span>
                                                </div>
                                                <div class="col-6 d-flex justify-content-end">
                                                    <span class="text-right">Rp <input id="biaya_pengiriman" type="text"
                                                            name="biaya_pengiriman"
                                                            class="<?php if ($errors->has('biaya_pengiriman')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('biaya_pengiriman'); ?> is invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?> val text-bold text-right text-dark biaya"
                                                            value="0" readonly style="width: 50px"></span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row row-sm">
                                                <div class="col-6">
                                                    <span class="var">Diskon</span>
                                                </div>
                                                <div class="col-6 d-flex justify-content-end">
                                                    <span class="text-right"><input id="diskon" type="text"
                                                            name="diskon"
                                                            class="val text-bold text-right text-dark <?php if ($errors->has('diskon')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('diskon'); ?> is invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                                                            value="<?php echo $detail->diskon; ?>" readonly style="width: 50px">
                                                        %</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row row-sm">
                                                <div class="col-6">
                                                    <span class="var">Metode Pembayaran</span>
                                                </div>
                                                <div class="col-6 d-flex justify-content-end">
                                                    <input readonly id="bank" type="text" name="metode_pembayaran"
                                                        class="text-right <?php if ($errors->has('jenis_bank')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('jenis_bank'); ?> is invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                                                        style="width: 100px">
                                                    <button type="button" class="val pr-0 text-primary text-bold"
                                                        id="pilih-metode">Pilih</button>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row row-sm">
                                                <div class="col-6">
                                                    <span class="var">Jumlah Total Pembayaran</span>
                                                </div>
                                                <div class="col-6 d-flex justify-content-end">
                                                    <span class="text-right">Rp <input readonly type="text"
                                                            id="total-harga" name="total_harga"
                                                            class="val text-bold text-right" value="0"
                                                            style="width: 50px"></span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <button id="button-submit" type="submit"
                                    class="button button-md button-block button-primary">
                                    <span class="text">CHECKOUT</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--/-->
    <!--Footer-->
    <footer class="app-footer app-footer-1">
        <div class="footer-copyright">
            <div class="container">
                <p><span class="text-bold">WG FARM</span> organic and wellness.</p>
                <p class="text-2">© 2020 All Rights Reserved</p>
            </div>
        </div>
    </footer>
    <div class="pos-fixed" id="metode-pembayaran" style="display: none">
        <div class="option" style="width: 30rem">
            <div class="option-header pt-3 pb-3 d-flex justify-content-between">
                <span class="text-title">Pilih Metode Pembayaran</span>
                <i id="closeModalBank" class="fa fa-times" style="cursor: pointer"></i>
            </div>
            <div class="option-body">
                <ul class="pl-0 mb-0">
                    <li class="list"><button id="bca" class="pilih-bank" type="button">Bank BCA</button></li>
                    <li class="list"><button id="bri" class="pilih-bank" type="button">Bank BRI</button></li>
                    <li class="list"><button id="mandiri" class="pilih-bank" type="button">Bank Mandiri</button></li>
                </ul>
            </div>
        </div>
    </div>
    <?php if(auth()->guard()->guest()): ?>
    <div class="pos-fixed">
        <div class="option">
            <div class="option-header">
                <span class="text-title">Ooppps!</span>
            </div>
            <div class="option-body">
                <p>Maaf, Kamu harus login terlebih dahulu!!</p>
            </div>
            <div class="btn-option pr-3">
                <a class="button button-primary rounded" href="<?php echo e(route('login')); ?>"
                    style="padding: 0 20px"><span>Login</span></a>
                <a class="button button-secondary rounded" href="<?php echo e(url()->previous()); ?>"
                    style="padding: 0 20px"><span>Kembali</span></a>
            </div>
        </div>
    </div>
    <?php endif; ?>
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
    <script src="<?php echo e(asset("assets/js/jquery.min.js")); ?>"></script>
    <script src="<?php echo e(asset('assets/js/plugins.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/main-scripts.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/custom.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/demo.js"')); ?>"></script>
    <script>
        $(document).ready(function () {
            /* Pilih Metode Pembayaran */
            $('#pilih-metode').click(function () {
                $('#metode-pembayaran').fadeIn();
            });
            $('#bca').click(function () {
                $('#bank').val($('#bca').text());

                $('#metode-pembayaran').fadeOut();
                if ($('#bank').val() != '') {
                    $('#button-submit').prop('disabled', false);
                };
            });
            $('#bri').click(function () {
                $('#bank').val($('#bri').text());

                $('#metode-pembayaran').fadeOut();
                if ($('#bank').val() != '') {
                    $('#button-submit').prop('disabled', false);
                };
            });
            $('#mandiri').click(function () {
                $('#bank').val($('#mandiri').text());

                $('#metode-pembayaran').fadeOut();
                if ($('#bank').val() != '') {
                    $('#button-submit').prop('disabled', false);
                };
            });
            $('#closeModalBank').click(function () {
                $('#metode-pembayaran').fadeOut();
            });
            $('#kurir').click(function () {
                let harga = $('#harga').val();
                let jumlah = $('#jumlah').val();
                let kurir = $('#kurir').val();
                $('.biaya').val(kurir);
                let biaya_kirim = $('#biaya_pengiriman').val();
                let diskon = $('#diskon').val();
                let hasil_diskon = diskon / 100 * harga;
                let harga_diskon = harga - hasil_diskon;
                let kirim = Number(biaya_kirim);
                let total = harga_diskon * jumlah + kirim;

                $('#total-harga').val(total);
            });

            /* Jumlah */
            let harga = $('#harga').val();
            let biaya_kirim = $('#biaya_pengiriman').val();
            let diskon = $('#diskon').val();
            let hasil_diskon = diskon / 100 * harga;
            let harga_diskon = harga - hasil_diskon;
            let kirim = Number(biaya_kirim);
            let total = harga_diskon + kirim;
            $('#total-harga').val(total);

            $("#kurang,#tambah").click(function () {
                let harga = $('#harga').val();
                let jumlah = $('#jumlah').val();
                let biaya_kirim = $('#biaya_pengiriman').val();
                let diskon = $('#diskon').val();
                let hasil_diskon = diskon / 100 * harga;
                let harga_diskon = harga - hasil_diskon;
                let kirim = Number(biaya_kirim);
                let total = harga_diskon * jumlah + kirim;

                $('#total-harga').val(total);
            });
            /* button submit */
            $('#button-submit').prop('disabled', true);
        })

    </script>
    <!--/-->
</body>

</html>
<?php /**PATH /home/witsudi/LaravelProject/project-ppl/resources/views/checkout.blade.php ENDPATH**/ ?>