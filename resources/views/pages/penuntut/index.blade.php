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
                            <a href="{{route('dashboard.index')}}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Tuntutan</li>
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

                <div class="table-responsive">
                    <table id="scroll_hor" class="table table-striped table-bordered display nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>No Register</th>
                                <th>Jaksa Penuntut</th>
                                <th>Nama Terdakwa</th>
                                <th>Umur Terdakwa</th>
                                <th>Tanggal Tuntutan</th>
                                <th>No Jaksa Penuntut</th>
                                <th>Alamat Jaksa Penuntut</th>
                                <th>Kasus Dugaan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($penuntuts as $index => $penuntut)
                            <tr>
                                <td>{{$index + 1}}</td>
                                <td>{{ $penuntut->no_tuntutan }}</td>
                                <td>{{ $penuntut->nama_penuntut }}</td>
                                <td>{{ $penuntut->nama_terdakwa }}</td>
                                <td>{{ $penuntut->umur_terdakwa }}</td>
                                <td>{{ $penuntut->tgl_tuntutan }}</td>
                                <td>{{ $penuntut->no_hp_penuntut }}</td>
                                <td>{{ $penuntut->alamat_penuntut }}</td>
                                <td>{{ $penuntut->kasus_dugaan }}</td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-primary">Edit</button>
                                        <form action="{{route('dashboard.penuntut.show', $penuntut->id)}}" method="get">
                                            @csrf
                                            <button class="btn btn-sm btn-info"
                                                style="margin-left: 5px; border-top-left-radius: 0; border-bottom-left-radius: 0;">Detail</button>
                                        </form>

                                        <button class="btn btn-sm btn-danger"
                                            style="margin-left: 5px; border-top-left-radius: 0; border-bottom-left-radius: 0;">Hapus</button>
                                    </div>
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