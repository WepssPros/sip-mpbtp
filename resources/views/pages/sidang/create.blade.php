@extends('layouts.admin')

@section('breadcump-content')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">Menu Pembuatan Data Sidang Baru</h4>
        </div>
        <div class="col-7 align-self-center">
            <div class="d-flex align-items-center justify-content-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Sidang</li>
                        <li class="breadcrumb-item active" aria-current="page">Buat Sidang Baru</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection

@section('admin-content')
<div class="row">
    <div class="col-sm-12 col-lg-12">
        <div class="card">
            <form method="POST" action="{{ route('dashboard.sidang.store') }}">
                @csrf

                <div class="card-body">
                    <h4 class="card-title">Buat Data Sidang</h4>
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        <span class="badge badge-info"><i class="fas fa-info"></i></span>
                        <strong>Perhatikan Setiap Form Input Yang Telah Disesuaikan dan Terisi Semua.</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>

                <hr>

                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <label for="perkara_id" class="control-label col-form-label">Pilih Nomor Pelimpah</label>
                            <div class="input-group">
                                <select class="select2 form-control custom-select" style="width: 100%; height:36px;"
                                    name="perkara_id" aria-label="Username" aria-describedby="basic-addon1"
                                    aria-describedby="basic-addon1">
                                    <option>Pilih Nomor Pelimpah</option>
                                    @foreach ($perkaras as $perkara)
                                    <option value="{{$perkara->id}}">{{$perkara->nomor_perkara}}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="tgl_sidang" class="control-label col-form-label">Tanggal Sidang</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon2"><i
                                            class="far fa-calendar-alt"></i></span>
                                </div>
                                <input type="date" id="tgl_sidang" name="tgl_sidang" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="waktu_mulai" class="control-label col-form-label">Waktu Mulai</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3"><i class="far fa-clock"></i></span>
                                </div>
                                <input type="time" id="waktu_mulai" name="waktu_mulai" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="waktu_selesai" class="control-label col-form-label">Waktu Selesai</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon4"><i class="far fa-clock"></i></span>
                                </div>
                                <input type="time" id="waktu_selesai" name="waktu_selesai" class="form-control"
                                    required>
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="ruang_sidang" class="control-label col-form-label">Ruang Sidang</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon5"><i
                                            class="fas fa-map-marker-alt"></i></span>
                                </div>
                                <select name="ruang_sidang" id="ruang_sidang" class="form-control" required>
                                    <option value="A1">A1</option>
                                    <option value="A2">A2</option>
                                    <option value="B1">B1</option>
                                    <option value="B2">B2</option>
                                    <option value="C1">C1</option>
                                </select>

                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="card-body">
                    <div class="action-form">
                        <div class="form-group m-b-0 text-left">
                            <button type="submit" class="btn btn-info waves-effect waves-light">Save</button>
                            <button type="button" class="btn btn-dark waves-effect waves-light">Cancel</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection