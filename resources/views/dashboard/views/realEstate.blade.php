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
                            <h1>Real Estate</h1>
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
                                    <li class="breadcrumb-item active text-primary" aria-current="page">Real Estate</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- end page title -->
                </div>
            </div>
            <!-- end row -->
            <!-- start real estate contant -->
            <div class="row">
                <div class="col-xs-6 col-xxl-3 m-b-30">
                    <div class="card card-statistics h-100 m-b-0 bg-pink">
                        <div class="card-body">
                            <h2 class="text-white mb-0">128</h2>
                            <p class="text-white">All Project</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-xxl-3 m-b-30">
                    <div class="card card-statistics h-100 m-b-0 bg-primary">
                        <div class="card-body">
                            <h2 class="text-white mb-0">758</h2>
                            <p class="text-white">Sale Properties </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-xxl-3 m-b-30">
                    <div class="card card-statistics h-100 m-b-0 bg-orange">
                        <div class="card-body">
                            <h2 class="text-white mb-0">2521</h2>
                            <p class="text-white">Rent Properties </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-xxl-3 m-b-30">
                    <div class="card card-statistics h-100 m-b-0 bg-info">
                        <div class="card-body">
                            <h2 class="text-white mb-0">$24,500</h2>
                            <p class="text-white">Total Earnings</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-6 m-b-30">
                    <div class="card card-statistics h-100 m-b-0">
                        <div class="card-header d-flex justify-content-between">
                            <div class="card-heading">
                                <h4 class="card-title">Income analysis</h4>
                            </div>
                            <div class="dropdown">
                                <a class="p-2" href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe fe-more-horizontal"></i>
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
                        <div class="card-body pb-0">
                            <div class="row">
                                <div class="col-xxs-6 col-md-4">
                                    <h5 class="mb-1 text-pink">Sale income</h5>
                                    <p>18% High Then Last Month</p>
                                </div>
                                <div class="col-xxs-6 col-md-4">
                                    <h5 class="mb-1 text-primary">Rent income</h5>
                                    <p>26% High Then Last Month</p>
                                </div>
                            </div>
                            <div class="apexchart-wrapper">
                                <div id="realestatedemo1" class="chart-fit"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 m-b-30">
                    <div class="card card-statistics h-100 mb-0">
                        <div class="card-header">
                            <h4 class="card-title">Revenue overview</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xs-6 mb-3 mb-xs-0">
                                    <h2>3.8k</h2>
                                    <span class="d-block mb-2 font-16">AVG months</span>
                                    <span class="d-block mb-5"><b class="text-primary">-65.88%</b> vs last 1 months</span>
                                    <p class="mb-3">Sapiente corporis fugiat, doloremque eveniet nostrum id molestiae quaerat!</p>
                                    <a class="btn btn-round btn-inverse-primary" href="#"><b>View details </b></a>
                                </div>
                                <div class="col-xs-6">
                                    <div class="apexchart-wrapper">
                                        <div id="realestatedemo3" class="chart-fit"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top my-4"></div>
                            <h4 class="card-title">Income by department</h4>
                            <div class="row">
                                <div class="col-12 col-xs-3">
                                    <span>Purchases: <b>$1,475</b></span>
                                    <div class="progress my-3" style="height: 4px;">
                                        <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-12 col-xs-3">
                                    <span>Sells: <b>$23,475</b></span>
                                    <div class="progress my-3" style="height: 4px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 66%;" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-12 col-xs-3">
                                    <span>Rented: <b>$1,658</b></span>
                                    <div class="progress my-3" style="height: 4px;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 78%;" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-12 col-xs-3">
                                    <span>Leased: <b>$12,489</b></span>
                                    <div class="progress my-3" style="height: 4px;">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-4 m-b-30">
                    <div class="card card-statistics h-100 m-b-0">
                        <div class="card-header bg-gradient">
                            <div class="row align-items-center">
                                <div class="col-12 col-sm-6">
                                    <div class="bg-img bg-img-big m-auto m-sm-0">
                                        <img class="img-fluid" src="assets/img/avtar/10.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 text-center mt-3 mt-sm-0 text-sm-right">
                                    <h4 class="mb-0 text-white">John Doe</h4>
                                    <span class="text-white">Agent of Property</span>
                                    <h5 class="mt-3 text-white mb-0"> (+1) 774-238-0096</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="Name" placeholder="Full name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="Message"></textarea>
                                </div>
                                <a class="btn btn-outline-primary btn-block" href="#">Submit Request</a>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-8 m-b-30">
                    <div class="card card-statistics h-100 m-b-0">
                        <div class="card-header d-flex justify-content-between">
                            <div class="card-heading">
                                <h4 class="card-title">Recently added property </h4>
                            </div>
                            <div class="dropdown">
                                <a class="p-2" href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe fe-more-horizontal"></i>
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
                            <div class="table-responsive">
                                <table class="table table-borderless mb-0">
                                    <thead class="bg-light">
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Customer</th>
                                            <th>Photo</th>
                                            <th>Property</th>
                                            <th>Date </th>
                                            <th>Type</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-muted mb-0">
                                        <tr>
                                            <td>#54981</td>
                                            <td>Alice Williams</td>
                                            <td>
                                                <div class="bg-img">
                                                    <img class="img-fluid rounded" src="assets/img/real-estate/01.jpg" alt="">
                                                </div>
                                            </td>
                                            <td>Eaton Place</td>
                                            <td>20-01-2019</td>
                                            <td>Rent</td>
                                            <td><span class="badge badge-success ">Paid</span></td>
                                            <td>
                                                <a href="javascript:void(0)" class="mr-2"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"></i></a>
                                                <a href="javascript:void(0)"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#25425</td>
                                            <td>AnnaHorno</td>
                                            <td>
                                                <div class="bg-img">
                                                    <img class="img-fluid rounded" src="assets/img/real-estate/02.jpg" alt="">
                                                </div>
                                            </td>
                                            <td>Kent Terrace </td>
                                            <td>26-04-2019</td>
                                            <td>Sell</td>
                                            <td><span class="badge badge-warning">Paid</span></td>
                                            <td>
                                                <a href="javascript:void(0)" class="mr-2"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"></i></a>
                                                <a href="javascript:void(0)"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#25425</td>
                                            <td>Fielmonk</td>
                                            <td>
                                                <div class="bg-img">
                                                    <img class="img-fluid rounded" src="assets/img/real-estate/03.jpg" alt="">
                                                </div>
                                            </td>
                                            <td>Princes Gate Court</td>
                                            <td>14-04-2019</td>
                                            <td>Sell</td>
                                            <td><span class="badge badge-success">Pending</span></td>
                                            <td>
                                                <a href="javascript:void(0)" class="mr-2"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"></i></a>
                                                <a href="javascript:void(0)"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#25425</td>
                                            <td>Dutca Patrick</td>
                                            <td>
                                                <div class="bg-img">
                                                    <img class="img-fluid rounded" src="assets/img/real-estate/04.jpg" alt="">
                                                </div>
                                            </td>
                                            <td>Ossington Street</td>
                                            <td>06-12-2019</td>
                                            <td>Sold</td>
                                            <td><span class="badge badge-danger">Sold</span></td>
                                            <td>
                                                <a href="javascript:void(0)" class="mr-2"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"></i></a>
                                                <a href="javascript:void(0)"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"></i></a>
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
                <div class="col-xxl-5 m-b-30">
                    <div class="card card-statistics tab nav-border mb-0 h-100">
                        <div class="card-header d-block d-sm-flex align-items-center justify-content-between p-3">
                            <div class="card-heading mb-3 mb-sm-0">
                                <h4 class="card-title">Property overview </h4>
                            </div>
                            <div class="dropdown">
                                <ul class="nav nav-tabs mb-0" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link py-2 active show" id="sell-02-tab" data-toggle="tab" href="#sell-02" role="tab" aria-controls="sell-02" aria-selected="true">Sell</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link py-2" id="rent-02-tab" data-toggle="tab" href="#rent-02" role="tab" aria-controls="rent-02" aria-selected="false">Rent </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="sell-02" role="tabpanel" aria-labelledby="sell-02-tab">
                                    <div class="row align-items-center m-b-20">
                                        <div class="col-xs-2 mb-2 mb-xs-0">
                                            <img class="img-fluid" src="assets/img/real-estate/01.jpg" alt="">
                                        </div>
                                        <div class="col-xs-7">
                                            <h5 class="mb-1"> <a href="#">Atrium Apartments, St John's Wood, NW8 </a></h5>
                                            <span>05, Jun 2019, St John's Wood</span>
                                        </div>
                                        <div class="col-xs-3 mt-2 mt-xs-0 text-left text-xs-center">
                                            <a class="btn btn-xs btn-inverse-primary" href="#"> Read more </a>
                                        </div>
                                    </div>
                                    <div class="row align-items-center m-b-20">
                                        <div class="col-xs-2 mb-2 mb-xs-0">
                                            <img class="img-fluid" src="assets/img/real-estate/02.jpg" alt="">
                                        </div>
                                        <div class="col-xs-7">
                                            <h5 class="mb-1"> <a href="#">Old Church Street, Chelsea, London, SW3 </a></h5>
                                            <span>12, Jun 2019, Chelsea, London, SW3</span>
                                        </div>
                                        <div class="col-xs-3 mt-2 mt-xs-0 text-left text-xs-center">
                                            <a class="btn btn-xs btn-inverse-primary" href="#"> Read more </a>
                                        </div>
                                    </div>
                                    <div class="row align-items-center m-b-20">
                                        <div class="col-xs-2 mb-2 mb-xs-0">
                                            <img class="img-fluid" src="assets/img/real-estate/03.jpg" alt="">
                                        </div>
                                        <div class="col-xs-7">
                                            <h5 class="mb-1"> <a href="#">Wilton Place, Knightsbridge, London, SW1X 8RL </a></h5>
                                            <span>30, Jun 2019, London, SW1X 8RL</span>
                                        </div>
                                        <div class="col-xs-3 mt-2 mt-xs-0 text-left text-xs-center">
                                            <a class="btn btn-xs btn-inverse-primary" href="#"> Read more </a>
                                        </div>
                                    </div>
                                    <div class="row align-items-center m-b-20">
                                        <div class="col-xs-2 mb-2 mb-xs-0">
                                            <img class="img-fluid" src="assets/img/real-estate/04.jpg" alt="">
                                        </div>
                                        <div class="col-xs-7">
                                            <h5 class="mb-1"> <a href="#">Wilton Place, Knightsbridge, London, SW1X 8RL </a></h5>
                                            <span>30, Jun 2019, London, SW1X 8RL</span>
                                        </div>
                                        <div class="col-xs-3 mt-2 mt-xs-0 text-left text-xs-center">
                                            <a class="btn btn-xs btn-inverse-primary" href="#"> Read more </a>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-xs-2 mb-2 mb-xs-0">
                                            <img class="img-fluid" src="assets/img/real-estate/05.jpg" alt="">
                                        </div>
                                        <div class="col-xs-7">
                                            <h5 class="mb-1"> <a href="#">Ebury Square, Belgravia, London, SW1W </a></h5>
                                            <span>20, Sep 2019, London, SW1W </span>
                                        </div>
                                        <div class="col-xs-3 mt-2 mt-xs-0 text-left text-xs-center">
                                            <a class="btn btn-xs btn-inverse-primary" href="#"> Read more </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="rent-02" role="tabpanel" aria-labelledby="rent-02-tab">
                                    <div class="row align-items-center m-b-20">
                                        <div class="col-xs-2 mb-2 mb-xs-0">
                                            <img class="img-fluid" src="assets/img/real-estate/04.jpg" alt="">
                                        </div>
                                        <div class="col-xs-7">
                                            <h5 class="mb-1"> <a href="#">Wapping High Street, London, E1W </a></h5>
                                            <span>10, Sep 2019, St London, E1W</span>
                                        </div>
                                        <div class="col-xs-3 mt-2 mt-xs-0 text-left text-xs-center">
                                            <a class="btn btn-xs btn-inverse-primary" href="#"> Read more </a>
                                        </div>
                                    </div>
                                    <div class="row align-items-center m-b-20">
                                        <div class="col-xs-2 mb-2 mb-xs-0">
                                            <img class="img-fluid" src="assets/img/real-estate/05.jpg" alt="">
                                        </div>
                                        <div class="col-xs-7">
                                            <h5 class="mb-1"> <a href="#">Ebury Square, Belgravia, London, SW1W </a></h5>
                                            <span>20, Sep 2019, London, SW1W </span>
                                        </div>
                                        <div class="col-xs-3 mt-2 mt-xs-0 text-left text-xs-center">
                                            <a class="btn btn-xs btn-inverse-primary" href="#"> Read more </a>
                                        </div>
                                    </div>
                                    <div class="row align-items-center m-b-20">
                                        <div class="col-xs-2 mb-2 mb-xs-0">
                                            <img class="img-fluid" src="assets/img/real-estate/06.jpg" alt="">
                                        </div>
                                        <div class="col-xs-7">
                                            <h5 class="mb-1"> <a href="#">Elm Walk, Hampstead, NW3 </a></h5>
                                            <span>25, Sep 2019, Hampstead, NW3</span>
                                        </div>
                                        <div class="col-xs-3 mt-2 mt-xs-0 text-left text-xs-center">
                                            <a class="btn btn-xs btn-inverse-primary" href="#"> Read more </a>
                                        </div>
                                    </div>
                                    <div class="row align-items-center m-b-20">
                                        <div class="col-xs-2 mb-2 mb-xs-0">
                                            <img class="img-fluid" src="assets/img/real-estate/05.jpg" alt="">
                                        </div>
                                        <div class="col-xs-7">
                                            <h5 class="mb-1"> <a href="#">Ebury Square, Belgravia, London, SW1W </a></h5>
                                            <span>20, Sep 2019, London, SW1W </span>
                                        </div>
                                        <div class="col-xs-3 mt-2 mt-xs-0 text-left text-xs-center">
                                            <a class="btn btn-xs btn-inverse-primary" href="#"> Read more </a>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-xs-2 mb-2 mb-xs-0">
                                            <img class="img-fluid" src="assets/img/real-estate/05.jpg" alt="">
                                        </div>
                                        <div class="col-xs-7">
                                            <h5 class="mb-1"> <a href="#">Ebury Square, Belgravia, London, SW1W </a></h5>
                                            <span>20, Sep 2019, London, SW1W </span>
                                        </div>
                                        <div class="col-xs-3 mt-2 mt-xs-0 text-left text-xs-center">
                                            <a class="btn btn-xs btn-inverse-primary" href="#"> Read more </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-3 m-b-30">
                    <div class="card card-statistics h-100 mb-0">
                        <div class="card-header d-flex justify-content-between">
                            <div class="card-heading">
                                <h4 class="card-title">Project Activity</h4>
                            </div>
                            <div class="dropdown">
                                <a class="p-2" href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe fe-more-horizontal"></i>
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
                            <ul class="activity ml-0">
                                <li class="activity-item primary">
                                    <div class="activity-info">
                                        <h5 class="mb-0">Project Approved</h5>
                                        <span>10th Jan</span>
                                    </div>
                                </li>
                                <li class="activity-item info">
                                    <div class="activity-info">
                                        <h5 class="mb-0">Materials Purchased</h5>
                                        <span>
                                                15th Jan
                                            </span>
                                    </div>
                                </li>
                                <li class="activity-item success">
                                    <div class="activity-info">
                                        <h5 class="mb-0"> Title Cleared</h5>
                                        <span>
                                               26th Jan
                                            </span>
                                    </div>
                                </li>
                                <li class="activity-item danger">
                                    <div class="activity-info">
                                        <h5 class="mb-0">Bank Approval</h5>
                                        <span>
                                                2nd Feb
                                            </span>
                                    </div>
                                </li>
                                <li class="activity-item warning">
                                    <div class="activity-info">
                                        <h5 class="mb-0">Assigned Contractor</h5>
                                        <span>6th Feb</span>
                                    </div>
                                </li>
                                <li class="activity-item info">
                                    <div class="activity-info">
                                        <h5 class="mb-0">Ground Work In Progress</h5>
                                        <span>
                                                18th Feb
                                            </span>
                                    </div>
                                </li>
                                <li class="activity-item success">
                                    <div class="activity-info">
                                        <h5 class="mb-0">Half Project Completed</h5>
                                        <span>
                                                24th Feb
                                            </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-4 m-b-30">
                    <div class="card card-statistics h-100 mb-0">
                        <div class="card-header">
                            <h4 class="card-title">Agent list</h4>
                        </div>
                        <div class="card-body scrollbar scroll_dark" style="height: 380px;">
                            <div class="row align-items-center m-b-20">
                                <div class="col-4 col-xs-2">
                                    <div class="bg-img">
                                        <img class="img-fluid" src="assets/img/avtar/01.jpg" alt="user">
                                    </div>
                                </div>
                                <div class="col-8 col-xs-6">
                                    <h5 class="mb-0">Jon Watson</h5>
                                    <span>Sales and Retail</span>
                                </div>
                                <div class="col-xs-4 mt-3 mt-xs-0">
                                    <b class="text-dark d-block">25 Job done</b>
                                    <div class="ratings">
                                        <small><i class="fe fe-star-on text-warning"></i> (4.55) 9 reviews </small>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center m-b-20">
                                <div class="col-4 col-xs-2">
                                    <div class="bg-img">
                                        <img class="img-fluid" src="assets/img/avtar/02.jpg" alt="user">
                                    </div>
                                </div>
                                <div class="col-8 col-xs-6">
                                    <h5 class="mb-0">Smithdro</h5>
                                    <span>Sales and Retail</span>
                                </div>
                                <div class="col-xs-4 mt-3 mt-xs-0">
                                    <b class="text-dark d-block">12 Job done</b>
                                    <div class="ratings">
                                        <small><i class="fe fe-star-on text-warning"></i> (4.01) 5 reviews </small>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center m-b-20">
                                <div class="col-4 col-xs-2">
                                    <div class="bg-img">
                                        <img class="img-fluid" src="assets/img/avtar/03.jpg" alt="user">
                                    </div>
                                </div>
                                <div class="col-8 col-xs-6">
                                    <h5 class="mb-0">Brian</h5>
                                    <span>Sales and Retail</span>
                                </div>
                                <div class="col-xs-4 mt-3 mt-xs-0">
                                    <b class="text-dark d-block">23 Job done</b>
                                    <div class="ratings">
                                        <small><i class="fe fe-star-on text-warning"></i> (3.45) 8 reviews </small>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center m-b-20">
                                <div class="col-4 col-xs-2">
                                    <div class="bg-img">
                                        <img class="img-fluid" src="assets/img/avtar/04.jpg" alt="user">
                                    </div>
                                </div>
                                <div class="col-8 col-xs-6">
                                    <h5 class="mb-0">Garydro</h5>
                                    <span>Sales and Retail</span>
                                </div>
                                <div class="col-xs-4 mt-3 mt-xs-0">
                                    <b class="text-dark d-block">06 Job done</b>
                                    <div class="ratings">
                                        <small><i class="fe fe-star-on text-warning"></i> (2.55) 2 reviews </small>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-4 col-xs-2">
                                    <div class="bg-img">
                                        <img class="img-fluid" src="assets/img/avtar/05.jpg" alt="user">
                                    </div>
                                </div>
                                <div class="col-8 col-xs-6">
                                    <h5 class="mb-0">Alice Williams</h5>
                                    <span>Sales and Retail</span>
                                </div>
                                <div class="col-xs-4 mt-3 mt-xs-0">
                                    <b class="text-dark d-block">30 Job done</b>
                                    <div class="ratings">
                                        <small><i class="fe fe-star-on text-warning"></i> (5.0) 10 reviews </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end real estate contant -->
        </div>
        <!-- end container-fluid -->
    </div>
    <!-- end app-main -->

<script src={{asset('Assets/js/vendors.js')}}></script>

<script src={{asset('Assets/js/app.js')}}></script>
@endsection