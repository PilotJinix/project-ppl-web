<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $__env->make('layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <title>Document</title>
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
            <?php echo $__env->make('layouts.mainmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </header>
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
    <!--Auth-->
    <section class="section section-auth section-auth-login">
        <div class="display-spacing">
            <div class="container">
                <div class="row row-0">
                    <div class="card w-100 shadow">
                        <div class="card-header">
                            <span>Ajukan Penawaran Produk Anda</span>
                        </div>
                        <div class="card-body">
                            <button id="buttonPatokanHarga" class="btn btn-secondary w-100">List Patokan Harga Produk
                                Tersedia</button>
                            <form method="post" class="mt-2" action="<?php echo e(route('ajukan-produk')); ?>"
                                enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Produk</label>
                                    <input type="text" name="nama_produk"
                                        class="form-control <?php if ($errors->has('nama_produk')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nama_produk'); ?> is not valid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" required>
                                    <?php if ($errors->has('nama_produk')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nama_produk'); ?>
                                    <span class="text-danger invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Jumlah Berat Produk (kg)</label>
                                    <input type="number"
                                        class="form-control <?php if ($errors->has('berat_produk')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('berat_produk'); ?> is not valid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                                        name="berat_produk" required>
                                    <?php if ($errors->has('berat_peoduk')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('berat_peoduk'); ?>
                                    <span class="text-danger invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Foto produk</label>
                                    <input type="file"
                                        class="form-control-file border p-2 rounded <?php if ($errors->has('foto_produk')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('foto_produk'); ?> is not valid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                                        name="foto_produk" required>
                                    <?php if ($errors->has('foto_produk')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('foto_produk'); ?>
                                    <span class="text-danger invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Deskripsi</label>
                                    <textarea name="deskripsi_produk" cols="30"
                                        class="form-control <?php if ($errors->has('deskripsi_produk')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('deskripsi_produk'); ?> is not valid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                                        name="deskripsi_produk" required></textarea>
                                    <?php if ($errors->has('deskripsi_produk')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('deskripsi_produk'); ?>
                                    <span class="text-danger invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                </div>
                                <button type="submit" class="btn btn-primary pl-5 pr-5">Kirim</button>
                            </form>
                        </div>
                    </div>
                </div>
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
    <div id="modalPatokanHarga" class="pos-fixed" style="display: none">
        <div class="option w-50">
            <div class="card" style="max-height: 400px">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>List Patokan Harga Produk</span>
                    <button id="closeModalHarga" class="btn"><i class="fa fa-times" aria-hidden="true"></i></button>
                </div>
                <div class="card-body" style="overflow: auto">
                    <div class="d-block">
                        <div class="input-group">
                            <span class="mr-2">Filter :</span>
                            <input id="filter" type="text" class="border rounded" readonly value="Semua">
                            <div class="input-group-append">
                                <button id="filter-button" class="input-group-text"><i class="fa fa-arrow-circle-down"
                                        aria-hidden="true"></i></button>
                            </div>
                        </div>
                        <div id="filter-list" class="border rounded p-1 position-absolute bg-light mt-1"
                            style="min-width: 15rem;display: none">
                            <ul class="list-unstyled mb-0">
                                <li id="list-semua" style="cursor: pointer">Semua</li>
                                <li id="list-buah" style="cursor: pointer">Buah</li>
                                <li id="list-sayur" style="cursor: pointer">Sayur</li>
                            </ul>
                        </div>
                    </div>
                    <div id="filter-semua" class="w-100" style="display: inline-block">
                        <table id="table" class="table table-sm table-bordered mt-3 tabel-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Jenis</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Berat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $patokan_harga; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e(__($list->nama_barang)); ?></td>
                                    <td><?php echo e(__($list->jenis)); ?></td>
                                    <td><?php echo e(__($list->harga)); ?></td>
                                    <td><?php echo e(__($list->berat)); ?></td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                    <div id="filter-buah" class="mt-3" style="display: none">
                        <table class="table table-sm table-bordered mt-3">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Jenis</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Berat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $patokan_harga; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($list->jenis == 'Buah'): ?>
                                <tr>
                                    <td><?php echo e(__($list->nama_barang)); ?></td>
                                    <td><?php echo e(__($list->jenis)); ?></td>
                                    <td><?php echo e(__($list->harga)); ?></td>
                                    <td><?php echo e(__($list->berat)); ?></td>
                                </tr>
                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                    <div id="filter-sayur" class="mt-3" style="display: none">
                        <table class="table table-sm table-bordered mt-3">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Jenis</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Berat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $patokan_harga; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($list->jenis == 'Sayuran'): ?>
                                <tr>
                                    <td><?php echo e(__($list->nama_barang)); ?></td>
                                    <td><?php echo e(__($list->jenis)); ?></td>
                                    <td><?php echo e(__($list->harga)); ?></td>
                                    <td><?php echo e(__($list->berat)); ?></td>
                                </tr>
                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if(session()->has('ajuan-success')): ?>
    <div id="modalSuccess" class="pos-fixed">
        <div class="option w-50">
            <div class="card">
                <div class="card-body text-center">
                    <i class="fa fa-check-circle-o" aria-hidden="true" style="font-size: 20rem;color: green"></i>
                    <p class="card-title">Terima Kasih! Ajuan Anda Berhasil</p>
                    <button id="closeModalSuccess" class="btn btn-primary w-100">OKE</button>
                </div>
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
    <script src="<?php echo e(asset('assets/js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/plugins.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/main-scripts.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/custom.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/demo.js')); ?>"></script>
    <script>
        $(document).ready(function () {
            /* code fitur modal list patokan harga*/
            $('#buttonPatokanHarga').click(function () {
                $('#modalPatokanHarga').fadeIn('slow');
            });
            //Close button
            $('#closeModalHarga').click(function () {
                $('#modalPatokanHarga').fadeOut();
                $('#filter-semua').show(1000);
                $('#filter-buah').hide(2000);
                $('#filter-sayur').hide(2000);
                $('#filter').val('Semua');
            });
            /* close modal success */
            $('#closeModalSuccess').click(function () {
                $('#modalSuccess').fadeOut();
            });


            /* code fitur filter */
            $("#filter-button").click(function () {
                $("#filter-list").slideToggle("slow");
            });
            $('#list-semua').click(function () {
                $('#filter').val('Semua');
                $('#filter-semua').show();
                $('#filter-buah').hide();
                $('#filter-sayur').hide();
                $("#filter-list").slideUp();
            });
            $('#list-buah').click(function () {
                $('#filter').val('Buah');
                $('#filter-semua').hide();
                $('#filter-buah').show();
                $('#filter-sayur').hide();
                $("#filter-list").slideUp();
            });
            $('#list-sayur').click(function () {
                $('#filter').val('Sayur');
                $('#filter-sayur').show();
                $('#filter-semua').hide();
                $('#filter-buah').hide();
                $("#filter-list").slideUp();
            })
        });

    </script>
    <!--/-->
</body>

</html>
<?php /**PATH /home/witsudi/LaravelProject/project-ppl/resources/views/ajuanproduk.blade.php ENDPATH**/ ?>