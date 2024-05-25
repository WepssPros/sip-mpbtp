@extends('layouts.admin')

@section('breadcump-content')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">Dashboard</h4>
        </div>
        <div class="col-7 align-self-center">
            <div class="d-flex align-items-center justify-content-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection

@section('admin-content')
<div class="card-group">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex no-block align-items-center">
                        <div>
                            <i class="mdi mdi-archive font-20 text-muted"></i>
                            <p class="font-16 m-b-5">Total Arsip Tersedia</p>
                        </div>
                        <div class="ml-auto">
                            <h1 class="font-light text-right">23</h1>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="progress">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 75%; height: 6px;"
                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex no-block align-items-center">
                        <div>
                            <i class="mdi mdi-harddisk font-20 text-muted"></i>
                            <p class="font-16 m-b-5">Data Storage Arsip</p>
                        </div>
                        <div class="ml-auto">
                            <!-- Konversi total ukuran ke GB jika lebih besar dari 1000000 KB -->
                            @if($totalsize >= 1000000)
                            <h1 class="font-16 text-right">{{ round($totalsize / 1000000, 2) }}GB/1000GB</h1>
                            <!-- Konversi total ukuran ke MB jika lebih besar dari 1000 KB -->
                            @elseif($totalsize >= 1000)
                            <h1 class="font-16 text-right">{{ round($totalsize / 1000, 2) }}MB/1000GB</h1>
                            <!-- Tampilkan dalam KB jika total kurang dari 1000 KB -->
                            @else
                            <h1 class="font-16 text-right">{{ $totalsize }}KB/1000GB</h1>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="progress">
                        <!-- Menyesuaikan value progress bar dengan ukuran yang telah dikonversi -->
                        <div class="progress-bar bg-success" role="progressbar"
                            style="width: {{ round($totalsize / (100 * 1024)) }}%; height: 6px;"
                            aria-valuenow="{{ round($totalsize / (100 * 1024)) }}" aria-valuemin="0"
                            aria-valuemax="100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex no-block align-items-center">
                        <div>
                            <i class="mdi mdi-briefcase font-20 text-muted"></i>
                            <p class="font-16 m-b-5">Data Perkara</p>
                        </div>
                        <div class="ml-auto">
                            <h1 class="font-light text-right">157</h1>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="progress">
                        <div class="progress-bar bg-purple" role="progressbar" style="width: 65%; height: 6px;"
                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex no-block align-items-center">
                        <div>
                            <i class="mdi mdi-file-chart font-20 text-muted"></i>
                            <p class="font-16 m-b-5">Data Pelaporan</p>
                        </div>
                        <div class="ml-auto">
                            <h1 class="font-light text-right">236</h1>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 70%; height: 6px;"
                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card-group">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex no-block align-items-center">
                        <div>
                            <i class="mdi mdi-gavel font-20 text-muted"></i>
                            <p class="font-16 m-b-5">Jumlah Hakim</p>
                        </div>
                        <div class="ml-auto">
                            <h1 class="font-light text-right">23</h1>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="progress">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 75%; height: 6px;"
                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex no-block align-items-center">
                        <div>
                            <i class="fas fa-user font-20 text-muted"></i>
                            <p class="font-16 m-b-5">Jumlah Pengacara</p>
                        </div>
                        <div class="ml-auto">
                            <h1 class="font-light text-right">169</h1>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 60%; height: 6px;"
                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex no-block align-items-center">
                        <div>
                            <i class="mdi mdi-gavel font-20 text-muted"></i>
                            <p class="font-16 m-b-5">Jumlah Jaksa</p>
                        </div>
                        <div class="ml-auto">
                            <h1 class="font-light text-right">157</h1>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="progress">
                        <div class="progress-bar bg-purple" role="progressbar" style="width: 65%; height: 6px;"
                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex no-block align-items-center">
                        <div>
                            <i class="mdi mdi-poll font-20 text-muted"></i>
                            <p class="font-16 m-b-5">Data Pihak Terlibat</p>
                        </div>
                        <div class="ml-auto">
                            <h1 class="font-light text-right">236</h1>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 70%; height: 6px;"
                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">

    <div class="col-lg-12 col-md-">
        <div class="card bg-success">
            <div class="card-body">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        <div class="carousel-item flex-column active">
                            <div class="d-flex no-block al m-r-15ign-items-center">
                                <i class="cc EOS-alt text-white display-6 m-r-15" title="EOS"></i>
                                <div class="m-t-10">
                                    <h5 class="text-white font-medium">SIDANG</h5>
                                    <h6 class="text-white">HARI INI</h6>
                                </div>
                                <div class="ml-auto m-t-15">
                                    <div class="crypto"></div>
                                </div>
                            </div>
                            <div class="row text-center text-white m-t-30">
                                <div class="col-3">
                                    <span class="font-14">RUANG</span>
                                    <p class="font-medium"><i class="fas fa-university"></i> -</p>
                                </div>
                                <div class="col-3">
                                    <span class="font-14">TANGGAL</span>
                                    <p class="font-medium"><i class="fas fa-calendar-alt"></i> -</p>
                                </div>
                                <div class="col-3">
                                    <span class="font-14">WAKTU MULAI</span>
                                    <p class="font-medium"><i class="fas fa-clock"></i> -</p>
                                </div>
                                <div class="col-3">
                                    <span class="font-14">WAKTU SELESAI</span>
                                    <p class="font-medium"><i class="fas fa-clock"></i> -</p>
                                </div>
                            </div>
                        </div>

                        @foreach ($sidangs as $sidang)
                        <div class="carousel-item flex-column">
                            <div class="d-flex no-block al m-r-15ign-items-center">
                                <i class="cc EOS-alt text-white display-6 m-r-15" title="EOS"></i>
                                <div class="m-t-10">
                                    <h5 class="text-white font-medium">SIDANG</h5>
                                    <h6 class="text-white">Perkara : {{$sidang->perkara->nomor_perkara}}</h6>
                                </div>
                                <div class="ml-auto m-t-15">
                                    <div class="crypto"></div>
                                </div>
                            </div>
                            <div class="row text-center text-white m-t-30">
                                <div class="col-3">
                                    <span class="font-14">RUANG</span>
                                    <p class="font-medium"><i class="fas fa-university"></i> {{$sidang->ruang_sidang}}
                                    </p>
                                </div>
                                <div class="col-3">
                                    <span class="font-14">TANGGAL</span>
                                    <p class="font-medium"><i class="fas fa-calendar-alt"></i> {{$sidang->tgl_sidang}}
                                    </p>
                                </div>
                                <div class="col-3">
                                    <span class="font-14">WAKTU MULAI</span>
                                    <p class="font-medium"><i class="fas fa-clock"></i>{{$sidang->waktu_mulai}}</p>
                                </div>
                                <div class="col-3">
                                    <span class="font-14">WAKTU SELESAI</span>
                                    <p class="font-medium"><i class="fas fa-clock"></i>{{$sidang->waktu_selesai}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>




@endsection