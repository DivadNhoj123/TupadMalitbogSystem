@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-sm-6 col-lg-3 mb-6">
                    <div class="card card-border-shadow-primary h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-2">
                                <div class="avatar me-4">
                                    <span class="avatar-initial rounded bg-label-primary"><i
                                            class="ri-user-search-line ri-24px"></i></span>
                                </div>
                                <h4 class="mb-0">{{$new}}</h4>
                            </div>
                            <h6 class="mb-0 fw-bold">NEWLY APPLICANT</h6>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-6">
                    <div class="card card-border-shadow-warning h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-2">
                                <div class="avatar me-4">
                                    <span class="avatar-initial rounded bg-label-warning"><i
                                            class="ri-group-line ri-24px"></i></span>
                                </div>
                                <h4 class="mb-0">{{$elected}}</h4>
                            </div>
                            <h6 class="mb-0 fw-bold">ELECTED OFFICIALS</h6>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-6">
                    <div class="card card-border-shadow-danger h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-2">
                                <div class="avatar me-4">
                                    <span class="avatar-initial rounded bg-label-danger"><i
                                            class="ri-shield-user-line ri-24px"></i></span>
                                </div>
                                <h4 class="mb-0">{{$appointed}}</h4>
                            </div>
                            <h6 class="mb-0 fw-bold">APPOINTED OFFICIALS</h6>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-6">
                    <div class="card card-border-shadow-info h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-2">
                                <div class="avatar me-4">
                                    <span class="avatar-initial rounded bg-label-info"><i
                                            class="ri-hand-coin-line ri-24px"></i></span>
                                </div>
                                <h4 class="mb-0">{{$recent}}</h4>
                            </div>
                            <h6 class="mb-0 fw-bold">TOTAL TUPAD APPLICANT</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / Content -->

        <div class="content-backdrop fade"></div>
    </div>
@endsection
