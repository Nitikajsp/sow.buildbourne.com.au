@extends('layouts.app')
@push('css')
<link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
@endpush
@section('content')
<div id="app" class="layout-wrapper">
    @include('include.sidebar')
    <div class="main-content">
        <div class="container-fluid">
            @include('include.navbar')

            <div class="py-3">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ url()->previous() }}" class="float-left d-flex text-black"><i
                                class="ti ti-arrow-narrow-left border border-dark rounded-circle mx-1 me-2 "></i>Back</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-7">
                        <!-- <div class="row">
                        <div class="col-lg-12 "> -->
                        <div class="pull-left head-label mt-3">
                            <h2>View Project Detail </h2>
                        </div>
                        <!-- </div>
                    </div> -->
                        @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif

                        <div class="card px-3 py-4 table_scroll party_table_width">
                            <!-- <div class="d-flex flex-end ms-auto">
            <a href="{{ route('parties.edit', $list->id) }}" class="btn p-0 edit-btn text-info">
              <i class="ti ti-pencil me-1"></i>
            </a>


            <form id="deletePartyForm" action="{{ route('parties.destroy', $list->id) }}" method="POST" style="display: none;">
              @csrf
              @method('DELETE')
            </form>
            <button type="button" class="btn p-0 delete-btn text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
              <i class="ti ti-trash me-1"></i>
            </button>

          </div> -->

                            <div class="d-flex">
                                <div class=" d-flex flex-column justify-content-center w-100">
                                    <div class="row mb-2">
                                        <div class="col-sm-4 fw-bold">Property Address:</div>
                                        <div class="col-sm-8">{{ $list->name }}</div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-sm-4 fw-bold">Client ID:</div>
                                        <div class="col-sm-8">{{ $list->id }}</div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-sm-4 fw-bold">Phone Number:</div>
                                        <div class="col-sm-8">
                                            <a href="tel:{{ $list->phone }}"
                                                class="text-dark">{{ $list->contact_number }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3 customr_btn_centr">
                                <div class="col-lg-12 ">
                                    <div class="pull-right text-end">
                                        <a href="{{ route('createlist', ['party_id' => $list->id]) }}"
                                            class="btn btn-outline-dark text-dark rounded" tabindex="0"
                                            aria-controls="DataTables_Table_0">
                                            <span><i class="ti ti-plus me-sm-1"></i> Create Project</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <table id="partyListsTable" class="table table-bordered mt-3 show_custmer "
                                style="border: 1px solid #DDDDDD; border-spacing: 0 10px;">
                                <thead class="table-dark">
                                    <tr>
                                        <th class="text-secondary">No</th>
                                        <th class="text-secondary">Property Address</th>
                                        <th class="text-secondary">Status</th>
                                        <th class="text-secondary">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list->submissions as $key => $submission)
                                    <tr class="mt-2">
                                        <td style="border: 1px solid #DDDDDD !important">{{ $key + 1 }}</td>
                                        <td style="border: 1px solid #DDDDDD !important">
                                            {{ $submission->project->name }}
                                        </td>
                                        <td style="border: 1px solid #DDDDDD !important;">
                                            {{ $submission->status ?? 'Pending' }}
                                        </td>
                                        <td>
                                            <a href="{{ route('showsubmissions.show', $submission->id) }}"
                                                class="btn btn-warning btn-sm">View</a>
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
    </div>
    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this List?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Delete</button>
                </div>
            </div>
        </div>
    </div>

    <script>
    $(document).ready(function() {
        let formToSubmit;

        // Open the modal and store the form to submit
        $(document).on('click', '.delete-btn', function() {
            formToSubmit = $(this).closest('form'); // ✅ fix here
        });

        // Submit the form when the confirm button is clicked
        $('#confirmDeleteBtn').on('click', function() {
            if (formToSubmit) {
                formToSubmit.submit();
            }
        });
    });
    </script>


    <script>
    $('#partyListsTable').DataTable();
    </script>
    @endsection