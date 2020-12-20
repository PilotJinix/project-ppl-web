<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title>Orwell</title>
    @include('layouts.head')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
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
        <div class="header-nav bg-primary">
            @include('layouts.mainmenu')
        </div>
    </header>
    <!--/-->
    <!--Sidenav-->
    <div class="app-sidenav app-sidenav-1">
        @include('layouts.sidemainmenu')
        <span class="sidenav-close"></span>
    </div>
    <!--/-->
    <!--Shopping Cart-->
    <div class="app-shopping-cart app-shopping-cart-1">
        @include('layouts.cartlist')
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
                            <h1>Checkout</h1>
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
                                        <span class="text">Checkout</span>
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
    <!--Checkout-->
    <section class="section section-page section-checkout section-checkout-1">
        <div class="page-body">
            <div class="display-spacing">
                <form action="{{route('checkout',$detail->id)}}" class="form-3" method="post">
                    @csrf
                    <div class="container">
                        <div class="row row-sm">
                            <div class="col-lg-8">
                                <header class="el-heading el-heading-3">
                                    <h2>Billing Details</h2>
                                    <div class="divider divider-line"></div>
                                </header>
                                <div class="row row-sm">
                                    <div class="col-md-12">
                                        <div class="form-item">
                                            <label>Nama Lengkap*</label>
                                            <input type="text" class="mt-2 @error('nama_lengkap') is invalid @enderror"
                                                name="nama_lengkap" value="{{__($akun->nama_lengkap)}}" />
                                        </div>
                                        @error('nama_lengkap')
                                        <span class="text-danger invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-item">
                                            <label>Email*</label>
                                            <input type="text" class="mt-2 @error('email') is invalid @enderror"
                                                name="email" value="{{__($akun->email)}}" />

                                        </div>
                                        @error('email')
                                        <span class="text-danger invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-item">
                                            <label>Nomer HP*</label>
                                            <input type="number" class="mt-2 @error('no_hp') is invalid @enderror"
                                                name="no_hp" value="{{__($akun->nomer_hp)}}" />
                                        </div>
                                        @error('no_hp')
                                        <span class="text-danger invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-item">
                                            <label>Alamat*</label>
                                            <textarea name="alamat" id="alamat" cols="10" rows="3"
                                                placeholder="isi dengan nama jalan, nomor rumah, nomor kompleks, nama gedung, lantai atau nomor unit"></textarea>
                                        </div>
                                        @error('alamat')
                                        <span class="text-danger invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <div class="form-item">
                                            <label>apartemen,toko,dll(opsional)</label>
                                            <input type="text" class="mt-2 @error('label_alamat') is invalid @enderror"
                                                name="label_alamat" />
                                        </div>
                                        @error('label_alamat')
                                        <span class="text-danger invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-item">
                                            <label>Provinsi*</label>
                                            <select name="provinsi" id="provinsi" class="js-states form-control"
                                                style="width: 100%;" onchange="handleKota()">
                                                <option selected disabled>Pilih Provinsi</option>
                                            </select>
                                        </div>
                                        @error('provinsi')
                                        <span class="text-danger invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-item">
                                            <label>Kota*</label>
                                            <select name="kota" id="kota" class="form-control" style="width: 100%;"
                                                onchange="handleKec()">
                                                <option selected disabled>Pilih Kota</option>
                                            </select>
                                        </div>
                                        @error('kota')
                                        <span class="text-danger invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-item">
                                            <label>Kecamatan*</label>
                                            <select name="kecamatan" id="kecamatan" class="form-control"
                                                style="width: 100%;" onchange="hargaPengiriman()">
                                                <option selected disabled>Pilih Kecamatan</option>
                                            </select>
                                        </div>
                                        @error('kecamatan')
                                        <span class="text-danger invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-item">
                                            <label>Kode Pos*</label>
                                            <input type="number" name="kode_pos"
                                                class="mt-2 @error('kode_pos') is invalid @enderror" />
                                        </div>
                                        @error('kode_pos')
                                        <span class="text-danger invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <header class="el-heading el-heading-3">
                                    <h2>Order Details</h2>
                                    <div class="divider divider-line"></div>
                                </header>
                                <div class="el-table-order el-table-order-1">
                                    <ul>
                                        <li>
                                            <span class="var">Product</span>
                                            <ul class="pl-0">
                                                <li class="p-3" style="border: 1px solid #e3e3e3; border-radius: 5px">
                                                    <div
                                                        class="row row-0 d-flex align-items-center justify-content-between">
                                                        <img src="{{asset('assets/images/products/'.$detail->gambar)}}"
                                                            alt="" width="70px">
                                                        <div class="pl-2 pt-1" style="width: 60%">
                                                            <label class="var">{{__($detail->nama)}}</label>
                                                            <div class="d-flex align-items-center">
                                                                <span>Rp</span>
                                                                <input type="text"
                                                                    class="val text-right @error('harga') is invalid @enderror"
                                                                    value="{{__($detail->harga)}}" readonly id="harga"
                                                                    style="width: 40px;">
                                                            </div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <span>x</span>
                                                            <input type="number" readonly value={{__($jumlah)}}
                                                                class="val text" style="width: 10px" id="jumlah"
                                                                name="jumlah">
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="row row-sm">
                                                <div class="col-6">
                                                    <span class="var">Pilih Kurir</span>
                                                </div>
                                                <div class="col-6 d-flex justify-content-end">
                                                    <select id="kurir" style="font-weight: 600;font-size: 13px;">
                                                        <option selected disabled>Pilih Kurir</option>
                                                    </select>
                                                </div>
                                                <input type="text" name="kurir" class="d-none" id="courier">
                                                @error('kurir')
                                                <strong class="text-danger">{{$message}}</strong>
                                                @enderror
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row row-sm">
                                                <div class="col-6">
                                                    <span class="var">Biaya Pengiriman</span>
                                                </div>
                                                <div class="col-6 d-flex justify-content-end">
                                                    <span class="text-right">Rp <input id="biaya_pengiriman" type="text"
                                                            name="biaya_pengiriman"
                                                            class="@error('biaya_pengiriman') is invalid @enderror val text-bold text-right text-dark biaya"
                                                            value="0" readonly style="width: 50px"></span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row row-sm">
                                                <div class="col-6">
                                                    <span class="var">Diskon</span>
                                                </div>
                                                <div class="col-6 d-flex justify-content-end">
                                                    <span class="text-right"><input id="diskon" type="text"
                                                            name="diskon"
                                                            class="val text-bold text-right text-dark @error('diskon') is invalid @enderror"
                                                            value="{!!$detail->diskon!!}" readonly style="width: 50px">
                                                        %</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row row-sm">
                                                <div class="col-6">
                                                    <span class="var">Metode Pembayaran</span>
                                                </div>
                                                <div class="col-6 d-flex justify-content-end">
                                                    <input readonly id="bank" type="text" name="metode_pembayaran"
                                                        class="text-right @error('jenis_bank') is invalid @enderror"
                                                        style="width: 100px">
                                                    <button type="button" class="val pr-0 text-primary text-bold"
                                                        id="pilih-metode">Pilih</button>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row row-sm">
                                                <div class="col-6">
                                                    <span class="var">Jumlah Total Pembayaran</span>
                                                </div>
                                                <div class="col-6 d-flex justify-content-end">
                                                    <span class="text-right">Rp <input readonly type="text"
                                                            id="total-harga" name="total_harga"
                                                            class="val text-bold text-right" value="0"
                                                            style="width: 50px"></span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <button id="button-submit" type="submit"
                                    class="button button-md button-block button-primary">
                                    <span class="text">CHECKOUT</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
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
    <div class="pos-fixed" id="metode-pembayaran" style="display: none">
        <div class="option" style="width: 30rem">
            <div class="option-header pt-3 pb-3 d-flex justify-content-between">
                <span class="text-title">Pilih Metode Pembayaran</span>
                <i id="closeModalBank" class="fa fa-times" style="cursor: pointer"></i>
            </div>
            <div class="option-body">
                <ul class="pl-0 mb-0">
                    <li class="list"><button id="bca" class="pilih-bank" type="button">Bank BCA</button></li>
                    <li class="list"><button id="bri" class="pilih-bank" type="button">Bank BRI</button></li>
                    <li class="list"><button id="mandiri" class="pilih-bank" type="button">Bank Mandiri</button></li>
                </ul>
            </div>
        </div>
    </div>
    @guest
    <div class="pos-fixed">
        <div class="option">
            <div class="option-header">
                <span class="text-title">Ooppps!</span>
            </div>
            <div class="option-body">
                <p>Maaf, Kamu harus login terlebih dahulu!!</p>
            </div>
            <div class="btn-option pr-3">
                <a class="button button-primary rounded" href="{{route('login')}}"
                    style="padding: 0 20px"><span>Login</span></a>
                <a class="button button-secondary rounded" href="{{url()->previous()}}"
                    style="padding: 0 20px"><span>Kembali</span></a>
            </div>
        </div>
    </div>
    @endguest
    <!--Scripts-->
    <script src="{{asset("assets/js/jquery.min.js")}}"></script>
    <script src="{{asset('assets/js/plugins.min.js')}}"></script>
    <script src="{{asset('assets/js/main-scripts.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    {{-- <script src="{{asset('assets/js/demo.js"')}}"></script> --}}
    <script>
        $(document).ready(function () {
            $("#provinsi").select2({
                placeholder: "Pilih Provinsi",
            });
            $("#kota").select2({
                placeholder: "Pilih Kota",
            });
            $("#kecamatan").select2({
                placeholder: "Pilih Kecamatan",
            });
            /* Pilih Metode Pembayaran */
            $('#pilih-metode').click(function () {
                $('#metode-pembayaran').fadeIn();
            });
            $('#bca').click(function () {
                $('#bank').val($('#bca').text());

                $('#metode-pembayaran').fadeOut();
                if ($('#bank').val() != '') {
                    $('#button-submit').prop('disabled', false);
                };
            });
            $('#bri').click(function () {
                $('#bank').val($('#bri').text());

                $('#metode-pembayaran').fadeOut();
                if ($('#bank').val() != '') {
                    $('#button-submit').prop('disabled', false);
                };
            });
            $('#mandiri').click(function () {
                $('#bank').val($('#mandiri').text());

                $('#metode-pembayaran').fadeOut();
                if ($('#bank').val() != '') {
                    $('#button-submit').prop('disabled', false);
                };
            });
            $('#closeModalBank').click(function () {
                $('#metode-pembayaran').fadeOut();
            });
            $('#kurir').change(function () {
                let harga = $('#harga').val();
                let jumlah = $('#jumlah').val();
                let kurir = $('#kurir').val();

                let hoo = $(this).children("option:selected").text();
                console.log(hoo);

                $('#courier').val(hoo);

                $('.biaya').val(kurir);
                let biaya_kirim = $('#biaya_pengiriman').val();
                let diskon = $('#diskon').val();
                let hasil_diskon = diskon / 100 * harga;
                let harga_diskon = harga - hasil_diskon;
                let kirim = Number(biaya_kirim);
                let total = harga_diskon * jumlah + kirim;

                $('#total-harga').val(total);
            });

            /* Jumlah */
            let harga = $('#harga').val();
            let jumlah = $("#jumlah").val();
            let diskon = $('#diskon').val();
            let hasil_diskon = diskon / 100 * harga;
            let harga_diskon = harga - hasil_diskon;
            let total = harga_diskon * jumlah;
            $('#total-harga').val(total);

            /* button submit */
            $('#button-submit').prop('disabled', true);
        })

        const url = "https://ruangapi.com/api/v1/provinces";

        let res = fetch(url, {
                headers: {
                    "authorization": "gTHTyyFbX4kAbAydtjVMgquqGUXbtH1FX7XZrSl9",
                    "content-type": "application/json"
                },
            }).then(response => response.json())
            .then(json => provinces(json))
            .catch(err => console.log(err));

        function provinces(data) {
            console.log(data.data.results);
            let item = data.data.results;
            for (let i = 0; i < item.length; i++) {
                $('#provinsi').append(new Option(item[i].name, item[i].id));
            }
        }

        async function handleKota() {
            let provinsi = $('#provinsi').val();

            const kotaUrl = `https://ruangapi.com/api/v1/cities?province=${provinsi}`;

            let res = await fetch(kotaUrl, {
                    headers: {
                        "authorization": "gTHTyyFbX4kAbAydtjVMgquqGUXbtH1FX7XZrSl9",
                        "content-type": "application/json"
                    },
                }).then(response => response.json())
                .catch(err => console.log(err));

            let item = res.data.results;
            console.log(item);
            for (let i = 0; i < item.length; i++) {
                $('#kota').append(new Option(item[i].name, item[i].id));
            }
        }

        async function handleKec() {
            let kota = $("#kota").val();

            const kecUrl = `https://ruangapi.com/api/v1/districts?city=${kota}`;

            const res = await fetch(kecUrl, {
                    headers: {
                        "authorization": "gTHTyyFbX4kAbAydtjVMgquqGUXbtH1FX7XZrSl9",
                        "content-type": "application/json"
                    },
                }).then(response => response.json())
                .catch(err => console.log(err));

            let item = res.data.results;
            console.log(item);
            for (let i = 0; i < item.length; i++) {
                $('#kecamatan').append(new Option(item[i].name, item[i].id));
            };
        }

        async function hargaPengiriman() {
            const courier = [
                'jnt',
                'tiki',
                'sicepat',
            ];
            let kec = $("#kecamatan").val();
            let kurir = $("#kurir").val();
            let jumlah = $("#jumlah").val();
            const asal = 289;
            let berat = jumlah * 1000;

            for (let j = 0; j < courier.length; j++) {
                let data = {
                    'origin': asal,
                    'destination': kec,
                    'weight': berat,
                    'courier': courier[j],
                };

                const ongkos = "https://ruangapi.com/api/v1/shipping";

                const res = await fetch(ongkos, {
                        method: 'POST',
                        headers: {
                            "authorization": "gTHTyyFbX4kAbAydtjVMgquqGUXbtH1FX7XZrSl9",
                            "content-type": "application/json"
                        },
                        body: JSON.stringify(data)
                    }).then(response => response.json())
                    .catch(err => console.log(err));

                let jasa = res.data.results;
                console.log(jasa);
                if (jasa.length != 0) {
                    for (let index = 0; index < jasa.length; index++) {
                        $('#kurir').append(new Option(jasa[index].courier +
                            "-" + jasa[index].description, jasa[index].cost));
                    }
                }
            }
        }

    </script>
    <!--/-->
</body>

</html>
