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
                            <h1>Users</h1>
                        </div>
                        <div class="ml-auto d-flex align-items-center">
                            <nav>
                                <ol class="breadcrumb p-0 m-b-0">
                                    <li class="breadcrumb-item">
                                        <a href="index.html"><i class="ti ti-home"></i></a>
                                    </li>
                                    <li class="breadcrumb-item">Users</li>
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
                <div class="col-lg-12">
                    <div class="card card-statistics">
                        <div class="card-body">
                            <div class="datatable-wrapper table-responsive">
                                <table id="datatable" class="display compact table table-striped table-bordered ">
                                    <thead>
                                        <tr>
                                            <th>N°</th>
                                            <th>Name</th>
                                            <th>email</th>
                                            <th>Type</th>
                                            <th>Status </th>
                                            <th>Start date</th>
                                            <th>Created </th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($users as $user)
                                            <tr>
                                                <td>{{ $loop->index }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>
                                                    @if ($user->userable_type === 'App\Models\Freelance')
                                                        Freelance
                                                    @else
                                                        Customer
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($user->is_active === 1)
                                                        <span>Active </span>
                                                    @else
                                                        <span style="color: red">disable</span>
                                                    @endif
                                                </td>
                                                <td>27</td>
                                                <td>{{ $user->created_at->diffForHumans() }} </td>
                                                <td>
                                                    {{-- <div class="btn btn-success">Show</div> --}}
                                                    <div class="btn btn-outline-danger">disable</div>
                                                    <div class="btn btn-outline-info">Show</div>
                                                </td>
                                            </tr>
                                        @empty
                                            Any User
                                        @endforelse

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>N°</th>
                                            <th>Name</th>
                                            <th>email</th>
                                            <th>Type</th>
                                            <th>Status </th>
                                            <th>Start date</th>
                                            <th>Created </th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                </table>
                                {{ $users->links() }}
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
    

    <script src={{ asset('asset/js/vendors.js') }}></script>

    <script src={{ asset('asset/js/app.js') }}></script>
@endsection
