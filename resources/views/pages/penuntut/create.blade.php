@extends('layouts.admin')

@section('breadcump-content')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">Menu Pembuatan Data Penuntut Baru</h4>
        </div>
        <div class="col-7 align-self-center">
            <div class="d-flex align-items-center justify-content-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Penuntut</li>
                        <li class="breadcrumb-item active" aria-current="page">Buat Penuntut Baru</li>
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
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{route('dashboard.penuntut.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="card-body">
                    <h4 class="card-title">Buat Data Penuntut</h4>
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
                            <label for="inputEmail3" class="control-label col-form-label">Nomor Register</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i
                                            class="fas fa-address-card"></i></span>
                                </div>
                                <input type="text" id="no_tuntutan" name="no_tuntutan" class="form-control"
                                    placeholder="Masukan Nomor Register" maxlength="30" required>

                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="inputEmail3" class="control-label col-form-label">Jaksa Penuntut
                                </label>
                                <div class="input-group">
                                    <select class="select2 form-control custom-select" style="width: 100%; height:36px;"
                                        name="nama_penuntut" aria-label="Username" aria-describedby="basic-addon1"
                                        aria-describedby="basic-addon1">

                                        <option>Cari Jaksa Penuntut</option>
                                        <optgroup label="Nomor Tuntuan Terdata">
                                            @foreach ($jaksas as $jaksa)
                                            <option value="{{$jaksa->nama}}">
                                                {{$jaksa->nama_jaksa}}
                                            </option>
                                            @endforeach


                                        </optgroup>

                                    </select>

                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="inputEmail3" class="control-label col-form-label">Nomor Telepon Jaksa
                                    Penuntut
                                </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon11"><i
                                                class="fas fa-calendar-alt"></i></span>
                                    </div>
                                    <input type="number" class="form-control" placeholder="Nomor Telepon Jaksa Penuntut"
                                        name="no_hp_penuntut" " aria-label=" Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="inputEmail3" class="control-label col-form-label">Nama
                                    Terdakwa</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon11"><i
                                                class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Nama Terdakwa "
                                        name="nama_terdakwa" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="inputEmail3" class="control-label col-form-label">Umur
                                    Terdakwa</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon11"><i
                                                class="fas fa-calendar-alt"></i></span>
                                    </div>
                                    <input type="number" class="form-control" placeholder="Umur Terdakwa "
                                        name="umur_terdakwa" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="inputEmail3" class="control-label col-form-label">Tanggal
                                    Tuntutan</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon11"><i
                                                class="fas fa-calendar-alt"></i></span>
                                    </div>
                                    <input type="date" class="form-control" placeholder="Tanggal Tuntutan "
                                        name="tgl_tuntutan" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="inputEmail3" class="control-label col-form-label">Alamat Jaksa Penuntut
                                </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon11"><i
                                                class="fas fa-calendar-alt"></i></span>
                                    </div>
                                    <textarea class="form-control" name="alamat_penuntut" id="alamat_penuntut" cols="30"
                                        rows="10" aria-label=" Username" aria-describedby="basic-addon1"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="inputEmail3" class="control-label col-form-label">Kasus Dugaan
                                </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon11"><i
                                                class="fas fa-calendar-alt"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Kasus Dugaan "
                                        name="kasus_dugaan" " aria-label=" Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="inputEmail3" class="control-label col-form-label">Upload Bukti Tuntutan
                                </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon11"><i
                                                class="fas fa-calendar-alt"></i></span>
                                    </div>
                                    <input type="file" class="form-control" placeholder="Bukti Foto 1 "
                                        name="bukti_foto1" " aria-label=" Username" aria-describedby="basic-addon1">
                                    <input type="file" class="form-control" placeholder="Bukti Foto 2 "
                                        name="bukti_foto2" " aria-label=" Username" aria-describedby="basic-addon1">
                                    <input type="file" class="form-control" placeholder="Bukti Foto 3 "
                                        name="bukti_foto3" " aria-label=" Username" aria-describedby="basic-addon1">
                                    <input type="file" class="form-control" placeholder="Bukti Foto 4 "
                                        name="bukti_foto4" " aria-label=" Username" aria-describedby="basic-addon1">
                                    <input type="file" class="form-control" placeholder="Bukti Foto 5 "
                                        name="bukti_foto5" " aria-label=" Username" aria-describedby="basic-addon1">
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