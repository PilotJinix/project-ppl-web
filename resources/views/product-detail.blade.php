<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    @section('title','Product Detail')
    @include('layouts.head')
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
        @include('layouts.mainmenu')
      </div>
    </header>
    <!--/-->
    <!--Sidenav-->
    <div class="app-sidenav app-sidenav-1">
      @include('layouts.sidemainmenu')
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
                      <img src="assets/images/products/jeruk.jpg" alt="--Alt--" />
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
                      <img src="assets/images/products/strawberry.jpg" alt="--Alt--" />
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
                      <img src="assets/images/products/jeruk.jpg" alt="--Alt--" />
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
                            src="{{asset('assets/images/products/'.$product->gambar)}}"
                            data-zoom-image="{{asset('assets/images/products/'.$product->gambar)}}"
                            class="el-image-zoom"
                            alt="--Alternative--"
                          />
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="el-product-image">
                          <img
                            src="{{asset('assets/images/products/'.$product->gambar)}}"
                            data-zoom-image="{{asset('assets/images/products/'.$product->gambar)}}"
                            class="el-image-zoom"
                            alt="--Alternative--"
                          />
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="el-product-image">
                          <img
                            src="{{asset('assets/images/products/'.$product->gambar)}}"
                            data-zoom-image="{{asset('assets/images/products/'.$product->gambar)}}"
                            class="el-image-zoom"
                            alt="--Alternative--"
                          />
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="el-product-image">
                          <img
                            src="{{asset('assets/images/products/'.$product->gambar)}}"
                            data-zoom-image="{{asset('assets/images/products/'.$product->gambar)}}"
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
              </div>
            </div>
            <!--/-->
            <!--Details-->
            <div class="col-lg-6">
              <div class="product-detail social">
                <h1>
                  {{__($product->nama)}}
                </h1>
                <div class="price">
                  <span class="title">{{__('Harga:')}}</span>
                  <span class="new-price">{{__('Rp '.$product->harga)}}</span>
                </div>
                <p>
                  {{__($product->deskripsi)}}
                </p>
                <div class="product-table">
                  <ul>
                    <li>
                      <span class="var">{{__('Berat')}}</span>
                      <span class="val">{{__($product->berat.'Kg')}}</span>
                    </li>
                    <li>
                      <span class="var">{{__('Kondisi')}}</span>
                      <span class="val">{{__($product->kondisi)}}</span>
                    </li>
                    <li>
                      <span class="var">{{__('Kategori')}}</span>
                      <span class="val">{{__($product->kategori)}}</span>
                    </li>
                  </ul>
                </div>
                <div class="row row-0">
                  <div class="col-12">
                    <a href="{{route('checkout-screen',$product->id)}}">
                      <button class="button button-md button-block button-dark text-center">
                        <span class="ti-bag"></span>
                        <span class="text">BELI</span>
                      </button>
                    </a>
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
                      {{__($product->deskripsi)}}
                    </p>
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
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins.min.js')}}"></script>
    <script src="{{asset('assets/js/main-scripts.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <script src="{{asset('assets/js/demo.js')}}"></script>
    <!--/-->
  </body>
</html>
