<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <?php $__env->startSection('title','Home'); ?>
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
        <div class="header-nav">
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
    <!--Hero-->
    <section class="section section-hero section-hero-1 overlay-color overlay-pattern">
        <div class="display-center">
            <div class="el-slider">
                <div class="el-swiper-hero-2 swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="el-item overlay-image" style="
                    background-image: url(assets/images/images/hero-1-1.jpg);
                  "></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="el-item overlay-image" style="
                    background-image: url(assets/images/images/hero-1-2.jpg);
                  "></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="el-item overlay-image" style="
                    background-image: url(assets/images/images/hero-1-3.jpg);
                  "></div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
        <span class="bg-color bg-dark-30"></span>
        <span class="bg-pattern bg-pattern-3"></span>
        <div class="hero-inner display-center">
            <div class="hero-content text-center">
                <h1>WG FARMING</h1>
                <p class="text-dark">
                    WG Farm mengawal dari awal
                </p>
            </div>
        </div>
    </section>
    <!--/-->
    <!--Features-->
    <section class="section section-features-line section-features-line-1">
        <div class="display-spacing">
            <div class="container">
                <div class="el-box">
                    <div class="row row-sm">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-3">
                            <div class="item">
                                <img src="assets/images/icons/fl-1.png" alt="--Alternative--" />
                                <h2>Pengantaran Gratis</h2>
                                <p>Pasti sampai di tangan</p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-3">
                            <div class="item">
                                <img src="assets/images/icons/fl-4.png" alt="--Alternative--" />
                                <h2>Aman Murah</h2>
                                <p>Coba cek toko sebelah</p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-3">
                            <div class="item">
                                <img src="assets/images/icons/fl-3.png" alt="--Alternative--" />
                                <h2>Diskon menjamur</h2>
                                <p>Tunggu diskon menarik dari kami</p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-3">
                            <div class="item">
                                <img src="assets/images/icons/fl-2.png" alt="--Alternative--" />
                                <h2>24 jam</h2>
                                <p>Kami siap</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/-->
    <!--Features-->
    <section class="section section-features section-features-7">
        <div class="container">
            <div class="row row-sm">
                <div class="col-lg-8 col-xl-8">
                    <div class="el-item el-hover el-item-1 pt-50pe">
                        <div class="image overlay-image" style="background-image: url(assets/images/features/7-1.jpg)">
                        </div>
                        <div class="display-center">
                            <div class="inner">
                                <h2 class="title">WG FARMING<br />Pasti ada terus</h2>
                                <a href="/shop" class="button button-sm button-dark mt-20">
                                    <span class="text">Pergi ke Toko</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-4">
                    <div class="row row-sm">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-12 col-xl-12">
                            <div class="el-item el-hover pt-50pe">
                                <div class="image overlay-image" style="
                      background-image: url(assets/images/features/7-2.jpg);
                    "></div>
                                <div class="display-center">
                                    <div class="inner">
                                        <h3 class="title title-2">
                                            Makanan Sehat<br />
                                            100% aman<br />
                                            dan segar
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-12 col-xl-12">
                            <div class="el-item el-hover pt-50pe bg-primary overlay-color">
                                <div class="display-center">
                                    <div class="inner">
                                        <h3 class="title title-2 text-light">
                                            5% Diskon<br />
                                            Sayuran &<br />Buah
                                        </h3>
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
    <!--Products-->
    <section class="section section-products section-products-1">
        <div class="display-spacing">
            <div class="container">
                <header class="el-heading el-heading-1 center">
                    <h2>Produk Kami</h2>
                    <p>Ayo pesen sebelum kehabisan</p>
                </header>
                <div class="el-data-filters">
                    <div class="el-data-filters-content">
                        <ul class="row row-sm justify-content-md-center">
                            <!--Item-->
                            <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3" data-filter="products-1-3">
                                <div class="el-card el-card-product el-card-product-1 hover-1">
                                    <div class="image">
                                        <a href="<?php echo e(route('product',$item->id)); ?>">
                                            <img src="<?php echo e(asset('assets/images/products/'.$item->gambar)); ?>"
                                                alt="--Alternative--" />
                                        </a>
                                    </div>
                                    <div class="details">
                                        <h3 class="title">
                                            <a href="<?php echo e(route('product',$item->id)); ?>"
                                                title="Fila Locker Room Varsity Jacket">
                                                <span class="text"><?php echo e(__($item->nama)); ?></span>
                                            </a>
                                        </h3>
                                        <div class="footer">
                                            <?php if($item->diskon != 0): ?>
                                            <div class="d-flex">
                                                <p class="mb-0 pt-1"
                                                    style="border-radius: 5px;font-size: 10px;background-color: rgb(255, 152, 212);padding: 0 4px;color: rgb(0, 0, 0)">
                                                    <?php echo $item->diskon."%"; ?></p>
                                                <p class="price mb-0">
                                                    <span class="old-price"
                                                        style="font-size: 12px"><?php echo e(__('Rp '.$item->harga)); ?></span>
                                                </p>
                                            </div>
                                            <p class="price mb-0">
                                                <span class="new-price"><?php echo 'Rp
                                                    '.$harga = $item->harga-$item->harga*$item->diskon/100; ?></span>
                                            </p>
                                            <?php else: ?>
                                            <p class="price">
                                                <span class="new-price"><?php echo e(__('Rp '.$item->harga)); ?></span>
                                            </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <ul class="labels labels-left">
                                        <li>
                                            <?php if($item->stok == 0): ?>
                                            <span class="label label-text"
                                                style="background-color: #525252"><?php echo e(__('Stok Habis')); ?> </span>
                                            <?php else: ?>
                                            <span class="label label-text bg-danger"><?php echo e(__('Tersedia')); ?> </span>
                                            <?php endif; ?>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <!--/-->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/-->
    <!--Call-To-Action-->
    <section class="section section-cta section-cta-7 overlay-image mt--30"
        style="background-image: url(assets/images/images/bg-7.png)">
        <div class="display-spacing">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <header class="el-heading el-heading-4">
                            <h2>
                                Ada Diskon sampai <span class="bigger text-gradient">80%</span> Lho.<br />
                                Pada akhir tahun dan lebaran
                            </h2>
                            <p class="mb-75">
                                Pastikan Pengantara sampai dengan selamat.
                            </p>
                        </header>
                        <div class="el-countdown" data-time="2020/12/12"
                            data-labels='{"label-day": "Days", "label-hour": "Hours", "label-minute": "Mins", "label-second": "Secs"}'>
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
                <p><span class="text-bold">WG FARM</span> Sayuran sehat segar berkualitas</p>
                <p class="text-2">WGFARMING © 2020 All Rights Reserved</p>
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
<?php /**PATH /home/witsudi/LaravelProject/project-ppl/resources/views/home.blade.php ENDPATH**/ ?>