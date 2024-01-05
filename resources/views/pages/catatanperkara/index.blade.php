@extends('layouts.admin')

@section('breadcump-content')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">Menu Master Catatan Perkara</h4>
        </div>
        <div class="col-7 align-self-center">
            <div class="d-flex align-items-center justify-content-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Catatan Perkara</li>
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
                <h4 class="card-title">Data Master Catatan Perkara </h4>

                <div class="table-responsive">
                    <table id="complex_head_col" class="table table-striped table-bordered display responsive"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th rowspan="2">No Catatan Perkara</th>
                                <th colspan="3" class="text-center">Detail Informasi</th>
                                <th colspan="1">Isi Catatan</th>
                                <th colspan="1">Aksi</th>
                            </tr>
                            <tr>
                                <th>ID Perkara</th>
                                <th>Jaksa Pembuat</th>
                                <th>Tanggal Catatan</th>
                                <th>Isi Catatan</th>
                                <th>Aksi</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01/23/441BS5</td>
                                <td>001</td>
                                <td>jaksa1</td>
                                <td>2023-01-10</td>
                                <td>Menetapkan jadwal sidang untuk perkara korupsi.</td>
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