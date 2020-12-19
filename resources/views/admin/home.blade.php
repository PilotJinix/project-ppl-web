@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="block-header">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <ul class="breadcrumb breadcrumb-style ">
                    <li class="breadcrumb-item">
                        <h4 class="page-title">Dashboard</h4>
                    </li>
                    <li class="breadcrumb-item bcrumb-1">
                        <a href="index.html">
                            <i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Widgets -->
    <div class="row">
        <div class="col-lg-3 col-sm-6">
            <div class="support-box text-center d-flex flex-column justify-content-between l-bg-red">
                <div class="text font-17 m-b-5">Jumlah Produk</div>
                <h3 class="m-b-10">{!!$jumlah_produk!!}
                </h3>
                <div class="text font-17">Produk</div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="support-box text-center d-flex flex-column justify-content-between l-bg-cyan">
                <div class="text font-17 m-b-5">Pesanan Diterima</div>
                <h3 class="m-b-10">{!!$pesanan_diterima!!}</h3>
                <div class="text font-17">Pesanan</div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="support-box text-center l-bg-orange d-flex flex-column justify-content-between">
                <div class="text font-17 m-b-5">Jumlah Mitra</div>
                <h3 class="m-b-10">{!!$jumlah_mitra!!}</h3>
                <div class="text font-17">Mitra</div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="support-box text-center l-bg-purple d-flex flex-column justify-content-between">
                <div class="text font-17 m-b-5">Jumlah Users</div>
                <h3 class="m-b-10">{!!$jumlah_user!!}</h3>
                <div class="text font-17">Users</div>
            </div>
        </div>
    </div>
    <!-- #END# Widgets -->
</div>
@endsection
