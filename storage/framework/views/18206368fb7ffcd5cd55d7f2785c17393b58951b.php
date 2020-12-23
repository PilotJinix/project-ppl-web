<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <?php $__env->startSection('title','Register'); ?>
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
                    <h2>Buat Akun</h2>
                    <p>Agar lebih luar untuk berselancar</p>
                </header>
                <form class="form form-1" method="POST" action="<?php echo route('create'); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="row row-sm">
                        <div class="col-12">
                            <div class="form-item">
                                <label>Nama Lengkap</label>
                                <input type="text" name="nama_lengkap"
                                    class="input-icon <?php if ($errors->has('nama_lengkap')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nama_lengkap'); ?> is invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" placeholder="Name" />
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
                                <label>Username</label>
                                <input type="text" name="username"
                                    class="input-icon <?php if ($errors->has('username')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('username'); ?> is invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" placeholder="Username" />
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                </div>
                            </div>
                            <?php if ($errors->has('username')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('username'); ?>
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
                                <input type="email" class="input-icon <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is invalid! <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                                    placeholder="name@example.com" name="email" />
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
                                <label>Nomor HP</label>
                                <input type="number" name="nomer_hp"
                                    class="input-icon <?php if ($errors->has('nomer_hp')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nomer_hp'); ?> is invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" placeholder="85***"
                                    style="padding-left: 72px" />
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
                                <label>Alamat</label>
                                <input type="text" name="alamat"
                                    class="input-icon <?php if ($errors->has('alamat')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('alamat'); ?> is invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" placeholder="Alamat" />
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
                                <label>Password</label>
                                <input type="password" class="input-icon <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                                    placeholder="*******" name="password" />
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-key">
                                        <path
                                            d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                            <span class="text-danger invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                        </div>
                        <div class="col-12">
                            <div class="form-item">
                                <label>Password Re-Type</label>
                                <input type="password"
                                    class="input-icon <?php if ($errors->has('password_confirmation')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password_confirmation'); ?> is invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                                    placeholder="*******" name="password_confirmation" />
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-key">
                                        <path
                                            d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            <?php if ($errors->has('password_confirmation')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password_confirmation'); ?>
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
                                    value="Register">
                            </div>
                        </div>
                    </div>
                </form>
                <div class="pt-25 text-center">
                    <span class="text-color">Sudah punya akun ?</span>
                    <a href="<?php echo e(url('/login')); ?>" class="text-primary">login</a>
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
                                <a href="<?php echo e(route('dashboard')); ?>">
                                    <span class="text">beranda</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(url('shop')); ?>">
                                    <span class="text">Best Sales</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(url('about')); ?>">
                                    <span class="text">Tentang Kami</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(url('about')); ?>">
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
    <!--Scripts-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/plugins.min.js"></script>
    <script src="assets/js/main-scripts.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/demo.js"></script>
    <!--/-->
</body>

<!-- Mirrored from demo.afracode.com/orwell/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Nov 2020 04:08:43 GMT -->

</html>
<?php /**PATH /home/witsudi/LaravelProject/project-ppl/resources/views/auth/register.blade.php ENDPATH**/ ?>