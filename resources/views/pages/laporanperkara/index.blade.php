@extends('layouts.admin')

@section('breadcump-content')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">Menu Master Perkara</h4>
        </div>
        <div class="col-7 align-self-center">
            <div class="d-flex align-items-center justify-content-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Perkara</li>
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
                <h4 class="card-title">Data Master Laporan </h4>

                <div class="table-responsive">
                    <table id="complex_head_col" class="table table-striped table-bordered display responsive"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th rowspan="2">No Pelimpahan</th>
                                <th colspan="5" class="text-center">Detail Informasi</th>
                                <th colspan="1">Tanggal Putusan</th>
                                <th rowspan="1">Aksi</th>
                            </tr>
                            <tr>
                                <th>Tanggal Pendaftaran</th>
                                <th>Jenis Tindak Pidana</th>
                                <th>Status</th>
                                <th>Jaksa Penanggung Jawab</th>
                                <th>Hakim Putusan</th>
                                <th>Tanggal Putusan</th>
                                <td>Aksi</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($perkaras as $index => $perkara)
                            <tr>
                                <td>{{$perkara->nomor_perkara}}</td>
                                <td>{{$perkara->tanggal_pendaftaran}}</td>
                                <td>{{$perkara->kategoritindakpidana->no_kategori_pidana}}</td>
                                <td>{{$perkara->status_perkara}}</td>
                                <td>{{$perkara->jaksa->nama_jaksa}}</td>
                                <td>{{$perkara->hakim->nama_hakim}}</td>
                                <td>{{$perkara->tanggal_putusan}}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('dashboard.laporan-details', $perkara->id) }}"
                                            class="btn btn-sm btn-primary">Show / Detail</a>
                                    </div>
                                </td>
                                <td>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection