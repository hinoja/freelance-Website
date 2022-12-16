@extends('dashboard.layouts.app')

@section('content')
    <!-- begin app-main -->
    <div class="app-main" id="main">
        <!-- begin container-fluid -->
        <div class="container-fluid">
            <!-- begin row -->
            <div class="row">
                <div class="col-md-12 m-b-30">
                    <!-- begin page title -->
                    <div class="d-block d-sm-flex flex-nowrap align-items-center">
                        <div class="page-title mb-2 mb-sm-0">
                            <h1>Ecommerce</h1>
                        </div>
                        <div class="ml-auto d-flex align-items-center">
                            <nav>
                                <ol class="breadcrumb p-0 m-b-0">
                                    <li class="breadcrumb-item">
                                        <a href="index.html"><i class="ti ti-home"></i></a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        Dashboard
                                    </li>
                                    <li class="breadcrumb-item active text-primary" aria-current="page">Ecommerce</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- end page title -->
                </div>
            </div>
            <!-- end row -->
            <!-- begin row -->
            <div class="row">
                <div class="col-sm-6 col-xxl-3">
                    <div class="card card-statistics ecommerce-contant overflow-h">
                        <div class="card-body p-0">
                            <div class="d-flex m-b-0 ecommerce-contant-text h-100">
                                <div class="w-100">
                                    <div class="row p-3">
                                        <div class="col">
                                            <h3 class="mb-0">$65,456</h3>
                                            <small class="d-block">Last 6 months</small>
                                        </div>
                                        <div class="col text-right">
                                            <h5 class="text-muted mb-0">Revenue</h5>
                                            <strong class="text-danger m-t-5"><i class="zmdi zmdi-long-arrow-up font-weight-bold"></i> N/A</strong>
                                        </div>
                                    </div>
                                    <div class="apexchart-wrapper">
                                        <div id="ecommercedemo3" class="chart-fit"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xxl-3">
                    <div class="card card-statistics ecommerce-contant overflow-h">
                        <div class="card-body p-0">
                            <div class="d-flex ecommerce-contant-text m-b-0 h-100">
                                <div class="w-100">
                                    <div class="row p-3">
                                        <div class="col">
                                            <h3 class="mb-0">52%</h3>
                                            <small class="d-block">Past 12 hours</small>
                                        </div>
                                        <div class="col text-right">
                                            <h5 class="text-muted mb-0">Conversion Rate</h5>
                                            <strong class="text-primary m-t-5"><i class="zmdi zmdi-long-arrow-up font-weight-bold"></i> 5.35%</strong>
                                        </div>
                                    </div>
                                    <div class="apexchart-wrapper">
                                        <div id="ecommercedemo1" class="chart-fit"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xxl-3">
                    <div class="card card-statistics ecommerce-contant overflow-h">
                        <div class="card-body p-0">
                            <div class="d-flex m-b-0 ecommerce-contant-text h-100">
                                <div class="w-100">
                                    <div class="w-100">
                                        <div class="row p-3">
                                            <div class="col">
                                                <h3 class="mb-0">605</h3>
                                                <small class="d-block">Last 90 days</small>
                                            </div>
                                            <div class="col text-right">
                                                <h5 class="text-muted mb-0">Transactions</h5>
                                                <strong class="text-orange m-t-5"><i class="zmdi zmdi-long-arrow-up font-weight-bold"></i> 4.65%</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="apexchart-wrapper">
                                        <div id="ecommercedemo2" class="chart-fit"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xxl-3">
                    <div class="card card-statistics ecommerce-contant overflow-h">
                        <div class="card-body p-0">
                            <div class="d-flex m-b-0 ecommerce-contant-text h-100">
                                <div class="w-100">
                                    <div class="row p-3">
                                        <div class="col">
                                            <h3 class="mb-0">5,687</h3>
                                            <small class="d-block">Last 3 months</small>
                                        </div>
                                        <div class="col text-right">
                                            <h5 class="text-muted mb-0">Purchases</h5>
                                            <strong class="text-success m-t-5"><i class="zmdi zmdi-long-arrow-up font-weight-bold"></i> 9.89%</strong>
                                        </div>
                                    </div>
                                    <div class="apexchart-wrapper">
                                        <div id="ecommercedemo4" class="chart-fit"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-8 m-b-30">
                    <div class="card card-statistics h-100 mb-0">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <div class="card-heading">
                                <h4 class="card-title">Top selling products</h4>
                            </div>
                            <div class="dropdown">
                                <a class="btn btn-xs" href="#!">Export <i class="zmdi zmdi-download pl-1"></i> </a>
                            </div>
                        </div>
                        <div class="card-body scrollbar scroll_dark pt-0" style="max-height: 350px;">
                            <div class="datatable-wrapper table-responsive">
                                <table id="datatable" class="table table-borderless table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>In stock</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Cold Shoulder Bling Dress</td>
                                            <td>$65.342</td>
                                            <td>
                                                <div class="progress my-3" style="height: 3px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-success-inverse">Active</span></td>
                                            <td> <a class="mr-3" href="javascript:void(0);"><i class="fe fe-edit"></i></a><a href="javascript:void(0);"><i class="fe fe-trash-2"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>PlayStation 4 Pro 1TB Console</td>
                                            <td>$47.655</td>
                                            <td>
                                                <div class="progress my-3" style="height: 3px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 36%;" aria-valuenow="36" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-success-inverse">Active</span></td>
                                            <td> <a class="mr-3" href="javascript:void(0);"><i class="fe fe-edit"></i></a><a href="javascript:void(0);"><i class="fe fe-trash-2"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Extra Fine Wool Jumpers</td>
                                            <td>$56.479</td>
                                            <td>
                                                <div class="progress my-3" style="height: 3px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-danger-inverse">Canceled</span></td>
                                            <td> <a class="mr-3" href="javascript:void(0);"><i class="fe fe-edit"></i></a><a href="javascript:void(0);"><i class="fe fe-trash-2"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Long Sleeve Bow Top</td>
                                            <td>$04.786</td>
                                            <td>
                                                <div class="progress my-3" style="height: 3px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-success-inverse">Active</span></td>
                                            <td> <a class="mr-3" href="javascript:void(0);"><i class="fe fe-edit"></i></a><a href="javascript:void(0);"><i class="fe fe-trash-2"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Shine Stripe Long Sleeve Ruffle</td>
                                            <td>$23.456</td>
                                            <td>
                                                <div class="progress my-3" style="height: 3px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-success-inverse">Active</span></td>
                                            <td> <a class="mr-3" href="javascript:void(0);"><i class="fe fe-edit"></i></a><a href="javascript:void(0);"><i class="fe fe-trash-2"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Long Sleeve Micro Thermal Shirt</td>
                                            <td>$65.598</td>
                                            <td>
                                                <div class="progress my-3" style="height: 3px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-info-inverse">info</span></td>
                                            <td> <a class="mr-3" href="javascript:void(0);"><i class="fe fe-edit"></i></a><a href="javascript:void(0);"><i class="fe fe-trash-2"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Standard Fit Bomber Sweater</td>
                                            <td>$87.659</td>
                                            <td>
                                                <div class="progress my-3" style="height: 3px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-warning-inverse">Warning</span></td>
                                            <td> <a class="mr-3" href="javascript:void(0);"><i class="fe fe-edit"></i></a><a href="javascript:void(0);"><i class="fe fe-trash-2"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Standard Fit Crew T-Shirt</td>
                                            <td>$32.466</td>
                                            <td>
                                                <div class="progress my-3" style="height: 3px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-success-inverse">Active</span></td>
                                            <td> <a class="mr-3" href="javascript:void(0);"><i class="fe fe-edit"></i></a><a href="javascript:void(0);"><i class="fe fe-trash-2"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>Standard Fit Short Sleeve V-Neck</td>
                                            <td>$03.544</td>
                                            <td>
                                                <div class="progress my-3" style="height: 3px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-success-inverse">Active</span></td>
                                            <td> <a class="mr-3" href="javascript:void(0);"><i class="fe fe-edit"></i></a><a href="javascript:void(0);"><i class="fe fe-trash-2"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>Sanus Classic Small Full Motion Wall</td>
                                            <td>$14.489</td>
                                            <td>
                                                <div class="progress my-3" style="height: 3px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-success-inverse">Active</span></td>
                                            <td> <a class="mr-3" href="javascript:void(0);"><i class="fe fe-edit"></i></a><a href="javascript:void(0);"><i class="fe fe-trash-2"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>Jena Gaines</td>
                                            <td>$78.654</td>
                                            <td>
                                                <div class="progress my-3" style="height: 3px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 47%;" aria-valuenow="47" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-success-inverse">Active</span></td>
                                            <td> <a class="mr-3" href="javascript:void(0);"><i class="fe fe-edit"></i></a><a href="javascript:void(0);"><i class="fe fe-trash-2"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>12</td>
                                            <td>Quinn Flynn</td>
                                            <td>$23.486</td>
                                            <td>
                                                <div class="progress my-3" style="height: 3px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 96%;" aria-valuenow="96" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-success-inverse">Active</span></td>
                                            <td> <a class="mr-3" href="javascript:void(0);"><i class="fe fe-edit"></i></a><a href="javascript:void(0);"><i class="fe fe-trash-2"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>13</td>
                                            <td>Charde Marshall</td>
                                            <td>$65.453</td>
                                            <td>
                                                <div class="progress my-3" style="height: 3px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 74%;" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-success-inverse">Active</span></td>
                                            <td> <a class="mr-3" href="javascript:void(0);"><i class="fe fe-edit"></i></a><a href="javascript:void(0);"><i class="fe fe-trash-2"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>14</td>
                                            <td>Haley Kennedy</td>
                                            <td>$78.645</td>
                                            <td>
                                                <div class="progress my-3" style="height: 3px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 62%;" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-success-inverse">Active</span></td>
                                            <td> <a class="mr-3" href="javascript:void(0);"><i class="fe fe-edit"></i></a><a href="javascript:void(0);"><i class="fe fe-trash-2"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>15</td>
                                            <td>Tatyana Fitzpatrick</td>
                                            <td>$65.342</td>
                                            <td>
                                                <div class="progress my-3" style="height: 3px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-success-inverse">Active</span></td>
                                            <td> <a class="mr-3" href="javascript:void(0);"><i class="fe fe-edit"></i></a><a href="javascript:void(0);"><i class="fe fe-trash-2"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>16</td>
                                            <td>Michael Silva</td>
                                            <td>$07.456</td>
                                            <td>
                                                <div class="progress my-3" style="height: 3px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 47%;" aria-valuenow="47" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-success-inverse">Active</span></td>
                                            <td> <a class="mr-3" href="javascript:void(0);"><i class="fe fe-edit"></i></a><a href="javascript:void(0);"><i class="fe fe-trash-2"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>17</td>
                                            <td>Paul Byrd</td>
                                            <td>$36.478</td>
                                            <td>
                                                <div class="progress my-3" style="height: 3px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 36%;" aria-valuenow="36" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-success-inverse">Active</span></td>
                                            <td> <a class="mr-3" href="javascript:void(0);"><i class="fe fe-edit"></i></a><a href="javascript:void(0);"><i class="fe fe-trash-2"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>18</td>
                                            <td>Gloria Little</td>
                                            <td>$84.798</td>
                                            <td>
                                                <div class="progress my-3" style="height: 3px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 47%;" aria-valuenow="47" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-success-inverse">Active</span></td>
                                            <td> <a class="mr-3" href="javascript:void(0);"><i class="fe fe-edit"></i></a><a href="javascript:void(0);"><i class="fe fe-trash-2"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>19</td>
                                            <td>Bradley Greer</td>
                                            <td>$12.356</td>
                                            <td>
                                                <div class="progress my-3" style="height: 3px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-success-inverse">Active</span></td>
                                            <td> <a class="mr-3" href="javascript:void(0);"><i class="fe fe-edit"></i></a><a href="javascript:void(0);"><i class="fe fe-trash-2"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>20</td>
                                            <td>Dai Rios</td>
                                            <td>$45.655</td>
                                            <td>
                                                <div class="progress my-3" style="height: 3px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-success-inverse">Active</span></td>
                                            <td> <a class="mr-3" href="javascript:void(0);"><i class="fe fe-edit"></i></a><a href="javascript:void(0);"><i class="fe fe-trash-2"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>21</td>
                                            <td>Jenette Caldwell</td>
                                            <td>$47.586</td>
                                            <td>
                                                <div class="progress my-3" style="height: 3px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 47%;" aria-valuenow="47" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-success-inverse">Active</span></td>
                                            <td> <a class="mr-3" href="javascript:void(0);"><i class="fe fe-edit"></i></a><a href="javascript:void(0);"><i class="fe fe-trash-2"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>22</td>
                                            <td>Yuri Berry</td>
                                            <td>$36.756</td>
                                            <td>
                                                <div class="progress my-3" style="height: 3px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 63%;" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-success-inverse">Active</span></td>
                                            <td> <a class="mr-3" href="javascript:void(0);"><i class="fe fe-edit"></i></a><a href="javascript:void(0);"><i class="fe fe-trash-2"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>23</td>
                                            <td>Caesar Vance</td>
                                            <td>$78.659</td>
                                            <td>
                                                <div class="progress my-3" style="height: 3px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 96%;" aria-valuenow="96" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-success-inverse">Active</span></td>
                                            <td> <a class="mr-3" href="javascript:void(0);"><i class="fe fe-edit"></i></a><a href="javascript:void(0);"><i class="fe fe-trash-2"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>24</td>
                                            <td>Doris Wilder</td>
                                            <td>$56.484</td>
                                            <td>
                                                <div class="progress my-3" style="height: 3px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 87%;" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-success-inverse">Active</span></td>
                                            <td> <a class="mr-3" href="javascript:void(0);"><i class="fe fe-edit"></i></a><a href="javascript:void(0);"><i class="fe fe-trash-2"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>25</td>
                                            <td>Angelica Ramos</td>
                                            <td>$36.796</td>
                                            <td>
                                                <div class="progress my-3" style="height: 3px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 98%;" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-success-inverse">Active</span></td>
                                            <td> <a class="mr-3" href="javascript:void(0);"><i class="fe fe-edit"></i></a><a href="javascript:void(0);"><i class="fe fe-trash-2"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>26</td>
                                            <td>Gavin Joyce</td>
                                            <td>$25.365</td>
                                            <td>
                                                <div class="progress my-3" style="height: 3px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 87%;" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-success-inverse">Active</span></td>
                                            <td> <a class="mr-3" href="javascript:void(0);"><i class="fe fe-edit"></i></a><a href="javascript:void(0);"><i class="fe fe-trash-2"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>27</td>
                                            <td>Jennifer Chang</td>
                                            <td>$78.489</td>
                                            <td>
                                                <div class="progress my-3" style="height: 3px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-success-inverse">Active</span></td>
                                            <td> <a class="mr-3" href="javascript:void(0);"><i class="fe fe-edit"></i></a><a href="javascript:void(0);"><i class="fe fe-trash-2"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>28</td>
                                            <td>Brenden Wagner</td>
                                            <td>$35.987</td>
                                            <td>
                                                <div class="progress my-3" style="height: 3px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-success-inverse">Active</span></td>
                                            <td> <a class="mr-3" href="javascript:void(0);"><i class="fe fe-edit"></i></a><a href="javascript:void(0);"><i class="fe fe-trash-2"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>29</td>
                                            <td>Fiona Green</td>
                                            <td>$78.464</td>
                                            <td>
                                                <div class="progress my-3" style="height: 3px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-success-inverse">Active</span></td>
                                            <td> <a class="mr-3" href="javascript:void(0);"><i class="fe fe-edit"></i></a><a href="javascript:void(0);"><i class="fe fe-trash-2"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>30</td>
                                            <td>Shou Itou</td>
                                            <td>$61.444</td>
                                            <td>
                                                <div class="progress my-3" style="height: 3px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-success-inverse">Active</span></td>
                                            <td> <a class="mr-3" href="javascript:void(0);"><i class="fe fe-edit"></i></a><a href="javascript:void(0);"><i class="fe fe-trash-2"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>31</td>
                                            <td>Michelle House</td>
                                            <td>$85.488</td>
                                            <td>
                                                <div class="progress my-3" style="height: 3px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 47%;" aria-valuenow="47" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-success-inverse">Active</span></td>
                                            <td> <a class="mr-3" href="javascript:void(0);"><i class="fe fe-edit"></i></a><a href="javascript:void(0);"><i class="fe fe-trash-2"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>32</td>
                                            <td>Suki Burks</td>
                                            <td>$89.463</td>
                                            <td>
                                                <div class="progress my-3" style="height: 3px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 66%;" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-success-inverse">Active</span></td>
                                            <td> <a class="mr-3" href="javascript:void(0);"><i class="fe fe-edit"></i></a><a href="javascript:void(0);"><i class="fe fe-trash-2"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>33</td>
                                            <td>Prescott Bartlett</td>
                                            <td>$23.464</td>
                                            <td>
                                                <div class="progress my-3" style="height: 3px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 62%;" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-success-inverse">Active</span></td>
                                            <td> <a class="mr-3" href="javascript:void(0);"><i class="fe fe-edit"></i></a><a href="javascript:void(0);"><i class="fe fe-trash-2"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>34</td>
                                            <td>Gavin Cortez</td>
                                            <td>$12.254</td>
                                            <td>
                                                <div class="progress my-3" style="height: 3px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-success-inverse">Active</span></td>
                                            <td> <a class="mr-3" href="javascript:void(0);"><i class="fe fe-edit"></i></a><a href="javascript:void(0);"><i class="fe fe-trash-2"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>35</td>
                                            <td>Martena Mccray</td>
                                            <td>$24.478</td>
                                            <td>
                                                <div class="progress my-3" style="height: 3px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 36%;" aria-valuenow="36" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-success-inverse">Active</span></td>
                                            <td> <a class="mr-3" href="javascript:void(0);"><i class="fe fe-edit"></i></a><a href="javascript:void(0);"><i class="fe fe-trash-2"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>36</td>
                                            <td>Unity Butler</td>
                                            <td>$36.478</td>
                                            <td>
                                                <div class="progress my-3" style="height: 3px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-success-inverse">Active</span></td>
                                            <td> <a class="mr-3" href="javascript:void(0);"><i class="fe fe-edit"></i></a><a href="javascript:void(0);"><i class="fe fe-trash-2"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>37</td>
                                            <td>Howard Hatfield</td>
                                            <td>$48.654</td>
                                            <td>
                                                <div class="progress my-3" style="height: 3px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 96%;" aria-valuenow="96" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-success-inverse">Active</span></td>
                                            <td> <a class="mr-3" href="javascript:void(0);"><i class="fe fe-edit"></i></a><a href="javascript:void(0);"><i class="fe fe-trash-2"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>38</td>
                                            <td>Hope Fuentes</td>
                                            <td>$78.654</td>
                                            <td>
                                                <div class="progress my-3" style="height: 3px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 47%;" aria-valuenow="47" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-success-inverse">Active</span></td>
                                            <td> <a class="mr-3" href="javascript:void(0);"><i class="fe fe-edit"></i></a><a href="javascript:void(0);"><i class="fe fe-trash-2"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>39</td>
                                            <td>Vivian Harrell</td>
                                            <td>$26.154</td>
                                            <td>
                                                <div class="progress my-3" style="height: 3px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 56%;" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-success-inverse">Active</span></td>
                                            <td> <a class="mr-3" href="javascript:void(0);"><i class="fe fe-edit"></i></a><a href="javascript:void(0);"><i class="fe fe-trash-2"></i></a></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>In stock</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 m-b-30">
                    <div class="card card-statistics h-100 mb-0">
                        <div class="card-header d-flex justify-content-between">
                            <div class="card-heading">
                                <h4 class="card-title">Lifetime sales</h4>
                            </div>
                            <div class="dropdown">
                                <a class="p-2" href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe fe-circle"></i>
                                </a>
                                <div class="dropdown-menu custom-dropdown dropdown-menu-right p-4">
                                    <h6 class="mb-1">Action</h6>
                                    <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-file-o pr-2"></i>View reports</a>
                                    <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-edit pr-2"></i>Edit reports</a>
                                    <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-bar-chart-o pr-2"></i>Statistics</a>
                                    <h6 class="mb-1 mt-3">Export</h6>
                                    <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-file-pdf-o pr-2"></i>Export to PDF</a>
                                    <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-file-excel-o pr-2"></i>Export to CSV</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5>We only started collecting data from February 2019 </h5>
                            <p>Questions about the Net Earnings number? <a class="btn btn-square btn-inverse-success btn-xs ml-1" href="#">Click here</a> </p>
                            <div class="row mt-4">
                                <div class="col-lg-8">
                                    <div class="morris-wrapper">
                                        <div id="morrisecommerce1" style="height: 260px;"></div>
                                    </div>
                                </div>
                                <div class="col-lg-4 mt-4">
                                    <div class="mb-3">
                                        <h3 class="mb-0">680</h3>
                                        <p class="mb-0 text-info">Total sales</p>
                                    </div>
                                    <div class="mb-3">
                                        <h3 class="mb-0">800</h3>
                                        <p class="mb-0 text-primary">Open campaign</p>
                                    </div>
                                    <div class="mb-3">
                                        <h3 class="mb-0">500</h3>
                                        <p class="mb-0">Daily sales</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-6 m-b-30">
                    <div class="card card-statistics h-100 mb-0">
                        <div class="card-header">
                            <h4 class="card-title">Yearly Sales Report</h4>
                        </div>
                        <div class="card-body pb-0">
                            <div class="row m-b-20">
                                <div class="col-xxs-6 col-xl-4 col-xxl-4 mb-2 mb-xxl-0">
                                    <div class="d-flex align-items-center">
                                        <div class="icon-container img-icon m-r-20 bg-light-gray rounded">
                                            <i class="fa fa-cart-plus text-primary"></i>
                                        </div>
                                        <div class="report-details">
                                            <p>Annual Sales</p>
                                            <h3>15,236</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxs-6 col-md-4 col-xxl-4 mb-2 mb-xxl-0">
                                    <div class="d-flex align-items-center">
                                        <div class="icon-container img-icon m-r-20 bg-light-gray rounded">
                                            <i class="fa fa-dollar text-primary"></i>
                                        </div>
                                        <div class="report-details">
                                            <p>Annual Revenue</p>
                                            <h3>$40,516</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="apexchart-wrapper">
                                <div id="ecommerce5" class="chart-fit"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 m-b-30">
                    <div class="card card-statistics h-100 mb-0">
                        <div class="card-header d-sm-flex justify-content-between align-items-center py-3">
                            <div class="card-heading mb-3 mb-sm-0">
                                <h4 class="card-title">Invoices Status</h4>
                            </div>
                            <div class="dropdown">
                                <input type="text" class="form-control form-control-sm" placeholder="Search Invoice" />
                            </div>
                        </div>
                        <div class="card-body scrollbar scroll_dark" style="max-height: 420px;">
                            <div class="d-xxs-flex align-items-center">
                                <div class="total-sales">
                                    <p>Total Sales</p>
                                    <h1>$9514</h1>
                                </div>
                                <div class="mb-3 mb-sm-0 ml-auto">
                                    <button class="btn btn-primary btn-xs">View All Invoices</button>
                                </div>
                            </div>
                            <div class="d-none d-sm-flex progress m-t-20 m-b-0" style="height: 5px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 25%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="row no-gutters">
                                <div class="col-6 col-xxs-3 ">
                                    <p>Overdue</p>
                                    <h4>$1596</h4>
                                </div>
                                <div class="col-6 col-xxs-3 ">
                                    <p>Outstanding</p>
                                    <h4>$2586</h4>
                                </div>
                                <div class="col-6 col-xxs-3 ">
                                    <p>Open</p>
                                    <h4>$5678</h4>
                                </div>
                                <div class="col-6 col-xxs-3 ">
                                    <p>Paid</p>
                                    <h4>$2458</h4>
                                </div>
                            </div>
                            <div class="table-responsive m-t-20">
                                <table id="datatable-buttons" class="table">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Name</th>
                                            <th>Date</th>
                                            <th>Total</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-muted">
                                        <tr>
                                            <td>1</td>
                                            <td>Smith Drake</td>
                                            <td>27/3/2014</td>
                                            <td>$1,00,000</td>
                                            <td>
                                                <label class="badge mb-0 badge-primary-inverse"> Overdue</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Martha Doe</td>
                                            <td>28/3/2015</td>
                                            <td>$70,000</td>
                                            <td>
                                                <label class="badge mb-0 badge-warning-inverse
                                                    "> Outstanding</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Fenish Paul</td>
                                            <td>24/3/2015</td>
                                            <td>$60,000</td>
                                            <td>
                                                <label class="badge mb-0 badge-info-inverse
                                                    "> Open</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Albom Mitch</td>
                                            <td>29/3/2016</td>
                                            <td>$60,000</td>
                                            <td>
                                                <label class="badge mb-0 badge-success-inverse
                                                    "> Paid</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Bacon Francis</td>
                                            <td>21/3/2016</td>
                                            <td>$50,000</td>
                                            <td>
                                                <label class="badge mb-0 badge-primary-inverse
                                                    "> Overdue</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Vanessa Angel</td>
                                            <td>18/3/2016</td>
                                            <td>$42,000</td>
                                            <td>
                                                <label class="badge mb-0 badge-warning-inverse
                                                    "> Outstanding</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Fenish Paul</td>
                                            <td>24/3/2015</td>
                                            <td>$60,000</td>
                                            <td>
                                                <label class="badge mb-0 badge-info-inverse
                                                    "> Open</label>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-xl-6 col-xxl-4">
                            <div class="card card-statistics">
                                <div class="card-header">
                                    <h4 class="card-title">Conversion Visualizer</h4>
                                </div>
                                <div class="card-body pb-2">
                                    <div class="row no-gutters">
                                        <div class="col-sm-4 mt-3">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item px-0 pt-0 d-flex justify-content-between align-items-center">
                                                    <p class="text-muted m-b-0">
                                                        <i class="fa fa-circle-o mr-2 text-primary"></i>
                                                        Direct
                                                    </p>
                                                    <p class="text-primary mb-0">44</p>
                                                </li>
                                                <li class="list-group-item d-flex px-0 justify-content-between align-items-center">
                                                    <p class="text-muted m-b-0">
                                                        <i class="fa fa-circle-o mr-2 text-warning"></i>
                                                        Referral
                                                    </p>
                                                    <p class="text-warning mb-0">55</p>
                                                </li>
                                                <li class="list-group-item d-flex px-0 justify-content-between align-items-center">
                                                    <p class="text-muted m-b-0">
                                                        <i class="fa fa-circle-o mr-2 text-info"></i>
                                                        Organic Search
                                                    </p>
                                                    <p class="text-info mb-0">13</p>
                                                </li>
                                                <li class="list-group-item d-flex px-0 justify-content-between align-items-center">
                                                    <p class="text-muted m-b-0">
                                                        <i class="fa fa-circle-o mr-2 text-danger"></i>
                                                        Social Network
                                                    </p>
                                                    <p class="text-danger mb-0">53</p>
                                                </li>
                                                <li class="list-group-item d-flex px-0 justify-content-between align-items-center">
                                                    <p class="text-muted m-b-0">
                                                        <i class="fa fa-circle-o mr-2 text-dark"></i>
                                                        Other Advertising
                                                    </p>
                                                    <p class="text-dark mb-0">35</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="apexchart-wrapper">
                                                <div id="ecommercedemo5"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-statistics bg-gradient">
                                <div class="card-header d-flex justify-content-between border-0 pb-0">
                                    <div class="card-heading">
                                        <h4 class="card-title text-white">Next payout</h4>
                                    </div>
                                    <div class="dropdown">
                                        <a class="text-white tooltip-wrapper font-18" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Payout account: XXXX4955"><i class="fa fa-question-circle-o"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h2 class="text-white mb-0">$12,127.48</h2>
                                    <p class="text-white">Your payout will be processed on January 15, 2019</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-xxl-4 m-b-30">
                            <div class="card card-statistics h-100 mb-0">
                                <div class="card-header">
                                    <h4 class="card-title">Best selling product</h4>
                                </div>
                                <div class="card-body">
                                    <div class="blog">
                                        <img class="img-fluid" src="assets/img/product.jpg" alt="">
                                        <h4 class="m-b-10 m-t-20"><a href="#">Active Smartwatch</a></h4>
                                        <p>Explicabo rem autem fugit, rerum, debitis, perferendis aut Lorem ipsum dolor sit Lorem ipsum dolor sit amet, consectetur.</p>
                                    </div>
                                    <div class="product-bar m-t-30">
                                        <div class="d-flex">
                                            <span>Ordered: <b>45</b></span>
                                            <span class="ml-auto">Items available: <b>8</b></span>
                                        </div>
                                        <div class="progress my-3" style="height: 6px;">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 m-b-30">
                            <div class="card card-statistics h-100 mb-0">
                                <div class="card-header">
                                    <h4 class="card-title">Sales overview</h4>
                                </div>
                                <div class="card-body p-30">
                                    <div class="row">
                                        <div class="col-xxs-6 h-100 p-2 border-right border-bottom border-xxs-right-0">
                                            <div class="d-flex align-items-center justify-content-center">
                                                <div class="p-3 text-center">
                                                    <a href="javascript:void(0);" class="btn btn-icon btn-round btn-inverse-primary"><i class="fe fe-settings"></i></a>
                                                    <h2 class="m-t-20 mb-0">$272</h2>
                                                    <p class="text-muted d-block m-b-0">Avg. Order Value</p>
                                                    <span class="text-primary"> <i class="fe fe-activity"></i> 155.5% </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxs-6 h-100 p-2 border-bottom">
                                            <div class="d-flex align-items-center justify-content-center">
                                                <div class="p-3 text-center">
                                                    <a href="javascript:void(0);" class="btn btn-icon btn-round btn-inverse-success"><i class="fe fe-user-check"></i></a>
                                                    <h2 class="m-t-20 mb-0">$450</h2>
                                                    <p class="text-muted d-block m-b-0">Page Impressions</p>
                                                    <span class="text-success"> <i class="fe fe-arrow-down-left"></i> 155.5% </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxs-6 h-100 p-2 border-right border-xxs-bottom border-xxs-right-0">
                                            <div class="d-flex align-items-center justify-content-center">
                                                <div class="p-3 text-center">
                                                    <a href="javascript:void(0);" class="btn btn-icon btn-round btn-inverse-danger"><i class="fe fe-bar-chart-2"></i></a>
                                                    <h2 class="m-t-20 mb-0">$135</h2>
                                                    <p class="text-muted d-block m-b-0">Quantity</p>
                                                    <span class="text-danger"> <i class="fe fe-arrow-down-right"></i> 155.5% </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxs-6 h-100 p-2 ">
                                            <div class="d-flex align-items-center justify-content-center">
                                                <div class="p-3 text-center">
                                                    <a href="javascript:void(0);" class="btn btn-icon btn-round btn-inverse-info"><i class="fe fe-crosshair"></i></a>
                                                    <h2 class="m-t-20 mb-0">$7525</h2>
                                                    <p class="text-muted d-block m-b-0">Total Products</p>
                                                    <span class="text-info"> <i class="fe fe-arrow-up"></i> 155.5% </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </div>
    <!-- end app-main -->

    <script src={{asset('Assets/js/vendors.js')}}></script>

    <script src={{asset('Assets/js/app.js')}}></script>
@endsection

