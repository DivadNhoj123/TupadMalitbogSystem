@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row gy-6">
                <hr class="my-6" />
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h4 class="card-title">Appointed Officials Record</h4>
                            <div class="ms-auto">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-secondary waves-effect" data-bs-toggle="modal"
                                        data-bs-target="#UploadExcelAppointed">
                                        <i class="ri-file-excel-line ri-16px me-1_5"></i>Upload Excel</button>
                                    @include('admin.partials.modals.upload-appointed-excel')
                                    <button type="button" class="btn btn-success waves-effect" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasScroll" aria-controls="offcanvasScroll"> <i
                                            class="ri-user-add-line ri-16px me-1_5"></i>Add
                                        Record
                                    </button>
                                </div>
                            </div>
                            <div class="offcanvas offcanvas-end" data-bs-scroll="true" data-bs-backdrop="false"
                                tabindex="-1" id="offcanvasScroll" aria-labelledby="offcanvasScrollLabel">
                                <div class="offcanvas-header">
                                    <h5 id="offcanvasScrollLabel" class="offcanvas-title">
                                        Add Barangay Captain
                                    </h5>
                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                        aria-label="Close"></button>
                                </div>
                                <form action="{{ route('appointed-officials.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="offcanvas-body my-auto mx-0 flex-grow-0">
                                        <div class="mb-4">
                                            <label for="formFile" class="form-label">
                                                Upload Avatar Image
                                            </label>
                                            <input class="form-control" type="file" id="formFile" name="image">
                                        </div>
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
                                                        name="middle_name"
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
                                        <div class="row">
                                            <div class="col mb-6 mt-2">
                                                <select id="largeSelect" class="form-select form-select-md" name="position"
                                                    required>
                                                    <option disabled>Select Position</option>
                                                    <option value="5">Barangay Treasuer</option>
                                                    <option value="6">Barangay Secretary</option>
                                                    <option value="7">SK Treasuer</option>
                                                    <option value="8">SK Secretary</option>
                                                    <option value="9">BHW</option>
                                                    <option value="10">BNS</option>
                                                    <option value="11">Lupon</option>
                                                    <option value="12">Tanod</option>
                                                </select>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success mb-2 d-grid w-100">Save
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
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Initial</th>
                                        <th>Surname</th>
                                        <th>Suffix</th>
                                        <th>Position</th>
                                        <th>Barangay</th>
                                        <th style="width: 20%">Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No.</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Initial</th>
                                        <th>Surname</th>
                                        <th>Suffix</th>
                                        <th>Position</th>
                                        <th>Barangay</th>
                                        <th style="width: 20%">Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($officials as $official)
                                        <tr>

                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <div class="d-flex justify-content-start align-items-center user-name">
                                                    <div class="avatar-wrapper">
                                                        @if ($official)
                                                            <div class="avatar me-2"><img
                                                                    src="{{ asset('storage/uploads/image/' . $official->image) }}"
                                                                    alt="title" class="imagecheck-image">
                                                            </div>
                                                        @elseif($official === null)
                                                            <div class="avatar me-2"><img
                                                                    src="{{ asset('storage/uploads/image/1.png') }}"
                                                                    alt="title" class="imagecheck-image">
                                                            </div>
                                                        @else
                                                        @endif
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{ $official->name }}</td>
                                            <td>
                                                @if ($official->middle_name)
                                                    {{ $official->middle_name }}
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td>{{ $official->surname }}</td>
                                            <td>
                                                @if ($official->suffix)
                                                    {{ $official->suffix }}
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td>
                                                @if ($official->position == 5)
                                                    Barangay Treasuer
                                                @elseif ($official->position == 6)
                                                    Barangay Secretary
                                                @elseif ($official->position == 7)
                                                    SK Treasurer
                                                @elseif ($official->position == 8)
                                                    SK Secretary
                                                @elseif ($official->position == 9)
                                                    BHW
                                                @elseif ($official->position == 10)
                                                    BNS
                                                @elseif ($official->position == 11)
                                                    Lupon
                                                @elseif ($official->position == 12)
                                                    Tanod
                                                @endif
                                            </td>
                                            <td>{{ $official->barangay }}</td>
                                            <td>
                                                <a type="button" class="btn btn-icon btn-info" data-bs-toggle="modal"
                                                    data-bs-target="#fullscreenModal{{ $official->id }}">
                                                    <i class="ri-eye-line"></i>
                                                </a>
                                                @include('admin.partials.modals.appointed-modal.view-appointed')
                                                <a type="button" class="btn btn-icon btn-warning "
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#edit-modal{{ $official->id }}">
                                                    <i class="ri-edit-box-line"></i>
                                                </a>
                                                @include('admin.partials.modals.appointed-modal.edit-appointed')
                                                <a type="button" class="btn btn-icon btn-danger delete"
                                                    data-id="{{ $official->id }}" data-name="{{ $official->name }}">
                                                    <i class="ri-delete-bin-fill"></i>
                                                </a>
                                                @include('admin.partials.scripts.officials-scripts.success-officials')
                                                @include('admin.partials.scripts.officials-scripts.delete-officials')
                                            </td>
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
