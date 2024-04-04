@extends('layouts.admin')
<!-- This Page JS -->

@section('breadcump-content')

<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">Detail Tentutan</h4>
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
    <!-- Column -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Foto Barang Bukti / Bukti Tuntutan</h3>
                <h6 class="card-subtitle">Tuntutan No {{$penuntut->no_tuntutan}}</h6>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="white-box text-center">
                            <a href="{{ url(Storage::url($penuntut->bukti_foto1)) }}" target="_blank">
                                <img src="{{ url(Storage::url($penuntut->bukti_foto1)) }}" class="img-responsive"
                                    width="285" height="355" onerror="this.onerror=null; this.src='placeholder.jpg';">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="white-box text-center">
                            <a href="{{ url(Storage::url($penuntut->bukti_foto2)) }}" target="_blank">
                                <img src="{{ url(Storage::url($penuntut->bukti_foto2)) }}" class="img-responsive"
                                    width="285" height="355" onerror="this.onerror=null; this.src='placeholder.jpg';">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="white-box text-center">
                            <a href="{{ url(Storage::url($penuntut->bukti_foto3)) }}" target="_blank">
                                <img src="{{ url(Storage::url($penuntut->bukti_foto3)) }}" class="img-responsive"
                                    width="285" height="355" onerror="this.onerror=null; this.src='placeholder.jpg';">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="white-box text-center">
                            <a href="{{ url(Storage::url($penuntut->bukti_foto4)) }}" target="_blank">
                                <img src="{{ url(Storage::url($penuntut->bukti_foto4)) }}" class="img-responsive"
                                    width="285" height="355" onerror="this.onerror=null; this.src='placeholder.jpg';">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="white-box text-center">
                            <a href="{{ url(Storage::url($penuntut->bukti_foto5)) }}" target="_blank">
                                <img src="{{ url(Storage::url($penuntut->bukti_foto5)) }}" class="img-responsive"
                                    width="285" height="355" onerror="this.onerror=null; this.src='placeholder.jpg';">
                            </a>
                        </div>
                    </div>


                    <div class="col-lg-9 col-md-9 col-sm-6">
                        <h4 class="box-title m-t-40">Bukti Perakra Note *</h4>
                        <p>"Bukti perkara" merujuk pada segala bukti atau dokumen yang terkait dengan suatu perkara
                            hukum atau kasus yang sedang
                            atau telah diproses di pengadilan atau lembaga hukum lainnya. Penjelasan mengenai bukti
                            perkara dapat bervariasi
                            tergantung pada konteksnya, tetapi secara umum, bukti perkara dapat mencakup beberapa hal
                            berikut:</p>
                        <p>1. Bukti Elektronik: Dalam era digital, bukti perkara juga bisa berupa data elektronik
                            seperti pesan teks, email, rekaman
                            suara, atau rekaman video yang relevan dengan perkara hukum.</p>
                        <p>2. Rekaman Foto atau Video: Foto atau video yang diambil sebagai bukti atau dokumentasi dari
                            kejadian yang terjadi juga
                            dapat menjadi bagian dari bukti perkara.</p>
                        <p>3. Rekaman Transaksi: Dalam kasus-kasus yang melibatkan transaksi keuangan atau bisnis, bukti
                            perkara bisa berupa rekaman
                            transaksi, laporan keuangan, atau dokumen-dokumen terkait lainnya.</p>

                        <h3 class="box-title m-t-40">Validasi Perkara</h3>
                        <ul class="list-unstyled">
                            <li><i class="fa fa-check text-success"></i> Foto Bukti Perkara (Minimal 1)</li>
                            <li><i class="fa fa-check text-success"></i> No Telepon Pelapora / Penuntut</li>
                            <li><i class="fa fa-check text-success"></i> Nama Terdakwa</li>
                        </ul>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h3 class="box-title m-t-40">General Info Data Tuntutan</h3>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td width="390">No Tuntuan</td>
                                        <td> {{$penuntut->no_tuntutan}} </td>
                                    </tr>
                                    <tr>
                                        <td>Nama Penuntut</td>
                                        <td> {{$penuntut->nama_penuntut}}</td>
                                    </tr>
                                    <tr>
                                        <td>Terduga / Terdakwa</td>
                                        <td> {{$penuntut->nama_terdakwa}} </td>
                                    </tr>
                                    <tr>
                                        <td>Umur Terdakwa</td>
                                        <td> {{$penuntut->umur_terdakwa}} </td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Tuntutan</td>
                                        <td> {{$penuntut->tgl_tuntutan}} </td>
                                    </tr>
                                    <tr>
                                        <td>Nomor Telepon Penuntut</td>
                                        <td> {{$penuntut->no_hp_penuntut}} </td>
                                    </tr>
                                    <tr>
                                        <td>Alamat Penuntut</td>
                                        <td> {{$penuntut->alamat_penuntut}} </td>
                                    </tr>
                                    <tr>
                                        <td>Kasus Dugaan</td>
                                        <td> {{$penuntut->kasus_dugaan}} </td>
                                    </tr>

                                    <tr>
                                        <td><button id="print" class="btn btn-default btn-outline" type="button">
                                                <span><i class="fa fa-print"></i> Print / Simpan</span>
                                            </button>
                                        </td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>

