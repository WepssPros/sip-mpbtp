@extends('layouts.admin')

@section('breadcump-content')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">Menu Master Sidang</h4>

            <div class="pt-2">
                <a class="btn btn-primary" href="{{route('dashboard.sidang.create')}}" role="button">Buat Data
                    Sidang Baru +</a>
            </div>
        </div>
        <div class="col-7 align-self-center">
            <div class="d-flex align-items-center justify-content-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Sidang</li>
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
                <h4 class="card-title">Data Master Sidang </h4>

                <div class="table-responsive">
                    <table id="complex_head_col" class="table table-striped table-bordered display responsive"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th rowspan="2">No Perkara</th>
                                <th colspan="5" class="text-center">Detail Informasi Sidang</th>

                                <th rowspan="0">Aksi</th>
                            </tr>
                            <tr>
                                <th>Tanggal Sidang</th>
                                <th>Waktu Mulai</th>
                                <th>Waktu Selesai</th>
                                <th>Ruang Sidang</th>

                                <td>Aksi</td>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01/23/441BS5</td>
                                <td>2023-01-05</td>
                                <td>09:00</td>
                                <td>12:00</td>
                                <td>A2</td>

                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-primary">Edit</button>
                                        <button class="btn btn-sm btn-danger"
                                            style="margin-left: 5px; border-top-left-radius: 0; border-bottom-left-radius: 0;">Hapus</button>
                                    </div>
                                </td>
                                <td>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection