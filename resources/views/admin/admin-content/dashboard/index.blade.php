@extends('admin.admin-panel.main')

@section('content')
    <main>

        <header
            class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10"
        >
            <div class="container-xl px-4">
                <div class="page-header-content pt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-4">
                            <h1 class="page-header-title">
                                <div class="page-header-icon">
                                    <i data-feather="activity"></i>
                                </div>
                                Dashboard
                            </h1>
                            {{--                                <div class="page-header-subtitle">--}}
                            {{--                                    Example dashboard overview and content summary--}}
                            {{--                                </div>--}}
                        </div>
                        <div class="col-12 col-xl-auto mt-4">
                            <div
                                class="input-group input-group-joined border-0"
                                style="width: 16.5rem"
                            >
                      <span class="input-group-text"
                      ><i class="text-primary" data-feather="calendar"></i
                          ></span>
                                <input
                                    class="form-control ps-0 pointer"
                                    id="litepickerRangePlugin"
                                    placeholder="Select date range..."
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container-xl px-4 mt-n10">
            <div class="row">
                <div class="col-xxl-4 col-xl-6 mb-4">
                    <div class="card h-100">
                        <div class="card-body h-100 p-5">
                            <div class="row align-items-center">
                                <div class="col-xl-8 col-xxl-12">
                                    <div
                                        class="text-center text-xl-start text-xxl-center mb-4 mb-xl-0 mb-xxl-4"
                                    >
                                        <h1 class="text-primary">Welcome to Dashboard!</h1>
                                        <p class="text-gray-700 mb-0">
                                            Test Dashboard
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-xxl-12 text-center">
                                    <img
                                        class="img-fluid"
                                        src="{{ asset('assets/img/illustrations/at-work.svg') }}"
                                        style="max-width: 26rem"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-8 col-xl-6 mb-4">
                    <div class="card card-header-actions h-100">
                        <div class="card-header">
                            Recent Activity
                            <div class="dropdown no-caret">
                                <button
                                    class="btn btn-transparent-dark btn-icon dropdown-toggle"
                                    id="dropdownMenuButton"
                                    type="button"
                                    data-bs-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                >
                                    <i
                                        class="text-gray-500"
                                        data-feather="more-vertical"
                                    ></i>
                                </button>

                            </div>
                        </div>
                        <div class="card-body">
                            <div class="timeline timeline-xs">
                                <!-- Timeline Item 1-->
                                @foreach($sales as $sale)
                                    <div class="timeline-item">
                                        <div class="timeline-item-marker">
                                            <div
                                                class="timeline-item-marker-text">{{ $sale->created_at->diffForHumans() }}</div>
                                            <div
                                                class="timeline-item-marker-indicator bg-green"
                                            ></div>
                                        </div>
                                        <div class="timeline-item-content">
                                            New order placed!
                                            <a class="fw-bold text-dark"
                                               href="#!">Order {{ $sale->transaction_id }}</a>
                                            has been successfully placed.
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
                {{--                    <div class="col-xxl-4 col-xl-6 mb-4">--}}
                {{--                        <div class="card card-header-actions h-100">--}}
                {{--                            <div class="card-header">--}}
                {{--                                Progress Tracker--}}
                {{--                                <div class="dropdown no-caret">--}}
                {{--                                    <button--}}
                {{--                                        class="btn btn-transparent-dark btn-icon dropdown-toggle"--}}
                {{--                                        id="dropdownMenuButton"--}}
                {{--                                        type="button"--}}
                {{--                                        data-bs-toggle="dropdown"--}}
                {{--                                        aria-haspopup="true"--}}
                {{--                                        aria-expanded="false"--}}
                {{--                                    >--}}
                {{--                                        <i--}}
                {{--                                            class="text-gray-500"--}}
                {{--                                            data-feather="more-vertical"--}}
                {{--                                        ></i>--}}
                {{--                                    </button>--}}
                {{--                                    <div--}}
                {{--                                        class="dropdown-menu dropdown-menu-end animated--fade-in-up"--}}
                {{--                                        aria-labelledby="dropdownMenuButton"--}}
                {{--                                    >--}}
                {{--                                        <a class="dropdown-item" href="#!">--}}
                {{--                                            <div class="dropdown-item-icon">--}}
                {{--                                                <i class="text-gray-500" data-feather="list"></i>--}}
                {{--                                            </div>--}}
                {{--                                            Manage Tasks--}}
                {{--                                        </a>--}}
                {{--                                        <a class="dropdown-item" href="#!">--}}
                {{--                                            <div class="dropdown-item-icon">--}}
                {{--                                                <i--}}
                {{--                                                    class="text-gray-500"--}}
                {{--                                                    data-feather="plus-circle"--}}
                {{--                                                ></i>--}}
                {{--                                            </div>--}}
                {{--                                            Add New Task--}}
                {{--                                        </a>--}}
                {{--                                        <a class="dropdown-item" href="#!">--}}
                {{--                                            <div class="dropdown-item-icon">--}}
                {{--                                                <i--}}
                {{--                                                    class="text-gray-500"--}}
                {{--                                                    data-feather="minus-circle"--}}
                {{--                                                ></i>--}}
                {{--                                            </div>--}}
                {{--                                            Delete Tasks--}}
                {{--                                        </a>--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                            <div class="card-body">--}}
                {{--                                <h4 class="small">--}}
                {{--                                    Server Migration--}}
                {{--                                    <span class="float-end fw-bold">20%</span>--}}
                {{--                                </h4>--}}
                {{--                                <div class="progress mb-4">--}}
                {{--                                    <div--}}
                {{--                                        class="progress-bar bg-danger"--}}
                {{--                                        role="progressbar"--}}
                {{--                                        style="width: 20%"--}}
                {{--                                        aria-valuenow="20"--}}
                {{--                                        aria-valuemin="0"--}}
                {{--                                        aria-valuemax="100"--}}
                {{--                                    ></div>--}}
                {{--                                </div>--}}
                {{--                                <h4 class="small">--}}
                {{--                                    Sales Tracking--}}
                {{--                                    <span class="float-end fw-bold">40%</span>--}}
                {{--                                </h4>--}}
                {{--                                <div class="progress mb-4">--}}
                {{--                                    <div--}}
                {{--                                        class="progress-bar bg-warning"--}}
                {{--                                        role="progressbar"--}}
                {{--                                        style="width: 40%"--}}
                {{--                                        aria-valuenow="40"--}}
                {{--                                        aria-valuemin="0"--}}
                {{--                                        aria-valuemax="100"--}}
                {{--                                    ></div>--}}
                {{--                                </div>--}}
                {{--                                <h4 class="small">--}}
                {{--                                    Customer Database--}}
                {{--                                    <span class="float-end fw-bold">60%</span>--}}
                {{--                                </h4>--}}
                {{--                                <div class="progress mb-4">--}}
                {{--                                    <div--}}
                {{--                                        class="progress-bar"--}}
                {{--                                        role="progressbar"--}}
                {{--                                        style="width: 60%"--}}
                {{--                                        aria-valuenow="60"--}}
                {{--                                        aria-valuemin="0"--}}
                {{--                                        aria-valuemax="100"--}}
                {{--                                    ></div>--}}
                {{--                                </div>--}}
                {{--                                <h4 class="small">--}}
                {{--                                    Payout Details--}}
                {{--                                    <span class="float-end fw-bold">80%</span>--}}
                {{--                                </h4>--}}
                {{--                                <div class="progress mb-4">--}}
                {{--                                    <div--}}
                {{--                                        class="progress-bar bg-info"--}}
                {{--                                        role="progressbar"--}}
                {{--                                        style="width: 80%"--}}
                {{--                                        aria-valuenow="80"--}}
                {{--                                        aria-valuemin="0"--}}
                {{--                                        aria-valuemax="100"--}}
                {{--                                    ></div>--}}
                {{--                                </div>--}}
                {{--                                <h4 class="small">--}}
                {{--                                    Account Setup--}}
                {{--                                    <span class="float-end fw-bold">Complete!</span>--}}
                {{--                                </h4>--}}
                {{--                                <div class="progress">--}}
                {{--                                    <div--}}
                {{--                                        class="progress-bar bg-success"--}}
                {{--                                        role="progressbar"--}}
                {{--                                        style="width: 100%"--}}
                {{--                                        aria-valuenow="100"--}}
                {{--                                        aria-valuemin="0"--}}
                {{--                                        aria-valuemax="100"--}}
                {{--                                    ></div>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                            <div class="card-footer position-relative">--}}
                {{--                                <div--}}
                {{--                                    class="d-flex align-items-center justify-content-between small text-body"--}}
                {{--                                >--}}
                {{--                                    <a class="stretched-link text-body" href="#!"--}}
                {{--                                    >Visit Task Center</a--}}
                {{--                                    >--}}
                {{--                                    <i class="fas fa-angle-right"></i>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
            </div>
            <!-- Example Colored Cards for Dashboard Demo-->
            <div class="row">


                @foreach($tasks as $task)

                    <div class="col-lg-6 col-xl-3 mb-4">
                        <div class="card bg-primary text-white h-100"
                             style="background-color: {{ $task->color }} !important;">
                            <div class="card-body">
                                <div
                                    class="d-flex justify-content-between align-items-center"
                                >
                                    <div class="me-3">
                                        <div class="text-white-75 small">
                                            {{ $task->title }}
                                        </div>
                                        <div class="text-lg fw-bold">{{ $task->income }}</div>
                                    </div>
                                    <i
                                        class="feather-xl text-white-50"
                                        data-feather="{{ $task->data_feather }}"
                                    ></i>
                                </div>
                            </div>
                            <div
                                class="card-footer d-flex align-items-center justify-content-between small"
                            >
                                <a class="text-white stretched-link" href="{{ $task->link }}"
                                >View Report</a
                                >
                                <div class="text-white">
                                    <i class="fas fa-angle-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach


            </div>
            <!-- Example Charts for Dashboard Demo-->
            <div class="row">
                <div class="col-xl-6 mb-4">
                    <div class="card card-header-actions h-100">
                        <div class="card-header">
                            Earnings Breakdown
                            <div class="dropdown no-caret">
                                <button
                                    class="btn btn-transparent-dark btn-icon dropdown-toggle"
                                    id="areaChartDropdownExample"
                                    type="button"
                                    data-bs-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                >
                                    <i
                                        class="text-gray-500"
                                        data-feather="more-vertical"
                                    ></i>
                                </button>
                                <div
                                    class="dropdown-menu dropdown-menu-end animated--fade-in-up"
                                    aria-labelledby="areaChartDropdownExample"
                                >
                                    {{--                                        <a class="dropdown-item" href="#!">Last 12 Months</a>--}}
                                    {{--                                        <a class="dropdown-item" href="#!">Last 30 Days</a>--}}
                                    {{--                                        <a class="dropdown-item" href="#!">Last 7 Days</a>--}}
                                    {{--                                        <a class="dropdown-item" href="#!">This Month</a>--}}
                                    {{--                                        <div class="dropdown-divider"></div>--}}
                                    {{--                                        <a class="dropdown-item" href="#!">Custom Range</a>--}}
                                </div>
                            </div>
                        </div>


                        {{-- ------------------------------------------------ Earnings Breakdown component ------------------------------------------------ --}}

                        <x-admin.charts.earning></x-admin.charts.earning>

                        {{-- ------------------------------------------------ Earnings Breakdown component ------------------------------------------------ --}}


                    </div>
                </div>
                <div class="col-xl-6 mb-4">
                    <div class="card card-header-actions h-100">
                        <div class="card-header">
                            Monthly Revenue
                            <div class="dropdown no-caret">
                                <button
                                    class="btn btn-transparent-dark btn-icon dropdown-toggle"
                                    id="areaChartDropdownExample"
                                    type="button"
                                    data-bs-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                >
                                    <i
                                        class="text-gray-500"
                                        data-feather="more-vertical"
                                    ></i>
                                </button>
                                <div
                                    class="dropdown-menu dropdown-menu-end animated--fade-in-up"
                                    aria-labelledby="areaChartDropdownExample"
                                >
                                    {{--                                        <a class="dropdown-item" href="#!">Last 12 Months</a>--}}
                                    {{--                                        <a class="dropdown-item" href="#!">Last 30 Days</a>--}}
                                    {{--                                        <a class="dropdown-item" href="#!">Last 7 Days</a>--}}
                                    {{--                                        <a class="dropdown-item" href="#!">This Month</a>--}}
                                    {{--                                        <div class="dropdown-divider"></div>--}}
                                    {{--                                        <a class="dropdown-item" href="#!">Custom Range</a>--}}
                                </div>
                            </div>
                        </div>

                        {{-- ------------------------------------------------- Monthly Revenue chart component ------------------------------------------------- --}}


                        <x-admin.charts.revenue></x-admin.charts.revenue>


                        {{-- ------------------------------------------------- Monthly Revenue chart component ------------------------------------------------- --}}


                    </div>
                </div>
            </div>
            <!-- Example DataTable for Dashboard Demo-->

            {{-- ------------------------------------------------- Sales management ------------------------------------------------- --}}

            <div class="card mb-4">
                <div style="display: flex; justify-content: space-between; flex-wrap:  wrap">
                    <div class="card-header">Sales Data</div>
                    <div class="card-header" style="border-bottom: none"><a href="{{ route('exportData') }}">Export
                            Data</a></div>

                </div>
                {{-- -------------------------------------- Sales Data Table -------------------------------------- --}}


                <div style="padding: 15px">
                    <table id="exampleDataTable" class="card-body" style="width:100%">
                        <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Type</th>
                            <th>No. of items</th>
                            <th>Sold to</th>
                            <th>Payment Type</th>
                            <th>Address</th>
                            <th>Transaction_id</th>
                            <th>Region</th>
                            <th>Order Date</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sales as $sale)
                            <tr>
                                <td>{{ $sale->product_name }}</td>
                                <td>{{ $sale->type }}</td>
                                <td>{{ $sale->no_of_items }}</td>
                                <td>{{ $sale->sold_to }}</td>
                                <td>{{ $sale->payment_type }}</td>
                                <td>{{ $sale->address }}</td>
                                <td>{{ $sale->transaction_id }}</td>
                                <td>{{ $sale->region }}</td>
                                <td>{{ $sale->created_at->format('d-M-y') }}</td>
                                <td>
                                    <div class="badge bg-primary text-white rounded-pill">
                                        {{ \Illuminate\Support\Str::ucfirst($sale->status) }}
                                    </div>
                                </td>
                                <td>
                                    <button
                                        class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                    >
                                        <i data-feather="more-vertical"></i>
                                    </button>
                                    <button
                                        class="btn btn-datatable btn-icon btn-transparent-dark"
                                    >
                                        <i data-feather="trash-2"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>

                <br><br>

                {{-- -------------------------------------- Sales Data Table -------------------------------------- --}}

            </div>

            {{-- ------------------------------------------------- Sales management ------------------------------------------------- --}}


        </div>
    </main>
@endsection
