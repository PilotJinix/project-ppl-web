<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <?php $__env->startSection('title','Product Detail'); ?>
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
    <header class="app-header app-header-1 ${props.class} light">
        <div class="header-nav bg-primary">
            <?php echo $__env->make('layouts.mainmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </header>
    <!--/-->
    <!--Sidenav-->
    <div class="app-sidenav app-sidenav-1">
        <?php echo $__env->make('layouts.sidemainmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <!--/-->
    <!--Shopping Cart-->
    <div class="app-shopping-cart app-shopping-cart-1">
        <?php echo $__env->make('layouts.cartlist', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
    </div>
    <!--/-->
    <!--Checkout-->
    <section class="section section-page section-product-detail section-product-detail-1">
        <div class="display-spacing mt-space">
            <div class="container mb-space">
                <div class="row">
                    <!--Images-->
                    <div class="col-lg-6">
                        <div class="product-images">
                            <?php if($product->stok == 0): ?>
                            <div id="hoverEditFoto" class="hover-edit d-block" style="z-index: 100">
                                <div class="option text-center" style="background-color: transparent;border:none">
                                    <h2 style="font-weight: bolder">Stok Sudah Habis</h2>
                                </div>
                            </div>
                            <?php endif; ?>
                            <div class="el-slider el-slider-product-image el-slider-product-image-1">
                                <!-- Swiper -->
                                <div class="el-swiper-product-images el-swiper-product-images-1 swiper-container"
                                    data-slider-index="4">
                                    <div class="swiper-wrapper pb-100">
                                        <div class="swiper-slide">
                                            <div class="el-product-image">
                                                <img src="<?php echo e(asset('assets/images/products/'.$product->gambar)); ?>"
                                                    data-zoom-image="<?php echo e(asset('assets/images/products/'.$product->gambar)); ?>"
                                                    class="el-image-zoom" alt="--Alternative--" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="el-product-image">
                                                <img src="<?php echo e(asset('assets/images/products/'.$product->gambar)); ?>"
                                                    data-zoom-image="<?php echo e(asset('assets/images/products/'.$product->gambar)); ?>"
                                                    class="el-image-zoom" alt="--Alternative--" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="el-product-image">
                                                <img src="<?php echo e(asset('assets/images/products/'.$product->gambar)); ?>"
                                                    data-zoom-image="<?php echo e(asset('assets/images/products/'.$product->gambar)); ?>"
                                                    class="el-image-zoom" alt="--Alternative--" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="el-product-image">
                                                <img src="<?php echo e(asset('assets/images/products/'.$product->gambar)); ?>"
                                                    data-zoom-image="<?php echo e(asset('assets/images/products/'.$product->gambar)); ?>"
                                                    class="el-image-zoom" alt="--Alternative--" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Add Pagination -->
                                    <div class="el-swiper-dots"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/-->
                    <!--Details-->
                    <div class="col-lg-6">
                        <div class="product-detail social">
                            <h1>
                                <?php echo e(__($product->nama)); ?>

                            </h1>
                            <?php if($product->diskon != 0): ?>
                            <div class="d-flex">
                                <p class="mb-0 pt-1"
                                    style="border-radius: 5px;font-size: 10px;background-color: rgb(255, 152, 212);padding: 0 4px;color: rgb(0, 0, 0)">
                                    <?php echo $product->diskon."%"; ?></p>
                                <p class="price mb-0" style="font-size: 0">
                                    <span class="old-price ml-2"
                                        style="font-size: 16px"><?php echo e(__('Rp '.$product->harga)); ?></span>
                                </p>
                            </div>
                            <p class="price mb-0">
                                <span class="title">Harga:</span>
                                <span class="new-price"><?php echo 'Rp
                                    '.$harga = $product->harga-$product->harga*$product->diskon/100; ?></span>
                            </p>
                            <?php else: ?>
                            <p class="price">
                                <span class="title">Harga: </span>
                                <span class="new-price"><?php echo e(__('Rp '.$product->harga)); ?></span>
                            </p>
                            <?php endif; ?>
                            <div class="product-table">
                                <ul>
                                    <li>
                                        <span class="var"><?php echo e(__('Berat')); ?></span>
                                        <span class="val"><?php echo e(__($product->berat.' Kg')); ?></span>
                                    </li>
                                    <li>
                                        <span class="var"><?php echo e(__('Kondisi')); ?></span>
                                        <span class="val"><?php echo e(__($product->kondisi)); ?></span>
                                    </li>
                                    <li>
                                        <span class="var"><?php echo e(__('Stok')); ?></span>
                                        <span class="val"><?php echo e(__($product->stok.' Kg')); ?></span>
                                    </li>
                                    <li>
                                        <span class="var"><?php echo e(__('Kategori')); ?></span>
                                        <span class="val"><?php echo e(__($product->kategori)); ?></span>
                                    </li>
                                </ul>
                            </div>
                            <form action="<?php echo e(route('checkout-screen', ['id'=>$product->id])); ?>" method="get">
                                <div class="row row-0">
                                    <div class="col-6">
                                        <span class="var" style="font-weight: bold">Jumlah</span>
                                    </div>
                                    <div class="col-6">
                                        <div class="add-to-cart">
                                            <div class="el-counter el-counter-1 d-block empty">
                                                <button id="kurang" type="button" class="button button-minus"
                                                    style="background-color: rgb(53, 53, 53)">
                                                    <i class="ti-minus text-light"></i>
                                                </button>
                                                <span class="label">1</span>
                                                <input class="<?php if ($errors->has('jumlah')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('jumlah'); ?> is invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" id="jumlah"
                                                    type="number" value="1" min="1" max="<?php echo e(__($product->stok)); ?>"
                                                    step="1" name="jumlah">
                                                <button id="tambah" type="button" class="button button-plus"
                                                    style="background-color: rgb(53, 53, 53)">
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
                                <div class="row row-0">
                                    <div class="col-12 mt-3">
                                        <?php if($product->stok == 0): ?>
                                        <button class="button button-md button-block text-center" disabled
                                            style="background-color: #888888" type="button">
                                            <span class="ti-bag text-light"></span>
                                            <span class="text-light">BELI</span>
                                        </button>
                                        <?php else: ?>
                                        <button class="button button-md button-block button-dark text-center"
                                            type="submit">
                                            <span class="ti-bag"></span>
                                            <span class="text">BELI</span>
                                        </button>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </form>
                            <div class="shareit">
                                <ul class="el-social-icons block">
                                    <li class="bg-facebook">
                                        <a href="<?php echo e(__($fbShare)); ?>" target="blank">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="bg-twitter">
                                        <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" target="blank"
                                            data-show-count="false"><i class="ti-twitter"></i></a>
                                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8">
                                        </script>
                                    </li>
                                    <li class="bg-instagram">
                                        <a href="#">
                                            <i class="ti-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--/-->
                </div>
            </div>
            <div class="container">
                <div class="el-tabs">
                    <!--Links-->
                    <div class="el-tabs-links el-tabs-links-2">
                        <ul>
                            <li class="active" data-tab-link="tab-1">
                                <span class="text">Description</span>
                            </li>
                            <li data-tab-link="tab-3">
                                <span class="text mr-2"><?php echo e(__('Review')); ?></span>
                                <?php if($rataFinal == 5): ?>
                                <i class="fa fa-star" style="color: goldenrod"></i>
                                <span><?php echo e(__(round($rataFinal,1))); ?></span>
                                <?php endif; ?>
                                <?php if($rataFinal > 0 && $rataFinal < 5): ?> <i class="fa fa-star-half-o"
                                    style="color: goldenrod"></i>
                                    <span><?php echo e(__(round($rataFinal,1))); ?></span>
                                    <?php endif; ?>
                                    <?php if($rataFinal == 0): ?>
                                    <i class="fa fa-star-o" style="color: goldenrod"></i>
                                    <span><?php echo e(__(round($rataFinal,1))); ?></span>
                                    <?php endif; ?>
                            </li>
                        </ul>
                    </div>
                    <!--/-->
                    <!--Content-->
                    <div class="el-tabs-content">
                        <ul>
                            <li class="active" data-tab-content="tab-1">
                                <div class="content">
                                    <h2>Product Infomation</h2>
                                    <?php echo $product->deskripsi; ?>

                                </div>
                            </li>
                            <li data-tab-content="tab-3">
                                <div class="content">
                                    <h2><?php echo e(__('('.count($review).') '.' Review for this product')); ?></h2>
                                    <?php $__currentLoopData = $review; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="el-comments">
                                        <ul>
                                            <li>
                                                <div class="el-comments-avatar">
                                                    <img src="<?php echo e(asset('assets/images/people/'.$item->foto)); ?>"
                                                        alt="Foto Profile" />
                                                </div>
                                                <div class="el-comments-content">
                                                    <div class="el-comments-info">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <span
                                                                    class="el-comments-author"><?php echo e(__($item->nama_lengkap)); ?></span>
                                                            </div>
                                                            <div class="col-6 text-right d-rtl">
                                                                <span
                                                                    class="el-comments-date"><?php echo e(__($item->created_at)); ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p>
                                                        <?php echo e(__($item->review)); ?>

                                                    </p>
                                                    <?php if($item->rating == 5): ?>
                                                    <ul class="el-stars">
                                                        <li>
                                                            <i class="ti-star active"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ti-star active"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ti-star active"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ti-star active"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ti-star active"></i>
                                                        </li>
                                                    </ul>
                                                    <?php endif; ?>
                                                    <?php if($item->rating == 4): ?>
                                                    <ul class="el-stars">
                                                        <li>
                                                            <i class="ti-star active"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ti-star active"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ti-star active"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ti-star active"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ti-star"></i>
                                                        </li>
                                                    </ul>
                                                    <?php endif; ?>
                                                    <?php if($item->rating == 3): ?>
                                                    <ul class="el-stars">
                                                        <li>
                                                            <i class="ti-star active"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ti-star active"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ti-star active"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ti-star "></i>
                                                        </li>
                                                        <li>
                                                            <i class="ti-star"></i>
                                                        </li>
                                                    </ul>
                                                    <?php endif; ?>
                                                    <?php if($item->rating == 2): ?>
                                                    <ul class="el-stars">
                                                        <li>
                                                            <i class="ti-star active"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ti-star active"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ti-star "></i>
                                                        </li>
                                                        <li>
                                                            <i class="ti-star "></i>
                                                        </li>
                                                        <li>
                                                            <i class="ti-star "></i>
                                                        </li>
                                                    </ul>
                                                    <?php endif; ?>
                                                    <?php if($item->rating == 1): ?>
                                                    <ul class="el-stars">
                                                        <li>
                                                            <i class="ti-star active"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ti-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ti-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ti-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ti-star"></i>
                                                        </li>
                                                    </ul>
                                                    <?php endif; ?>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--/-->
                </div>
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
<?php /**PATH /home/witsudi/LaravelProject/project-ppl/resources/views/product-detail.blade.php ENDPATH**/ ?>