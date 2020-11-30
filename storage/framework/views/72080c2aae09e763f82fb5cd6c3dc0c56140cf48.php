<!DOCTYPE html>
<html lang="en">

<head>
    <?php $__env->startSection('title','Profile'); ?>
    <?php echo $__env->make('layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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

    <main class="section section-hero ">
        <div class="display-spacing">
            <div class="container " style="min-height: 50vh">
                <div class="row">
                    <div class="card w-100 rounded p-5 h-100">
                        <div class="container">
                            <div class="row">
                                <?php if(session()->has('mitra-success')): ?>
                                <div id="message" class="w-100 position-absolute"
                                    style="z-index: 5;margin-top: -2.5rem;left:40%">
                                    <div class="bg-success w-25 pl-4 p-2 text-light d-flex align-items-center text-center"
                                        style="border-radius: 5px">
                                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                                        <span class="ml-2"><?php echo e(session()->get('mitra-success')); ?></span>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if(session()->has('successMundur')): ?>
                                <div id="message" class=" position-absolute"
                                    style="z-index: 5;margin-top: -2.5rem;left:40%;min-width:100%">
                                    <div class="bg-success w-25 pl-4 p-2 text-light d-flex align-items-center text-center"
                                        style="border-radius: 5px">
                                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                                        <span class="ml-2"><?php echo e(session()->get('successMundur')); ?></span>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if(session()->has('edit-success')): ?>
                                <div id="message" class="w-100 position-absolute"
                                    style="z-index: 5;margin-top: -2.5rem;left:40%">
                                    <div class="bg-success w-25 pl-4 p-2 text-light d-flex align-items-center text-center"
                                        style="border-radius: 5px">
                                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                                        <span class="ml-2"><?php echo e(session()->get('edit-success')); ?></span>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <div class="col-md-6 col-lg-4 text-center">
                                    <div class="card card-shadow border-0 rounded bg-secondary w-100">
                                        <a href="#" class="text-center"><img
                                                src="<?php echo e(asset('assets/images/people/'.$akun->foto)); ?>"
                                                class="card-img-top w-auto" alt="__FOTO__"></a>
                                        <div class="card-body bg-primary rounded">
                                            <a href="#" class="text-light">
                                                <h5 class="card-title text-center h5"><?php echo e($akun->nama_lengkap); ?></h5>
                                            </a>
                                        </div>
                                    </div>
                                    <a href="<?php echo e(route('edit-profile')); ?>" class="link">
                                        <button class="rounded button-primary mt-2 p-2 pl-4 pr-4 w-100">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                            <span role="button">Edit Profile</span>
                                        </button>
                                    </a>
                                    <?php if($akun->status != 'mitra'): ?>
                                    <a href="<?php echo e(route('upgrade-mitra')); ?>" class="link">
                                        <button class="button-primary rounded p-2 pl-3 pr-3 mt-2 w-100">
                                            <i class="fa fa-arrow-circle-o-up" aria-hidden="true"></i>
                                            Upgrade Menjadi Mitra
                                        </button>
                                    </a>
                                    <?php else: ?>
                                    <button id="mundurMitra" class="btn-danger rounded p-2 pl-3 pr-3 mt-2 w-100">
                                        Mengundurkan Diri Dari Mitra
                                    </button>
                                    <?php endif; ?>
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
                    <a href="<?php echo e(route('mundur-mitra',$akun->id)); ?>">
                        <button class="btn btn-primary w-25">Konfirmasi</button>
                    </a>
                    <button id="batalMundur" class="btn btn-danger w-25">Batal</button>
                </div>
            </div>
        </div>
    </div>
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
    <script src="<?php echo e(asset('assets/js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/plugins.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/main-scripts.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/custom.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/demo.js')); ?>"></script>
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
<?php /**PATH /home/witsudi/LaravelProject/project-ppl/resources/views/my-account.blade.php ENDPATH**/ ?>