<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <?php $__env->startSection('title', 'Shop'); ?>
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
                            <h1>Latest News</h1>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                            <ul class="el-breadcrumbs el-breadcrumbs-1 text-light">
                                <li>
                                    <a href="<?php echo e(route('home')); ?>">
                                        <span class="text">Home</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="active">
                                        <span class="text">Blog</span>
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
    <section class="section section-products section-blog-1">
        <div class="display-spacing" style="min-height: 80vh">
            <div class="container">
                <div class="row row-sm">
                    <!--Item-->
                    <?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                        <div class="el-card el-card-blog el-card-blog-1 el-hover"
                            style="box-shadow: 0px 0px 10px #bebebe">
                            <div class="post-image">
                                <img src="<?php echo e(asset('assets/images/blog/'.$item->gambar)); ?>" alt="--Alternative--">
                            </div>
                            <div class="details">
                                <h3>
                                    <a href="<?php echo e(route('blog-detail', $item->id)); ?>" title="<?php echo e(__($item->judul)); ?>">
                                        <span class="text"><?php echo e(__($item->judul)); ?></span>
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <!--/-->
                </div>
                <div class="el-pagination text-center pt-space-half">
                    <?php echo e($blog->links()); ?>

                </div>
            </div>
        </div>
        <!--Footer-->
        <footer class="app-footer app-footer-1" style="bottom: 0">
            <div class="footer-copyright">
                <div class="container">
                    <p><span class="text-bold">WG FARM</span> sayuran dan buah segar</p>
                    <p class="text-2">© 2020 All Rights Reserved</p>
                </div>
            </div>
        </footer>
        <!--/-->

        <!--Scripts-->
        <script src="<?php echo e(asset('assets/js/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/plugins.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/main-scripts.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/custom.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/demo.js')); ?>"></script>
        <!--/-->
</body>

</html>
<?php /**PATH /home/witsudi/LaravelProject/project-ppl/resources/views/blog.blade.php ENDPATH**/ ?>