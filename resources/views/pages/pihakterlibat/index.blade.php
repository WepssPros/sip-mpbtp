@extends('layouts.admin')

@section('breadcump-content')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">Menu Master Pihak Terlibat</h4>
        </div>
        <div class="col-7 align-self-center">
            <div class="d-flex align-items-center justify-content-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Pihak Terlibat</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection

@section('admin-content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Master Pihak Terlibat </h4>

                <div class="table-responsive">
                    <table id="complex_head_col" class="table table-striped table-bordered display responsive"
                        style="width:100%">
                        <thead>
                            <tr>

                                <th rowspan="2">No Pihak Terlibat</th>
                                <th colspan="5" class="text-center">Detail Informasi Pihak Terlibat</th>

                                <th colspan="0">Aksi</th>
                            </tr>
                            <tr>
                                <th>ID Perkara</th>
                                <th>Nama Pihak</th>
                                <th>Alamat</th>
                                <th>Tipe Pihak</th>
                                <th>Nomor Telpon</th>
                                <th>Aksi</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01/23/441BS5</td>
                                <td>001</td>
                                <td>PT ABC Makmur</td>
                                <td>Jl. Raya No. 789</td>
                                <td>Tergugat</td>
                                <td>081112223333</td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-primary">Edit</button>
                                        <button class="btn btn-sm btn-danger"
                                            style="margin-left: 5px; border-top-left-radius: 0; border-bottom-left-radius: 0;">Hapus</button>
                                    </div>
                                </td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection