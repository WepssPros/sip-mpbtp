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

                                <th rowspan="2">No Perkara</th>
                                <th colspan="5" class="text-center">Detail Informasi Pihak Terlibat</th>

                                <th colspan="0">Aksi</th>
                            </tr>
                            <tr>
                                <th>No Pihak Terlibat</th>
                                <th>Nama Pihak</th>
                                <th>Alamat</th>
                                <th>Tipe Pihak</th>
                                <th>Nomor Telpon</th>
                                <th>Aksi</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pts as $pt)
                            <tr>
                                <td>{{$pt->perkara->nomor_perkara}}</td>
                                <td>{{$pt->no_pihak_t}}</td>
                                <td>{{$pt->nama_pihak}}</td>
                                <td>{{$pt->alamat}}</td>
                                <td>{{$pt->tipe_pihak}}</td>
                                <td>{{$pt->no_hp_pihak_terlibat}}</td>
                                <td>
                                    <div class="download-links">
                                        @for ($i = 1; $i <= 5; $i++) @if (!empty($pt["file_$i"])) <div>
                                            <i class="mdi mdi-cloud-download"></i>
                                            <a href="{{ asset('storage/' . $pt["file_$i"]) }}"
                                                class="hide-menu">Download Dokumen</a>
                                    </div>
                                    <div>
                                        <i class="mdi mdi-file-check"></i>
                                        <span href="#"
                                            class="hide-menu">{{ pathinfo($pt["file_$i"], PATHINFO_EXTENSION) }}</span>
                                    </div>
                                    <div>
                                        <i class="mdi mdi-file-chart"></i>
                                        <span href="#" class="hide-menu">{{ round($pt["size_$i"] / 1024) }} Kb</span>
                                    </div>
                                    @endif
                                    @endfor
                                    <div class="btn-group">
                                        <a href="{{ route('dashboard.pihakterlibat.edit', $pt->id) }}"
                                            class="btn btn-sm btn-primary">Edit</a>
                                        <form action="{{ route('dashboard.pihakterlibat.destroy', $pt->id) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger"
                                                style="margin-left: 5px; border-top-left-radius: 0; border-bottom-left-radius: 0;">Hapus
                                            </button>
                                        </form>
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