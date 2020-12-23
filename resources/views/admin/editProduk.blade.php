@extends('admin.layouts.app')
@section('title','Edit Produk')

@section('content')
<div class="container-fluid">
    <div class="block-header">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <ul class="breadcrumb breadcrumb-style ">
                    <li class="breadcrumb-item">
                        <h4 class="page-title border-right-0">Edit Produk</h4>
                    </li>
                    <li class="breadcrumb-item bcrumb-1">
                        <a href="{{route('admin.dashboard')}}">
                            <i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="breadcrumb-item bcrumb-2">
                        <a href="#" onClick="return false;">E-commerce</a>
                    </li>
                    <li class="breadcrumb-item bcrumb-2">
                        <a href="#" onClick="return false;">Produk</a>
                    </li>
                    <li class="breadcrumb-item active">Edit Produk</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="body">
                    <form action="{{route('admin.save-edit-produk',$produk->id)}}" method="post">
                        @csrf
                        <div class="form-group form-float">
                            <div class="form-line mb-3">
                                <input type="text" class="form-control @error('nama_produk') not valid @enderror"
                                    name="nama_produk" style="font-size: 20px" value="{{__($produk->nama)}}">
                                <label class="form-label">Nama Produk</label>
                            </div>
                            @error('nama_produk')
                            <strong class="text-danger">{{$message}}</strong>
                            @enderror
                            <div class="form-group">
                                <h3 class="card-inside-title">Deskripsi Produk</h3>
                                <div class="form-line">
                                    <textarea id="text-area" rows="4"
                                        class="form-control no-resize @error('deskripsi') not valid @enderror"
                                        name="deskripsi">{{__($produk->deskripsi)}}</textarea>
                                </div>
                            </div>
                            @error('deskripsi')
                            <strong class="text-danger">{{$message}}</strong>
                            @enderror
                            <div class="card border rounded">
                                <div class="card-header">
                                    <h5 class="mb-0">Data Produk</h5>
                                </div>
                                <div class="card-body p-0">
                                    <div class="row m-0">
                                        <div class="col-md-4 border p-0 mb-0 card-header">
                                            <div class="body p-0 ">
                                                <ul class="m-0">
                                                    <li>
                                                        <div id="dataUmum" class="collapsible-header active"
                                                            style="background-color: rgba(182, 182, 182, 0.5)">
                                                            <i class="material-icons">settings</i> Umum
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div id="umum" class="col-md-7 form-horizontal pt-3">
                                            <div class="row clearfix mr-0">
                                                <div class="col-md-3 mb-0 form-control-label text-left">
                                                    <label for="email_address_2">Harga</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="number"
                                                                class="form-control border pl-2 rounded @error('harga') not valid @enderror"
                                                                name="harga" placeholder="Masukkan harga produk"
                                                                value="{{__($produk->harga)}}">
                                                        </div>
                                                    </div>
                                                    @error('harga')
                                                    <strong class="text-danger">{{$message}}</strong>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row clearfix mr-0">
                                                <div class="col-md-3 mb-0 form-control-label text-left">
                                                    <label for="email_address_2">Diskon</label>
                                                </div>
                                                <div class="col-md-9 pr-2 mb-0">
                                                    <div class="input-group p-0">
                                                        <div class="form-line">
                                                            <input type="number"
                                                                class="form-control border pl-2 rounded border-right-0 @error('diskon') not valid @enderror"
                                                                name="diskon" value="{{__($produk->diskon)}}">
                                                        </div>
                                                        <span
                                                            class="input-group-addon border border-left-0 rounded">%</span>
                                                    </div>
                                                    @error('diskon')
                                                    <strong class="text-danger">{{$message}}</strong>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row clearfix mr-0">
                                                <div class="col-md-3 mb-0 form-control-label text-left">
                                                    <label for="email_address_2">Jumlah Stok</label>
                                                </div>
                                                <div class="col-md-9 pr-2">
                                                    <div class="form-group">
                                                        <div class="input-group p-0">
                                                            <div class="form-line">
                                                                <input type="number"
                                                                    class="form-control border pl-2 rounded border-right-0 @error('stok') not valid @enderror"
                                                                    name="stok" value="{{__($produk->stok)}}">
                                                            </div>
                                                            <span
                                                                class="input-group-addon border border-left-0 rounded">Kg</span>
                                                        </div>
                                                    </div>
                                                    @error('stok')
                                                    <strong class="text-danger">{{$message}}</strong>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Simpan Perubahan</button>
                            <a href="{{url()->previous()}}" class="btn btn-danger pt-2">Kembali
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('assets/ckeditor/ckeditor.js')}}"></script>
    <script>
        const area = document.getElementById('text-area');
        CKEDITOR.replace(area);

    </script>
    @endsection
