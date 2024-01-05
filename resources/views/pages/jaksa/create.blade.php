@extends('layouts.admin')

@section('breadcump-content')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">Menu Pembuatan Data Jaksa Baru</h4>
        </div>
        <div class="col-7 align-self-center">
            <div class="d-flex align-items-center justify-content-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Jaksa</li>
                        <li class="breadcrumb-item active" aria-current="page">Buat Jaksa Baru</li>
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
            <form method="POST" action="{{ route('dashboard.jaksa.store') }}">
                @csrf
                <!-- Digunakan untuk proteksi form CSRF di Laravel -->

                <div class="card-body">
                    <h4 class="card-title">Buat Data Perkara</h4>
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
                            <label for="nama_jaksa" class="control-label col-form-label">Nama Jaksa</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i
                                            class="fas fa-address-card"></i></span>
                                </div>
                                <input type="text" id="nama_jaksa" name="nama_jaksa" class="form-control"
                                    placeholder="Nama jaksa" required>
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="nomor_telepon" class="control-label col-form-label">Nomor Telepon</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon2"><i class="fas fa-phone"></i></span>
                                </div>
                                <input type="text" id="nomor_telepon" name="nomor_telepon" class="form-control"
                                    placeholder="Nomor Telepon Jaksa" required>
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="alamat_jaksa" class="control-label col-form-label">Alamat Jaksa</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3"><i
                                            class="fas fa-map-marker"></i></span>
                                </div>
                                <input type="text" id="alamat_jaksa" name="alamat_jaksa" class="form-control"
                                    placeholder="Alamat Jaksa" required>
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="email_jaksa" class="control-label col-form-label">Email Jaksa</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon4"><i
                                            class="fas fa-envelope"></i></span>
                                </div>
                                <input type="email" id="email_jaksa" name="email_jaksa" class="form-control"
                                    placeholder="Email Jaksa " required>
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