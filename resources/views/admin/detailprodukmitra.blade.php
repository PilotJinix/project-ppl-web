@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="block-header">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <ul class="breadcrumb breadcrumb-style ">
                    <li class="breadcrumb-item">
                        <h4 class="page-title">Detail Penawaran Produk</h4>
                    </li>
                    <li class="breadcrumb-item bcrumb-1">
                        <a href="../../index.html">
                            <i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="breadcrumb-item bcrumb-2">
                        <a href="#" onClick="return false;">eCommerce</a>
                    </li>
                    <li class="breadcrumb-item bcrumb-2">
                        <a href="#" onClick="return false;">Penawaran Produk</a>
                    </li>
                    <li class="breadcrumb-item active">Detail Penawaran Produk</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="body">
                    <div class="block-header">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <ul class="breadcrumb breadcrumb-style ">
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body ">
                        <div class="product-store">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                    <div class="product-gallery">
                                        <div class="product-gallery-featured">
                                            <img class="w-100" src={{asset($produk->foto_produk)}} alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                    <div class="product-payment-details">
                                        <div class="clearfix"></div>
                                        <br>
                                        <br>
                                        <h2 class="product-title mb-2">{{__($produk->nama_produk)}}</h2>
                                        <p><strong>Jumlah Berat Produk :</strong></p>
                                        <p>{!!$produk->berat_produk." Kg"!!}</p>
                                        <p><strong>Status Produk :</strong></p>
                                        @if ($produk->status == 'Ditolak' OR $produk->status == 'Dibatalkan')
                                        <p class="text-danger">{!!$produk->status!!}</p>
                                        @endif
                                        @if ($produk->status == 'Menunggu')
                                        <p class="text-warning">{!!$produk->status!!}</p>
                                        <a href="{{route('admin.terima-penawaran',$produk->id)}}">
                                            <button type="button" class="btn btn-success waves-effect">
                                                terima
                                            </button>
                                        </a>
                                        <a href="{{route('admin.tolak-penawaran',$produk->id)}}">
                                            <button type="button" class="btn btn-danger waves-effect">
                                                Tolak
                                            </button>
                                        </a>
                                        @endif
                                        @if ($produk->status == 'Sedang Mengecek')
                                        <p class="text-warning">{!!$produk->status!!}</p>
                                        <a href="{{ route('admin.selesai-check', $produk->id) }}">
                                            <button type="button" class="btn btn-success waves-effect">
                                                Selesai
                                            </button>
                                        </a>
                                        <a href="{{ route('admin.batalkan-penawaran', $produk->id) }}">
                                            <button type="button" class="btn btn-danger waves-effect">
                                                Batalkan
                                            </button>
                                        </a>
                                        @endif
                                        @if ($produk->status == 'Selesai')
                                        <p class="text-success">{!!$produk->status!!}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs tab-nav-right" role="tablist">
                        <li role="presentation">
                            <a href="#profile" data-toggle="tab" class="active show">Deskripsi</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active show" id="profile">
                            <div class="product-description">
                                <h2 class="mb-5">Deskripsi</h2>
                                {!!$produk->deskripsi_produk!!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
