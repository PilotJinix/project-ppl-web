@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="block-header">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <ul class="breadcrumb breadcrumb-style ">
                    <li class="breadcrumb-item">
                        <h4 class="page-title">Pengajuan Mitra</h4>
                    </li>
                    <li class="breadcrumb-item bcrumb-1">
                        <a href="{{route('admin.dashboard')}}">
                            <i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="breadcrumb-item bcrumb-2">
                        <a href="#" onClick="return false;">Pengguna</a>
                    </li>
                    <li class="breadcrumb-item bcrumb-2">
                        <a href="#" onClick="return false;">Pengajuan Mitra</a>
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
                                    @foreach ($proses as $people)
                                    <tr>
                                        <td>{{__($people->nama_lengkap)}}</td>
                                        <td>{{__($people->email)}}</td>
                                        <td>{{__($people->alamat)}}</td>
                                        <td>{{__($people->status)}}</td>
                                        <td>{{__('+62'.$people->nomer_hp)}}</td>
                                        <td class="text-center">
                                            <button class="btn tblActnBtn" data-toggle="modal"
                                                data-target="{{__(("#modal".$people->id))}}"
                                                title="lihat detail pengajuan">
                                                <i class="material-icons">remove_red_eye</i>
                                            </button>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id={{__('modal'.$people->id)}} tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3>Detail Pengajuan Mitra</h3>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body d-flex justify-content-between">
                                                    <div class="text-left">
                                                        <strong class="text-dark">Nama :</strong>
                                                        <p>{!!$people->nama_lengkap!!}</p>
                                                        <strong class="text-dark">Email :</strong>
                                                        <p>{!!$people->email!!}</p>
                                                        <strong class="text-dark">Alamat :</strong>
                                                        <p>{!!$people->alamat!!}</p>
                                                        <strong class="text-dark">No. HP :</strong>
                                                        <p>{!!"+62".$people->nomer_hp!!}</p>
                                                    </div>
                                                    <div class="text-right">
                                                        <strong class="text-dark">Nomor Rekening :</strong>
                                                        <p>{!!$people->no_rekening!!}</p>
                                                        <strong class="text-dark">NIK :</strong>
                                                        <p>{!!$people->nik!!}</p>
                                                        <strong class="text-dark">KTP :</strong>
                                                        <br>
                                                        <a href="{{asset('assets/images/ktp/'.$people->ktp)}}"
                                                            target="blank">
                                                            <button class="btn btn-info">Lihat KTP</button>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <hr>
                                                    <a href="{{route('admin.terima-mitra', $people->user_id)}}">
                                                        <button type="button" class="btn btn-info ">Terima</button>
                                                    </a>
                                                    <a href="{{route('admin.tolak-mitra',$people->user_id)}}">
                                                        <button type="button"
                                                            class="btn btn-danger waves-effect">Tolak</button>
                                                    </a>
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
