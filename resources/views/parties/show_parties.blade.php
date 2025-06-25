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

            <div class="d-flex justify-content-between align-items-center page-header">
                <a href="{{ route('client.index') }}" class="float-left d-flex text-black">
                    <i class="ti ti-arrow-narrow-left border border-dark rounded-circle mx-1 me-2"></i>Back
                </a>
            </div>
            <div class="row mt-3 justify-content-center">
                <div class="col-md-7">
                    <div class="row ">
                        <div class="pull-left head-label text-center">
                            <h2>View Client Detail </h2>
                        </div>
                    </div>
                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    <div class="card px-3 py-4 table_scroll party_table_width v">
                        <div class="d-flex">
                            <div class=" d-flex flex-column justify-content-center w-100">
                                <div class="row mb-2">
                                    <div class="col-sm-4 fw-bold">Client Name:</div>
                                    <div class="col-sm-8">{{ $client->name }}</div>
                                </div>
                                <div class=" row mb-2">
                                    <div class="col-sm-4 fw-bold">Client ID:</div>
                                    <div class="col-sm-8">{{ $client->id }}</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-4 fw-bold">Email ID:</div>
                                    <div class="col-sm-8">{{ $client->email }}</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-4 fw-bold">Phone Number:</div>
                                    <div class="col-sm-8">
                                        <a href="tel:{{ $client->phone }}" style="color: #6f6b7d;">{{ $client->phone }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3 customr_btn_centr">
                              <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-2">
                                                <button class="btn btn-primary me-md-2 rounded set-btn set-btn-class"
                                                    data-party-id="{{ $client->id }}" type="button">Set</button>
                                            </div>
                            <div class="col-lg-12 ">
                                <div class="pull-right text-end">
                                    <a href="{{ route('createlist', ['party_id' => $client->id]) }}"
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
                                    <th class="text-secondary">Property Address</th>
                                    <th class="text-secondary">Description</th>
                                    <th class="text-secondary">Status</th>
                                    <th class="text-secondary">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($client->lists as $list)
                                <tr class="mt-2">
                                    <td style="border: 1px solid #DDDDDD !important">{{ $list->name }}</td>
                                    <td style="border: 1px solid #DDDDDD !important;">{{ $list->description }}</td>
                                    <td style="border: 1px solid #DDDDDD !important;">
                                        {{ $list->status }}
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <div class="d-inline-block">
                                                <a href="javascript:;"
                                                    class="btn-sm btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow show text-black"
                                                    data-bs-toggle="dropdown" aria-expanded="true">
                                                    <i class="ti ti-dots-vertical ti-md"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end m-0">
                                                    <a href="{{ route('lists.edit', $list->id) }}"
                                                        class="btn p-0 edit-btn dropdown-item">
                                                        <i class="ti ti-pencil me-1"></i> Edit
                                                    </a>
                                                    <a href="{{ route('showlistparty', ['listId' => $list->id, 'partyId' => $client->id]) }}"
                                                        class="btn p-0 view-btn dropdown-item">
                                                        <i class="ti ti-eye me-1"></i> View
                                                    </a>
                                                    <a href="{{ route('lists.addcartproject', ['list' => $list->id, 'party' => $list->parties_id]) }}"
                                                        class="btn p-0 view-btn dropdown-item">
                                                        <i class="ti ti-plus me-1"></i>Range Selection
                                                    </a>

                                                    <div class="dropdown-divider"></div>
                                                    <form id="deletePartyForm"
                                                        action="{{ route('lists.destroy', ['id' => $list->id]) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button"
                                                            class="btn p-0 delete-btn text-danger dropdown-item"
                                                            data-party-id="{{ $list->id }}" data-bs-toggle="modal"
                                                            data-bs-target="#deleteModal">
                                                            <i class="ti ti-trash me-1"></i> Delete
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
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
                Are you sure you want to delete this project?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Delete</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="setModal" tabindex="-1" aria-labelledby="setModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="setModalLabel"></h5>
                <a href="" id="createListLink" class="ms-auto">Create Project</a>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="setPartyForm">
                    <div class="mb-3">
                        <label for="dropdownList" class="form-label">Select Project</label>
                        <select id="dropdownList" class="form-select" aria-label="Select an Option">
                            <option value="" disabled selected>Select...</option>
                        </select>
                    </div>
                    <input type="hidden" id="selectedPartyId" name="party_id" />
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary rounded" id="selectButton">Select</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
   $(document).on('click', '.set-btn', function () {
    var partyId = $(this).data('party-id');
    $('#selectedPartyId').val(partyId);

    $.ajax({
        url: '/get-lists',
        method: 'GET',
        data: {
            party_id: partyId
        },
        success: function (response) {
            let baseCreateUrl = "{{ url('/createproject') }}/";
            $('#createListLink').attr('href', baseCreateUrl + partyId);

            if (response.length === 1) {
                // ✅ Auto redirect if only one list/project
                let listId = response[0].id;
                let redirectUrl = "{{ url('/lists') }}/" + listId + "/projects/" + partyId;
                window.location.href = redirectUrl;
            } else {
                // Show modal with dropdown options
                let options = '<option value="" disabled selected required>Select...</option>';
                if (response.length > 0) {
                    response.forEach(function (list) {
                        options += `<option value="${list.id}">${list.name}</option>`;
                    });
                } else {
                    options = '<option value="" disabled>No lists available</option>';
                }
                $('#dropdownList').html(options);
                $('#setModal').modal('show');
            }
        },
        error: function (xhr, status, error) {
            console.error('Error fetching lists:', error);
        }
    });
});


    $('#setPartyForm').on('submit', function(event) {
        event.preventDefault();

        let partyId = $('#selectedPartyId').val();
        let listId = $('#dropdownList').val();

        if (!listId) {
            alert('Please select a list.');
            return;
        }

        let redirectUrl = "{{ url('/lists') }}/" + listId + "/projects/" + partyId;
        window.location.href = redirectUrl;
    });
</script>


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