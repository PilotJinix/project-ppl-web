<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    @section('title','Edit Profile')
    @include('layouts.head')
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
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
        <a href="{{url()->previous()}}"><span class="text-light p-1">&laquo; Back</span></a>
      </div>
    </header>
    <!--Auth-->
    <section class="section section-auth section-auth-login">
      <div class="display-spacing">
        <div class="container" >
          <div class="row">
            <div class="card w-100">
              <div class="card-header text-center">
                <span>Data Akun</span>
              </div>
              <div class="card-body">
                <div class="container ">
                  <div class="row">
                    <div class="col-md-6 col-lg-4 text-center">
                      <div class="card card-shadow border-0 rounded bg-secondary w-100">
                        <a href="#" class="text-center"><img src="{{asset('assets/images/images/no-image.png')}}" class="card-img-top w-auto" alt="__FOTO__"></a>
                        <div class="card-body bg-primary rounded">
                          <a href="#" class="text-light"><h5 class="card-title text-center h5">{{$akun->nama_lengkap}}</h5></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm pt-1">
                      <h5 class="h5 font-weight-bold">Ubah Data Diri</h5>
                      <form method="POST" class="mt-3 form-1">
                        <div class="form-group row">
                          <div class="col-sm-3 col-form-label">
                            <label>Nama Lengkap</label>
                          </div>
                          <div class="col-sm-9">
                            <input class="form-control" type="text" name="nama_lengkap" required value="{{$akun->nama_lengkap}}">
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-sm-3 col-form-label">
                            <label>Username</label>
                          </div>
                          <div class="col-sm-9">
                            <input class="form-control" type="text" name="username" required value="{{$akun->username}}">
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-sm-3 col-form-label">
                            <label>Email</label>
                          </div>
                          <div class="col-sm-9">
                            <input class="form-control" type="email" name="email" required value="{{$akun->email}}">
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-sm-3 col-form-label">
                            <label>Nomer HP</label>
                          </div>
                          <div class="col-sm-9">
                            <div class="form-item">
                              <input class="input-icon pt-2 pb-2" type="number" name="nomer_hp" required value="{{$akun->nomer_hp}}">
                              <div class="icon mb-1 ml-3">
                                <span>+62</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-sm-3 col-form-label">
                            <label>Alamat</label>
                          </div>
                          <div class="col-sm-9">
                            <input class="form-control" type="text" name="alamat" required value="{{$akun->alamat}}">
                          </div>
                        </div>
                        <button class="float-right button-primary rounded pl-5 pr-5 p-2" type="submit">{{__('Simpan')}}</button>
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

  <!-- Mirrored from demo.afracode.com/orwell/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Nov 2020 04:08:43 GMT -->
</html>
