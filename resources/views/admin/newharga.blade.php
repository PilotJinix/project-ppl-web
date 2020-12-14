@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="block-header">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mb-3">
                <ul class="breadcrumb breadcrumb-style ">
                    <li class="breadcrumb-item">
                        <h4 class="page-title border-right-0">Tambah Produk Baru</h4>
                    </li>

                    <li class="breadcrumb-item bcrumb-1">
                        <a href="{{route('admin.dashboard')}}">
                            <i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="breadcrumb-item bcrumb-2">
                        <a href="#" onClick="return false;">E-commerce</a>
                    </li>
                    <li class="breadcrumb-item active">Produk Baru</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="body">
                    <form action="{{route('admin.save-harga')}}" method="post">
                        @csrf
                        <div class="form-group form-float">
                            <div class="form-line mb-4">
                                <input type="text" class="form-control @error('nama_produk') not valid @enderror"
                                    name="nama_produk" style="font-size: 20px">
                                <label class="form-label">Nama Produk</label>
                            </div>
                            @error('nama_produk')
                            <strong class="text-danger">{{$message}}</strong>
                            @enderror
                            <div class="form-line mb-4">
                                <h3 class="card-inside-title mb-0">Kategori</h3>
                                <select class="form-control @error('kategori') not valid @enderror" name="kategori">
                                    <option disabled selected>Pilih Kategori
                                    </option>
                                    <option>Buah</option>
                                    <option>Sayuran</option>
                                </select>
                            </div>
                            @error('kategori')
                            <strong class="text-danger">{{$message}}</strong>
                            @enderror
                            <div class="form-group">
                                <h3 class="card-inside-title">Harga</h3>
                                <input class="form-control @error('harga') not valid @enderror" name="harga"
                                    type="number" placeholder="Masukkan Harga Produk">
                            </div>
                            @error('harga')
                            <strong class="text-danger">{{$message}}</strong>
                            @enderror
                            <button class="btn btn-primary" type="submit">Simpan</button>
                            <a href="{{url()->previous()}}" class="btn btn-danger pt-2">Kembali
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
