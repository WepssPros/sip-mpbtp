@extends('layouts.admin')

@section('breadcump-content')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">Detail Laporan Perkara <button id="print" class="btn btn-default btn-outline"
                    type="button">
                    <span><i class="fa fa-print"></i> Print </span>
                </button></h4>
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
                        @foreach ($listsidang as $sidang)
                        <tr>
                            <td>{{$sidang->perkara->nomor_perkara}}5</td>
                            <td>{{$sidang->tgl_sidang}}</td>
                            <td>{{$sidang->waktu_mulai}}</td>
                            <td>{{$sidang->waktu_selesai}}</td>
                            <td>{{$sidang->ruang_sidang}}</td>



                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div class="card printableArea " hidden>
        <div class="card-body ">
            <style type="text/css">
                .rangkasurat {

                    width: 980px;
                    margin: 0 auto;
                    background-color: #fff;
                    height: 500px;
                    padding: 20px;

                    /* Menggeser ke kiri */
                }

                .table-standard {
                    width: 100%;
                    border-collapse: collapse;
                }

                /* Style untuk baris genap */
                .table-standard tr:nth-child(even) {
                    background-color: #f2f2f2;
                }

                /* Style untuk sel */
                .table-standard th,
                .table-standard td {
                    padding: 8px;
                    text-align: left;
                    border-bottom: 1px solid #ddd;
                }

                /* Style untuk header kolom */
                .table-standard th {
                    background-color: #4CAF50;
                    color: black;
                    /* Ubah warna teks menjadi hitam */
                    font-weight: bold;
                    /* Membuat teks menjadi tebal */
                }

                .table1 {
                    border-bottom: 5px solid #000;
                    padding: 2px;
                }

                .tengah {
                    text-align: center;
                    line-height: 5px;
                    padding-left: 0px;
                    /* Geser ke tengah */
                    padding-right: 100px;
                    /* Geser ke tengah */
                }

                .tengah1 {
                    text-align: center;
                    line-height: 5px;
                    padding-left: 20px;
                    /* Geser ke tengah */
                    padding-right: 20px;
                    /* Geser ke tengah */
                }

                .kiri {
                    text-align: left;
                    line-height: 5px;
                    padding-left: 100px;
                    /* Geser ke tengah */
                    padding-right: 20px;
                    padding-bottom: 20px;
                    /* Geser ke tengah */
                }

                .kanan {
                    text-align: left;
                    line-height: 5px;
                    padding-right: 100px;
                    /* Geser ke tengah */
                    padding-left: 150px;
                    padding-bottom: 35px;


                }

                .kanan1 {
                    text-align: left;
                    line-height: 5px;
                    padding-right: 10px;
                    /* Geser ke tengah */
                    padding-left: 350px;
                    padding-bottom: 35px;

                }

                .logo-container {
                    width: 140px;
                    float: right;
                    /* Geser ke kanan */
                    margin-right: 20px;
                    /* Jarak dari kanan */
                }

                .logo-container img {
                    width: 100%;
                }

                hr {
                    border: none;
                    border-top: 3px solid #000;
                    /* Garis tebal berwarna hitam */
                    height: 50%;
                    /* Tinggi garis */
                    width: 80%;
                    /* Lebar garis */
                    margin: 0 auto;
                    /* Pusatkan garis */
                }

            </style>
            <div class="rangkasurat">
                <table width="100%" class="table1">
                    <tr>
                        <td class="logo-container">
                            <img src="{{asset('../admin/assets/foto/logo-tag 1.png')}}">
                        </td>
                        <td class="tengah">
                            <h4>KEJAKSAAN REPUBLIK INDONESIA</h4>
                            <h4>KEJAKSAAN TINGGI JAMBI</h4>
                            <h1><B>KEJAKSAAN NEGERI SUNGAI PENUH</B></h1>
                            <h5>JL. Depati Prabo, Pondok Tinggi Kota Sungai Penuh 37111</h5>
                            <h5>Telp.(0748) 21328 fax. (0748) 22272 <u><a href="">www.kejari-sungaipenuh.go.id</a></u>
                            </h5>
                            <h1></h1>
                        </td>
                    </tr>
                </table>
                <div class="rangkasurat">
                    <table width="100%">
                        <tr>
                            <td class="tengah1">
                                <h2>LAPORAN DETAIL PERKARA</h2>
                                <hr style="height: 50%">
                            </td>

                        </tr>
                        <tr>
                            <td class="tengah1">
                                <h3>Nomor Perkara : {{$perkara->nomor_perkara}}</h3>
                            </td>
                        </tr>
                    </table>

                    <table>
                        <tr>
                            <td>

                            </td>
                        </tr>
                        <tr>
                            <td> </td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td>

                            </td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td>

                            </td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td>

                            </td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                    </table>
                    {{-- --}}
                    <table id="" class=" table-standard table-striped table-bordered display responsive">
                        {{-- Perkara  --}}
                        <thead>
                            <tr>
                                <th rowspan="2">No Perkara</th>
                                <th colspan="6" class="text-center">Detail Informasi</th>


                            </tr>
                            <tr>
                                <th>Tanggal Pendaftaran</th>
                                <th>Jenis Tindak Pidana</th>
                                <th>Status</th>
                                <th>Jaksa Penanggung Jawab</th>
                                <th>Hakim Putusan</th>
                                <th colspan="1">Tanggal Putusan</th>


                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$perkara->nomor_perkara}}</td>
                                <td>{{$perkara->tanggal_pendaftaran}}</td>
                                <td>{{$perkara->kategoritindakpidana->no_kategori_pidana}}</td>
                                <td>{{$perkara->status_perkara}}</td>
                                <td>{{$perkara->jaksa->nama_jaksa}}</td>
                                <td>{{$perkara->hakim->nama_hakim}}</td>
                                <td colspan="1">{{$perkara->tanggal_putusan}}</td>


                            </tr>
                        </tbody>

                        {{-- Pihak Terlibat--}}
                        <thead>
                            <tr>

                                <th rowspan="2">No Perkara</th>
                                <th colspan="6" class="text-center">Detail Informasi Pihak Terlibat</th>


                            </tr>
                            <tr>
                                <th>No Pihak Terlibat</th>
                                <th>Nama Pihak</th>
                                <th>Alamat</th>
                                <th>Tipe Pihak</th>
                                <th colspan="2">Nomor Telpon</th>
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
                                <td colspan="2">{{$pt->no_hp_pihak_terlibat}}</td>
                            </tr>
                            @endforeach
                        </tbody>

                        {{-- Tuntutan Terkait  --}}
                        <thead>
                            <tr>


                                <th colspan="7" class="text-center">Detail Informasi Pihak Penuntut</th>


                            </tr>
                            <tr>
                                <th>No.</th>
                                <th>No Tuntutan</th>

                                <th>Tanggal Tuntutan</th>
                                <th>No Telepon Penuntut</th>

                                <th colspan="3">Kasus Dugaan</th>

                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($penuntuts as $index => $penuntut)
                            <tr>
                                <td>{{$index + 1}}</td>
                                <td>{{ $penuntut->no_tuntutan }}</td>

                                <td>{{ $penuntut->tgl_tuntutan }}</td>
                                <td>{{ $penuntut->no_hp_penuntut }}</td>

                                <td colspan="3">{{ $penuntut->kasus_dugaan }}</td>

                            </tr>
                            @endforeach


                        </tbody>

                        {{-- Riwayat Sidang  --}}

                        <thead>
                            <tr>
                                <th rowspan="2">No Perkara</th>
                                <th colspan="7" class="text-center">Detail Informasi Sidang</th>

                            </tr>
                            <tr>
                                <th>Tanggal Sidang</th>
                                <th colspan="2">Waktu Mulai</th>
                                <th colspan="2">Waktu Selesai</th>
                                <th colspan="1">Ruang Sidang</thc>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listsidang as $sidang)
                            <tr>
                                <td>{{$sidang->perkara->nomor_perkara}}5</td>
                                <td>{{$sidang->tgl_sidang}}</td>
                                <td colspan="2">{{$sidang->waktu_mulai}}</td>
                                <td colspan="2">{{$sidang->waktu_selesai}}</td>
                                <td colspan="1">{{$sidang->ruang_sidang}}</td>



                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- --}}
                    <table class="">
                        <tr>
                            <td class="kiri">

                            </td>

                            <td class="kanan">

                            </td>
                        </tr>
                        <tr>
                            <td class="kiri">

                            </td>

                        </tr>
                        <tr>
                            <td class="kiri">

                            </td>

                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="kiri">

                            </td>
                            <td class="kanan1">
                                <p>An, KEPALA KEJAKSAAN NEGERI SUNGAI PENUH
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    KEPALA KEJAKSAAN NEGERI SUNGAI PENUH
                                    <br>
                                    <br>
                                    <br>
                                <p></p>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <p></p>
                                <p style="text-decoration: underline; text-underline-position:;">KEPALA KEJAKSAAN NEGERI
                                    SUNGAI PENUH</p>
                                </p>
                                <p>Kepala Kejaksaan Nip. 19811219 200712 1 001</p>
                            </td>

                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                    </table>
                    {{-- 1  --}}

                </div>



            </div>

        </div>
    </div>


</div>




@endsection