<div class="row" hidden>
    <div class="col-md-12">
        <div class="card card-body printableArea">


            <div class="row">
                <html>

                    <head>
                        <title>KOP SURAT</title>
                        <style type="text/css">
                            body {
                                font-family: Arial;
                                background-color: #ccc;
                            }

                            .rangkasurat {

                                width: 980px;
                                margin: 0 auto;
                                background-color: #fff;
                                height: 500px;
                                padding: 20px;

                                /* Menggeser ke kiri */
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
                    </head>

                    <body>
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
                                        <h5>Telp.(0748) 21328 fax. (0748) 22272 <u><a
                                                    href="">www.kejari-sungaipenuh.go.id</a></u>
                                        </h5>
                                        <h1></h1>
                                    </td>
                                </tr>
                            </table>
                            <div class="rangkasurat">
                                <table width="100%">
                                    <tr>
                                        <td class="tengah1">
                                            <h2>SURAT KETERANGAN PENUTUTAN</h2>
                                            <hr style="height: 50%">
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="tengah1">
                                            <h3>Nomor Tuntutan : {{$penuntut->no_tuntutan}}</h3>
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
                                <table>
                                    <tr>
                                        <td>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5 class="" style="text-align: center">Yang bertanda tangan dibawah ini,
                                                menyaatakan tuntutan
                                                kepada pihak
                                                terdakwa
                                                / terduga, dengan terusan pelaporan ke Pengadilan Negri
                                                Sungai
                                                Penuh
                                                Menyatakan : </h5>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                        </td>
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
                                <table class="">
                                    <tr>
                                        <td class="kiri">
                                            <p>Nomor : {{$penuntut->no_tuntutan}}</p>
                                        </td>

                                        <td class="kanan">
                                            Sungai Penuh, {{$penuntut->tgl_tuntutan}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="kiri">
                                            <p>Sifat : Biasa</p>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="kiri">
                                            <p>Lampiran : ---</p>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="kiri">
                                            <p>Prihal : Pemberitahuan tindak lanjut atas
                                                <br>
                                                <br>
                                                <br><br>
                                                laporan pengaduan
                                                <br>
                                                <br>
                                                <br>
                                                -----------------------------------------------------
                                            </p>
                                        </td>
                                        <td class="kanan">
                                            <p>Kepada Yth,
                                                <br>
                                                <br>
                                                <br>
                                                <br>
                                                <br>
                                                {{$penuntut->nama_terdakwa}}
                                                <br>
                                                <br>
                                                <br>
                                            <p>DI -</p>
                                            <br>
                                            <br>
                                            <br>
                                            <p style="text-decoration: underline; text-underline-position:;">
                                                <b>TEMPAT</b>
                                            </p>
                                            </p>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td></td>
                                    </tr>
                                </table>

                                <br>
                                <br>
                                <table style="margin: 0 auto; margin-left: 10%; margin-right:10%">
                                    <tr>
                                        <td style="text-align: justify;">
                                            <p style="text-align: justify; margin-bottom: em;">
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sehubung dengan surat
                                                laporan pengaduan saudara
                                                kepada Kepala Kejaksaan
                                                Negri Sungai Penuh
                                                Nomor: <b>{{$penuntut->no_tuntutan}}, {{$penuntut->kasus_dugaan}},</b>
                                                kami
                                                sampaikan bahwa
                                                setelah dilakukan pra penyelidikan (pengumpulan
                                                data dan bahan keterangan) atas laporan pengaduan saudara tersebut,
                                                berdasarkan hasil pra penyelidikan terhadap
                                                laporan pengaduan, disimpulkan dapat dilanjutkan karena ditemukan suatu
                                                peristiwa yang diduga sebagai tindak pidana
                                                .
                                                <br><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Demikian untuk maklum.
                                            </p>
                                        </td>
                                    </tr>
                                </table>
                                <br>
                                <br>
                                <br>
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
                                            <p>An, KEPALA KEJAKSAANNEGRI SUNGAI PENUH
                                                <br>
                                                <br>
                                                <br>
                                                <br>
                                                <br>
                                                KEPALA SEKSI TINDAK PIDANA KHUSUS
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
                                            <p style="text-decoration: underline; text-underline-position:;">JASA ALEX
                                                P.HUTAHURUK,SH</p>
                                            </p>
                                            <p>Jaksa Muda Nip. 19811219 200712 1 001</p>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td></td>
                                    </tr>
                                </table>
                            </div>



                        </div>

                    </body>

                </html>
            </div>
        </div>
    </div>
</div>

@endsection