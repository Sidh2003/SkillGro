@extends('layouts.admin')
@section('title')
    Dashboard
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 d-flex align-items-stretch">
                <div class="card w-100 bg-light-info overflow-hidden shadow-none">
                    <div class="card-body position-relative">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="d-flex align-items-center mb-7">
                                    <div class="rounded-circle overflow-hidden me-3">
                                        <img src="/backend/dist/images/profile/user-1.jpg" alt="Profile" width="45"
                                            height="45">
                                    </div>
                                    @php
                                        $employee = \App\Models\Employee::where('user_id', Auth::id())->first();
                                    @endphp
                                    <div>
                                        <h5 class="fw-semibold mb-0 fs-5">
                                            Welcome back {{ Auth::user()->first_name }} {{ Auth::user()->last_name ?? '' }}!
                                        </h5>
                                        @if ($employee)
                                            <p class="text-muted mb-0 fs-6">({{ $employee->designation }})</p>
                                        @endif
                                    </div>
                                </div>

                                <div class="d-flex align-items-center">
                                    <div class="border-end pe-4 border-muted border-opacity-10">
                                        <h3 class="mb-1 fw-semibold fs-8 d-flex align-content-center">$2,340<i
                                                class="ti ti-arrow-up-right fs-5 lh-base text-success"></i></h3>
                                        <p class="mb-0 text-dark">Today’s Sales</p>
                                    </div>
                                    <div class="ps-4">
                                        <h3 class="mb-1 fw-semibold fs-8 d-flex align-content-center">35%<i
                                                class="ti ti-arrow-up-right fs-5 lh-base text-success"></i></h3>
                                        <p class="mb-0 text-dark">Overall Performance</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="welcome-bg-img mb-n7 text-end">
                                    <img src="/backend/dist/images/backgrounds/welcome-bg.svg" alt=""
                                        class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="card border-start border-danger">
                <div class="card-body">
                    <div class="d-flex no-block align-items-center">
                        <div>
                            <span class="text-danger display-6"><i class="ti ti-users"></i></span>
                        </div>
                        <div class="ms-auto">
                            <h2 class="fs-7">{{ $employees }}</h2>
                            <h6 class="fw-medium text-danger mb-0">Employees</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card border-start border-info">
                <div class="card-body">
                    <div class="d-flex no-block align-items-center">
                        <div>
                            <span class="text-info display-6"><i class="ti ti-message-circle"></i></span>
                        </div>
                        <div class="ms-auto">
                            <h2 class="fs-7">120</h2>
                            <h6 class="fw-medium text-info mb-0">New Messages</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card border-start border-primary">
                <div class="card-body">
                    <div class="d-flex no-block align-items-center">
                        <div>
                            <span class="text-primary display-6"><i class="ti ti-bell"></i></i></span>
                        </div>
                        <div class="ms-auto">
                            <h2 class="fs-7">Total Enquiries</h2>
                            <h6 class="fw-medium text-primary mb-0">{{ $enquiries }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card border-start border-success">
                <div class="card-body">
                    <div class="d-flex no-block align-items-center">
                        <div>
                            <span class="text-success display-6"><i class="ti ti-briefcase"></i></span>
                        </div>
                        <div class="ms-auto">
                            <h2 class="fs-7">270</h2>
                            <h6 class="fw-medium text-success mb-0">New Projects</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
