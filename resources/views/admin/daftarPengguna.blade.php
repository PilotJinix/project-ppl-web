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
                                        <td>
                                            <button class="btn tblActnBtn">
                                                <i class="material-icons">mode_edit</i>
                                            </button>
                                            <button class="btn tblActnBtn">
                                                <i class="material-icons">delete</i>
                                            </button>
                                        </td>
                                    </tr>
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
                                    @foreach ($pengguna as $people)
                                    @if ($people->status == 'mitra')
                                    <tr>
                                        <td>{{__($people->nama_lengkap)}}</td>
                                        <td>{{__($people->email)}}</td>
                                        <td>{{__($people->alamat)}}</td>
                                        <td>{{__($people->status)}}</td>
                                        <td>{{__('+62'.$people->nomer_hp)}}</td>
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
