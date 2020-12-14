@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="block-header">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <ul class="breadcrumb breadcrumb-style ">
                    <li class="breadcrumb-item">
                        <h4 class="page-title">Daftar Pengguna</h4>
                    </li>
                    <li class="breadcrumb-item bcrumb-1">
                        <a href="{{route('admin.dashboard')}}">
                            <i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="breadcrumb-item bcrumb-2">
                        <a href="#" onClick="return false;">Daftar Pengguna</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #START# Table With State Save -->
    @if (session()->has('deleted') OR session()->has('dropped'))
    <div class="alert bg-green alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        {{__(session()->get('deleted'))}}
        {{__(session()->get('dropped'))}}
        @endif
    </div>
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
                                    <a id="people-users" href="#" onClick="return false;">Users</a>
                                </li>
                                <li>
                                    <a id="people-mitra" href="#" onClick="return false;">Mitra</a>
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
                                    @foreach ($pengguna as $people)
                                    <tr>
                                        <td>{{__($people->nama_lengkap)}}</td>
                                        <td>{{__($people->email)}}</td>
                                        <td>{{__($people->alamat)}}</td>
                                        <td>{{__($people->status)}}</td>
                                        <td>{{__('+62'.$people->nomer_hp)}}</td>
                                        <td class="text-center">
                                            @if ($people->status == 'mitra')
                                            <button class="btn tblActnBtn" title="Ubah menjadi mitra"
                                                data-toggle="modal" data-target={{__("#user".$people->id)}}>
                                                <i class="material-icons">mode_edit</i>
                                            </button>
                                            @endif
                                            <button class="btn tblActnBtn" data-toggle="modal"
                                                data-target={{__("#modal".$people->id)}} title="Delete akun">
                                                <i class="material-icons">delete</i>
                                            </button>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id={{__('modal'.$people->id)}} tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalCenterTitle">Hapus Akun
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body text-center">
                                                    <i class="fas fa-exclamation-circle text-warning mb-2"
                                                        style="font-size: 100px"></i>
                                                    <p>{{__("Semua data akun ".$people->nama_lengkap." akan dihapus!")}}
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="{{route('admin.delete-pengguna',$people->id)}}">
                                                        <button type="button" class="btn btn-info ">Konfirmasi</button>
                                                    </a>
                                                    <button type="button" class="btn btn-danger waves-effect"
                                                        data-dismiss="modal">Batal</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id={{__('user'.$people->id)}} tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalCenterTitle">Hapus Sebagai
                                                        Mitra
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body text-center">
                                                    <i class="fas fa-exclamation-circle text-warning mb-2"
                                                        style="font-size: 100px"></i>
                                                    <p>{{__("Anda akan menghapus ".$people->nama_lengkap." sebagai mitra!")}}
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="{{route('admin.drop-mitra',$people->id)}}">
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
                                    @foreach ($pengguna as $people)
                                    @if ($people->status == 'proses' OR $people->status == 'user')
                                    <tr>
                                        <td>{{__($people->nama_lengkap)}}</td>
                                        <td>{{__($people->email)}}</td>
                                        <td>{{__($people->alamat)}}</td>
                                        <td>{{__($people->status)}}</td>
                                        <td>{{__('+62'.$people->nomer_hp)}}</td>
                                        <td class="text-center">
                                            <button class="btn tblActnBtn" title="Delete akun">
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
                                    @foreach ($pengguna as $people)
                                    @if ($people->status == 'mitra')
                                    <tr>
                                        <td>{{__($people->nama_lengkap)}}</td>
                                        <td>{{__($people->email)}}</td>
                                        <td>{{__($people->alamat)}}</td>
                                        <td>{{__($people->status)}}</td>
                                        <td>{{__('+62'.$people->nomer_hp)}}</td>
                                        <td class="text-center">
                                            @if ($people->status == 'mitra')
                                            <button class="btn tblActnBtn" title="Ubah menjadi mitra">
                                                <i class="material-icons">mode_edit</i>
                                            </button>
                                            @endif
                                            <button class="btn tblActnBtn" title="Delete akun">
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
