@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="block-header">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <ul class="breadcrumb breadcrumb-style ">
                    <li class="breadcrumb-item">
                        <h4 class="page-title">Detail Checkout</h4>
                    </li>
                    <li class="breadcrumb-item bcrumb-1">
                        <a href="{{route('admin.dashboard')}}">
                            <i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="breadcrumb-item bcrumb-2">
                        <a href="#" onClick="return false;">Transaksi</a>
                    </li>
                    <li class="breadcrumb-item active">Detail Checkout</li>
                </ul>
            </div>
        </div>
    </div>
    @if (session()->has('saved'))
    <div class="alert bg-green alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        {{__(session()->get('saved'))}}
    </div>
    @endif
    <div class="row clearfix">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="body">
                    <div class="row">
                        <div class="col-md-12">
                            @foreach ($detail as $item)
                            <div class="white-box">
                                <h3>
                                    <b>DETAIL CHECKOUT</b>
                                    <span class="pull-right">{!!"#".$item->id!!}</span>
                                </h3>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="pull-left">
                                            <address>
                                                <p class="font-bold">Alamat Penerima:</p>
                                                <p class="text-muted">
                                                    {!!$item->alamat_penerima!!}
                                                </p>
                                                <p class="text-muted">
                                                    {!!"+62".$item->no_hp_penerima!!}
                                                </p>
                                                <p class="m-t-30">
                                                    <b>Tanggal checkout : </b>
                                                    <i class="fa fa-calendar ml-2"></i>
                                                    {{__(date('l, d M Y',$item->time))}}
                                                </p>

                                            </address>
                                            <p>
                                                <b>Status :</b>
                                                @if ($item->status_checkout == "Diterima")
                                                <span class="label label-success">Diterima</span>
                                                @endif
                                                @if ($item->status_checkout == "Menunggu Konfirmasi")
                                                <span class="label label-info">Menunggu Konfirmasi</span>
                                                @endif
                                                @if ($item->status_checkout == "Proses Pengiriman")
                                                <span class="label label-warning">Proses Pengiriman</span>
                                                @endif
                                                @if ($item->status_checkout == "Dibatalkan")
                                                <span class="label label-warning">Pesanan DiBatalkan</span>
                                                @endif
                                            </p>
                                            @if ($item->status_checkout == "Menunggu Konfirmasi")
                                            <a href="{{asset('assets/images/struk/'.$item->struk)}}"
                                                data-sub-html="Show Image Struk" target="blank">
                                                <button class="btn btn-success">Lihat Struk Pembayaran</button>
                                            </a>
                                            @endif
                                            @if ($item->resi == null AND $item->status_checkout == "Proses Pengiriman")
                                            <button class="btn btn-success" data-toggle="modal" data-target="#resi">
                                                Masukkan Resi
                                            </button>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="modal fade" id="resi" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Resi
                                                        Pengiriman</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="{{ route('admin.masukkan-resi', $item->id) }}"
                                                    method="post">
                                                    @csrf
                                                    <div class="modal-body text-center">
                                                        <span>masukkan resi</span>
                                                        <input type="text" class="form-control border" name="resi">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-info ">Simpan</button>
                                                        <button type="button" class="btn btn-danger waves-effect"
                                                            data-dismiss="modal">Batal</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="table-responsive m-t-40">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Gambar</th>
                                                        <th class="text-center">Nama Barang</th>
                                                        <th class="text-center">Jumlah</th>
                                                        <th class="text-center">Biaya Pengiriman</th>
                                                        <th class="text-center">Harga per unit</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="table-img text-center">
                                                            <img width="50px"
                                                                src={{asset('assets/images/products/'.$item->gambar)}}
                                                                alt="--img--">
                                                        </td>
                                                        <td class="text-center">{{__($item->nama)}}</td>
                                                        <td class="text-center">{{__($item->jumlah)}}</td>
                                                        <td class="text-center">{{__($item->biaya_pengiriman)}}</td>
                                                        <td class="text-center">{{__("Rp ".$item->harga)}}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="pull-right m-t-30 text-right">
                                            <h3><b>Total : </b> {!!"Rp ".$item->total_harga!!}</h3>
                                        </div>
                                        @if ($item->status_checkout == "Menunggu Konfirmasi")
                                        <div class="clearfix"></div>
                                        <hr>
                                        <div class=" text-right w-100">
                                            <a href="{{route('admin.terima-pembayaran',$item->id)}}">
                                                <button class="btn btn-success">Terima Pembayaran</button>
                                            </a>
                                            <a href="{{route('admin.tolak-pembayaran',$item->id)}}">
                                                <button class="btn btn-danger">Batalkan Pesanan</button>
                                            </a>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
