@extends('layouts.app')
@push('css')
<link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
@endpush
@section('content')
<div id="app" class="layout-wrapper">
    @include('include.sidebar')

    <div class="container">
        @include('include.navbar')

        <div class="listpadding">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('workgroup.showgroupquestion') }}" class="float-left d-flex text-black"><i
                            class="ti ti-arrow-narrow-left border border-dark rounded-circle mx-1 me-2 "></i>Back</a>
                </div>
            </div>

            <div class="container mt-5">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left head-label">
                            <h2>View Group Question Detail</h2>
                        </div>
                    </div>
                </div>

                <div class="card px-3 py-4 table_scroll party_table_width">
                    <div class="d-flex flex-end ms-auto">
                        <a href="" class="btn p-0 edit-btn text-info">
                            <i class="ti ti-pencil me-1"></i>
                        </a>
                        <form id="deletePartyForm" action="" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                        <button type="button" class="btn p-0 delete-btn text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                            <i class="ti ti-trash me-1"></i>
                        </button>

                    </div>

                    <div class="d-flex">
                        <div class=" d-flex flex-column justify-content-center w-100">
                            <div class="row mb-2">
                                <div class="col-sm-4 fw-bold">ID:</div>
                                <div class="col-sm-8">{{ $workgroupquestion->id }}</div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-sm-4 fw-bold">Group Name:</div>
                                <div class="col-sm-8">{{ $workgroupquestion->workgroup->group_name }}</div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-sm-4 fw-bold">Question Title:</div>
                                <div class="col-sm-8">{{ $workgroupquestion->question_title }}</div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-sm-4 fw-bold">Question Value:</div>
                                <div class="col-sm-8">{{ $workgroupquestion->question_value }}</div>
                            </div>
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
                // Find the form associated with the button
                formToSubmit = $(this).siblings('form');
                // Show the modal
                $('#deleteModal').modal('show');
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