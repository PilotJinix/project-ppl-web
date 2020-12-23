@extends('admin.layouts.app')
@section('title','Produk')

@section('content')
<div class="container-fluid">
    <div class="block-header">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mb-3">
                <ul class="breadcrumb breadcrumb-style ">
                    <li class="breadcrumb-item">
                        <h4 class="page-title">List Produk</h4>
                    </li>
                    <li class="breadcrumb-item bcrumb-1">
                        <a href="{{route('admin.dashboard')}}">
                            <i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="breadcrumb-item bcrumb-2">
                        <a href="#" onClick="return false;">E-commerce</a>
                    </li>
                    <li class="breadcrumb-item active">List Produk</li>
                </ul>
                <a href="{{route('admin.new-produk')}}">
                    <button class="btn btn-primary">Produk Baru</button>
                </a>
            </div>
        </div>
    </div>
    @if (session()->has('saved') OR session()->has('changed') OR session()->has('deleted'))
    <div class="alert bg-green alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        {{__(session()->get('saved'))}}
        {{__(session()->get('changed'))}}
        {{__(session()->get('deleted'))}}
    </div>
    @endif
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
                                    <th>Kategori</th>
                                    <th>Harga</th>
                                    <th>Stok</th>
                                    <th>Status</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($produk as $item)
                                <div class="modal fade" id={{__('delete'.$item->nama)}} tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                                <p>{{__("Semua data tentang produk ".$item->nama." akan dihapus!")}}</p>
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
                                        <img src="{{asset('assets/images/products/'.$item->gambar)}}" alt="--img--"
                                            width="50">
                                    </td>
                                    <td>{{__($item->nama)}}</td>
                                    <td>{{__($item->kategori)}}</td>
                                    <td>{{__('RP '.$item->harga)}}</td>
                                    <td>{{__($item->stok)}}</td>
                                    <td>
                                        @if ($item->stok >= 10)
                                        <span class="label l-bg-purple shadow-style">{{__('Stok Ada')}}</span>
                                        @endif
                                        @if($item->stok < 10 &&$item->stok >= 1) <span
                                                class="label l-bg-cyan shadow-style">
                                                {{__('Stok Tinggal '.$item->stok)}}</span>
                                            @endif
                                            @if ($item->stok == 0)
                                            <span class="label l-bg-orange shadow-style">{{__('Stok Kosong')}}</span>
                                            @endif
                                    </td>
                                    <td>
                                        <a href="{{route('admin.edit-produk',$item->id)}}">
                                            <button class="btn tblActnBtn" data-toggle="tooltip" data-placement="bottom"
                                                title="Edit Produk">
                                                <i class="material-icons">mode_edit</i>
                                            </button>
                                        </a>
                                        <button class="btn tblActnBtn" data-toggle="modal" data-placement="bottom"
                                            title="Delete Produk" data-target={{__("#delete".$item->nama)}}>
                                            <i class="material-icons">delete</i>
                                        </button>
                                        <a href="{{route('product',$item->id)}}" target="blank">
                                            <button class="btn tblActnBtn" data-toggle="tooltip" data-placement="bottom"
                                                title="Lihat Produk">
                                                <i class="material-icons">remove_red_eye</i>
                                            </button>
                                        </a>
                                    </td>
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
