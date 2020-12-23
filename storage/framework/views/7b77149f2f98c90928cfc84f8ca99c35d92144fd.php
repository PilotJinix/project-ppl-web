<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <?php $__env->startSection('title','Shop'); ?>
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
    <!--Banner-->
    <section class="section section-clearfix-1">
        <header class="el-banner el-banner-1 overlay overlay-color">
            <span class="bg-color bg-primary"></span>
            <div class="display-spacing">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 text-right">
                            <h1>Product Kami</h1>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                            <ul class="el-breadcrumbs el-breadcrumbs-1 text-light">
                                <li>
                                    <a href="<?php echo e(route('home')); ?>">
                                        <span class="text">Beranda</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="active">
                                        <span class="text">Featured Products</span>
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
    <!--Products-->
    <section class="section section-products section-products-1">
        <div class="display-spacing">
            <div class="container">
                <div class="el-data-filters">
                    <div class="el-data-filters-links">
                        <ul>
                            <li data-filter="all" class="active">Product Kami</li>
                        </ul>
                    </div>
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
                <div class="el-pagination text-center pt-space-half">
                    <?php echo e($product->links()); ?>

                </div>
            </div>
        </div>
        <!--Footer-->
        <footer class="app-footer app-footer-1">
            <div class="footer-copyright">
                <div class="container">
                    <p><span class="text-bold">WG FARM</span> sayuran dan buah segar</p>
                    <p class="text-2">© 2020 All Rights Reserved</p>
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
<?php /**PATH /home/witsudi/LaravelProject/project-ppl/resources/views/shop.blade.php ENDPATH**/ ?>