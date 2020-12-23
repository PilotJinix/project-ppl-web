@extends('admin.layouts.app')
@section('title','Riwayat Transaksi')

@section('content')
<div class="container-fluid">
    <div class="block-header">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <ul class="breadcrumb breadcrumb-style ">
                    <li class="breadcrumb-item">
                        <h4 class="page-title">Riwayat Transaksi</h4>
                    </li>
                    <li class="breadcrumb-item bcrumb-1">
                        <a href="{{route('admin.dashboard')}}">
                            <i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="breadcrumb-item bcrumb-2">
                        <a href="#" onClick="return false;">Riwayat Transaksi</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #START# Table With State Save -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                </div>
                <div id="table-semua">
                    <div class="body">
                        <div class="table-responsive">
                            <table id="tableExport"
                                class="display table table-hover table-checkable order-column m-t-20 width-per-100"
                                style="width:100%;">
                                <thead>
                                    <tr>
                                        <th>Nama Lengkap</th>
                                        <th>No. HP</th>
                                        <th>Alamat</th>
                                        <th>Status</th>
                                        <th>Jenis Bank</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($riwayat as $list)
                                    @if ($list->status_checkout == 'Dibatalkan')
                                    @else
                                    <tr>
                                        <td>{{__($list->nama_penerima)}}</td>
                                        <td>{{__('+62'.$list->no_hp_penerima)}}</td>
                                        <td>{{__($list->alamat_penerima)}}</td>
                                        <td>{{__($list->status_checkout)}}</td>
                                        <td>{{__($list->metode_pembayaran)}}</td>
                                        <td>
                                            <a href="{{route('admin.invoice',$list->id)}}">
                                                <button class="btn tblActnBtn" data-toggle="tooltip"
                                                    title="Detail Chekout">
                                                    <i class="material-icons">remove_red_eye</i>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                    @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
