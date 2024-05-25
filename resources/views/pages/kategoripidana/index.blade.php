@extends('layouts.admin')

@section('breadcump-content')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">Menu Master Kategori Pidana</h4>
        </div>
        <div class="col-7 align-self-center">
            <div class="d-flex align-items-center justify-content-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Kategori Pidana</li>
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
                <h4 class="card-title">Data Master Kategori Pidana </h4>
                <div class="pt-2">
                    <a class="btn btn-primary" href="{{route('dashboard.kategoripidana.create')}}" role="button">Buat
                        Data
                        Kategori Tindak Pidana +</a>
                </div>
                <div class="table-responsive">
                    <table id="complex_head_col" class="table table-striped table-bordered display responsive"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th rowspan="2">No Kategori Pidana</th>
                                <th colspan="2" class="text-center">Detail Informasi</th>
                                <th colspan="1">Aksi</th>
                            </tr>
                            <tr>
                                <th>Nama Kategori</th>
                                <th>Aksi</th>
                                <th></th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kategoris as $index=> $item)
                            <tr>

                                <td>{{$item->no_kategori_pidana}}</td>
                                <td>{{$item->nama_kategori}}</td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-primary">Edit</button>
                                        <button class="btn btn-sm btn-danger"
                                            style="margin-left: 5px; border-top-left-radius: 0; border-bottom-left-radius: 0;">Hapus</button>
                                    </div>
                                </td>
                                <td></td>
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