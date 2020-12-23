@extends('admin.layouts.app')
@section('title','Penawaran Produk')

@section('content')
<div class="container-fluid">
    <div class="block-header">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mb-3">
                <ul class="breadcrumb breadcrumb-style ">
                    <li class="breadcrumb-item">
                        <h4 class="page-title">Penawaran Produk Mitra</h4>
                    </li>
                    <li class="breadcrumb-item bcrumb-1">
                        <a href="{{route('admin.dashboard')}}">
                            <i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="breadcrumb-item bcrumb-2">
                        <a href="#" onClick="return false;">E-commerce</a>
                    </li>
                    <li class="breadcrumb-item active">Penawaran Produk Mitra</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-hover js-basic-example contact_list">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Produk</th>
                                    <th>Jumlah Produk</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($produk as $item)
                                <div class="modal fade" id={{__('delete'.$item->nama_produk)}} tabindex="-1"
                                    role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalCenterTitle">Hapus Produk
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-center">
                                                <i class="fas fa-exclamation-circle text-warning mb-2"
                                                    style="font-size: 100px"></i>
                                                <p>{{__("Semua data tentang produk ".$item->nama_produk." akan dihapus!")}}
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <a href="{{route('admin.delete-produk',$item->id)}}">
                                                    <button type="button" class="btn btn-info ">Konfirmasi</button>
                                                </a>
                                                <button type="button" class="btn btn-danger waves-effect"
                                                    data-dismiss="modal">Batal</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <tr>
                                    <td class="table-img">
                                        <img src="{{asset($item->foto_produk)}}" alt="--img--" width="50">
                                    </td>
                                    <td><a
                                            href="{{route('admin.detail-penawaran',$item->id)}}">{{__($item->nama_produk)}}</a>
                                    </td>
                                    <td>{{__($item->berat_produk)}}</td>
                                    <td>{{__($item->status)}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
