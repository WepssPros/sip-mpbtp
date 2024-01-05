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
                            <i class="mdi mdi-emoticon font-20 text-muted"></i>
                            <p class="font-16 m-b-5">New Clients</p>
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
                            <i class="mdi mdi-image font-20  text-muted"></i>
                            <p class="font-16 m-b-5">New Projects</p>
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
                            <i class="mdi mdi-currency-eur font-20 text-muted"></i>
                            <p class="font-16 m-b-5">New Invoices</p>
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
                            <p class="font-16 m-b-5">New Sales</p>
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
                            <i class="mdi mdi-emoticon font-20 text-muted"></i>
                            <p class="font-16 m-b-5">New Clients</p>
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
                            <i class="mdi mdi-image font-20  text-muted"></i>
                            <p class="font-16 m-b-5">New Projects</p>
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
                            <i class="mdi mdi-currency-eur font-20 text-muted"></i>
                            <p class="font-16 m-b-5">New Invoices</p>
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
                            <p class="font-16 m-b-5">New Sales</p>
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
    <!-- column -->
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <h4 class="card-title mb-0">Latest Sales</h4>
                    </div>
                    <div class="ml-auto">
                        <select class="custom-select border-0 text-muted">
                            <option value="0" selected="">August 2018</option>
                            <option value="1">May 2018</option>
                            <option value="2">March 2018</option>
                            <option value="3">June 2018</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="card-body bg-light">
                <div class="row align-items-center">
                    <div class="col-xs-12 col-md-6">
                        <h3 class="m-b-0 font-light">August 2018</h3>
                        <span class="font-14 text-muted">Sales Report</span>
                    </div>
                    <div class="col-xs-12 col-md-6 align-self-center display-6 text-info text-right">
                        $3,690</div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="border-top-0">NAME</th>
                            <th class="border-top-0">STATUS</th>
                            <th class="border-top-0">DATE</th>
                            <th class="border-top-0">PRICE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <td class="txt-oflo">Elite admin</td>
                            <td><span class="label label-success label-rounded">SALE</span> </td>
                            <td class="txt-oflo">April 18, 2017</td>
                            <td><span class="font-medium">$24</span></td>
                        </tr>
                        <tr>

                            <td class="txt-oflo">Real Homes WP Theme</td>
                            <td><span class="label label-info label-rounded">EXTENDED</span></td>
                            <td class="txt-oflo">April 19, 2017</td>
                            <td><span class="font-medium">$1250</span></td>
                        </tr>
                        <tr>

                            <td class="txt-oflo">Ample Admin</td>
                            <td><span class="label label-purple label-rounded">Tax</span></td>
                            <td class="txt-oflo">April 19, 2017</td>
                            <td><span class="font-medium">$1250</span></td>
                        </tr>
                        <tr>

                            <td class="txt-oflo">Medical Pro WP Theme</td>
                            <td><span class="label label-success label-rounded">Sale</span></td>
                            <td class="txt-oflo">April 20, 2017</td>
                            <td><span class="font-medium">-$24</span></td>
                        </tr>
                        <tr>

                            <td class="txt-oflo">Hosting press html</td>
                            <td><span class="label label-success label-rounded">SALE</span></td>
                            <td class="txt-oflo">April 21, 2017</td>
                            <td><span class="font-medium">$24</span></td>
                        </tr>
                        <tr>

                            <td class="txt-oflo">Digital Agency PSD</td>
                            <td><span class="label label-danger label-rounded">Tax</span> </td>
                            <td class="txt-oflo">April 23, 2017</td>
                            <td><span class="font-medium">-$14</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection