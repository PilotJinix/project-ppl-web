<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <?php $__env->startSection('title','Upgrade akun'); ?>
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
                <header class="el-heading el-heading-1 center">
                    <h2>Upgrade Akunmu Menjadi Mitra Sekarang</h2>
                    <p>Made with love for designers & developers.</p>
                </header>
                <form class="form form-1" method="POST" action="<?php echo route('create-mitra'); ?>"
                    enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="row row-sm">
                        <div class="col-12">
                            <div class="form-item">
                                <label>Nama Lengkap</label>
                                <input type="text" readonly name="nama_lengkap"
                                    class="input-icon <?php if ($errors->has('nama_lengkap')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nama_lengkap'); ?> is invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                                    placeholder="Nama Lengkap" value="<?php echo e(__($akun->nama_lengkap)); ?>" />
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                </div>
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
                        <div class="col-12">
                            <div class="form-item">
                                <label>Email address</label>
                                <input type="email" readonly class="input-icon <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is invalid! <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                                    placeholder="name@example.com" name="email" value="<?php echo e(__($akun->email)); ?>" />
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-at-sign">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path>
                                    </svg>
                                </div>
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
                        <div class="col-12">
                            <div class="form-item">
                                <label>Alamat Lengkap</label>
                                <input type="text" name="alamat"
                                    class="input-icon <?php if ($errors->has('alamat')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('alamat'); ?> is invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" placeholder="Alamat"
                                    value="<?php echo e(__($akun->alamat)); ?>" />
                                <div class="icon">
                                    <i class="fa fa-address-card" aria-hidden="true"></i>
                                </div>
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
                                <label>NIK</label>
                                <input type="text" name="nik" class="input-icon <?php if ($errors->has('nik')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nik'); ?> is invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                                    placeholder="NIK" />
                                <div class="icon">
                                    <i class="fa fa-address-card" aria-hidden="true"></i>
                                </div>
                            </div>
                            <?php if ($errors->has('nik')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nik'); ?>
                            <span class="text-danger invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                        </div>
                        <div class="col-12">
                            <div class="form-item">
                                <label>Foto KTP</label>
                                <div class="rounded" style="border: 1px solid #e1e1e1;padding: 13px;border-radius: 5px">
                                    <input type="file" class="<?php if ($errors->has('ktp')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('ktp'); ?> is fail <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                                        style="cursor: pointer;border: none" name="ktp">
                                </div>
                            </div>
                            <?php if ($errors->has('ktp')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('ktp'); ?>
                            <span class="text-danger invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                        </div>
                        <div class="col-12">
                            <div class="form-item">
                                <label>No. Rekening</label>
                                <input type="number" name="rekening"
                                    class="input-icon <?php if ($errors->has('rekening')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('rekening'); ?> is invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                                    placeholder="No. Rekening" />
                                <div class="icon">
                                    <i class="fa fa-credit-card" aria-hidden="true"></i>
                                </div>
                            </div>
                            <?php if ($errors->has('rekening')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('rekening'); ?>
                            <span class="text-danger invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                        </div>
                        <div class="col-12">
                            <div class="form-item">
                                <label>Nomor HP</label>
                                <input type="number" name="nomer_hp" value="<?php echo e(__($akun->nomer_hp)); ?>"
                                    class="input-icon <?php if ($errors->has('nomer_hp')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nomer_hp'); ?> is invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" placeholder="85***"
                                    style="padding-left: 74px" />
                                <div class="icon d-flex">
                                    <div>
                                        <i style="font-size:24px" class="fa">&#xf095;</i>
                                    </div>
                                    <div style="margin-left: 7px; padding: 0 5px;margin-top: 1px">
                                        <i class="fa">+62</i>
                                    </div>
                                </div>
                            </div>
                            <?php if ($errors->has('nomer_hp')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nomer_hp'); ?>
                            <span class="text-danger invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                        </div>
                        <div class="col-12">
                            <div class="form-item">
                                <input type="submit" class="button button-lg button-block button-primary"
                                    value="<?php echo e(__('Upgrade')); ?>">
                            </div>
                        </div>
                    </div>
                </form>
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
    <?php if($status == 'proses'): ?>
    <div class="pos-fixed">
        <div class="option">
            <div class="option-header">
                <span class="text-title">Ooppps!</span>
            </div>
            <div class="option-body">
                <p>Kamu sudah mengirim ajuan!</p>
            </div>
            <div class="btn-option">
                <a class="button button-primary rounded" href="<?php echo e(url()->previous()); ?>"
                    style="padding: 0 20px"><span>OK</span></a>
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
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/plugins.min.js"></script>
    <script src="assets/js/main-scripts.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/demo.js"></script>
    <!--/-->
</body>

</html>
<?php /**PATH /home/witsudi/LaravelProject/project-ppl/resources/views/upgrade-mitra.blade.php ENDPATH**/ ?>