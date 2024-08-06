@extends('layouts.admin')

@section('breadcump-content')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">Menu Pembuatan Data Pihak Terlibat Baru</h4>
        </div>
        <div class="col-7 align-self-center">
            <div class="d-flex align-items-center justify-content-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Pihak Terlibat</li>
                        <li class="breadcrumb-item active" aria-current="page">Buat Pihak Terlibat Baru</li>
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
            <form action="{{route('dashboard.pihakterlibat.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <h4 class="card-title">Buat Data Pihak Terlibat</h4>
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        <span class="badge badge-info"><i class="fas fa-info"></i></span>
                        <strong> Perhatikan Setiap Form Input Yang Telah Disesuaikan dan Terisi Semua.</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                </div>
                <hr>
                <div class="card-body">
                    <div class="row">


                        <div class="col-12">
                            <div class="form-group">
                                <label for="inputEmail3" class="control-label col-form-label">Cari No Pelimpahan
                                </label>
                                <div class="input-group">
                                    <select class="select2 form-control custom-select" style="width: 100%; height:36px;"
                                        name="perkara_id" aria-label="Username" aria-describedby="basic-addon1"
                                        aria-describedby="basic-addon1">
                                        <option>Cari No Pelimpahan</option>
                                        <optgroup label="Nomor Tuntuan Terdata">
                                            @foreach ($perkaras as $perkara)
                                            <option value="{{$perkara->id}}">
                                                {{$perkara->nomor_perkara}}
                                            </option>
                                            @endforeach


                                        </optgroup>

                                    </select>

                                </div>
                            </div>
                        </div>


                        <div class="col-12">
                            <label for="inputEmail3" class="control-label col-form-label">Nomor Pihak Terlibat</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i
                                            class="fas fa-address-card"></i></span>
                                </div>
                                <input type="text" id="no_perkara" name="no_pihak_t" class="form-control"
                                    placeholder="Nomor Pihak Terlibat" maxlength="35" required>

                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="inputEmail3" class="control-label col-form-label">Nama Pihak
                                </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon11"><i
                                                class="fas fa-calendar-alt"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Nama Pihak Terlibat "
                                        name="nama_pihak" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="inputEmail3" class="control-label col-form-label">Nama Pihak
                                </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon11"><i
                                                class="fas fa-calendar-alt"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Alamat Pihak Terlibat "
                                        name="alamat" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="inputEmail3" class="control-label col-form-label">Tipe Pihak
                                </label>
                                <div class="input-group">
                                    <select class="select2 form-control custom-select" style="width: 100%; height:36px;"
                                        name="tipe_pihak" aria-label="Username" aria-describedby="basic-addon1"
                                        aria-describedby="basic-addon1">
                                        <option>Tipe Pihak</option>
                                        <optgroup label="Tipe Pihak Terlibats">

                                            <option value="SAKSI">
                                                SAKSI
                                            </option>
                                            <option value="TERDUGA">
                                                TERDUGA
                                            </option>
                                            <option value="PENUNTUT">
                                                PENUNTUT
                                            </option>
                                            <option value="KORBAN">
                                                KORBAN
                                            </option>
                                            <option value="SAKSI AHLI">
                                                SAKSI AHLI
                                            </option>

                                        </optgroup>

                                    </select>

                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="inputEmail3" class="control-label col-form-label">Nomor Telepon Pihak
                                    Terlibat
                                </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon11"><i
                                                class="fas fa-calendar-alt"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Nomor Telepon Pihak  "
                                        name="no_hp_pihak_terlibat" aria-label="Username"
                                        aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="inputEmail3" class="control-label col-form-label">Dokumen Pihak Terlibat
                                </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon11"><i
                                                class="fas fa-calendar-alt"></i></span>
                                    </div>
                                    <input type="file" class="form-control" placeholder="Masukan File Dokumen Catatan  "
                                        name="file_1" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <hr>
                <div class="card-body">
                    <div class="action-form">
                        <div class="form-group m-b-0 text-left">
                            <button type="submit" class="btn btn-info waves-effect waves-light">Save</button>
                            <button type="submit" class="btn btn-dark waves-effect waves-light">Cancel</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection