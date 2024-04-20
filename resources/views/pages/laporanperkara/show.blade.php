@extends('layouts.admin')

@section('breadcump-content')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">Detail Laporan Perkara </h4>
        </div>
        <div class="col-7 align-self-center">
            <div class="d-flex align-items-center justify-content-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Laporan Detail Perkara</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection

@section('admin-content')
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Detail Perkara List </h4>
            <div class="table-responsive">
                <div>
                    <h1>Laporan Detail Perkara</h1>
                    <table id="" class="table table-striped table-bordered display responsive" style="width:100%">
                        <thead>
                            <tr>
                                <th rowspan="2">No Perkara</th>
                                <th colspan="5" class="text-center">Detail Informasi</th>
                                <th colspan="1">Tanggal Putusan</th>

                            </tr>
                            <tr>
                                <th>Tanggal Pendaftaran</th>
                                <th>Jenis Tindak Pidana</th>
                                <th>Status</th>
                                <th>Jaksa Penanggung Jawab</th>
                                <th>Hakim Putusan</th>
                                <th>Tanggal Putusan</th>


                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$perkara->nomor_perkara}}</td>
                                <td>{{$perkara->tanggal_pendaftaran}}</td>
                                <td>{{$perkara->kategoritindakpidana->no_kategori_pidana}}</td>
                                <td>{{$perkara->status_perkara}}</td>
                                <td>{{$perkara->jaksa->nama_jaksa}}</td>
                                <td>{{$perkara->hakim->nama_hakim}}</td>
                                <td>{{$perkara->tanggal_putusan}}</td>


                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Arsip </h4>

            <div class="table-responsive">
                <table id="" class="table table-striped table-bordered display responsive" style="width:100%">
                    <thead>
                        <tr>
                            <th rowspan="2">No Arsip / No Perkara</th>
                            <th colspan="5" class="text-center">Detail Informasi Arsip</th>
                            <th colspan="1">Tanggal Upload Arsip</th>

                        </tr>
                        <tr>
                            <th>File 1</th>
                            <th>File 2</th>
                            <th>File 3</th>
                            <th>File 4</th>
                            <th>File 5</th>
                            <th>Tanggal Upload</th>


                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($arsips as $index => $arsip)
                        <tr>
                            <td>{{$arsip->perkara->nomor_perkara}}</td>
                            <!-- Ganti dengan atribut yang sesuai untuk nomor perkara -->
                            @for ($i = 1; $i <= 5; $i++) <td>
                                @if (!empty($arsip["file_$i"]))
                                <div class="download-links">
                                    <div>
                                        <i class="mdi mdi-cloud-download"></i>
                                        <a href="{{ asset('storage/' . $arsip["file_$i"]) }}" class="hide-menu">Download
                                            Arsip</a>
                                    </div>
                                    <div>
                                        <i class="mdi mdi-file-check"></i>
                                        <span href="#"
                                            class="hide-menu">{{ pathinfo($arsip["file_$i"], PATHINFO_EXTENSION) }}</span>
                                    </div>
                                    <div>
                                        <i class="mdi mdi-file-chart"></i>
                                        <span href="#" class="hide-menu">{{ round($arsip["size_$i"] / 1024) }}
                                            Kb</span>
                                    </div>
                                </div>
                                @endif
                                </td>
                                @endfor
                                <td>{{ $arsip->tgl_arsip }}</td> <!-- Sesuaikan dengan atribut tanggal arsip -->

                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Pihak Terlibat </h4>

            <div class="table-responsive">
                <table id="" class="table table-striped table-bordered display responsive" style="width:100%">
                    <thead>
                        <tr>

                            <th rowspan="2">No Perkara</th>
                            <th colspan="5" class="text-center">Detail Informasi Pihak Terlibat</th>

                            <th colspan="0">Dokumen Tertaut</th>
                        </tr>
                        <tr>
                            <th>No Pihak Terlibat</th>
                            <th>Nama Pihak</th>
                            <th>Alamat</th>
                            <th>Tipe Pihak</th>
                            <th>Nomor Telpon</th>
                            <th>Dokumen Tertaut</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pihaksterlibats as $pt)
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
                                        <a href="{{ asset('storage/' . $pt["file_$i"]) }}" class="hide-menu">Download
                                            Dokumen</a>
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

                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Tuntutan Terkait </h4>
            <div class="">
                <table id="" class="table table-striped table-bordered display nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>No Tuntutan</th>

                            <th>Tanggal Tuntutan</th>
                            <th>No Telepon Penuntut</th>
                            <th>Alamat Penuntut</th>
                            <th>Kasus Dugaan</th>
                            <th>Detail Tuntutan</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($penuntuts as $index => $penuntut)
                        <tr>
                            <td>{{$index + 1}}</td>
                            <td>{{ $penuntut->no_tuntutan }}</td>

                            <td>{{ $penuntut->tgl_tuntutan }}</td>
                            <td>{{ $penuntut->no_hp_penuntut }}</td>
                            <td>{{ $penuntut->alamat_penuntut }}</td>
                            <td>{{ $penuntut->kasus_dugaan }}</td>
                            <td><a href="{{route('dashboard.penuntut.show', $penuntut->id)}}"
                                    class="btn btn-sm btn-primary">Detail Tuntutan</a>
                            </td>
                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Catatan Perkara Terkait</h4>

            <div class="table-responsive">
                <table id="" class="table table-striped table-bordered display responsive" style="width:100%">
                    <thead>
                        <tr>
                            <th rowspan="2">No Catatan Perkara</th>
                            <th colspan="4" class="text-center">Detail Informasi</th>


                        </tr>
                        <tr>
                            <th>Jaksa Pembuat</th>
                            <th>Tanggal Catatan</th>
                            <th>Isi Catatan</th>
                            <th>Dokumen</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($catatanperkara as $cp)
                        <tr>
                            <td>{{$cp->perkara->nomor_perkara}}</td>
                            <td>{{$cp->jaksa->nama_jaksa}}</td>
                            <td>{{$cp->tgl_catatan}}</td>
                            <td>{{$cp->isicatatan}}</td>
                            <td>
                                <div class="download-links">
                                    @for ($i = 1; $i <= 5; $i++) @if (!empty($cp["file_$i"])) <div>
                                        <i class="mdi mdi-cloud-download"></i>
                                        <a href="{{ asset('storage/' . $cp["file_$i"]) }}" class="hide-menu">Download
                                            Dokumen</a>
                                </div>
                                <div>
                                    <i class="mdi mdi-file-check"></i>
                                    <span href="#"
                                        class="hide-menu">{{ pathinfo($cp["file_$i"], PATHINFO_EXTENSION) }}</span>
                                </div>
                                <div>
                                    <i class="mdi mdi-file-chart"></i>
                                    <span href="#" class="hide-menu">{{ round($cp["size_$i"] / 1024) }} Kb</span>
                                </div>
                                @endif
                                @endfor

                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Riwayat Sidang </h4>

            <div class="table-responsive">
                <table id="" class="table table-striped table-bordered display responsive" style="width:100%">
                    <thead>
                        <tr>
                            <th rowspan="2">No Perkara</th>
                            <th colspan="5" class="text-center">Detail Informasi Sidang</th>

                        </tr>
                        <tr>
                            <th>Tanggal Sidang</th>
                            <th>Waktu Mulai</th>
                            <th>Waktu Selesai</th>
                            <th>Ruang Sidang</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01/23/441BS5</td>
                            <td>2023-01-05</td>
                            <td>09:00</td>
                            <td>12:00</td>
                            <td>A2</td>



                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>




@endsection