<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php $__env->startSection('title','Home'); ?>
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
    <header class="app-header app-header-1 light">
      <div class="header-nav">
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
    <!--Hero-->
    <section
      class="section section-hero section-hero-1 overlay-color overlay-pattern"
    >
      <div class="display-center">
        <div class="el-slider">
          <div class="el-swiper-hero-2 swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div
                  class="el-item overlay-image"
                  style="
                    background-image: url(assets/images/images/hero-1-1.jpg);
                  "
                ></div>
              </div>
              <div class="swiper-slide">
                <div
                  class="el-item overlay-image"
                  style="
                    background-image: url(assets/images/images/hero-1-2.jpg);
                  "
                ></div>
              </div>
              <div class="swiper-slide">
                <div
                  class="el-item overlay-image"
                  style="
                    background-image: url(assets/images/images/hero-1-3.jpg);
                  "
                ></div>
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>
      <span class="bg-color bg-dark-30"></span>
      <span class="bg-pattern bg-pattern-3"></span>
      <div class="hero-inner display-center">
        <div class="hero-content text-center">
          <h1>Organic Fresh Fruits For Your Health</h1>
          <p class="text-dark">
            Order now and receive your order right to your door!
          </p>
        </div>
      </div>
    </section>
    <!--/-->
    <!--Features-->
    <section class="section section-features-line section-features-line-1">
      <div class="display-spacing">
        <div class="container">
          <div class="el-box">
            <div class="row row-sm">
              <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-3">
                <div class="item">
                  <img
                    src="assets/images/icons/fl-1.png"
                    alt="--Alternative--"
                  />
                  <h2>Free Shipping</h2>
                  <p>On all orders over $75.00</p>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-3">
                <div class="item">
                  <img
                    src="assets/images/icons/fl-4.png"
                    alt="--Alternative--"
                  />
                  <h2>Free Returns</h2>
                  <p>Returns are free within 9 days</p>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-3">
                <div class="item">
                  <img
                    src="assets/images/icons/fl-3.png"
                    alt="--Alternative--"
                  />
                  <h2>100% Payment Secure</h2>
                  <p>Your payment are safe with us.</p>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-3">
                <div class="item">
                  <img
                    src="assets/images/icons/fl-2.png"
                    alt="--Alternative--"
                  />
                  <h2>Support 24/7</h2>
                  <p>Contact us 24 hours a day</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--/-->
    <!--Features-->
    <section class="section section-features section-features-7">
      <div class="container">
        <div class="row row-sm">
          <div class="col-lg-8 col-xl-8">
            <div class="el-item el-hover el-item-1 pt-50pe">
              <div
                class="image overlay-image"
                style="background-image: url(assets/images/features/7-1.jpg)"
              ></div>
              <div class="display-center">
                <div class="inner">
                  <h2 class="title">Farm Market<br />Organic Shop Online</h2>
                  <a href="/shop" class="button button-sm button-dark mt-20">
                    <span class="text">SHOP NOW</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-xl-4">
            <div class="row row-sm">
              <div class="col-12 col-sm-6 col-md-6 col-lg-12 col-xl-12">
                <div class="el-item el-hover pt-50pe">
                  <div
                    class="image overlay-image"
                    style="
                      background-image: url(assets/images/features/7-2.jpg);
                    "
                  ></div>
                  <div class="display-center">
                    <div class="inner">
                      <h3 class="title title-2">
                        Discover<br />
                        Real Organic<br />
                        Flavors
                      </h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-6 col-lg-12 col-xl-12">
                <div class="el-item el-hover pt-50pe bg-primary overlay-color">
                  <div class="display-center">
                    <div class="inner">
                      <h3 class="title title-2 text-light">
                        5% OFF<br />
                        Vegetables &<br />Herbs
                      </h3>
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
    <!--Products-->
    <section class="section section-products section-products-1">
      <div class="display-spacing">
        <div class="container">
          <header class="el-heading el-heading-1 center">
            <h2>Featured Products</h2>
            <p>Add Popular Categories to weekly line up</p>
          </header>
          <div class="el-data-filters">
            <div class="el-data-filters-content">
              <ul class="row row-sm justify-content-md-center">
                <!--Item-->
                <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li
                    class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3"
                    data-filter="products-1-3"
                  >
                    <div
                      class="el-card el-card-product el-card-product-1 hover-1"
                    >
                      <div class="image">
                        <a href="<?php echo e(route('product',$item->id)); ?>">
                          <img
                            src="<?php echo e(asset('assets/images/products/'.$item->gambar)); ?>"
                            alt="--Alternative--"
                          />
                        </a>
                      </div>
                      <div class="details">
                        <h3 class="title">
                          <a
                            href="<?php echo e(route('product',$item->id)); ?>"
                            title="Fila Locker Room Varsity Jacket"
                          >
                            <span class="text"><?php echo e(__($item->nama)); ?></span>
                          </a>
                        </h3>
                        <div class="footer">
                          <p class="price">
                            <span class="new-price"><?php echo e(__('Rp '.$item->harga)); ?></span>
                          </p>
                          <ul class="el-stars" title="4 Stars">
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
                        </div>
                      </div>
                      <ul class="labels labels-left">
                        <li>
                          <?php if($item->status == 'sale'): ?>
                            <span class="label label-text bg-danger"><?php echo e(__('Sale')); ?> </span>
                          <?php endif; ?>
                          <?php if($item->status == 'pre-order'): ?>
                            <span class="label label-text bg-secondary"><?php echo e(__('PreOrder')); ?> </span>
                          <?php endif; ?>
                        </li>
                      </ul>
                      <ul class="labels labels-right">
                        <li>
                          <a
                            href="#"
                            class="label label-icon label-icon-wishlist"
                            title="Add to wishlist"
                          >
                            <i class="ti-heart"></i>
                          </a>
                        </li>
                        <li>
                        </li>
                      </ul>
                    </div>
                  </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <!--/-->
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--/-->
    <!--Call-To-Action-->
    <section
      class="section section-cta section-cta-7 overlay-image mt--30"
      style="background-image: url(assets/images/images/bg-7.png)"
    >
      <div class="display-spacing">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <header class="el-heading el-heading-4">
                <h2>
                  Up to <span class="bigger text-gradient">80%</span> OFF.<br />
                  All Sales Are Final!
                </h2>
                <p class="mb-75">
                  Phasellus gravida semper nisi. Nullam vel sem. Pellentesque
                  libero tortor, tincidunt et, tincidunt eget, semper nec, quam.
                </p>
              </header>
              <div
                class="el-countdown"
                data-time="2020/12/12"
                data-labels='{"label-day": "Days", "label-hour": "Hours", "label-minute": "Mins", "label-second": "Secs"}'
              ></div>
            </div>
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
<?php /**PATH /home/witsudi/LaravelProject/project-ppl/resources/views/home.blade.php ENDPATH**/ ?>