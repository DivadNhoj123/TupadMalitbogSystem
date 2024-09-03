@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row gy-6">
                <hr class="my-6" />
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-end">
                            <h4 class="card-title">Tupad Applicant</h4>
                            <div class="mt-4 ms-auto">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button class="btn btn-danger btn-round ms-auto waves-effect waves-light removed {{ $hasNewStatus ? '' : 'disabled' }}" type="submit">
                                        <i class="ri-delete-bin-line ri-16px me-1_5"></i>Remove
                                    </button>
                                    @include('admin.partials.scripts.remove-scripts.remove')
                                    <a href="{{ route('tupad-applicant.print') }}"
                                        class="btn btn-info btn-round ms-auto waves-effect waves-light {{ $hasNewStatus ? '' : 'disabled' }}"
                                        type="button">
                                        <i class="ri-printer-line ri-16px me-1_5"></i> Print
                                    </a>

                                    <button type="button" class="btn btn-success waves-effect waves-light"
                                        data-bs-toggle="offcanvas" data-bs-target="#offcanvasScroll"
                                        aria-controls="offcanvasScroll">
                                        <i class="ri-user-add-line ri-16px me-1_5"></i>Add Applicant
                                    </button>
                                </div>
                            </div>
                            <div class="offcanvas offcanvas-end" data-bs-scroll="true" data-bs-backdrop="false"
                                tabindex="-1" id="offcanvasScroll" aria-labelledby="offcanvasScrollLabel">
                                <div class="offcanvas-header">
                                    <h5 id="offcanvasScrollLabel" class="offcanvas-title">
                                        Add TUPAD Applicant
                                    </h5>
                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                        aria-label="Close"></button>
                                </div>
                                @include('admin.partials.scripts.officials-scripts.success-officials')
                                @include('admin.partials.scripts.verification.verify-applicant ')

                                <form action="{{ route('tupad-applicant.store') }}" method="POST">
                                    @csrf
                                    <div class="offcanvas-body my-auto mx-0 flex-grow-0">
                                        <div class="row">
                                            <div class="col mb-6 mt-2">
                                                <div class="form-floating form-floating-outline">
                                                    <input type="text" id="nameWithTitle" class="form-control"
                                                        name="name" placeholder="Fill the name of the brgy. captain "
                                                        required />
                                                    <label for="nameWithTitle">Name</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col mb-6 mt-2">
                                                <div class="form-floating form-floating-outline">
                                                    <input type="text" id="nameWithTitle" class="form-control"
                                                        name="initial"
                                                        placeholder="Fill the initials of the brgy. captain " />
                                                    <label for="nameWithTitle">Initial</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col mb-6 mt-2">
                                                <div class="form-floating form-floating-outline">
                                                    <input type="text" id="nameWithTitle" class="form-control"
                                                        name="surname" placeholder="Fill the surname of the brgy. captain "
                                                        required />
                                                    <label for="nameWithTitle">Surname</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col mb-6 mt-2">
                                                <div class="form-floating form-floating-outline">
                                                    <input type="text" id="nameWithTitle" class="form-control"
                                                        name="suffix"
                                                        placeholder="Fill the suffix of the brgy. captain " />
                                                    <label for="nameWithTitle">Suffix</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col mb-6 mt-2">
                                                <div class="form-floating form-floating-outline">
                                                    <input type="text" id="nameWithTitle" class="form-control"
                                                        name="barangay" placeholder="Fill the address of the brgy. captain "
                                                        required />
                                                    <label for="nameWithTitle">Barangay</label>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success mb-2 d-grid w-100">Verify
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="add-row" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Name</th>
                                        <th>Initial</th>
                                        <th>Surname</th>
                                        <th>Suffix</th>
                                        <th>Barangay</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No.</th>
                                        <th>Name</th>
                                        <th>Initial</th>
                                        <th>Surname</th>
                                        <th>Suffix</th>
                                        <th>Barangay</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($applicants as $applicant)
                                        <tr>

                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $applicant->name }}</td>
                                            <td>
                                                @if ($applicant->initial)
                                                    {{ $applicant->initial }}
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td>{{ $applicant->surname }}</td>
                                            <td>
                                                @if ($applicant->suffix)
                                                    {{ $applicant->suffix }}
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td>{{ $applicant->barangay }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / Content -->

        <div class="content-backdrop fade"></div>
    </div>
@endsection
