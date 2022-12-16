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
                    <div class="user-welcome d-block d-xl-flex flex-nowrap align-items-center">
                        <div class="bg-img mb-2 mb-xl-0 mr-3">
                            <img class="img-fluid rounded" src="assets/img/avtar/06.jpg" alt="user">
                        </div>
                        <div class="page-title mb-2 mb-xl-0">
                            <h1 class="mb-1">Good Morning, Michael!</h1>
                            <p>You have 7 essential tasks today, 8 messages and notifications to respond.</p>
                        </div>
                        <div class="ml-auto d-flex align-items-center secondary-menu text-center">
                            <a href="javascript:void(0);" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Todo list">
                                <i class="fe fe-edit btn btn-icon text-primary"></i>
                            </a>
                            <a href="javascript:void(0);" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Projects">
                                <i class="fa fa-lightbulb-o btn btn-icon text-success"></i>
                            </a>
                            <a href="javascript:void(0);" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Task">
                                <i class="fa fa-check btn btn-icon text-warning"></i>
                            </a>
                            <a href="javascript:void(0);" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Calendar">
                                <i class="fa fa-calendar-o btn btn-icon text-cyan"></i>
                            </a>
                            <a href="javascript:void(0);" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Analytics">
                                <i class="fa fa-bar-chart-o btn btn-icon text-danger"></i>
                            </a>
                        </div>
                        <div class="ml-xl-4 mt-xl-0 ml-0 mt-3 d-flex align-items-center">
                            <div class="dropdown">
                                <a class="btn btn-primary" href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Add New
                                </a>
                                <div class="dropdown-menu custom-dropdown dropdown-menu-right dropdown-menu-left-mobile p-4">
                                    <a class="dropdown-item" href="#"><i class="ti ti-layers-alt"></i>Add Project </a>
                                    <a class="dropdown-item" href="#"><i class="ti ti-files"></i>Add Task </a>
                                    <a class="dropdown-item" href="#"><i class="ti ti-id-badge"></i>Add Team </a>
                                    <a class="dropdown-item" href="#"><i class="ti ti-pencil-alt"></i>Leave App </a>
                                    <a class="dropdown-item" href="#"><i class="ti ti-email"></i>New Message</a>
                                    <a class="dropdown-item" href="#"><i class="ti ti-user"></i>Edit Profile</a>
                                    <a class="dropdown-item" href="#"><i class="ti ti-settings"></i>Settings</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
            </div>
            <!-- end row -->
            <!-- begin row -->
            <div class="row">
                <div class="col-xxl-6 m-b-30">
                    <div class="card card-statistics h-100 m-b-0">
                        <div class="card-header d-flex justify-content-between">
                            <div class="card-heading">
                                <h4 class="card-title">Total Revenue</h4>
                            </div>
                            <div class="dropdown">
                                <select class="custom-select custom-select-sm" id="inputGroupSelect01">
                                    <option selected>1st Quarter</option>
                                    <option value="1">2nd Quarter</option>
                                    <option value="2">3rd Quarter</option>
                                    <option value="3">4th Quarter</option>
                                </select>
                            </div>
                        </div>
                        <div class="card-body py-0">
                            <div id="crmdemo1"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-3 m-b-30">
                    <div class="card card-statistics h-100 mb-0">
                        <div class="card-body p-3">
                            <div class="row align-items-center mb-3">
                                <div class="col-6">
                                    <h2 class="mb-0">66%</h2>
                                </div>
                                <div class="col-6 text-right">
                                    <i class="fe fe-thumbs-up text-pink font-20"></i>
                                    <p class="d-block ">Project Completed</p>
                                </div>
                                <div class="col">
                                    <div class="progress my-3" style="height: 6px;">
                                        <div class="progress-bar bg-pink" role="progressbar" style="width: 66%;" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center mb-3">
                                <div class="col-6">
                                    <h2 class="mb-0">78%</h2>
                                </div>
                                <div class="col-6 text-right">
                                    <i class="fe fe-activity text-primary font-20"></i>
                                    <p class="d-block ">Project On Going</p>
                                </div>
                                <div class="col">
                                    <div class="progress my-3" style="height: 6px;">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 78%;" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center mb-3">
                                <div class="col-6">
                                    <h2 class="mb-0">47%</h2>
                                </div>
                                <div class="col-6 text-right">
                                    <i class="fe fe-trending-up text-orange font-20"></i>
                                    <p class="d-block ">Project Up coming</p>
                                </div>
                                <div class="col">
                                    <div class="progress my-3" style="height: 6px;">
                                        <div class="progress-bar bg-orange" role="progressbar" style="width: 47%;" aria-valuenow="47" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center mb-3">
                                <div class="col-6">
                                    <h2 class="mb-0">59%</h2>
                                </div>
                                <div class="col-6 text-right">
                                    <i class="fe fe-trash-2 text-info font-20"></i>
                                    <p class="d-block ">Project Canceled</p>
                                </div>
                                <div class="col">
                                    <div class="progress my-3" style="height: 6px;">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 59%;" aria-valuenow="59" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <h2 class="mb-0">85%</h2>
                                </div>
                                <div class="col-6 text-right">
                                    <i class="fe fe-trending-up text-success font-20"></i>
                                    <p class="d-block ">Your efficiency</p>
                                </div>
                                <div class="col">
                                    <div class="progress my-3" style="height: 6px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-3 h-100 ">
                    <div class="card card-statistics h-50 m-b-30 bg-primary o-hidden">
                        <div class="card-body">
                            <div class="d-flex p-3">
                                <div class="mr-2">
                                    <h5 class="text-white mb-1">Your project overview</h5>
                                    <p class="text-white">Last invoice 12 jan</p>
                                </div>
                                <div class="ml-auto">
                                    <h3 class="text-white mb-0">$8,963</h3>
                                    <p class="text-white">Total earning</p>
                                </div>
                            </div>
                        </div>
                        <div class="apexchart-wrapper">
                            <div id="jobportaldemo6" class="chart-fit jobportaldemo6"></div>
                        </div>
                    </div>
                    <div class="card card-statistics h-50 m-b-30 bg-pink">
                        <div class="card-body">
                            <div class="d-flex p-3">
                                <div class="mr-2">
                                    <h4 class="text-white mb-1">Total hours this week</h4>
                                    <p class="text-white">You need 10 more hours</p>
                                </div>
                                <div class="ml-auto">
                                    <h2 class="text-white">30hr</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-4 mb-30">
                    <div class="card card-statistics h-100 mb-0">
                        <div class="card-header d-flex justify-content-between">
                            <div class="card-heading">
                                <h4 class="card-title">Support Tickets</h4>
                            </div>
                            <div class="dropdown">
                                <a class="btn btn-round btn-inverse-primary btn-xs" href="#!">View all </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row active-task m-b-20">
                                <div class="col-1">
                                    <div class="bg-type mt-1">
                                        <span>PP</span>
                                    </div>
                                </div>
                                <div class="col-11">
                                    <small class="d-block mb-1">Car dealer</small>
                                    <h5 class="mb-0"><a href="#">Unread utf-8 in more quick overview</a></h5>
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item">
                                            <small> Created by Lizzy Halfman</small>
                                        </li>
                                        <li class="list-inline-item">|</li>
                                        <li class="list-inline-item">
                                            <small>Saturday, March 17 2019</small>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row active-task m-b-20">
                                <div class="col-1">
                                    <div class="bg-type bg-pink mt-1">
                                        <span>SL</span>
                                    </div>
                                </div>
                                <div class="col-11">
                                    <small class="d-block mb-1">Webster HTML5 </small>
                                    <h5 class="mb-0"><a href="#">I get an error "No Direct Access Allowed!" when I enter purchase</a></h5>
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item">
                                            <small> Created by Samuel Woods</small>
                                        </li>
                                        <li class="list-inline-item">|</li>
                                        <li class="list-inline-item">
                                            <small>Sunday, March 19 2019</small>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row active-task m-b-20">
                                <div class="col-1">
                                    <div class="bg-type bg-success mt-1">
                                        <span>MP</span>
                                    </div>
                                </div>
                                <div class="col-11">
                                    <small class="d-block mb-1">The corps</small>
                                    <h5 class="mb-0"><a href="#">OAuth Credentials not generating the key</a></h5>
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item">
                                            <small> Created by Andrew nico</small>
                                        </li>
                                        <li class="list-inline-item">|</li>
                                        <li class="list-inline-item">
                                            <small>Monday, March 21 2019</small>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row active-task m-b-20">
                                <div class="col-1">
                                    <div class="bg-type bg-orange mt-1">
                                        <span>SP</span>
                                    </div>
                                </div>
                                <div class="col-11">
                                    <small class="d-block mb-1">Sam martin vCard</small>
                                    <h5 class="mb-0"><a href="#">Pre-Buy Questions : For bakery Shop (Mentor Android Application)</a></h5>
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item">
                                            <small> Created by Jimmy Falicon</small>
                                        </li>
                                        <li class="list-inline-item">|</li>
                                        <li class="list-inline-item">
                                            <small>Friday, March 22 2019</small>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row active-task m-b-20">
                                <div class="col-1">
                                    <div class="bg-type bg-info mt-1">
                                        <span>AP</span>
                                    </div>
                                </div>
                                <div class="col-11">
                                    <small class="d-block mb-1">Mentor admin </small>
                                    <h5 class="mb-0"><a href="#">I need a payment option, for each seller per item</a></h5>
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item">
                                            <small> Created by Brian Joedon</small>
                                        </li>
                                        <li class="list-inline-item">|</li>
                                        <li class="list-inline-item">
                                            <small>Saturday, March 17 2019</small>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-8 mb-30">
                    <div class="card card-statistics h-100 mb-0">
                        <div class="card-header d-flex justify-content-between">
                            <div class="card-heading">
                                <h4 class="card-title">Ongoing projects</h4>
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
                            <div class="max-h-600 scrollbar scroll_dark" style="height: 400px">
                                <div class="table-responsive">
                                    <table id="datatable-buttons" class="table mb-0 table-borderless">
                                        <thead class="bg-light">
                                            <tr>
                                                <th>Project Name </th>
                                                <th> Start Date </th>
                                                <th> Due Date </th>
                                                <th>Team </th>
                                                <th>Status</th>
                                                <th>Clients</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-muted">
                                            <tr>
                                                <td>App Design and development </td>
                                                <td>Dec 03, 2018 </td>
                                                <td>Dec 25, 2018 </td>
                                                <td class="pl-4">
                                                    <div class="bg-img-group">
                                                        <div class="bg-img bg-img-sm">
                                                            <a class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="Brian" href="#"> <img class="img-fluid" src="assets/img/avtar/01.jpg" alt="user"></a>
                                                        </div>
                                                        <div class="bg-img bg-img-sm">
                                                            <a class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="Smithdro" href="#"> <img class="img-fluid" src="assets/img/avtar/02.jpg" alt="user"></a>
                                                        </div>
                                                        <div class="bg-img bg-img-sm">
                                                            <a class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="Adrian Demiandro" href="#"> <img class="img-fluid" src="assets/img/avtar/03.jpg" alt="user"></a>
                                                        </div>
                                                        <div class="bg-img bg-img-sm">
                                                            <a class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="Sandradro Garett" href="#"> <img class="img-fluid" src="assets/img/avtar/04.jpg" alt="user"></a>
                                                        </div>
                                                        <div class="bg-img bg-img-more bg-img-sm">
                                                            <a class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="View all" href="#"><span>12+</span> </a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><label class="badge badge-info-inverse">On Hold</label></td>
                                                <td>Brian</td>
                                            </tr>
                                            <tr>
                                                <td>Coffee Detail page - main page </td>
                                                <td>Jan 12, 2019 </td>
                                                <td>Feb 22, 2019 </td>
                                                <td class="pl-4">
                                                    <div class="bg-img-group">
                                                        <div class="bg-img bg-img-sm">
                                                            <a class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="Brian" href="#"> <img class="img-fluid" src="assets/img/avtar/05.jpg" alt="user"></a>
                                                        </div>
                                                        <div class="bg-img bg-img-sm">
                                                            <a class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="Smithdro" href="#"> <img class="img-fluid" src="assets/img/avtar/06.jpg" alt="user"></a>
                                                        </div>
                                                        <div class="bg-img bg-img-sm">
                                                            <a class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="Adrian Demiandro" href="#"> <img class="img-fluid" src="assets/img/avtar/07.jpg" alt="user"></a>
                                                        </div>
                                                        <div class="bg-img bg-img-more bg-img-sm">
                                                            <a class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="View all" href="#"><span>10+</span> </a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><label class="badge badge-danger-inverse">Pending</label></td>
                                                <td>Smithdro</td>
                                            </tr>
                                            <tr>
                                                <td>Poster illustrater Design </td>
                                                <td>Feb 12, 2019 </td>
                                                <td>Mar 25, 2019 </td>
                                                <td class="pl-4">
                                                    <div class="bg-img-group">
                                                        <div class="bg-img bg-img-sm">
                                                            <a class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="Brian" href="#"> <img class="img-fluid" src="assets/img/avtar/09.jpg" alt="user"></a>
                                                        </div>
                                                        <div class="bg-img bg-img-sm">
                                                            <a class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="Smithdro" href="#"> <img class="img-fluid" src="assets/img/avtar/03.jpg" alt="user"></a>
                                                        </div>
                                                        <div class="bg-img bg-img-sm">
                                                            <a class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="Adrian Demiandro" href="#"> <img class="img-fluid" src="assets/img/avtar/01.jpg" alt="user"></a>
                                                        </div>
                                                        <div class="bg-img bg-img-sm">
                                                            <a class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="Garydro" href="#"> <img class="img-fluid" src="assets/img/avtar/02.jpg" alt="user"></a>
                                                        </div>
                                                        <div class="bg-img bg-img-more bg-img-sm">
                                                            <a class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="View all" href="#"><span>5+</span> </a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><label class="badge badge-primary-inverse">Working</label></td>
                                                <td>Adrian Demiandro</td>
                                            </tr>
                                            <tr>
                                                <td>Drinking Bottel Design </td>
                                                <td>Apr 30, 2019 </td>
                                                <td>Apr 25, 2019 </td>
                                                <td class="pl-4">
                                                    <div class="bg-img-group">
                                                        <div class="bg-img bg-img-sm">
                                                            <a class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="Brian" href="#"> <img class="img-fluid" src="assets/img/avtar/03.jpg" alt="user"></a>
                                                        </div>
                                                        <div class="bg-img bg-img-sm">
                                                            <a class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="Smithdro" href="#"> <img class="img-fluid" src="assets/img/avtar/04.jpg" alt="user"></a>
                                                        </div>
                                                        <div class="bg-img bg-img-sm">
                                                            <a class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="Adrian Demiandro" href="#"> <img class="img-fluid" src="assets/img/avtar/05.jpg" alt="user"></a>
                                                        </div>
                                                        <div class="bg-img bg-img-sm">
                                                            <a class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="Garydro" href="#"> <img class="img-fluid" src="assets/img/avtar/06.jpg" alt="user"></a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><label class="badge badge-success-inverse">Completed</label></td>
                                                <td>Sandradro Garett</td>
                                            </tr>
                                            <tr>
                                                <td>Design and development </td>
                                                <td>May 04, 2019 </td>
                                                <td>Jun 06, 2019 </td>
                                                <td class="pl-4">
                                                    <div class="bg-img-group">
                                                        <div class="bg-img bg-img-sm">
                                                            <a class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="Brian" href="#"> <img class="img-fluid" src="assets/img/avtar/07.jpg" alt="user"></a>
                                                        </div>
                                                        <div class="bg-img bg-img-sm">
                                                            <a class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="Smithdro" href="#"> <img class="img-fluid" src="assets/img/avtar/08.jpg" alt="user"></a>
                                                        </div>
                                                        <div class="bg-img bg-img-sm">
                                                            <a class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="Adrian Demiandro" href="#"> <img class="img-fluid" src="assets/img/avtar/09.jpg" alt="user"></a>
                                                        </div>
                                                        <div class="bg-img bg-img-more bg-img-sm">
                                                            <a class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="View all" href="#"><span>5+</span> </a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><label class="badge badge-success-inverse">Completed</label></td>
                                                <td>Garydro</td>
                                            </tr>
                                            <tr>
                                                <td>Landing page Design - Home </td>
                                                <td>Jul 12, 2019 </td>
                                                <td>Jul 26, 2019 </td>
                                                <td class="pl-4">
                                                    <div class="bg-img-group">
                                                        <div class="bg-img bg-img-sm">
                                                            <a class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="Brian" href="#"> <img class="img-fluid" src="assets/img/avtar/03.jpg" alt="user"></a>
                                                        </div>
                                                        <div class="bg-img bg-img-sm">
                                                            <a class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="Smithdro" href="#"> <img class="img-fluid" src="assets/img/avtar/04.jpg" alt="user"></a>
                                                        </div>
                                                        <div class="bg-img bg-img-sm">
                                                            <a class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="Adrian Demiandro" href="#"> <img class="img-fluid" src="assets/img/avtar/05.jpg" alt="user"></a>
                                                        </div>
                                                        <div class="bg-img bg-img-sm">
                                                            <a class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="Garydro" href="#"> <img class="img-fluid" src="assets/img/avtar/06.jpg" alt="user"></a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><label class="badge badge-primary-inverse">Working</label></td>
                                                <td>Brian Joedro</td>
                                            </tr>
                                            <tr>
                                                <td>App Design and development </td>
                                                <td>Aug 04, 2019 </td>
                                                <td>Aug 23, 2019 </td>
                                                <td class="pl-4">
                                                    <div class="bg-img-group">
                                                        <div class="bg-img bg-img-sm">
                                                            <a class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="Brian" href="#"> <img class="img-fluid" src="assets/img/avtar/07.jpg" alt="user"></a>
                                                        </div>
                                                        <div class="bg-img bg-img-sm">
                                                            <a class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="Smithdro" href="#"> <img class="img-fluid" src="assets/img/avtar/08.jpg" alt="user"></a>
                                                        </div>
                                                        <div class="bg-img bg-img-sm">
                                                            <a class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="Adrian Demiandro" href="#"> <img class="img-fluid" src="assets/img/avtar/05.jpg" alt="user"></a>
                                                        </div>
                                                        <div class="bg-img bg-img-more bg-img-sm">
                                                            <a class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="View all" href="#"><span>6+</span> </a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><label class="badge badge-info-inverse">On Hold</label></td>
                                                <td>Alice Williams</td>
                                            </tr>
                                            <tr>
                                                <td>Coffee Detail page - main page </td>
                                                <td>Dec 05, 2019 </td>
                                                <td>Dec 25, 2019 </td>
                                                <td class="pl-4">
                                                    <div class="bg-img-group">
                                                        <div class="bg-img bg-img-sm">
                                                            <a class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="Brian" href="#"> <img class="img-fluid" src="assets/img/avtar/06.jpg" alt="user"></a>
                                                        </div>
                                                        <div class="bg-img bg-img-sm">
                                                            <a class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="Smithdro" href="#"> <img class="img-fluid" src="assets/img/avtar/02.jpg" alt="user"></a>
                                                        </div>
                                                        <div class="bg-img bg-img-sm">
                                                            <a class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="Adrian Demiandro" href="#"> <img class="img-fluid" src="assets/img/avtar/07.jpg" alt="user"></a>
                                                        </div>
                                                        <div class="bg-img bg-img-sm">
                                                            <a class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="Garydro" href="#"> <img class="img-fluid" src="assets/img/avtar/08.jpg" alt="user"></a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><label class="badge badge-primary-inverse">Working</label></td>
                                                <td>Sandradro Garet</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-xxl-4 mb-30">
                    <div class="card card-statistics h-100 mb-0">
                        <div class="card-header d-flex justify-content-between">
                            <div class="card-heading">
                                <h4 class="card-title">Employee list</h4>
                            </div>
                            <div class="dropdown">
                                <a class="btn btn-round btn-inverse-primary btn-xs" href="#!">Add new </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row align-items-center m-b-20">
                                <div class="col-12 col-sm-2 mb-3 mb-sm-0">
                                    <div class="bg-img">
                                        <img class="img-fluid" src="assets/img/avtar/01.jpg" alt="user">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-7 mb-3 mb-sm-0">
                                    <h4 class="mb-0">Jon Watson</h4>
                                    <span>jonwatson@gmail.com</span>
                                </div>
                                <div class="col-3">
                                    <label class="badge badge-primary-inverse">Web designer</label>
                                </div>
                            </div>
                            <div class="row align-items-center m-b-20">
                                <div class="col-12 col-sm-2 mb-3 mb-sm-0">
                                    <div class="bg-img">
                                        <img class="img-fluid" src="assets/img/avtar/02.jpg" alt="user">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-7 mb-3 mb-sm-0">
                                    <h4 class="mb-0">Smithdro</h4>
                                    <span>smithdro@gmail.com</span>
                                </div>
                                <div class="col-12 col-sm-3">
                                    <label class="badge badge-warning-inverse">Programmer</label>
                                </div>
                            </div>
                            <div class="row align-items-center m-b-20">
                                <div class="col-12 col-sm-2 mb-3 mb-sm-0">
                                    <div class="bg-img">
                                        <img class="img-fluid" src="assets/img/avtar/03.jpg" alt="user">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-7 mb-3 mb-sm-0">
                                    <h4 class="mb-0">Brian</h4>
                                    <span>brian@gmail.com</span>
                                </div>
                                <div class="col-12 col-sm-3">
                                    <label class="badge badge-info-inverse">App developer</label>
                                </div>
                            </div>
                            <div class="row align-items-center m-b-20">
                                <div class="col-12 col-sm-2 mb-3 mb-sm-0">
                                    <div class="bg-img">
                                        <img class="img-fluid" src="assets/img/avtar/04.jpg" alt="user">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-7 mb-3 mb-sm-0">
                                    <h4 class="mb-0">Garydro</h4>
                                    <span>garydro@gmail.com</span>
                                </div>
                                <div class="col-12 col-sm-3">
                                    <label class="badge badge-danger-inverse">Web developer</label>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-12 col-sm-2 mb-3 mb-sm-0">
                                    <div class="bg-img">
                                        <img class="img-fluid" src="assets/img/avtar/05.jpg" alt="user">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-7 mb-3 mb-sm-0">
                                    <h4 class="mb-0">Alice Williams</h4>
                                    <span>henryfoster@gmail.com</span>
                                </div>
                                <div class="col-12 col-sm-3">
                                    <label class="badge badge-primary-inverse">Designer</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-xxl-4 mb-30">
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
                            <ul class="activity">
                                <li class="activity-item primary">
                                    <div class="activity-info">
                                        <h5 class="mb-0">Initial Briefing</h5>
                                        <span>10:30 AM</span>
                                    </div>
                                </li>
                                <li class="activity-item info">
                                    <div class="activity-info">
                                        <h5 class="mb-0"> Assign task for Smith. </h5>
                                        <span>
                                                11.00 AM
                                            </span>
                                    </div>
                                </li>
                                <li class="activity-item success">
                                    <div class="activity-info">
                                        <h5 class="mb-0"> Complete milestone 3 and update. </h5>
                                        <span>
                                                2.00 PM
                                            </span>
                                    </div>
                                </li>
                                <li class="activity-item danger">
                                    <div class="activity-info">
                                        <h5 class="mb-0">Start new task with mark. </h5>
                                        <span>
                                                4.00 PM
                                            </span>
                                    </div>
                                </li>
                                <li class="activity-item warning">
                                    <div class="activity-info">
                                        <h5 class="mb-0">Release first milestone</h5>
                                        <span>5.30 PM</span>
                                    </div>
                                </li>
                                <li class="activity-item info">
                                    <div class="activity-info">
                                        <h5 class="mb-0"> Meeting with client and CEO.</h5>
                                        <span>
                                                6.30 PM
                                            </span>
                                    </div>
                                </li>
                                <li class="activity-item success">
                                    <div class="activity-info">
                                        <h5 class="mb-0">Meeting with Amanda and team.</h5>
                                        <span>
                                                8.00 PM
                                            </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 mb-30">
                    <div class="card card-statistics h-100 mb-0">
                        <div class="card-header">
                            <div class="card-heading">
                                <h4 class="card-title">Bidding overview</h4>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="apexchart-wrapper">
                                <div id="crmdemo2"></div>
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