@extends('admin.layouts.app')
@section('title','Patokan Harga')

@section('content')
<div class="container-fluid">
    <div class="block-header">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <ul class="breadcrumb breadcrumb-style ">
                    <li class="breadcrumb-item">
                        <h4 class="page-title">Patokan Harga Produk</h4>
                    </li>
                    <li class="breadcrumb-item bcrumb-1">
                        <a href="{{route('admin.dashboard')}}">
                            <i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="breadcrumb-item bcrumb-2">
                        <a href="#" onClick="return false;">Produk</a>
                    </li>
                    <li class="breadcrumb-item bcrumb-2">
                        <a href="#" onClick="return false;">Patokan Harga Produk</a>
                    </li>
                </ul>
                <a href="{{route('admin.new-harga')}}">
                    <button class="btn btn-primary mb-2">Tambah Patokan Harga</button>
                </a>
            </div>
        </div>
    </div>
    @if (session()->has('saved') OR session()->has('deleted'))
    <div class="alert bg-green alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        {{__(session()->get('saved'))}}
        {{__(session()->get('deleted'))}}
    </div>
    @endif
    <!-- #START# Table With State Save -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div id="table-semua">
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover save-stage dataTable"
                                style="width:100%;">
                                <thead>
                                    <tr>
                                        <th>Nama Barang</th>
                                        <th>Kategori</th>
                                        <th>Harga</th>
                                        <th>Berat</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($patokan as $item)
                                    <tr>
                                        <td>{{__($item->nama_barang)}}</td>
                                        <td>{{__($item->jenis)}}</td>
                                        <td>{{__($item->harga)}}</td>
                                        <td>{{__($item->berat)}}</td>
                                        <td class="text-center">
                                            <button class="btn tblActnBtn" data-toggle="modal"
                                                data-target="{{__(("#modal".$item->id))}}" title="edit data">
                                                <i class="material-icons">mode_edit</i>
                                            </button>
                                            <button class="btn tblActnBtn" data-toggle="modal"
                                                data-target="{{__(("#delete".$item->id))}}" title="hapus data">
                                                <i class="material-icons">delete</i>
                                            </button>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id={{__('modal'.$item->id)}} tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                            <div class="modal-content dark text-light">
                                                <div class="modal-header">
                                                    <h3>Edit Patokan Harga</h3>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="{{route('admin.edit-harga',$item->id)}}" method="post">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <span>Nama Barang</span>
                                                            <input type="text" class="form-control" name="nama_produk"
                                                                value={{__($item->nama_barang)}}>
                                                        </div>
                                                        <div class="form-group">
                                                            <strong>Kategori</strong>
                                                            <select name="kategori" id="" class="form-control">
                                                                <option disabled>Pilih Kategori</option>
                                                                @if ($item->jenis == 'Buah')
                                                                <option selected>Buah</option>
                                                                @else
                                                                <option>Buah</option>
                                                                @endif
                                                                @if ($item->jenis == 'Sayuran')
                                                                <option selected>Sayuran</option>
                                                                @else
                                                                <option>Sayuran</option>
                                                                @endif
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <strong>Harga</strong>
                                                            <input type="number" class="form-control" name="harga"
                                                                value="{!!$item->harga!!}">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">Simpan
                                                            Perubahan</button>
                                                        <button class="btn btn-danger" data-dismiss="modal"
                                                            type="button">Batal</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id={{__('delete'.$item->id)}} tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content body">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalCenterTitle">Hapus Patokan
                                                        Harga
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body text-center">
                                                    <i class="fas fa-exclamation-circle text-warning mb-2"
                                                        style="font-size: 100px"></i>
                                                    <p>{{__("Data akan dihapus!")}}
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="{{route('admin.delete-harga',$item->id)}}">
                                                        <button type="button" class="btn btn-info ">Konfirmasi</button>
                                                    </a>
                                                    <button type="button" class="btn btn-danger waves-effect"
                                                        data-dismiss="modal">Batal</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
