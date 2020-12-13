<!DOCTYPE html>
<html lang="id" dir="ltr">

<head>
    <?php $__env->startSection('title','Edit Profile'); ?>
    <?php echo $__env->make('layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
</head>

<body style="background-color: #eeeeee">
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
    <header class="app-header app-header-1 bg-dark">
        <div class="container">
            <a href="<?php echo e(route('profile-user')); ?>"><span class="text-light p-1">&laquo; Back</span></a>
        </div>
    </header>
    <!--Auth-->
    <section class="section section-auth section-auth-login">
        <div class="display-spacing">
            <div class="container">
                <div class="row">
                    <?php if(session()->has('successUpdate')): ?>
                    <div id="message" class="w-100 position-absolute" style="z-index: 5;margin-top: -2.5rem;left:40%">
                        <div class="bg-success w-25 pl-4 p-2 text-light d-flex align-items-center justify-content-center"
                            style="border-radius: 5px">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                            <span class="ml-2"><?php echo e(session()->get('successUpdate')); ?></span>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if(session()->has('error-password')): ?>
                    <div id="message" class="w-100 position-absolute" style="z-index: 5;margin-top: -2.5rem;left:40%">
                        <div class="bg-danger w-25 pl-4 p-2 text-light d-flex align-items-center justify-content-center"
                            style="border-radius: 5px">
                            <i class="fa fa-times" aria-hidden="true"></i>
                            <span class="ml-2"><?php echo e(session()->get('error-password')); ?></span>
                        </div>
                    </div>
                    <?php endif; ?>
                    <div class="card w-100">
                        <div class="card-header text-center">
                            <span>Data Akun</span>
                        </div>
                        <div class="card-body">
                            <div class="container ">
                                <div class="row">
                                    <div class="col-md-6 col-lg-4 text-center">
                                        <div class="card card-shadow border-0 rounded bg-secondary w-100">
                                            <a id="foto" href="#" class="text-center"><img
                                                    src="<?php echo e(asset('assets/images/people/'.$akun->foto)); ?>"
                                                    class="card-img-top w-auto" alt="__FOTO__"></a>
                                            <div id="hoverEditFoto" class="hover-edit">
                                                <button id="editFoto" class="btn btn-secondary w-50">Edit Foto
                                                    Profile</button>
                                            </div>
                                            <div class="card-body bg-primary rounded">
                                                <h5 class="card-title text-center h5 text-light"><?php echo e($akun->nama_lengkap); ?>

                                                </h5>
                                            </div>
                                        </div>
                                        <button id="editPassword" class="btn btn-primary mt-2 w-100">Edit
                                            Password</button>
                                    </div>
                                    <div class="col-sm pt-1">
                                        <h5 class="h5 font-weight-bold">Ubah Data Diri</h5>
                                        <form method="POST" class="mt-3 form-1" action="<?php echo e(route('edit-user')); ?>">
                                            <?php echo csrf_field(); ?>
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label>Nama Lengkap</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input
                                                        class="form-control <?php if ($errors->has('nama_lengkap')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nama_lengkap'); ?> is invail <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                                                        type="text" name="nama_lengkap" value="<?php echo e($akun->nama_lengkap); ?>">
                                                    <?php if ($errors->has('nama_lengkap')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nama_lengkap'); ?>
                                                    <span class="text-danger">
                                                        <strong><?php echo e($message); ?></strong>
                                                    </span>
                                                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label>Username</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input class="form-control <?php if ($errors->has('username')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('username'); ?> is invail <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                                                        type="text" name="username" value="<?php echo e($akun->username); ?>">
                                                    <?php if ($errors->has('username')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('username'); ?>
                                                    <span class="text-danger">
                                                        <strong><?php echo e($message); ?></strong>
                                                    </span>
                                                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label>Email</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is invail <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                                                        type="email" name="email" value="<?php echo e($akun->email); ?>">
                                                    <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                                                    <span class="text-danger">
                                                        <strong><?php echo e($message); ?></strong>
                                                    </span>
                                                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label>Nomer HP</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="form-item">
                                                        <input
                                                            class="input-icon pt-2 pb-2 <?php if ($errors->has('nomer_hp')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nomer_hp'); ?> is invail <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                                                            type="number" name="nomer_hp" value="<?php echo e($akun->nomer_hp); ?>">
                                                        <div class="icon mb-1 ml-3">
                                                            <span>+62</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php if ($errors->has('nomer_hp')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nomer_hp'); ?>
                                                <span class="text-danger">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label>Alamat</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input class="form-control <?php if ($errors->has('alamat')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('alamat'); ?> is invail <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                                                        type="text" name="alamat" value="<?php echo e($akun->alamat); ?>">
                                                    <?php if ($errors->has('alamat')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('alamat'); ?>
                                                    <span class="text-danger">
                                                        <strong><?php echo e($message); ?></strong>
                                                    </span>
                                                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                                </div>
                                            </div>
                                            <?php if($akun->status == 'mitra'): ?>
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label>No. Rekening</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input class="form-control <?php if ($errors->has('alamat')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('alamat'); ?> is invail <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                                                        type="text" name="rekening" value="<?php echo e(__($akun->no_rekening)); ?>">
                                                    <?php if ($errors->has('alamat')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('alamat'); ?>
                                                    <span class="text-danger">
                                                        <strong><?php echo e($message); ?></strong>
                                                    </span>
                                                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                                </div>
                                            </div>
                                            <?php endif; ?>
                                            <input class="float-right button-primary rounded pl-5 pr-5 p-2"
                                                type="submit" value="Simpan">
                                        </form>
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
    <!--/-->
    <div id="modalEditPassword" class="pos-fixed" style="display: none">
        <div class="option w-50">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div></div>
                    <span class="text-bold mb-0">Ganti Password</span>
                    <i id="closeModalEditPassword" class="fa fa-times" aria-hidden="true" style="cursor: pointer"></i>
                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('edit-password')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password Lama</label>
                            <input type="password" name="password_lama"
                                class="form-control <?php if ($errors->has('password_lama')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password_lama'); ?> is invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>">
                            <?php if ($errors->has('password_lama')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password_lama'); ?>
                            <span class="text-danger">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password Baru</label>
                            <input type="password" name="password"
                                class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>">
                            <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                            <span class="text-danger">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Konfirmasi Password Baru</label>
                            <input type="password" name="password_confirmation"
                                class="form-control <?php if ($errors->has('password_confirmation')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password_confirmation'); ?> is not match <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>">
                            <?php if ($errors->has('password_confirmation')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password_confirmation'); ?>
                            <span class="text-danger">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                        </div>
                        <button type="submit" class="btn-primary btn w-100">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="modalEditFoto" class="pos-fixed" style="display: none">
        <div class="option w-50">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div></div>
                    <span class="text-bold mb-0">Ganti Foto Profil</span>
                    <i id="closeModalEditFoto" class="fa fa-times" aria-hidden="true" style="cursor: pointer"></i>
                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('edit-foto')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="labelFileFoto">Unggah Foto Profil</label>
                            <input type="file" name="foto_profile" id="fotoProfile"
                                class="form-control-file border rounded p-2 <?php if ($errors->has('foto_profile')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('foto_profile'); ?> not valid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>">
                        </div>
                        <button type="submit" class="btn btn-primary">Unggah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php if ($errors->has('foto_profile')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('foto_profile'); ?>
    <div class="pos-fixed" id="notifFoto">
        <div class="option">
            <div class="card border-0 rounded">
                <div class="card-body bg-danger rounded">
                    <strong class="text-light"><?php echo e($message); ?></strong>
                </div>
            </div>
        </div>
    </div>
    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
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
    <script>
        $(document).ready(function () {
            setTimeout(function () {
                $('#notifFoto').fadeOut();
                $("#message").fadeOut(3000);
            }, 3000);
            $('#editPassword').click(function () {
                $('#modalEditPassword').fadeIn();
            })
            $('#editFoto').click(function () {
                $('#modalEditFoto').fadeIn();
            })
            $('#closeModalEditPassword').click(function () {
                $('#modalEditPassword').fadeOut();
            })
            $('#closeModalEditFoto').click(function () {
                $('#modalEditFoto').fadeOut();
            })
            $('#foto').hover(function () {
                $('#hoverEditFoto').addClass('d-flex');
            })
            $('#hoverEditFoto').mouseleave(function () {
                $('#hoverEditFoto').removeClass('d-flex');
            })
            $('#editFoto').click(function () {
                $('#modalEditFoto').fadeIn();
            })
            $('#closeModalEditFoto').click(function () {
                $('#modalEditFoto').fadeOut();
            })
        })

    </script>
    <!--/-->
</body>

</html>
<?php /**PATH /home/witsudi/LaravelProject/project-ppl/resources/views/edit-profile.blade.php ENDPATH**/ ?>