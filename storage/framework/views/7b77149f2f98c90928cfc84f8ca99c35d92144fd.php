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
                <h1>Featured Products</h1>
              </div>
              <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                <ul class="el-breadcrumbs el-breadcrumbs-1 text-light">
                  <li>
                    <a href="home-1.html">
                      <span class="text">Home</span>
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
                <li data-filter="all" class="active">All Product</li>
              </ul>
            </div>
            <div class="el-data-filters-content">
              <ul class="row row-sm justify-content-md-center">
                <!--Item-->
                <li
                  class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3"
                  data-filter="products-1-1"
                >
                  <div
                    class="el-card el-card-product el-card-product-1 hover-1"
                  >
                    <div class="image">
                      <a href="shop-product-detail-1.html">
                        <img
                          src="assets/images/products/1-1.jpg"
                          alt="--Alternative--"
                        />
                        <img
                          src="assets/images/products/1-1.jpg"
                          alt="--Alternative--"
                        />
                      </a>
                    </div>
                    <div class="details">
                      <h3 class="title">
                        <a
                          href="shop-product-detail-1.html"
                          title="Fila Locker Room Varsity Jacket"
                        >
                          <span class="text"
                            >Special Fruit & Fresh Produce</span
                          >
                        </a>
                      </h3>
                      <div class="footer">
                        <p class="price">
                          <span class="new-price">$27.00</span>
                          <span class="old-price">$30.00</span>
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
                            <i class="ti-star"></i>
                          </li>
                        </ul>
                      </div>
                      <div class="add-to-cart">
                        <div class="el-counter el-counter-1 d-block empty">
                          <button class="button button-minus">
                            <i class="ti-minus"></i>
                          </button>
                          <span class="label">Add</span>
                          <input
                            type="number"
                            value="0"
                            min="0"
                            max="10"
                            step="1"
                          />
                          <button class="button button-plus">
                            <i class="ti-plus"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                    <ul class="labels labels-left">
                      <li>
                        <span class="label label-text bg-success">New</span>
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
                        <a
                          href="#"
                          class="label label-icon label-icon-compare"
                          title="Add to compare"
                        >
                          <i class="ti-control-shuffle"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <!--/-->
                <!--Item-->
                <li
                  class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3"
                  data-filter="products-1-2"
                >
                  <div
                    class="el-card el-card-product el-card-product-1 hover-1"
                  >
                    <div class="image">
                      <a href="shop-product-detail-1.html">
                        <img
                          src="assets/images/products/2-2.jpg"
                          alt="--Alternative--"
                        />
                        <img
                          src="assets/images/products/2-1.jpg"
                          alt="--Alternative--"
                        />
                      </a>
                    </div>
                    <div class="details">
                      <h3 class="title">
                        <a
                          href="shop-product-detail-1.html"
                          title="Fila Locker Room Varsity Jacket"
                        >
                          <span class="text">Organic & Special Vegetables</span>
                        </a>
                      </h3>
                      <div class="footer">
                        <p class="price">
                          <span>$27.00</span>
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
                            <i class="ti-star"></i>
                          </li>
                        </ul>
                      </div>
                      <div class="add-to-cart">
                        <div class="el-counter el-counter-1 d-block empty">
                          <button class="button button-minus">
                            <i class="ti-minus"></i>
                          </button>
                          <span class="label">Add</span>
                          <input
                            type="number"
                            value="0"
                            min="0"
                            max="10"
                            step="1"
                          />
                          <button class="button button-plus">
                            <i class="ti-plus"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                    <ul class="labels labels-left">
                      <li>
                        <span class="label label-text bg-success">New</span>
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
                        <a
                          href="#"
                          class="label label-icon label-icon-compare"
                          title="Add to compare"
                        >
                          <i class="ti-control-shuffle"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <!--/-->
                <!--Item-->
                <li
                  class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3"
                  data-filter="products-1-3"
                >
                  <div
                    class="el-card el-card-product el-card-product-1 hover-1"
                  >
                    <div class="image">
                      <a href="shop-product-detail-2.html">
                        <img
                          src="assets/images/products/3-4.jpg"
                          alt="--Alternative--"
                        />
                        <img
                          src="assets/images/products/3-1.jpg"
                          alt="--Alternative--"
                        />
                      </a>
                    </div>
                    <div class="details">
                      <h3 class="title">
                        <a
                          href="shop-product-detail-1.html"
                          title="Fila Locker Room Varsity Jacket"
                        >
                          <span class="text"
                            >Citrus Fennel and Apple Salad</span
                          >
                        </a>
                      </h3>
                      <div class="footer">
                        <p class="price">
                          <span class="new-price">$88.00</span>
                          <span class="old-price">$66.00</span>
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
                            <i class="ti-star"></i>
                          </li>
                        </ul>
                      </div>
                      <div class="add-to-cart">
                        <div class="el-counter el-counter-1 d-block empty">
                          <button class="button button-minus">
                            <i class="ti-minus"></i>
                          </button>
                          <span class="label">Add</span>
                          <input
                            type="number"
                            value="0"
                            min="0"
                            max="10"
                            step="1"
                          />
                          <button class="button button-plus">
                            <i class="ti-plus"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                    <ul class="labels labels-left">
                      <li>
                        <span class="label label-text bg-warning">Hot</span>
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
                        <a
                          href="#"
                          class="label label-icon label-icon-compare"
                          title="Add to compare"
                        >
                          <i class="ti-control-shuffle"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <!--/-->
                <!--Item-->
                <li
                  class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3"
                  data-filter="products-1-1"
                >
                  <div
                    class="el-card el-card-product el-card-product-1 hover-1"
                  >
                    <div class="image">
                      <a href="shop-product-detail-1.html">
                        <img
                          src="assets/images/products/1-2.jpg"
                          alt="--Alternative--"
                        />
                        <img
                          src="assets/images/products/1-2.jpg"
                          alt="--Alternative--"
                        />
                      </a>
                    </div>
                    <div class="details">
                      <h3 class="title">
                        <a
                          href="shop-product-detail-1.html"
                          title="Fila Locker Room Varsity Jacket"
                        >
                          <span class="text"
                            >Special Fruit & Fresh Produce</span
                          >
                        </a>
                      </h3>
                      <div class="footer">
                        <p class="price">
                          <span>$22.00</span>
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
                            <i class="ti-star"></i>
                          </li>
                        </ul>
                      </div>
                      <div class="add-to-cart">
                        <div class="el-counter el-counter-1 d-block empty">
                          <button class="button button-minus">
                            <i class="ti-minus"></i>
                          </button>
                          <span class="label">Add</span>
                          <input
                            type="number"
                            value="0"
                            min="0"
                            max="10"
                            step="1"
                          />
                          <button class="button button-plus">
                            <i class="ti-plus"></i>
                          </button>
                        </div>
                      </div>
                    </div>
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
                        <a
                          href="#"
                          class="label label-icon label-icon-compare"
                          title="Add to compare"
                        >
                          <i class="ti-control-shuffle"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <!--/-->
                <!--Item-->
                <li
                  class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3"
                  data-filter="products-1-2"
                >
                  <div
                    class="el-card el-card-product el-card-product-1 hover-1"
                  >
                    <div class="image">
                      <a href="shop-product-detail-1.html">
                        <img
                          src="assets/images/products/2-4.jpg"
                          alt="--Alternative--"
                        />
                        <img
                          src="assets/images/products/2-5.jpg"
                          alt="--Alternative--"
                        />
                      </a>
                    </div>
                    <div class="details">
                      <h3 class="title">
                        <a
                          href="shop-product-detail-1.html"
                          title="Fila Locker Room Varsity Jacket"
                        >
                          <span class="text">Organic & Special Vegetables</span>
                        </a>
                      </h3>
                      <div class="footer">
                        <p class="price">
                          <span class="new-price">$27.00</span>
                          <span class="old-price">$30.00</span>
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
                            <i class="ti-star"></i>
                          </li>
                        </ul>
                      </div>
                      <div class="add-to-cart">
                        <div class="el-counter el-counter-1 d-block empty">
                          <button class="button button-minus">
                            <i class="ti-minus"></i>
                          </button>
                          <span class="label">Add</span>
                          <input
                            type="number"
                            value="0"
                            min="0"
                            max="10"
                            step="1"
                          />
                          <button class="button button-plus">
                            <i class="ti-plus"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                    <ul class="labels labels-left">
                      <li>
                        <span class="label label-text bg-success">New</span>
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
                        <a
                          href="#"
                          class="label label-icon label-icon-compare"
                          title="Add to compare"
                        >
                          <i class="ti-control-shuffle"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <!--/-->
                <!--Item-->
                <li
                  class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3"
                  data-filter="products-1-3"
                >
                  <div
                    class="el-card el-card-product el-card-product-1 hover-1"
                  >
                    <div class="image">
                      <a href="shop-product-detail-2.html">
                        <img
                          src="assets/images/products/3-1.jpg"
                          alt="--Alternative--"
                        />
                        <img
                          src="assets/images/products/3-2.jpg"
                          alt="--Alternative--"
                        />
                      </a>
                    </div>
                    <div class="details">
                      <h3 class="title">
                        <a
                          href="shop-product-detail-1.html"
                          title="Fila Locker Room Varsity Jacket"
                        >
                          <span class="text"
                            >Citrus Fennel and Apple Salad</span
                          >
                        </a>
                      </h3>
                      <div class="footer">
                        <p class="price">
                          <span class="new-price">$99.00</span>
                          <span class="old-price">$75.00</span>
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
                      <div class="add-to-cart">
                        <div class="el-counter el-counter-1 d-block empty">
                          <button class="button button-minus">
                            <i class="ti-minus"></i>
                          </button>
                          <span class="label">Add</span>
                          <input
                            type="number"
                            value="0"
                            min="0"
                            max="10"
                            step="1"
                          />
                          <button class="button button-plus">
                            <i class="ti-plus"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                    <ul class="labels labels-left">
                      <li>
                        <span class="label label-text bg-success">New</span>
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
                        <a
                          href="#"
                          class="label label-icon label-icon-compare"
                          title="Add to compare"
                        >
                          <i class="ti-control-shuffle"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <!--/-->
                <!--Item-->
                <li
                  class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3"
                  data-filter="products-1-1"
                >
                  <div
                    class="el-card el-card-product el-card-product-1 hover-1"
                  >
                    <div class="image">
                      <a href="shop-product-detail-1.html">
                        <img
                          src="assets/images/products/1-3.jpg"
                          alt="--Alternative--"
                        />
                        <img
                          src="assets/images/products/1-3.jpg"
                          alt="--Alternative--"
                        />
                      </a>
                    </div>
                    <div class="details">
                      <h3 class="title">
                        <a
                          href="shop-product-detail-1.html"
                          title="Fila Locker Room Varsity Jacket"
                        >
                          <span class="text"
                            >Special Fruit & Fresh Produce</span
                          >
                        </a>
                      </h3>
                      <div class="footer">
                        <p class="price">
                          <span class="new-price">$27.00</span>
                          <span class="old-price">$30.00</span>
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
                            <i class="ti-star"></i>
                          </li>
                        </ul>
                      </div>
                      <div class="add-to-cart">
                        <div class="el-counter el-counter-1 d-block empty">
                          <button class="button button-minus">
                            <i class="ti-minus"></i>
                          </button>
                          <span class="label">Add</span>
                          <input
                            type="number"
                            value="0"
                            min="0"
                            max="10"
                            step="1"
                          />
                          <button class="button button-plus">
                            <i class="ti-plus"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                    <ul class="labels labels-left">
                      <li>
                        <span class="label label-text bg-success">New</span>
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
                        <a
                          href="#"
                          class="label label-icon label-icon-compare"
                          title="Add to compare"
                        >
                          <i class="ti-control-shuffle"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <!--/-->
                <!--Item-->
                <li
                  class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3"
                  data-filter="products-1-2"
                >
                  <div
                    class="el-card el-card-product el-card-product-1 hover-1"
                  >
                    <div class="image">
                      <a href="shop-product-detail-1.html">
                        <img
                          src="assets/images/products/2-3.jpg"
                          alt="--Alternative--"
                        />
                        <img
                          src="assets/images/products/2-3.jpg"
                          alt="--Alternative--"
                        />
                      </a>
                    </div>
                    <div class="details">
                      <h3 class="title">
                        <a
                          href="shop-product-detail-1.html"
                          title="Fila Locker Room Varsity Jacket"
                        >
                          <span class="text">Organic & Special Vegetables</span>
                        </a>
                      </h3>
                      <div class="footer">
                        <p class="price">
                          <span class="new-price">$27.00</span>
                          <span class="old-price">$30.00</span>
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
                            <i class="ti-star"></i>
                          </li>
                        </ul>
                      </div>
                      <div class="add-to-cart">
                        <div class="el-counter el-counter-1 d-block empty">
                          <button class="button button-minus">
                            <i class="ti-minus"></i>
                          </button>
                          <span class="label">Add</span>
                          <input
                            type="number"
                            value="0"
                            min="0"
                            max="10"
                            step="1"
                          />
                          <button class="button button-plus">
                            <i class="ti-plus"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                    <ul class="labels labels-left">
                      <li>
                        <span class="label label-text bg-success">New</span>
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
                        <a
                          href="#"
                          class="label label-icon label-icon-compare"
                          title="Add to compare"
                        >
                          <i class="ti-control-shuffle"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <!--/-->
                <!--Item-->
                <li
                  class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3"
                  data-filter="products-1-3"
                >
                  <div
                    class="el-card el-card-product el-card-product-1 hover-1"
                  >
                    <div class="image">
                      <a href="shop-product-detail-2.html">
                        <img
                          src="assets/images/products/3-1.jpg"
                          alt="--Alternative--"
                        />
                        <img
                          src="assets/images/products/3-3.jpg"
                          alt="--Alternative--"
                        />
                      </a>
                    </div>
                    <div class="details">
                      <h3 class="title">
                        <a
                          href="shop-product-detail-2.html"
                          title="Fila Locker Room Varsity Jacket"
                        >
                          <span class="text"
                            >Citrus Fennel and Apple Salad</span
                          >
                        </a>
                      </h3>
                      <div class="footer">
                        <p class="price">
                          <span class="new-price">$99.00</span>
                          <span class="old-price">$75.00</span>
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
                      <div class="add-to-cart">
                        <div class="el-counter el-counter-1 d-block empty">
                          <button class="button button-minus">
                            <i class="ti-minus"></i>
                          </button>
                          <span class="label">Add</span>
                          <input
                            type="number"
                            value="0"
                            min="0"
                            max="10"
                            step="1"
                          />
                          <button class="button button-plus">
                            <i class="ti-plus"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                    <ul class="labels labels-left">
                      <li>
                        <span class="label label-text bg-danger">Sale</span>
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
                        <a
                          href="#"
                          class="label label-icon label-icon-compare"
                          title="Add to compare"
                        >
                          <i class="ti-control-shuffle"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <!--/-->
                <!--Item-->
                <li
                  class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3"
                  data-filter="products-1-1"
                >
                  <div
                    class="el-card el-card-product el-card-product-1 hover-1"
                  >
                    <div class="image">
                      <a href="shop-product-detail-1.html">
                        <img
                          src="assets/images/products/1-4.jpg"
                          alt="--Alternative--"
                        />
                        <img
                          src="assets/images/products/1-4.jpg"
                          alt="--Alternative--"
                        />
                      </a>
                    </div>
                    <div class="details">
                      <h3 class="title">
                        <a
                          href="shop-product-detail-1.html"
                          title="Fila Locker Room Varsity Jacket"
                        >
                          <span class="text"
                            >Special Fruit & Fresh Produce</span
                          >
                        </a>
                      </h3>
                      <div class="footer">
                        <p class="price">
                          <span class="new-price">$27.00</span>
                          <span class="old-price">$30.00</span>
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
                            <i class="ti-star"></i>
                          </li>
                        </ul>
                      </div>
                      <div class="add-to-cart">
                        <div class="el-counter el-counter-1 d-block empty">
                          <button class="button button-minus">
                            <i class="ti-minus"></i>
                          </button>
                          <span class="label">Add</span>
                          <input
                            type="number"
                            value="0"
                            min="0"
                            max="10"
                            step="1"
                          />
                          <button class="button button-plus">
                            <i class="ti-plus"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                    <ul class="labels labels-left">
                      <li>
                        <span class="label label-text bg-success">New</span>
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
                        <a
                          href="#"
                          class="label label-icon label-icon-compare"
                          title="Add to compare"
                        >
                          <i class="ti-control-shuffle"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <!--/-->
                <!--Item-->
                <li
                  class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3"
                  data-filter="products-1-2"
                >
                  <div
                    class="el-card el-card-product el-card-product-1 hover-1"
                  >
                    <div class="image">
                      <a href="shop-product-detail-1.html">
                        <img
                          src="assets/images/products/2-4.jpg"
                          alt="--Alternative--"
                        />
                        <img
                          src="assets/images/products/2-4.jpg"
                          alt="--Alternative--"
                        />
                      </a>
                    </div>
                    <div class="details">
                      <h3 class="title">
                        <a
                          href="shop-product-detail-1.html"
                          title="Fila Locker Room Varsity Jacket"
                        >
                          <span class="text">Organic & Special Vegetables</span>
                        </a>
                      </h3>
                      <div class="footer">
                        <p class="price">
                          <span class="new-price">$27.00</span>
                          <span class="old-price">$30.00</span>
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
                            <i class="ti-star"></i>
                          </li>
                        </ul>
                      </div>
                      <div class="add-to-cart">
                        <div class="el-counter el-counter-1 d-block empty">
                          <button class="button button-minus">
                            <i class="ti-minus"></i>
                          </button>
                          <span class="label">Add</span>
                          <input
                            type="number"
                            value="0"
                            min="0"
                            max="10"
                            step="1"
                          />
                          <button class="button button-plus">
                            <i class="ti-plus"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                    <ul class="labels labels-left">
                      <li>
                        <span class="label label-text bg-success">New</span>
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
                        <a
                          href="#"
                          class="label label-icon label-icon-compare"
                          title="Add to compare"
                        >
                          <i class="ti-control-shuffle"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <!--/-->
                <!--Item-->
                <li
                  class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3"
                  data-filter="products-1-3"
                >
                  <div
                    class="el-card el-card-product el-card-product-1 hover-1"
                  >
                    <div class="image">
                      <a href="shop-product-detail-1.html">
                        <img
                          src="assets/images/products/3-6.jpg"
                          alt="--Alternative--"
                        />
                        <img
                          src="assets/images/products/3-4.jpg"
                          alt="--Alternative--"
                        />
                      </a>
                    </div>
                    <div class="details">
                      <h3 class="title">
                        <a
                          href="shop-product-detail-1.html"
                          title="Fila Locker Room Varsity Jacket"
                        >
                          <span class="text"
                            >Citrus Fennel and Apple Salad</span
                          >
                        </a>
                      </h3>
                      <div class="footer">
                        <p class="price">
                          <span class="new-price">$27.00</span>
                          <span class="old-price">$30.00</span>
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
                      <div class="add-to-cart">
                        <div class="el-counter el-counter-1 d-block empty">
                          <button class="button button-minus">
                            <i class="ti-minus"></i>
                          </button>
                          <span class="label">Add</span>
                          <input
                            type="number"
                            value="0"
                            min="0"
                            max="10"
                            step="1"
                          />
                          <button class="button button-plus">
                            <i class="ti-plus"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                    <ul class="labels labels-left">
                      <li>
                        <span class="label label-text bg-success">New</span>
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
                        <a
                          href="#"
                          class="label label-icon label-icon-compare"
                          title="Add to compare"
                        >
                          <i class="ti-control-shuffle"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <!--/-->
              </ul>
            </div>
          </div>
          <div class="el-pagination text-center pt-space-half">
            <ul>
              <li><a href="#">1</a></li>
              <li class="active">
                <a href="#">2</a>
              </li>
              <li>
                <a href="#">3</a>
              </li>
              <li class="more">...</li>
              <li>
                <a href="#">25</a>
              </li>
              <li>
                <a href="#">26</a>
              </li>
              <li class="next">
                <a href="#">NEXT <i class="ti-control-forward"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!--Sidebar-->
      <div class="sidebar-filter-products-no-sidebar">
        <aside class="app-sidebar no-sidebar" id="sidebar-filter-products">
          <div class="sidebar-head">
            <span class="title">Filter</span>
            <button class="button button-close-sidenav"></button>
          </div>
          <!--Widget-->
          <div class="widget widget-colors">
            <div class="widget-head">
              <h3>Product Categories</h3>
              <span class="line"></span>
            </div>
            <div class="widget-body">
              <ul class="el-list el-list-1">
                <li>
                  <a href="#">Vegetables (15)</a>
                </li>
                <li>
                  <a href="#">Fresh Fruits (12)</a>
                </li>
                <li>
                  <a href="#">Fresh Meat (12)</a>
                </li>
                <li>
                  <a href="#">Milk &amp; Cream (9)</a>
                </li>
                <li>
                  <a href="#">Uncategorized (7)</a>
                </li>
                <li>
                  <a href="#">Organic Fruits (6)</a>
                </li>
                <li>
                  <a href="#">Special Salads (3)</a>
                </li>
                <li>
                  <a href="#">Supplements (0)</a>
                </li>
              </ul>
            </div>
          </div>
          <!--/-->
          <!--Widget-->
          <div class="widget widget-colors">
            <div class="widget-head">
              <h3>Product Brands</h3>
              <span class="line"></span>
            </div>
            <div class="widget-body">
              <ul class="el-list el-list-1">
                <li>
                  <label class="input-checkbox">
                    <input type="checkbox" />
                    <span class="checkbox-mark"></span>
                    <span class="checkbox-label">Green Life (24)</span>
                  </label>
                </li>
                <li>
                  <label class="input-checkbox">
                    <input type="checkbox" />
                    <span class="checkbox-mark"></span>
                    <span class="checkbox-label">Organic Life (22)</span>
                  </label>
                </li>
                <li>
                  <label class="input-checkbox">
                    <input type="checkbox" />
                    <span class="checkbox-mark"></span>
                    <span class="checkbox-label">Whole Foods (21)</span>
                  </label>
                </li>
                <li>
                  <label class="input-checkbox">
                    <input type="checkbox" />
                    <span class="checkbox-mark"></span>
                    <span class="checkbox-label">Orwell Company (14)</span>
                  </label>
                </li>
                <li>
                  <label class="input-checkbox">
                    <input type="checkbox" />
                    <span class="checkbox-mark"></span>
                    <span class="checkbox-label">Organica (6)</span>
                  </label>
                </li>
                <li>
                  <label class="input-checkbox">
                    <input type="checkbox" />
                    <span class="checkbox-mark"></span>
                    <span class="checkbox-label">Other (3)</span>
                  </label>
                </li>
              </ul>
            </div>
          </div>
          <!--/-->
          <!--Widget-->
          <div class="widget widget-colors">
            <div class="widget-head">
              <h3>Filter By Price</h3>
              <span class="line"></span>
            </div>
            <div class="widget-body">
              <ul class="el-list el-list-1">
                <li>
                  <label class="input-checkbox">
                    <input type="checkbox" />
                    <span class="checkbox-mark"></span>
                    <span class="checkbox-label">$0 - $30</span>
                  </label>
                </li>
                <li>
                  <label class="input-checkbox">
                    <input type="checkbox" />
                    <span class="checkbox-mark"></span>
                    <span class="checkbox-label">$30 - $60</span>
                  </label>
                </li>
                <li>
                  <label class="input-checkbox">
                    <input type="checkbox" />
                    <span class="checkbox-mark"></span>
                    <span class="checkbox-label">$60 - $100</span>
                  </label>
                </li>
                <li>
                  <label class="input-checkbox">
                    <input type="checkbox" />
                    <span class="checkbox-mark"></span>
                    <span class="checkbox-label">$100 - $150</span>
                  </label>
                </li>
                <li>
                  <label class="input-checkbox">
                    <input type="checkbox" />
                    <span class="checkbox-mark"></span>
                    <span class="checkbox-label">$150 - $200</span>
                  </label>
                </li>
              </ul>
            </div>
          </div>
          <!--/-->
          <!--Widget-->
          <div class="widget widget-colors">
            <div class="widget-head">
              <h3>Filter By Colors</h3>
              <span class="line"></span>
            </div>
            <div class="widget-body">
              <ul class="el-select-color">
                <li>
                  <input type="radio" name="color" id="red" />
                  <label for="red" style="background-color: red"></label>
                </li>
                <li>
                  <input type="radio" name="color" id="#db7093" />
                  <label
                    for="#db7093"
                    style="background-color: #db7093"
                  ></label>
                </li>
                <li>
                  <input type="radio" name="color" id="#cd5c5c" />
                  <label
                    for="#cd5c5c"
                    style="background-color: #cd5c5c"
                  ></label>
                </li>
                <li>
                  <input type="radio" name="color" id="orange" />
                  <label for="orange" style="background-color: orange"></label>
                </li>
                <li>
                  <input type="radio" name="color" id="#ff4300" />
                  <label
                    for="#ff4300"
                    style="background-color: #ff4300"
                  ></label>
                </li>
                <li>
                  <input type="radio" name="color" id="#ffde10" />
                  <label
                    for="#ffde10"
                    style="background-color: #8a2be2"
                  ></label>
                </li>
                <li>
                  <input type="radio" name="color" id="#32cd32" />
                  <label
                    for="#32cd32"
                    style="background-color: #32cd32"
                  ></label>
                </li>
                <li>
                  <input type="radio" name="color" id="#9acd32" />
                  <label
                    for="#9acd32"
                    style="background-color: #9acd32"
                  ></label>
                </li>
                <li>
                  <input type="radio" name="color" id="green" />
                  <label for="green" style="background-color: green"></label>
                </li>
                <li>
                  <input type="radio" name="color" id="#5f9ea0" />
                  <label
                    for="#5f9ea0"
                    style="background-color: #5f9ea0"
                  ></label>
                </li>
                <li>
                  <input type="radio" name="color" id="#00bfff" />
                  <label
                    for="#00bfff"
                    style="background-color: #00bfff"
                  ></label>
                </li>
                <li>
                  <input type="radio" name="color" id="darkblue" />
                  <label
                    for="darkblue"
                    style="background-color: darkblue"
                  ></label>
                </li>
                <li>
                  <input type="radio" name="color" id="#483d8b" />
                  <label
                    for="#483d8b"
                    style="background-color: #483d8b"
                  ></label>
                </li>
                <li>
                  <input type="radio" name="color" id="#7b68ee" />
                  <label
                    for="#7b68ee"
                    style="background-color: #7b68ee"
                  ></label>
                </li>
                <li>
                  <input type="radio" name="color" id="#8a2be2" />
                  <label
                    for="#8a2be2"
                    style="background-color: #8a2be2"
                  ></label>
                </li>
                <li>
                  <input type="radio" name="color" id="#ff1493" />
                  <label
                    for="#ff1493"
                    style="background-color: #ff1493"
                  ></label>
                </li>
                <li>
                  <input type="radio" name="color" id="brown" />
                  <label for="brown" style="background-color: brown"></label>
                </li>
                <li>
                  <input type="radio" name="color" id="#8b4513" />
                  <label
                    for="#8b4513"
                    style="background-color: #8b4513"
                  ></label>
                </li>
              </ul>
            </div>
          </div>
        </aside>
        <!--Filter Products Button-->
        <button
          type="button"
          class="button button-circle button-circle-lg button-primary"
          id="button-display-filter-products"
        >
          <i class="ti-filter"></i>
        </button>
        <!--/-->
      </div>
      <!--/-->
    </section>
    <!--/-->
    <!--Footer-->
    <footer class="app-footer app-footer-1">
      <div class="section-cta section-cta-9 bg-primary text-light">
        <div class="container">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-6">
              <span class="title">Do You Have Questions?</span>
              <p>We'll help you to grow your career and growth.</p>
            </div>
            <div class="col-12 col-sm-12 col-md-6 text-right">
              <div class="form-4">
                <div class="form-item">
                  <input type="text" placeholder="Subscribe here..." />
                  <button class="button button-circle button-circle-sm">
                    <i class="ti-email"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
          <p><span class="text-bold">ORWELL</span> organic and wellness.</p>
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
<?php /**PATH /home/witsudi/LaravelProject/project-ppl/resources/views/shop.blade.php ENDPATH**/ ?>