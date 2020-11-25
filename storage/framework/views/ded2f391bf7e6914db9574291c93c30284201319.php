<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php $__env->startSection('title','Login'); ?>
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
            <h2>User login</h2>
            <p>Login dengan akun anda.</p>
            <?php if(session()->get('success')): ?>
              <div class="bg-success p-2 rounded">
                <i class="fa fa-check-circle" aria-hidden="true"></i>
                <label class="m-0">Register Berhasil! Silahkan Login</label>
              </div>
            <?php endif; ?>
          </header>
          <form class="form form-1" method="POST" action="<?php echo e(route('login')); ?>">
            <?php echo csrf_field(); ?>
            <div class="row row-sm">
              <div class="col-12">
                <div class="form-item">
                  <label>Username</label>
                  <input type="text" class="input-icon <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name='username'/>
                  <div class="icon">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="1em"
                      height="1em"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      class="feather feather-user"
                    >
                      <path
                        d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"
                      ></path>
                      <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                  </div>
                </div>
                <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                  <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($message); ?></strong>
                  </span>
                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
              </div>
              <div class="col-12">
                <div class="form-item">
                  <label>Password</label>
                  <span class="label-side el-show-password">Show password</span>
                  <input type="password" class="input-icon <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="password"/>
                  <div class="icon">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="1em"
                      height="1em"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      class="feather feather-key"
                    >
                      <path
                        d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4"
                      ></path>
                    </svg>
                  </div>
                </div>
                <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                  <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($message); ?></strong>
                  </span>
                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
              </div>
              <div class="col-12">
                <div class="form-item">
                  <input type="submit" class="button button-lg button-block button-primary" value="Login">
                </div>
              </div>
              <?php if(session()->has('error')): ?>
                  <div class="ml-3 mr-3 w-100  alert alert-danger">
                    <?php echo e(session()->get('error')); ?>

                  </div>
              <?php endif; ?>
            </div>
          </form>
          <div class="pt-20 text-center">
            <span class="text-color">Belum memiliki akun?</span>
            <a href="<?php echo e(route('register')); ?>" class="text-primary">Buat Akun</a>
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
                <a href="<?php echo e(url('/')); ?>">
                    <span class="text">Beranda</span>
                  </a>
                </li>
                <li>
                  <a href="<?php echo e(url('/')); ?>">
                    <span class="text">Best Sales</span>
                  </a>
                </li>
                <li>
                  <a href="<?php echo e(url('about')); ?>">
                    <span class="text">Tentang Kami</span>
                  </a>
                </li>
                <li>
                  <a href="<?php echo e(url('/')); ?>">
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
<?php /**PATH /home/witsudi/LaravelProject/project-ppl/resources/views/auth/login.blade.php ENDPATH**/ ?>