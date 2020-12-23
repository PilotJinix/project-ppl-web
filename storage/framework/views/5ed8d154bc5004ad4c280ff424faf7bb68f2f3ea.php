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
            <?php $__currentLoopData = $detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="container">
                <div class="row row-0 ">
                    <div class="border rounded p-4 w-75 m-auto shadow">
                        <div class="row row-0">
                            <div class="col-2">
                                <img src="<?php echo e(asset('assets/images/products/'.$item->gambar)); ?>" alt="gambar"
                                    width="100px">
                            </div>
                            <div class="col-6">
                                <h5 class="text-bold"><?php echo e(__($item->nama)); ?></h5>
                                <span class="p">Total: <label
                                        style="color: #cf6324">Rp<?php echo e(__($item->total_harga)); ?></label></span>
                                <small style="font-size: 9px" class="fa fa-genderless" aria-hidden="true"></small>
                                <?php if($item->status_checkout == 'Menunggu Pembayaran'): ?>
                                <small class="text-danger"><?php echo e(_($item->status_checkout)); ?></small>
                                <?php endif; ?>
                                <?php if($item->status_checkout == 'Proses Pengiriman'): ?>
                                <small class="text-warning"><?php echo e(_($item->status_checkout)); ?></small>
                                <?php endif; ?>
                                <?php if($item->status_checkout == 'Menunggu Konfirmasi'): ?>
                                <small class="text-info"><?php echo e(_($item->status_checkout)); ?></small>
                                <?php endif; ?>
                                <?php if($item->status_checkout == 'Diterima'): ?>
                                <small class="text-success"><?php echo e(_($item->status_checkout)); ?></small>
                                <?php endif; ?>
                                <?php if($item->status_checkout == 'Dibatalkan'): ?>
                                <small class="text-danger"><?php echo e(_($item->status_checkout)); ?></small>
                                <?php endif; ?>
                                <div class=" rounded pl-3 p-1 mb-2" style="background-color: #aaaaaa">
                                    <?php if($item->status_checkout == "Menunggu Pembayaran" OR $item->status_checkout ==
                                    "Dibatalkan"): ?>
                                    <span>
                                        <i class="fa fa-calendar text-danger" aria-hidden="true"></i>
                                        <label
                                            class="mb-0 text-dark"><?php echo e(__('Bayar sebelum '.$item->batas_pembayaran.' WIB')); ?></label>
                                    </span>
                                    <?php else: ?>
                                    <span>
                                        <label class="mb-0 text-dark"><?php echo e(__('Nomor Resi: ')); ?></label>
                                        <?php if($item->resi == null): ?>
                                        <label class="mb-0"> - </label>
                                        <?php else: ?>
                                        <label class="mb-0"><?php echo e(__($item->resi)); ?></label>
                                        <?php endif; ?>
                                    </span>
                                    <?php endif; ?>
                                </div>
                                <div class="w-100">
                                    <div class="d-flex justify-content-between w-100">
                                        <span><?php echo e(__('Metode pembayaran :')); ?></span>
                                        <span><?php echo e(__($item->metode_pembayaran)); ?></span>
                                    </div>
                                    <div class="d-flex justify-content-between w-100">
                                        <span><?php echo e(__('Nomor Rekening :')); ?></span>
                                        <span><?php echo e(__('88XXXXXXXXXXXXXX a/n WGFarm')); ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-flex flex-column align-items-center justify-content-end h-100">
                                    <?php if($item->metode_pembayaran == 'Bank Mandiri'): ?>
                                    <img src="<?php echo e(asset('assets/images/icons/mandiri.png')); ?>" alt="mandiri" width="150px">
                                    <?php endif; ?>
                                    <?php if($item->metode_pembayaran == 'Bank BCA'): ?>
                                    <img src="<?php echo e(asset('assets/images/icons/bca.png')); ?>" alt="bca" width="150px">
                                    <?php endif; ?>
                                    <?php if($item->metode_pembayaran == 'Bank BRI'): ?>
                                    <img src="<?php echo e(asset('assets/images/icons/briva.png')); ?>" alt="briva" width="150px">
                                    <?php endif; ?>
                                    <?php if($item->status_checkout == 'Menunggu Pembayaran'): ?>
                                    <a href="<?php echo e(route('payment',$item->id)); ?>" class="mt-3 w-100">
                                        <button class="btn btn-primary w-100 mb-2">Cara Pembayaran</button>
                                    </a>
                                    <button id="btnStruk" class="btn btn-success w-100">Unggah Struk Pembayaran</button>
                                    <?php endif; ?>
                                    <?php if($item->status_checkout == 'Menunggu Konfirmasi'): ?>
                                    <button class="btn btn-primary w-100 mb-2" disabled>Menunggu Konfirmasi
                                        Admin</button>
                                    <?php endif; ?>
                                    <?php if($item->status_checkout == 'Proses Pengiriman'): ?>
                                    <a href="<?php echo e(route('update-status-diterima',$item->id)); ?>" class="mt-3 w-100">
                                        <button class="btn btn-success w-100">Diterima</button>
                                    </a>
                                    <?php endif; ?>
                                    <?php if($item->status_checkout == 'Diterima'): ?>
                                    <?php if($item->review == "sudah"): ?>
                                    <a id="review" href="<?php echo e(__('#')); ?>" class="mt-3 w-100">
                                        <button class="btn btn-secondary w-100" disabled>Terima kasih atas
                                            dukungannya</button>
                                    </a>
                                    <?php else: ?>
                                    <a id="review" href="<?php echo e(__('#')); ?>" class="mt-3 w-100">
                                        <button class="btn btn-primary w-100">Beri Penilaian</button>
                                    </a>
                                    <?php endif; ?>
                                    <?php endif; ?>
                                    <?php if($item->status_checkout == 'Dibatalkan'): ?>
                                    <a id="review" href="<?php echo e(__('#')); ?>" class="mt-3 w-100">
                                        <button class="btn btn-secondary w-100" disabled>Pesanan Dibatalkan</button>
                                    </a>
                                    <?php endif; ?>
                                </div>
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
    <div id="review-screen" class="pos-fixed" style="display: none">
        <div class="option w-50">
            <div class="card-header">
                <h5 class="text-title text-bold mb-0">Beri Kami Nilai!</h5>
            </div>
            <?php $__currentLoopData = $detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <form action="<?php echo e(route('review', [$item->produk_id, $item->id])); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="card-body text-center">
                    <span class="text-bold">Rating And Review!</span>
                    <div class="d-flex justify-content-around">
                        <i id="star1" class="fa fa-star-o" aria-hidden="true"
                            style="font-size: 30px;color: #ffdf28"></i>
                        <i id="star2" class="fa fa-star-o" aria-hidden="true"
                            style="font-size: 30px;color: #ffdf28"></i>
                        <i id="star3" class="fa fa-star-o" aria-hidden="true"
                            style="font-size: 30px;color: #ffdf28"></i>
                        <i id="star4" class="fa fa-star-o" aria-hidden="true"
                            style="font-size: 30px;color: #ffdf28"></i>
                        <i id="star5" class="fa fa-star-o" aria-hidden="true"
                            style="font-size: 30px;color: #ffdf28"></i>
                        <input type="text" id="rating" name="rating" class="d-none">
                    </div>
                    <div class="form-group mt-3">
                        <textarea required name="review" class="form-control" id="" placeholder="Your Rreview"
                            rows="3"></textarea>
                    </div>
                </div>
                <div class="btn-option pr-3">
                    <button class="btn btn-primary" type="submit"><?php echo e(__('Kirim')); ?></button>
                    <button id="back" class="btn btn-danger" type="button"><?php echo e(__('Kembali')); ?></button>
                </div>
            </form>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    <?php if(session()->has('success')): ?>
    <div id="success-review" class="position-absolute bg-success rounded p-2 pl-5 pr-5 text-light"
        style="top: 18%;left: 50%;transform: translate(-50%,-18%)">
        <span><?php echo e(__(session()->get('success'))); ?></span>
    </div>
    <?php endif; ?>
    <div id="modalUnggahStruk" class="pos-fixed" style="display: none">
        <div class="option w-50">
            <div class="card">
                <div class="card-header">
                    <span>Unggah struk bukti pembayaran</span>
                </div>
                <div class="card-body">
                    <?php $__currentLoopData = $detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <form action="<?php echo e(route('unggah-struk',$item->id)); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <span>Unggah</span>
                            <input type="file" class="form-file-control ml-4 <?php if ($errors->has('struk')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('struk'); ?> not valid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                                name="struk">
                            <?php if ($errors->has('struk')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('struk'); ?>
                            <strong class="text-danger"> <?php echo "*".$message; ?> </strong>
                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                        </div>
                        <button type="submit" class="btn btn-primary">KIRIM</button>
                        <a id="closeStruk" href="#" onclick="return false;" class="btn btn-danger">TUTUP</a>
                    </form>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
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

            $("#btnStruk").on('click', function () {
                $('#modalUnggahStruk').fadeIn();
            });
            $("#closeStruk").on('click', function () {
                $('#modalUnggahStruk').fadeOut();
            })
        });

    </script>
    <!--/-->
</body>

</html>
<?php /**PATH /home/witsudi/LaravelProject/project-ppl/resources/views/status-pembelian.blade.php ENDPATH**/ ?>