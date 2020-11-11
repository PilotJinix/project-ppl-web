<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Orwell</title>
    <meta charset="UTF-8" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="theme-color" content="#ffffff" />
    <meta name="msapplication-TileColor" content="#000000" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <base #href="" />
    <link
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&amp;display=swap"
      rel="stylesheet"
    />
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="assets/images/favicon/apple-touch-icon.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="assets/images/favicon/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="assets/images/favicon/favicon-16x16.png"
    />
    <link rel="manifest" href="http://demo.afracode.com/site.webmanifest" />
    <link rel="stylesheet" href="assets/css/plugins.min.css" />
    <link rel="stylesheet" href="assets/css/styles.css" />
    <link rel="stylesheet" href="assets/css/skin-1.css" />
    <link rel="stylesheet" href="assets/css/custom.css" />
    <link rel="stylesheet" href="assets/css/demo.css" />
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
      <div class="sidenav-menu">
        <div class="sidenav-head">
          <span class="title">Your Cart</span>
          <button class="button button-close-sidenav"></button>
        </div>
        <div class="sidenav-body">
          <div class="sidenav-body-inner">
            <ul class="items">
              <li>
                <div class="row row-sm">
                  <div class="col-4">
                    <div class="image">
                      <img src="assets/images/products/2-3.jpg" alt="--Alt--" />
                    </div>
                  </div>
                  <div class="col-8">
                    <div class="details">
                      <p>Fresh and sugar orange cantaloupe</p>
                      <span class="price">$30.00</span>
                      <span class="quantity">x 2</span>
                      <ul class="actions">
                        <li>
                          <a href="#" title="Remove">
                            <i class="ti-trash"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="row row-sm">
                  <div class="col-4">
                    <div class="image">
                      <img src="assets/images/products/2-2.jpg" alt="--Alt--" />
                    </div>
                  </div>
                  <div class="col-8">
                    <div class="details">
                      <p>Australian fresh and organic avocado</p>
                      <span class="price">$54.33</span>
                      <ul class="actions">
                        <li>
                          <a href="#" title="Remove">
                            <i class="ti-trash"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="row row-sm">
                  <div class="col-4">
                    <div class="image">
                      <img src="assets/images/products/3-2.jpg" alt="--Alt--" />
                    </div>
                  </div>
                  <div class="col-8">
                    <div class="details">
                      <p>Mexican special black bean salad</p>
                      <span class="price">$66.00</span>
                      <ul class="actions">
                        <li>
                          <a href="#" title="Remove">
                            <i class="ti-trash"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="sidenav-down">
          <div class="subtotal">
            <div class="row">
              <div class="col-6">
                <span class="title">Subtotal</span>
              </div>
              <div class="col-6 text-right">
                <span class="price">$240.33</span>
              </div>
            </div>
          </div>
          <div class="checkout">
            <button
              type="button"
              class="button button-lg button-block button-dark"
            >
              <span class="text">Checkout Now</span>
            </button>
          </div>
        </div>
      </div>
      <span class="sidenav-close"></span>
    </div>
    <!--/-->
    <!--Checkout-->
    <section
      class="section section-page section-product-detail section-product-detail-1"
    >
      <div class="display-spacing mt-space">
        <div class="container mb-space">
          <div class="row">
            <!--Images-->
            <div class="col-lg-6">
              <div class="product-images">
                <div
                  class="el-slider el-slider-product-image el-slider-product-image-1"
                >
                  <!-- Swiper -->
                  <div
                    class="el-swiper-product-images el-swiper-product-images-1 swiper-container"
                    data-slider-index="4"
                  >
                    <div class="swiper-wrapper pb-100">
                      <div class="swiper-slide">
                        <div class="el-product-image">
                          <img
                            src="assets/images/product/4-1.jpg"
                            data-zoom-image="assets/images/product/4-1.jpg"
                            class="el-image-zoom"
                            alt="--Alternative--"
                          />
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="el-product-image">
                          <img
                            src="assets/images/product/4-2.jpg"
                            data-zoom-image="assets/images/product/4-2.jpg"
                            class="el-image-zoom"
                            alt="--Alternative--"
                          />
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="el-product-image">
                          <img
                            src="assets/images/product/4-3.jpg"
                            data-zoom-image="assets/images/product/4-3.jpg"
                            class="el-image-zoom"
                            alt="--Alternative--"
                          />
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="el-product-image">
                          <img
                            src="assets/images/product/4-4.jpg"
                            data-zoom-image="assets/images/product/4-4.jpg"
                            class="el-image-zoom"
                            alt="--Alternative--"
                          />
                        </div>
                      </div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="el-swiper-dots"></div>
                  </div>
                </div>
                <ul class="icons icons-left">
                  <li class="icon icon-1">
                    <span class="text">Fresh</span>
                  </li>
                </ul>
              </div>
            </div>
            <!--/-->
            <!--Details-->
            <div class="col-lg-6">
              <div class="product-detail social">
                <h1>
                  Driscoll's Limited Edition Fresh & Sweetest Batch Strawberries
                </h1>
                <div class="price">
                  <span class="title">Price:</span>
                  <span class="old-price">$48.00</span>
                  <span class="new-price">$36.00</span>
                </div>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                  nibh ligula, faucibus sit amet aliquet ac, molestie a massa.
                  Fusce vitae feugiat enim, id fermentum magna. Aenean convallis
                  egestas massa ac rhoncus. Integer iaculis et erat id
                  auctor.morbi tristique vitae, ultricies eget, tempor sit amet,
                  ante. Donec eu libero sit amet quam egestas semper.
                </p>
                <div class="product-table">
                  <ul>
                    <li>
                      <span class="var">Weight</span>
                      <span class="val">6 kg</span>
                    </li>
                    <li>
                      <span class="var">Brand</span>
                      <span class="val">Great Wall</span>
                    </li>
                    <li>
                      <span class="var">Category</span>
                      <span class="val">Fresh Fruit</span>
                    </li>
                    <li>
                      <span class="var">Delivery</span>
                      <span class="val">in next 2 days</span>
                    </li>
                    <li>
                      <span class="var">Dimensions</span>
                      <span class="val">10 × 10 × 30 cm</span>
                    </li>
                    <li>
                      <span class="var">Compositions</span>
                      <span class="val">Polyester</span>
                    </li>
                  </ul>
                </div>
                <div class="row row-0">
                  <div class="col-12 col-sm-6">
                    <div class="el-counter el-counter-3 d-block">
                      <button class="button button-minus">
                        <i class="ti-minus"></i>
                      </button>
                      <input
                        type="number"
                        value="1"
                        min="1"
                        max="10"
                        step="1"
                      />
                      <button class="button button-plus">
                        <i class="ti-plus"></i>
                      </button>
                    </div>
                  </div>
                  <div class="col-12 col-sm-6">
                    <button
                      class="button button-md button-block button-dark button-with-icon"
                    >
                      <i class="ti-bag"></i>
                      <span class="text">ADD TO CART</span>
                    </button>
                  </div>
                </div>
                <div class="shareit">
                  <ul class="el-social-icons block">
                    <li class="bg-facebook">
                      <a href="#">
                        <i class="ti-facebook"></i>
                      </a>
                    </li>
                    <li class="bg-linkedin">
                      <a href="#">
                        <i class="ti-linkedin"></i>
                      </a>
                    </li>
                    <li class="bg-twitter">
                      <a href="#">
                        <i class="ti-twitter"></i>
                      </a>
                    </li>
                    <li class="bg-instagram">
                      <a href="#">
                        <i class="ti-instagram"></i>
                      </a>
                    </li>
                    <li class="bg-pinterest">
                      <a href="#">
                        <i class="ti-pinterest"></i>
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
                <li data-tab-link="tab-2">
                  <span class="text">Specification</span>
                </li>
                <li data-tab-link="tab-3">
                  <span class="text">Reviews (2)</span>
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
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                      Etiam nibh ligula, faucibus sit amet aliquet ac, molestie
                      a massa. Fusce vitae feugiat enim, id fermentum magna.
                      Aenean convallis egestas massa ac rhoncus. Integer iaculis
                      et erat id auctor. Vivamus porta, mi a porttitor
                      imperdiet, purus metus tempus elit, ut dictum mauris dui a
                      tellus. Integer at ipsum sit amet sem vulputate ultricies
                      in vel orci. Aliquam feugiat vulputate ligula, quis
                      posuere tortor condimentum eget. Sed consequat ante sed
                      congue pellentesque. Cras massa purus, venenatis in eros
                      at, vestibulum finibus sapien. Nunc sodales facilisis
                      tortor, sit amet scelerisque metus pharetra at. Proin
                      efficitur consequat ipsum quis scelerisque. Quisque ac
                      venenatis purus.
                    </p>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                      Etiam nibh ligula, faucibus sit amet aliquet ac, molestie
                      a massa. Fusce vitae feugiat enim, id fermentum magna.
                      Aenean convallis egestas massa ac rhoncus. Integer iaculis
                      et erat id auctor. Vivamus porta, mi a porttitor
                      imperdiet, purus metus tempus elit, ut dictum mauris dui a
                      tellus. Integer at ipsum sit amet sem vulputate ultricies
                      in vel orci. Aliquam feugiat vulputate ligula, quis
                      posuere tortor condimentum eget. Sed consequat ante sed
                      congue pellentesque. Cras massa purus, venenatis in eros
                      at, vestibulum finibus sapien. Nunc sodales facilisis
                      tortor, sit amet scelerisque metus pharetra at. Proin
                      efficitur consequat ipsum quis scelerisque. Quisque ac
                      venenatis purus.
                    </p>
                    <hr />
                    <img
                      src="assets/images/product/desc-1.jpg"
                      alt="--Alternative--"
                    />
                    <h3 class="mt-45">Material used</h3>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                      Etiam nibh ligula, faucibus sit amet aliquet ac, molestie
                      a massa. Fusce vitae feugiat enim, id fermentum magna.
                      Aenean convallis egestas massa ac rhoncus. Integer iaculis
                      et erat id auctor. Vivamus porta, mi a porttitor
                      imperdiet, purus metus tempus elit, ut dictum mauris dui a
                      tellus. Integer at ipsum sit amet sem vulputate ultricies
                      in vel orci. Aliquam feugiat vulputate ligula, quis
                      posuere tortor condimentum eget. Sed consequat ante sed
                      congue pellentesque. Cras massa purus, venenatis in eros
                      at, vestibulum finibus sapien. Nunc sodales facilisis
                      tortor, sit amet scelerisque metus pharetra at. Proin
                      efficitur consequat ipsum quis scelerisque. Quisque ac
                      venenatis purus.
                    </p>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                      Etiam nibh ligula, faucibus sit amet aliquet ac, molestie
                      a massa. Fusce vitae feugiat enim, id fermentum magna.
                      Aenean convallis egestas massa ac rhoncus. Integer iaculis
                      et erat id auctor. Vivamus porta, mi a porttitor
                      imperdiet, purus metus tempus elit, ut dictum mauris dui a
                      tellus. Integer at ipsum sit amet sem vulputate ultricies
                      in vel orci. Aliquam feugiat vulputate ligula, quis
                      posuere tortor condimentum eget. Sed consequat ante sed
                      congue pellentesque. Cras massa purus, venenatis in eros
                      at, vestibulum finibus sapien. Nunc sodales facilisis
                      tortor, sit amet scelerisque metus pharetra at. Proin
                      efficitur consequat ipsum quis scelerisque. Quisque ac
                      venenatis purus.
                    </p>
                  </div>
                </li>
                <li data-tab-content="tab-2">
                  <div class="content">
                    <h2>Additional Info</h2>
                    <table class="el-table">
                      <tbody>
                        <tr>
                          <td class="a-right specname">Size</td>
                          <td class="a-left specvalue">XL</td>
                        </tr>
                        <tr>
                          <td class="a-right specname">Tags</td>
                          <td class="a-left specvalue">Food, Healthy</td>
                        </tr>
                        <tr>
                          <td class="a-right specname">Color</td>
                          <td class="a-left specvalue">Light Blue</td>
                        </tr>
                        <tr>
                          <td class="a-right specname">Weight</td>
                          <td class="a-left specvalue">3 kg</td>
                        </tr>
                        <tr>
                          <td class="a-right specname">Category</td>
                          <td class="a-left specvalue">Vegetables</td>
                        </tr>
                        <tr>
                          <td class="a-right specname">Delivery</td>
                          <td class="a-left specvalue">in 2 days</td>
                        </tr>
                        <tr>
                          <td class="a-right specname">Dimensions</td>
                          <td class="a-left specvalue">10 × 10 × 30 cm</td>
                        </tr>
                        <tr>
                          <td class="a-right specname">Compositions</td>
                          <td class="a-left specvalue">Polyester</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </li>
                <li data-tab-content="tab-3">
                  <div class="content">
                    <h2>2 review for this product</h2>
                    <div class="el-comments">
                      <ul>
                        <li>
                          <div class="el-comments-avatar">
                            <img
                              src="assets/images/people/1.jpg"
                              alt="--Alternative--"
                            />
                          </div>
                          <div class="el-comments-content">
                            <div class="el-comments-info">
                              <div class="row">
                                <div class="col-6">
                                  <span class="el-comments-author"
                                    >Megan Johnson</span
                                  >
                                </div>
                                <div class="col-6 text-right d-rtl">
                                  <span class="el-comments-date"
                                    >May 1, 2020</span
                                  >
                                </div>
                              </div>
                            </div>
                            <p>
                              Lorem Ipsumin gravida nibh vel velit auctor
                              aliquet. Aenean sollicitudin, lorem quis bibendum
                              auctor, nisi elit consequat ipsum, nec sagittis
                              sem nibh id elit. Duis sed odio sit amet nibh
                              vulputate. Pellentesque habitant morbi tristique
                              senectus et netus et malesuada fames ac turpis
                              egestas. Vestibulum tortor quam, feugiat vitae,
                              ultricies eget, tempor sit amet, ante. Donec eu
                              libero sit amet quam egestas semper. Aenean
                              ultricies mi vitae est. Mauris placerat eleifend
                              leo.
                            </p>
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
                            <a href="#" class="reply">
                              <span class="fa fa-reply"></span>
                            </a>
                          </div>
                        </li>
                        <li>
                          <div class="el-comments-avatar">
                            <img
                              src="assets/images/people/2.jpg"
                              alt="--Alternative--"
                            />
                          </div>
                          <div class="el-comments-content">
                            <div class="el-comments-info">
                              <div class="row">
                                <div class="col-6">
                                  <span class="el-comments-author"
                                    >Thomas Shelby</span
                                  >
                                </div>
                                <div class="col-6 text-right d-rtl">
                                  <span class="el-comments-date"
                                    >May 3, 2020</span
                                  >
                                </div>
                              </div>
                            </div>
                            <p>
                              Lorem Ipsumin gravida nibh vel velit auctor
                              aliquet. Aenean sollicitudin, lorem quis bibendum
                              auctor, nisi elit consequat ipsum, nec sagittis
                              sem nibh id elit. Duis sed odio sit amet nibh
                              vulputate. Pellentesque habitant morbi tristique
                              senectus et netus et malesuada fames ac turpis
                              egestas. Vestibulum tortor quam, feugiat vitae,
                              ultricies eget, tempor sit amet, ante. Donec eu
                              libero sit amet quam egestas semper. Aenean
                              ultricies mi vitae est. Mauris placerat eleifend
                              leo.
                            </p>
                            <ul class="el-stars">
                              <li>
                                <i class="fa fa-star"></i>
                              </li>
                              <li>
                                <i class="fa fa-star"></i>
                              </li>
                              <li>
                                <i class="fa fa-star"></i>
                              </li>
                              <li>
                                <i class="fa fa-star"></i>
                              </li>
                              <li>
                                <i class="fa fa-star-o"></i>
                              </li>
                            </ul>
                            <a href="#" class="reply">
                              <span class="fa fa-reply"></span>
                            </a>
                          </div>
                        </li>
                      </ul>
                    </div>
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
    <!--Products-->
    <section class="section section-products section-products-3">
      <div class="pb-space">
        <div class="container">
          <div class="el-slider el-slider-3 el-slider-top-navigation">
            <header class="el-heading el-heading-3">
              <h2>In The Same Category</h2>
              <p>8 other products in the same category:</p>
            </header>
            <div
              class="el-swiper-products-3 el-swiper-multirow swiper-container"
            >
              <div class="swiper-wrapper">
                <!--Card-->
                <div class="swiper-slide">
                  <div
                    class="el-card el-card-product el-card-product-1 hover-1"
                  >
                    <div class="image">
                      <a href="shop-product-detail-3.html">
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
                          href="shop-product-detail-3.html"
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
                </div>
                <!--/-->
                <!--Card-->
                <div class="swiper-slide">
                  <div
                    class="el-card el-card-product el-card-product-1 hover-1"
                  >
                    <div class="image">
                      <a href="shop-product-detail-3.html">
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
                          href="shop-product-detail-3.html"
                          title="Fila Locker Room Varsity Jacket"
                        >
                          <span class="text"
                            >Special Fruit & Fresh Produce</span
                          >
                        </a>
                      </h3>
                      <div class="footer">
                        <p class="price">
                          <span class="new-price">$33.00</span>
                          <span class="old-price">$24.00</span>
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
                </div>
                <!--/-->
                <!--Card-->
                <div class="swiper-slide">
                  <div
                    class="el-card el-card-product el-card-product-1 hover-1"
                  >
                    <div class="image">
                      <a href="shop-product-detail-3.html">
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
                          href="shop-product-detail-3.html"
                          title="Fila Locker Room Varsity Jacket"
                        >
                          <span class="text"
                            >Special Fruit & Fresh Produce</span
                          >
                        </a>
                      </h3>
                      <div class="footer">
                        <p class="price">
                          <span class="new-price">$66.00</span>
                          <span class="old-price">$55.00</span>
                        </p>
                        <ul class="el-stars" title="5 Stars">
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
                </div>
                <!--/-->
                <!--Card-->
                <div class="swiper-slide">
                  <div
                    class="el-card el-card-product el-card-product-1 hover-1"
                  >
                    <div class="image">
                      <a href="shop-product-detail-3.html">
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
                          href="shop-product-detail-3.html"
                          title="Fila Locker Room Varsity Jacket"
                        >
                          <span class="text"
                            >Special Fruit & Fresh Produce</span
                          >
                        </a>
                      </h3>
                      <div class="footer">
                        <p class="price">
                          <span>$44.00</span>
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
                </div>
                <!--/-->
                <!--Card-->
                <div class="swiper-slide">
                  <div
                    class="el-card el-card-product el-card-product-1 hover-1"
                  >
                    <div class="image">
                      <a href="shop-product-detail-3.html">
                        <img
                          src="assets/images/products/1-5.jpg"
                          alt="--Alternative--"
                        />
                        <img
                          src="assets/images/products/1-5.jpg"
                          alt="--Alternative--"
                        />
                      </a>
                    </div>
                    <div class="details">
                      <h3 class="title">
                        <a
                          href="shop-product-detail-3.html"
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
                </div>
                <!--/-->
                <!--Card-->
                <div class="swiper-slide">
                  <div
                    class="el-card el-card-product el-card-product-1 hover-1"
                  >
                    <div class="image">
                      <a href="shop-product-detail-3.html">
                        <img
                          src="assets/images/products/1-6.jpg"
                          alt="--Alternative--"
                        />
                        <img
                          src="assets/images/products/1-6.jpg"
                          alt="--Alternative--"
                        />
                      </a>
                    </div>
                    <div class="details">
                      <h3 class="title">
                        <a
                          href="shop-product-detail-3.html"
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
                </div>
                <!--/-->
                <!--Card-->
                <div class="swiper-slide">
                  <div
                    class="el-card el-card-product el-card-product-1 hover-1"
                  >
                    <div class="image">
                      <a href="shop-product-detail-3.html">
                        <img
                          src="assets/images/products/1-7.jpg"
                          alt="--Alternative--"
                        />
                        <img
                          src="assets/images/products/1-7.jpg"
                          alt="--Alternative--"
                        />
                      </a>
                    </div>
                    <div class="details">
                      <h3 class="title">
                        <a
                          href="shop-product-detail-3.html"
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
                </div>
                <!--/-->
              </div>
              <!--Navigation-->
              <div class="el-slider-prev">
                <i class="ti-angle-left"></i>
              </div>
              <div class="el-slider-next">
                <i class="ti-angle-right"></i>
              </div>
              <!--/-->
            </div>
          </div>
        </div>
      </div>
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
      <div class="footer-widgets">
        <div class="pt-space-half pb-space-half">
          <div class="container">
            <div class="footer-widgets-links">
              <div class="row row-xl-5">
                <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                  <div class="widget widget-links">
                    <div class="widget-title">
                      <h4>Our Company</h4>
                    </div>
                    <div class="widget-body">
                      <ul>
                        <li>
                          <a href="page-about.html">
                            <span class="icon ti-angle-right"></span>
                            <span class="text">About Us</span>
                          </a>
                        </li>
                        <li>
                          <a href="page-contact.html">
                            <span class="icon ti-angle-right"></span>
                            <span class="text">Contact Us</span>
                          </a>
                        </li>
                        <li>
                          <a href="page-team.html">
                            <span class="icon ti-angle-right"></span>
                            <span class="text">Meet Our Team</span>
                          </a>
                        </li>
                        <li>
                          <a href="shop-cart.html">
                            <span class="icon ti-angle-right"></span>
                            <span class="text">Checkout Page</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                  <div class="widget widget-links">
                    <div class="widget-title">
                      <h4>Qucik Access</h4>
                    </div>
                    <div class="widget-body">
                      <ul>
                        <li>
                          <a href="home-1.html">
                            <span class="icon ti-angle-right"></span>
                            <span class="text">Homepage 1</span>
                          </a>
                        </li>
                        <li>
                          <a href="home-2.html">
                            <span class="icon ti-angle-right"></span>
                            <span class="text">Homepage 2</span>
                          </a>
                        </li>
                        <li>
                          <a href="home-3.html">
                            <span class="icon ti-angle-right"></span>
                            <span class="text">Homepage 3</span>
                          </a>
                        </li>
                        <li>
                          <a href="index.html">
                            <span class="icon ti-angle-right"></span>
                            <span class="text">Landing Page</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div
                  class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 d-none d-xl-block"
                >
                  <div class="widget widget-links">
                    <div class="widget-title">
                      <h4>Qucik Access</h4>
                    </div>
                    <div class="widget-body">
                      <ul>
                        <li>
                          <a href="page-faq.html">
                            <span class="icon ti-angle-right"></span>
                            <span class="text">Faq</span>
                          </a>
                        </li>
                        <li>
                          <a href="page-policy.html">
                            <span class="icon ti-angle-right"></span>
                            <span class="text">Policy</span>
                          </a>
                        </li>
                        <li>
                          <a href="404.html">
                            <span class="icon ti-angle-right"></span>
                            <span class="text">Page Not Found</span>
                          </a>
                        </li>
                        <li>
                          <a href="sign-in.html">
                            <span class="icon ti-angle-right"></span>
                            <span class="text">Login/Register Page</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                  <div class="widget widget-links">
                    <div class="widget-title">
                      <h4>Shop Pages</h4>
                    </div>
                    <div class="widget-body">
                      <ul>
                        <li>
                          <a href="shop-products-1-1.html">
                            <span class="icon ti-angle-right"></span>
                            <span class="text">Shop - No Sidebar</span>
                          </a>
                        </li>
                        <li>
                          <a href="shop-products-1-2.html">
                            <span class="icon ti-angle-right"></span>
                            <span class="text">Shop - Left Sidebar</span>
                          </a>
                        </li>
                        <li>
                          <a href="shop-products-1-3.html">
                            <span class="icon ti-angle-right"></span>
                            <span class="text">Shop - Right Sidebar</span>
                          </a>
                        </li>
                        <li>
                          <a href="shop-cart.html">
                            <span class="icon ti-angle-right"></span>
                            <span class="text">Shopping Cart</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                  <div class="widget widget-links">
                    <div class="widget-title">
                      <h4>Blog Pages</h4>
                    </div>
                    <div class="widget-body">
                      <ul>
                        <li>
                          <a href="blog-1.html">
                            <span class="icon ti-angle-right"></span>
                            <span class="text">Blog Layout 01</span>
                          </a>
                        </li>
                        <li>
                          <a href="blog-2.html">
                            <span class="icon ti-angle-right"></span>
                            <span class="text">Blog Layout 02</span>
                          </a>
                        </li>
                        <li>
                          <a href="blog-3.html">
                            <span class="icon ti-angle-right"></span>
                            <span class="text">Blog Layout 03</span>
                          </a>
                        </li>
                        <li>
                          <a href="blog-single-post-2.html">
                            <span class="icon ti-angle-right"></span>
                            <span class="text">Single Post Page</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
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
<?php /**PATH /home/witsudi/LaravelProject/project-ppl/resources/views/product-detail.blade.php ENDPATH**/ ?>