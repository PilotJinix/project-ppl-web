@extends('admin.layouts.app')

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
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <button class="dropdown-toggle btn btn-primary pb-0" data-toggle="dropdown">
                                <i class="material-icons text-light" style="font-size: 18px">settings</i>
                                <Span>filter</Span>
                            </button>
                            <ul class="dropdown-menu pull-right">
                                <li>
                                    <a id="people-all" href="#" onClick="return false;">Semua</a>
                                </li>
                                <li>
                                    <a id="people-users" href="#" onClick="return false;">Menunggu Konfirmasi</a>
                                </li>
                                <li>
                                    <a id="people-mitra" href="#" onClick="return false;">Proses Pengiriman</a>
                                </li>
                                <li>
                                    <a id="diterima" href="#" onClick="return false;">Diterima</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div id="table-semua">
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover save-stage dataTable"
                                style="width:100%;">
                                <thead>
                                    <tr>
                                        <th>Nama Lengkap</th>
                                        <th>Email</th>
                                        <th>Alamat</th>
                                        <th>Status</th>
                                        <th>Nomer HP</th>
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
                                            <button class="btn tblActnBtn">
                                                <i class="material-icons">delete</i>
                                            </button>
                                        </td>
                                    </tr>
                                    @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div id="table-user" style="display: none">
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover save-stage dataTable"
                                style="width:100%;">
                                <thead>
                                    <tr>
                                        <th>Nama Lengkap</th>
                                        <th>Email</th>
                                        <th>Alamat</th>
                                        <th>Status</th>
                                        <th>Nomer HP</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($riwayat as $list)
                                    @if ($list->status_checkout == 'Menunggu Konfirmasi')
                                    <tr>
                                        <td>{{__($list->nama_penerima)}}</td>
                                        <td>{{__('+62'.$list->no_hp_penerima)}}</td>
                                        <td>{{__($list->alamat_penerima)}}</td>
                                        <td>{{__($list->status_checkout)}}</td>
                                        <td>{{__($list->metode_pembayaran)}}</td>
                                        <td>
                                            <button class="btn tblActnBtn">
                                                <i class="material-icons">mode_edit</i>
                                            </button>
                                            <button class="btn tblActnBtn">
                                                <i class="material-icons">delete</i>
                                            </button>
                                        </td>
                                    </tr>
                                    @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div id="table-mitra" style="display: none">
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover save-stage dataTable"
                                style="width:100%;">
                                <thead>
                                    <tr>
                                        <th>Nama Lengkap</th>
                                        <th>Email</th>
                                        <th>Alamat</th>
                                        <th>Status</th>
                                        <th>Nomer HP</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($riwayat as $list)
                                    @if ($list->status_checkout == 'Proses Pengiriman')
                                    <tr>
                                        <td>{{__($list->nama_penerima)}}</td>
                                        <td>{{__('+62'.$list->no_hp_penerima)}}</td>
                                        <td>{{__($list->alamat_penerima)}}</td>
                                        <td>{{__($list->status_checkout)}}</td>
                                        <td>{{__($list->metode_pembayaran)}}</td>
                                        <td>
                                            <button class="btn tblActnBtn">
                                                <i class="material-icons">mode_edit</i>
                                            </button>
                                            <button class="btn tblActnBtn">
                                                <i class="material-icons">delete</i>
                                            </button>
                                        </td>
                                    </tr>
                                    @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div id="table-diterima" style="display: none">
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover save-stage dataTable"
                                style="width:100%;">
                                <thead>
                                    <tr>
                                        <th>Nama Lengkap</th>
                                        <th>Email</th>
                                        <th>Alamat</th>
                                        <th>Status</th>
                                        <th>Nomer HP</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($riwayat as $list)
                                    @if ($list->status_checkout == 'Diterima')
                                    <tr>
                                        <td>{{__($list->nama_penerima)}}</td>
                                        <td>{{__('+62'.$list->no_hp_penerima)}}</td>
                                        <td>{{__($list->alamat_penerima)}}</td>
                                        <td>{{__($list->status_checkout)}}</td>
                                        <td>{{__($list->metode_pembayaran)}}</td>
                                        <td>
                                            <button class="btn tblActnBtn">
                                                <i class="material-icons">mode_edit</i>
                                            </button>
                                            <button class="btn tblActnBtn">
                                                <i class="material-icons">delete</i>
                                            </button>
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
