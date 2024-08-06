@extends('layouts.admin')

@section('breadcump-content')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">Menu Pembuatan Data Perkara Baru</h4>
        </div>
        <div class="col-7 align-self-center">
            <div class="d-flex align-items-center justify-content-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Perkara</li>
                        <li class="breadcrumb-item active" aria-current="page">Buat Perkara Baru</li>
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
            <form action="{{route('dashboard.perkara.store')}}" method="POST">
                @csrf
                <div class="card-body">
                    <h4 class="card-title">Buat Data Perkara</h4>
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
                            <label for="inputEmail3" class="control-label col-form-label">Nomor Pelimpah</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i
                                            class="fas fa-address-card"></i></span>
                                </div>
                                <input type="text" id="no_perkara" name="nomor_perkara" class="form-control"
                                    placeholder="Masukan Nomor Pelimpah" maxlength="35" required>

                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="inputEmail3" class="control-label col-form-label">Tanggal
                                    Pelimpahan</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon11"><i
                                                class="fas fa-calendar-alt"></i></span>
                                    </div>
                                    <input type="date" class="form-control" placeholder="Tanggal Pelimpahan "
                                        name="tanggal_pendaftaran" aria-label="Username"
                                        aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="inputEmail3" class="control-label col-form-label">Cari No Register
                                </label>
                                <div class="input-group">
                                    <select class="select2 form-control custom-select" style="width: 100%; height:36px;"
                                        name="penuntut_id" aria-label="Username" aria-describedby="basic-addon1"
                                        aria-describedby="basic-addon1">
                                        <option>Cari No Register</option>
                                        <optgroup label="Nomor Register Terdata">
                                            @foreach ($penuntuts as $penuntut)
                                            <option value="{{$penuntut->id}}">
                                                {{$penuntut->no_tuntutan}}
                                            </option>
                                            @endforeach


                                        </optgroup>

                                    </select>

                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="inputEmail3" class="control-label col-form-label">Jenis Tindak
                                    Pidana</label>
                                <div class="input-group">
                                    <select class="select2 form-control custom-select" style="width: 100%; height:36px;"
                                        name="jenis_tindak_pidana_id" aria-label="Username"
                                        aria-describedby="basic-addon1" aria-describedby="basic-addon1">
                                        <option>Cari Jenis Tindak Pidana</option>
                                        <optgroup label="Jenis Tindak Pidana">
                                            @foreach ($kategoris as $kategori)
                                            <option value="{{$kategori->id}}">
                                                {{$kategori->no_kategori_pidana}},{{$kategori->nama_kategori}}
                                            </option>
                                            @endforeach


                                        </optgroup>

                                    </select>

                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="inputEmail3" class="control-label col-form-label">Status Perkara</label>
                            <div class="input-group">

                                <select class="select2 form-control custom-select" style="width: 100%; height:36px;"
                                    name="status_perkara" aria-label="Username" aria-describedby="basic-addon1"
                                    aria-describedby="basic-addon1">
                                    <option>Pilih Status Perkara</option>
                                    <option value="Open">Open</option>
                                    <option value="Close">Close</option>

                                </select>

                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 pt-2">
                            <div class="form-group">
                                <label for="inputEmail3" class="control-label col-form-label">Pilih Jaksa
                                    Penuntut Umum</label>
                                <div class="input-group">

                                    <select class="select2 form-control custom-select" style="width: 100%; height:36px;"
                                        name="jaksa_id" aria-label="Username" aria-describedby="basic-addon1"
                                        aria-describedby="basic-addon1">
                                        <option>Pilih Jaksa</option>

                                        @foreach ($jaksas as $jaksa)
                                        <option value="{{$jaksa->id}}">{{$jaksa->nama_jaksa}}</option>
                                        @endforeach


                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 pt-2">
                            <div class="form-group">
                                <label for="inputEmail3" class="control-label col-form-label">Pilih Hakim
                                    Terdata</label>
                                <div class="input-group">

                                    <select class="select2 form-control custom-select" style="width: 100%; height:36px;"
                                        name="hakim_id" aria-label="Username" aria-describedby="basic-addon1"
                                        aria-describedby="basic-addon1">
                                        <option>Pilih Hakim</option>
                                        @foreach ($hakims as $hakim)
                                        <option value="{{$hakim->id}}">{{$hakim->nama_hakim}}</option>

                                        @endforeach


                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="inputEmail3" class="control-label col-form-label">Nama Terdakwa
                                </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon11"><i
                                                class="fas fa-calendar-alt"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Nama Terdakwa / Tersangka "
                                        name="nama_terdakwa" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="inputEmail3" class="control-label col-form-label">Alamat Terdakwa
                                </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon11"><i
                                                class="fas fa-calendar-alt"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Alamat Terdakwa "
                                        name="alamat_terdakwa" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="inputEmail3" class="control-label col-form-label">Tanggal Tuntutan
                                </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon11"><i
                                                class="fas fa-calendar-alt"></i></span>
                                    </div>
                                    <input type="date" class="form-control" placeholder="Tanggal Tuntutan "
                                        name="tanggal_putusan" aria-label="Username" aria-describedby="basic-addon1">
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