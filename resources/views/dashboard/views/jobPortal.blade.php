@extends('dashboard.layouts.app')

@section('content')
    <!-- begin app-container -->
    <div class="app-container">
        <!-- begin app-nabar -->
        <aside class="app-navbar">
            <!-- begin sidebar-nav -->
            <div class="sidebar-nav scrollbar scroll_light">
                <ul class="metismenu " id="sidebarNav">
                    <li class="nav-static-title">Personal</li>
                    <li class="active">
                        <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
                            <i class="nav-icon ti ti-rocket"></i>
                            <span class="nav-title">Dashboards</span>
                            <span class="nav-label label label-danger">9</span>
                        </a>
                        <ul aria-expanded="false">
                            <li> <a href='index.html'>Default</a> </li>
                            <li> <a href='index-ecommerce.html'>Ecommerce</a> </li>
                            <li> <a href='index-car-dealer.html'>Car Dealer</a> </li>
                            <li> <a href='index-stock-market.html'>Stock Market</a> </li>
                            <li> <a href='index-dating.html'>Dating</a> </li>
                            <li class="active"> <a href='index-job-portal.html'>Job Portal</a> </li>
                            <li> <a href='index-crm.html'>CRM</a> </li>
                            <li> <a href='index-real-estate.html'>Real Estate</a> </li>
                            <li> <a href='index-crypto-currency.html'>Crypto Currency</a> </li>
                        </ul>
                    </li>
                    <li><a href="app-chat.html" aria-expanded="false"><i class="nav-icon ti ti-comment"></i><span class="nav-title">Chat</span></a> </li>
                    <li><a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon ti ti-calendar"></i><span class="nav-title">Calendar</span></a>
                        <ul aria-expanded="false">
                            <li> <a href='calendar-full.html'>Full Calendar</a> </li>
                            <li> <a href='calendar-list.html'>Calendar List</a> </li>
                        </ul>
                    </li>
                    <li><a href="mail-inbox.html" aria-expanded="false"><i class="nav-icon ti ti-email"></i><span class="nav-title">Mail</span></a> </li>
                    <li>
                        <a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon ti ti-bag"></i> <span class="nav-title">UI Kit</span></a>
                        <ul aria-expanded="false">
                            <li> <a href="ui-alerts.html">Alerts</a> </li>
                            <li> <a href="ui-accordions.html">Accordions</a> </li>
                            <li> <a class="has-arrow" href="javascript: void(0);">Buttons</a>
                                <ul aria-expanded="false">
                                    <li> <a href="ui-button.html">Default Buttons</a> </li>
                                    <li> <a href="ui-button-icon.html">Icon Buttons</a> </li>
                                    <li> <a href="ui-button-block.html">Block Buttons</a> </li>
                                    <li> <a href="ui-button-social.html">Social Buttons</a> </li>
                                    <li> <a href="ui-button-groups.html">Group Buttons</a> </li>
                                </ul>
                            </li>
                            <li> <a href="ui-badges.html">Badges</a> </li>
                            <li> <a href="ui-cards.html">Cards</a> </li>
                            <li> <a href="ui-carousel.html">Carousel</a> </li>
                            <li> <a href="ui-dropdowns.html">Dropdowns</a> </li>

                            <li> <a href="ui-grid.html">Grid</a> </li>
                            <li> <a href="ui-list-group.html">List Group</a> </li>
                            <li> <a href="ui-lightbox.html">Light Box</a> </li>
                            <li> <a href="ui-modals.html">Modals</a> </li>
                            <li> <a href="ui-media.html">Media</a> </li>
                            <li> <a href="ui-nestable-list.html">Nestable List</a> </li>
                            <li> <a href="ui-pagination.html">Pagination</a> </li>
                            <li> <a href="ui-progressbars.html">Progress Bars</a> </li>

                            <li> <a href="ui-sweet-alert.html">Sweet Alert</a> </li>
                            <li> <a href="ui-tabs.html">Tabs</a> </li>
                            <li> <a href="ui-nav.html">Nav</a> </li>
                            <li> <a href="ui-tooltips-popovers.html">Tooltips & Popovers</a> </li>
                            <li> <a href="ui-typography.html">Typography</a> </li>
                            <li> <a href="ui-toastr.html">Toastr</a> </li>
                            <li> <a href="ui-video.html">Video</a> </li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon ti ti-info"></i><span class="nav-title">Icons</span> </a>
                        <ul aria-expanded="false">
                            <li> <a href="icons-cryptocurrency.html">Cryptocurrency Icons</a> </li>
                            <li> <a href="icons-drip.html">Drip Icons</a> </li>
                            <li> <a href="icons-dash.html">Dash Icons</a> </li>
                            <li> <a href="icons-feather.html">Feather Icons</a> </li>
                            <li> <a href="icons-fontawesome.html">Font Awesome</a> </li>
                            <li> <a href="icons-ion.html">Ion Icons</a> </li>
                            <li> <a href="icons-weather.html">Weather Icons</a> </li>
                            <li> <a href="icons-material.html">Material Icons</a> </li>
                            <li> <a href="icons-themify.html">Themify Icons</a> </li>
                        </ul>
                    </li>
                    <li class="nav-static-title">Widgets, Tables & Layouts</li>
                    <li>
                        <a class="has-arrow" href="javascript:void(0)" aria-expanded="false"> <i class="nav-icon ti ti-layout-grid4-alt"></i> <span class="nav-title">Widgets</span> <span class="nav-label label label-success">New</span> </a>
                        <ul aria-expanded="false">
                            <li> <a href="widget-chart.html">Chart Widget</a> </li>

                            <li> <a href="widget-list.html">List Widget</a> </li>

                            <li> <a href="widget-social.html">Social Widget</a> </li>

                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon ti ti-layout-column3-alt"></i><span class="nav-title">Tables</span></a>
                        <ul aria-expanded="false">
                            <li> <a href="tables-basic.html">Basic Table</a> </li>
                            <li> <a href="tables-color.html">Color Table </a> </li>
                            <li> <a href="tables-datatable.html">Data Table</a> </li>
                            <li> <a href="tables-editable.html">Editable Table</a> </li>
                            <li> <a href="tables-export.html">Export Table</a> </li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon ti ti-layout"></i> <span class="nav-title">Layouts</span></a>
                        <ul aria-expanded="false">
                            <li><a href="layout-mini.html">Sidebar Mini</a></li>

                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon ti ti-pie-chart"></i><span class="nav-title">Charts</span></a>
                        <ul aria-expanded="false">
                            <li> <a href="chart-apex.html">Apex Chart</a> </li>
                            <li> <a href="chart-flot.html">Flot Chart</a> </li>
                            <li> <a href="chart-morris.html">Morris Chart</a> </li>
                            <li> <a href="chart-chartist.html">Chartist Charts</a> </li>
                            <li> <a href="chart-chartjs.html">Chartjs Chart</a> </li>
                            <li> <a href="chart-c3.html">C3 Chart</a> </li>
                            <li> <a href="chart-sparkline.html">Sparkline Chart</a> </li>
                            <li> <a href="chart-knob.html">Knob Chart</a> </li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void(0)" aria-expanded="false"> <i class="nav-icon ti ti-pencil-alt"></i> <span class="nav-title">Forms</span> </a>
                        <ul aria-expanded="false">
                            <li> <a href="form-autonumeric.html">Autonumeric</a> </li>
                            <li> <a href="form-editors.html">Editors</a> </li>
                            <li> <a href="form-elements.html">Elements</a> </li>
                            <li> <a href="form-file-upload.html">Drop Zone
                                </a> </li>
                            <li> <a href="form-input-groups.html">Input Groups</a> </li>
                            <li> <a href="form-inputmask.html">Input Masks</a> </li>
                            <li> <a href="form-layouts.html">Forms Layouts</a> </li>
                            <li> <a href="form-listbox.html">Listbox</a> </li>
                            <li> <a href="form-pickers.html">Pickers</a> </li>
                            <li> <a href="form-range-slider.html">Range Slider</a> </li>
                            <li> <a href="form-selects.html">Selects</a> </li>
                            <li> <a href="form-switchers.html">Switchers</a> </li>
                            <li> <a href="form-validation.html">Validation</a> </li>
                        </ul>
                    </li>
                    <li class="nav-static-title">Extra Components</li>
                    <li>
                        <a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon ti ti-map-alt"></i><span class="nav-title">Maps</span></a>
                        <ul aria-expanded="false">
                            <li> <a href="maps-google.html">Google Maps</a> </li>
                            <li> <a href="maps-vector.html">Vector Maps</a> </li>
                            <li> <a href="maps-mapael.html">Mapael Maps</a> </li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon ti ti-layers"></i><span class="nav-title">Pages</span><span class="nav-label label label-primary">12</span></a>
                        <ul aria-expanded="false">
                            <li> <a href="page-account-settings.html">Account Settings</a> </li>
                            <li> <a href="page-clients.html">Clients</a> </li>
                            <li> <a href="page-contacts.html">Contacts</a> </li>
                            <li> <a href="page-employees.html">Employees</a> </li>
                            <li> <a href="page-faq.html">FAQ</a> </li>
                            <li> <a href="page-file-manager.html">File Manager</a> </li>
                            <li> <a href="page-gallery.html">Gallery</a> </li>

                            <li> <a href="page-pricing.html">Pricing</a> </li>
                            <li> <a href="page-task-list.html">Task List</a> </li>
                            <li> <a href="page-404.html">404</a> </li>
                            <li> <a href="page-500.html">500</a> </li>
                            <li> <a href="page-coming-soon.html">Coming Soon</a> </li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon ti ti-key"></i><span class="nav-title">Auth</span></a>
                        <ul aria-expanded="false">
                            <li> <a href="auth-login.html">Login</a> </li>
                            <li> <a href="auth-register.html">Register</a> </li>
                            <li> <a href="auth-lockscreen.html">Lock Screen</a> </li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon ti ti-list"></i><span class="nav-title">Multi Level</span></a>
                        <ul aria-expanded="false">
                            <li> <a href="javascript: void(0);">Level 1.1</a> </li>
                            <li class="scoop-hasmenu">
                                <a class="has-arrow" href="javascript: void(0);">Level 1.2</a>
                                <ul aria-expanded="false">
                                    <li> <a href="javascript: void(0);">Level 2.1</a> </li>
                                    <li> <a href="javascript: void(0);">Level 2.2</a> </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-banner p-4 bg-gradient text-center m-3 d-block rounded">
                        <h5 class="text-white mb-1">Mentor admin</h5>
                        <p class="font-13 text-white line-20">Multipurpose Bootstrap 4 Admin Template</p>
                        <a class="btn btn-square btn-inverse-light btn-xs d-inline-block mt-2 mb-0" href="#"> Buy now</a>
                    </li>
                </ul>
            </div>
            <!-- end sidebar-nav -->
        </aside>
        <!-- end app-navbar -->
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
                                <h1>Job Portal</h1>
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
                                        <li class="breadcrumb-item active text-primary" aria-current="page">Job
                                            Portal</li>
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
                    <div class="col-lg-6 col-xxl-3 m-b-30">
                        <div class="card card-statistics h-100 mb-0">
                            <div class="card-header">
                                <h4 class="card-title">Job Seekers/Providers</h4>
                            </div>
                            <div class="card-body pt-0">
                                <div class="apexchart-wrapper">
                                    <div id="jobportaldemo3"></div>
                                </div>
                                <div class="row text-center justify-content-center">
                                    <div class="col ml-3">
                                        <h4 class="mb-0">45%</h4>
                                        <span> <i class="fa fa-square pr-1 text-primary"></i> Job Seekers </span>
                                    </div>
                                    <div class="col">
                                        <h4 class="mb-0">55%</h4>
                                        <span> <i class="fa fa-square pr-1 text-info"></i> Job Providers </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-3 m-b-30">
                        <div class="card card-statistics h-100 mb-0 widget-income-list">
                            <div class="card-body d-flex align-itemes-center">
                                <div class="media align-items-center w-100">
                                    <div class="text-left">
                                        <h3 class="mb-0">45.8k </h3>
                                        <span>Pending Users</span>
                                    </div>
                                    <div class="img-icon bg-pink ml-auto">
                                        <i class="ti ti-user text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body d-flex align-itemes-center">
                                <div class="media align-items-center w-100">
                                    <div class="text-left">
                                        <h3 class="mb-0">65.4k </h3>
                                        <span>New Users</span>
                                    </div>
                                    <div class="img-icon bg-primary ml-auto">
                                        <i class="ti ti-tag text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body d-flex align-itemes-center">
                                <div class="media align-items-center w-100">
                                    <div class="text-left">
                                        <h3 class="mb-0">78.2k </h3>
                                        <span>Deleted Users</span>
                                    </div>
                                    <div class="img-icon bg-orange ml-auto">
                                        <i class="ti ti-wallet text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body d-flex align-itemes-center">
                                <div class="media align-items-center w-100">
                                    <div class="text-left">
                                        <h3 class="mb-0">65.3k </h3>
                                        <span>Active Users</span>
                                    </div>
                                    <div class="img-icon bg-info ml-auto">
                                        <i class="ti ti-slice text-white"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 m-b-30">
                        <div class="card card-statistics site-visitor h-100 mb-0">
                            <div class="card-header">
                                <h4 class="card-title">Site Visitors</h4>
                            </div>
                            <div class="card-body pb-0">
                                <div class="row">
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <h2 class="mb-0">154,65</h2>
                                        <span>Total visit</span>
                                    </div>
                                    <div class="col-sm-8 ml-auto">
                                        <div class="row">
                                            <div class="border-right col mr-4">
                                                <h4 class="mb-0">4,251</h4>
                                                <span> <i class="fa fa-square pr-1 text-pink"></i> Applicants </span>
                                            </div>
                                            <div class="border-right col mr-4">
                                                <h4 class="mb-0">6,578</h4>
                                                <span> <i class="fa fa-square pr-1 text-primary"></i> Interviews </span>
                                            </div>
                                            <div class="col">
                                                <h4 class="mb-0">2,654</h4>
                                                <span> <i class="fa fa-square pr-1 text-light"></i> Forwards </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="apexchart-wrapper">
                                    <div id="jobportaldemo4" class="chart-fit"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-6 m-b-30">
                        <div class="card card-statistics h-100 mb-0">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <div class="card-heading">
                                    <h4 class="card-title">Latest Job Seekers</h4>
                                </div>
                                <div class="dropdown">
                                    <a class="p-2 export-btn" href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Export
                                    </a>
                                    <div class="dropdown-menu custom-dropdown dropdown-menu-right p-4">
                                        <h6 class="mb-1">Action</h6>
                                        <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-file-pdf-o pr-2"></i>Export to PDF</a>
                                        <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-file-excel-o pr-2"></i>Export to CSV</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="latestjobs" class="table table-borderless table-striped jobportal-table mb-0">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>User Name</th>
                                                <th>Position</th>
                                                <th>Department</th>
                                                <th>Location</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-muted">
                                            <tr>
                                                <td>#00001</td>
                                                <td>
                                                    <p>Brian Joedro</p>
                                                </td>
                                                <td>Sale associate</td>
                                                <td>Marketing</td>
                                                <td>
                                                    Los Angeles
                                                </td>
                                                <td>
                                                    <label class="badge badge-success-inverse mb-0">Applied</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#00002</td>
                                                <td>
                                                    <p>Smithdro</p>
                                                </td>
                                                <td>Product designer</td>
                                                <td>Graphics</td>
                                                <td>
                                                    Menlo Park, CA
                                                </td>
                                                <td>
                                                    <label class="badge badge-warning-inverse mb-0">Pending</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#00003</td>
                                                <td>
                                                    <p>Adrian Demiandro</p>
                                                </td>
                                                <td>Python engineer</td>
                                                <td>Development</td>
                                                <td>
                                                    Dallas
                                                </td>
                                                <td>
                                                    <label class="badge badge-danger-inverse mb-0">Cancelled</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#00004</td>
                                                <td>
                                                    <p>Sandradro Garett</p>
                                                </td>
                                                <td>Account executive</td>
                                                <td>Account</td>
                                                <td>
                                                    New york
                                                </td>
                                                <td>
                                                    <label class="badge badge-info-inverse mb-0">On Hold</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#00005</td>
                                                <td>
                                                    <p>Garydro</p>
                                                </td>
                                                <td>Front-end developer</td>
                                                <td>Developer</td>
                                                <td>
                                                    Los Angeles
                                                </td>
                                                <td>
                                                    <label class="badge badge-success-inverse mb-0">Applied</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#00003</td>
                                                <td>
                                                    <p>Demiandro</p>
                                                </td>
                                                <td>Python engineer</td>
                                                <td>Development</td>
                                                <td>
                                                    Dallas
                                                </td>
                                                <td>
                                                    <label class="badge badge-danger-inverse mb-0">Cancelled</label>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 m-b-30">
                        <div class="card card-statistics h-100 mb-0 jobportal-contant">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <div class="card-heading">
                                    <h4 class="card-title">Open positions</h4>
                                </div>
                                <div class="dropdown">
                                    <a class="p-2 export-btn" href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Export
                                    </a>
                                    <div class="dropdown-menu custom-dropdown dropdown-menu-right p-4">
                                        <h6 class="mb-1">Action</h6>
                                        <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-file-pdf-o pr-2"></i>Export to PDF</a>
                                        <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-file-excel-o pr-2"></i>Export to CSV</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="openposition" class="table table-borderless table-striped jobportal-table mb-0">
                                        <tbody class="text-muted">
                                            <tr>
                                                <td>
                                                    <div class="bg-img ml-3">
                                                        <img src="assets/img/browser-logo/google.png" class="img-fluid" alt="user-7">
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="d-block"><strong> Senior front-end developer</strong>
                                                        <span class="d-block"> <i class="fa fa-map-marker mr-2"></i> Montreal, Canada</span></p>
                                                </td>
                                                <td>
                                                    <p> Over 1 month ago
                                                        <span class="d-block"> <i class="fa fa-briefcase mr-2"></i> Full–time </span></p>
                                                </td>
                                                <td class="text-info text-right">
                                                    45 Days left
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="bg-img ml-3">
                                                        <img src="assets/img/browser-logo/envato.png" class="img-fluid" alt="user-7">
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="d-block"><strong> Sales associate</strong>
                                                        <span class="d-block"> <i class="fa fa-map-marker mr-2"></i> London, UK</span></p>
                                                </td>
                                                <td>
                                                    <p> Over 2 month ago
                                                        <span class="d-block"> <i class="fa fa-briefcase mr-2"></i> Part–time </span></p>
                                                </td>
                                                <td class="text-info text-right">
                                                    80 Days left
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="bg-img ml-3">
                                                        <img src="assets/img/browser-logo/invision.png" class="img-fluid" alt="user-7">
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="d-block"><strong> Product designer</strong>
                                                        <span class="d-block"> <i class="fa fa-map-marker mr-2"></i> Delhi, India</span></p>
                                                </td>
                                                <td>
                                                    <p> Over 6 month ago
                                                        <span class="d-block"> <i class="fa fa-briefcase mr-2"></i> Part–time </span></p>
                                                </td>
                                                <td class="text-info text-right">
                                                    50 Days left
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="bg-img ml-3">
                                                        <img src="assets/img/browser-logo/slack.png" class="img-fluid" alt="user-7">
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="d-block"><strong> Python engineer</strong>
                                                        <span class="d-block"> <i class="fa fa-map-marker mr-2"></i> Tokyo, Japan</span></p>
                                                </td>
                                                <td>
                                                    <p> Over 10 month ago
                                                        <span class="d-block"> <i class="fa fa-briefcase mr-2"></i> Full–time </span></p>
                                                </td>
                                                <td class="text-info text-right">
                                                    20 Days left
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="bg-img ml-3">
                                                        <img src="assets/img/browser-logo/bootstrap.png" class="img-fluid" alt="user-7">
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="d-block"><strong> Account executive</strong>
                                                        <span class="d-block"> <i class="fa fa-map-marker mr-2"></i> Menlo Park, CA</span></p>
                                                </td>
                                                <td>
                                                    <p> Over 4 month ago
                                                        <span class="d-block"> <i class="fa fa-briefcase mr-2"></i> Casual </span></p>
                                                </td>
                                                <td class="text-info text-right">
                                                    10 Days left
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 m-b-30">
                        <div class="card card-statistics h-100 mb-0 o-hidden">
                            <div class="card-header">
                                <h4 class="card-title">Traffic Source</h4>
                            </div>
                            <div class="card-body">
                                <div class="row align-self-center">
                                    <div class="col">
                                        <h4>Reached 6,454</h4>
                                        <p>Ea consectetur dolorem, enim explicabo necessitatibus</p>
                                        <ul class="jobportaldemo2-list list-unstyled m-t-20">
                                            <li class="py-1"> <i class="fa fa-minus pr-2 text-primary"></i> Direct</li>
                                            <li class="py-1"> <i class="fa fa-minus pr-2 text-primary"></i> Referral</li>
                                            <li class="py-1"> <i class="fa fa-minus pr-2 text-primary"></i> Organic</li>
                                            <li class="py-1"> <i class="fa fa-minus pr-2 text-primary"></i> Social</li>
                                        </ul>
                                    </div>
                                    <div class="apexchart-wrapper col">
                                        <div id="jobportaldemo2" class="jobportaldemo2"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="apexchart-wrapper">
                                <div id="jobportaldemo5" class="chart-fit p-absolute-lrb"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 m-b-30">
                        <div class="card card-statistics h-100 mb-0">
                            <div class="card-header">
                                <h4 class="card-title">Monthly Top Search</h4>
                            </div>
                            <div class="card-body">
                                <div class="row jus align-itemes-center no-gutters m-b-10">
                                    <div class="col-sm-12">
                                        <div class="d-flex justify-content-between">
                                            <span>New york US</span>
                                            <h5 class="mt-1 mt-sm-0 pl-sm-3 mb-0">75k</h5>
                                        </div>
                                        <div class="progress my-2" style="height: 5px;">
                                            <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row no-gutters m-b-10">
                                    <div class="col-sm-12">
                                        <div class="d-flex justify-content-between">
                                            <span>Montreal Canada</span>
                                            <h5 class="mt-1 mt-sm-0 pl-sm-3 mb-0">60k</h5>
                                        </div>
                                        <div class="progress my-2" style="height: 5px;">
                                            <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row no-gutters m-b-10">
                                    <div class="col-sm-12">
                                        <div class="d-flex justify-content-between">
                                            <span>London UK</span>
                                            <h5 class="mt-1 mt-sm-0 pl-sm-3 mb-0">55k</h5>
                                        </div>
                                        <div class="progress my-2" style="height: 5px;">
                                            <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row no-gutters m-b-10">
                                    <div class="col-sm-12">
                                        <div class="d-flex justify-content-between">
                                            <span>Delhi India</span>
                                            <h5 class="mt-1 mt-sm-0 pl-sm-3 mb-0">90k</h5>
                                        </div>
                                        <div class="progress my-2" style="height: 5px;">
                                            <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row no-gutters m-b-10">
                                    <div class="col-sm-12">
                                        <div class="d-flex justify-content-between">
                                            <span>Tokyo Japan</span>
                                            <h5 class="mt-1 mt-sm-0 pl-sm-3 mb-0">77k</h5>
                                        </div>
                                        <div class="progress my-2" style="height: 5px;">
                                            <div class="progress-bar" role="progressbar" style="width: 77%" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row no-gutters m-b-10">
                                    <div class="col-sm-12">
                                        <div class="d-flex justify-content-between">
                                            <span>Menlo Park</span>
                                            <h5 class="mt-1 mt-sm-0 pl-sm-3 mb-0">66k</h5>
                                        </div>
                                        <div class="progress my-2" style="height: 5px;">
                                            <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row no-gutters">
                                    <div class="col-sm-12">
                                        <div class="d-flex justify-content-between">
                                            <span>Mumbai India</span>
                                            <h5 class="mt-1 mt-sm-0 pl-sm-3 mb-0">87k</h5>
                                        </div>
                                        <div class="progress my-2" style="height: 5px;">
                                            <div class="progress-bar" role="progressbar" style="width: 87%" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 h-100 o-hidden">
                        <div class="card card-statistics h-50 m-b-30 bg-gradient o-hidden">
                            <div class="card-body">
                                <div class="card-header d-flex justify-content-between border-0 pb-0">
                                    <div class="card-heading">
                                        <h4 class="card-title text-white mb-1">User activations</h4>
                                        <p class="text-white">Last Sale 23.45 USD</p>
                                    </div>
                                    <div class="dropdown">
                                        <a class="p-2 text-white" href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fe fe-circle"></i>
                                        </a>
                                        <div class="dropdown-menu custom-dropdown dropdown-menu-right p-4">
                                            <h6 class="mb-1">Action</h6>
                                            <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-file-o pr-2"></i>View reports</a>
                                            <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-edit pr-2"></i>Edit reports</a>
                                            <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-bar-chart-o pr-2"></i>Statistics</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="apexchart-wrapper">
                                <div id="jobportaldemo6" class="chart-fit jobportaldemo6"></div>
                            </div>
                        </div>
                        <div class="card card-statistics h-50 m-b-30 bg-pink">
                            <div class="card-body">
                                <div class="d-block d-sm-flex p-3">
                                    <div class="mb-3 mb-sm-0 mr-sm-2">
                                        <h5 class="text-white mb-1">Total # of employees</h5>
                                        <h2 class="text-white mb-0">32548</h2>
                                    </div>
                                    <div class="ml-auto">
                                        <h5 class="text-white mb-1">Their social network reach</h5>
                                        <h2 class="text-white mb-0">425456</h2>
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
    </div>
    <!-- end app-container -->

<script src={{asset('Assets/js/vendors.js')}}></script>

<script src={{asset('Assets/js/app.js')}}></script>
@endsection