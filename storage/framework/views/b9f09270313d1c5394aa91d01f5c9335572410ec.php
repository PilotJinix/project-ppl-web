<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $__env->make('layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
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

    <section class="section">
        <div class="display-spacing">
            <div class="container mb-4">
                <div class="row row-0">
                    <div class="m-auto">
                        <h2 class="text-bold">Riwayat Ajuan Mitra</h2>
                    </div>
                </div>
            </div>
            <?php $__currentLoopData = $detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="container">
                <div class="row row-0 mb-4">
                    <div class="border rounded p-4 w-75 m-auto shadow">
                        <div class="row row-0">
                            <div class="col-2">
                                <img src="<?php echo e(asset($item->foto_produk)); ?>" alt="gambar" width="100px">
                            </div>
                            <div class="col-6">
                                <h5 class="text-bold"><?php echo e(__($item->nama_produk)); ?></h5>
                                <small style="font-size: 9px" class="fa fa-genderless" aria-hidden="true"></small>
                                <?php if($item->status == 'Menunggu'): ?>
                                <small class="text-danger"><?php echo e(_($item->status)); ?></small>
                                <?php endif; ?>
                                <?php if($item->status == 'Checking'): ?>
                                <small class="text-warning"><?php echo e(_($item->status)); ?></small>
                                <?php endif; ?>
                                <?php if($item->status == 'Diterima'): ?>
                                <small class="text-success"><?php echo e(_($item->status)); ?></small>
                                <?php endif; ?>
                            </div>
                            <div class="col-4">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
    <?php if(session()->has('success')): ?>
    <div id="success-review" class="position-absolute bg-success rounded p-2 pl-5 pr-5 text-light"
        style="top: 18%;left: 50%;transform: translate(-50%,-18%)">
        <span><?php echo e(__(session()->get('success'))); ?></span>
    </div>
    <?php endif; ?>
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
    <script src="<?php echo e(asset('assets/js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/plugins.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/main-scripts.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/custom.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/demo.js')); ?>"></script>
    <script src="<?php echo e(asset('js/multi-countdown.js')); ?>"></script>
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
<?php /**PATH /home/witsudi/LaravelProject/project-ppl/resources/views/riwayatprodukmitra.blade.php ENDPATH**/ ?>