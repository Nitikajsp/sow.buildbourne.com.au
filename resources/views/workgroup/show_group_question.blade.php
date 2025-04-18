@extends('layouts.app')

@section('content')
<div id="app" class="layout-wrapper">
    @include('include.sidebar')
    <div class="container-fluid container-partylist w-100">
        @include('include.navbar')
        <div class="row mb-3">
            <div class="col-12">
                <!-- <a href="{{ route('home') }}">
              <i class="ti ti-arrow-narrow-left border border-dark rounded-circle mx-1 me-2"></i> Back
            </a> -->
            </div>
        </div>

        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
            <div class="card-header flex-column flex-md-row">
                <div class="head-label text-center">
                    <h2 class="card-title mb-0">All Group Question</h2>
                </div>
                <div class="dt-action-buttons text-end pt-6 pt-md-0">
                    <div class="dt-buttons flex-wrap">
                        <a href="{{ route('workgroup.addworkquestion') }}" class="btn btn-primary create-new waves-effect waves-light btn-dark rounded" tabindex="0" aria-controls="DataTables_Table_0">
                            <span><i class="ti ti-plus me-sm-1"></i> Add Group Question</span>
                        </a>
                    </div>
                </div>
            </div>
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif
            <div class="card mt-4 p-2 ">
                <div class="partyscroll">
                    <table class="table datatables-projects" id="partylist">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Group Name</th>
                                <th>Question Title</th>
                                <th>Question Value</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            @forelse ($workgroupquestions as $workgroupquestion)
                            @if ($workgroupquestion->workgroup && $workgroupquestion->workgroup->group_name)
                            <tr>
                                <td>{{ $workgroupquestion->id }}</td>
                                <td>{{ $workgroupquestion->workgroup->group_name }}</td>
                                <td>{{ $workgroupquestion->question_title }}</td>
                                <td>{{ $workgroupquestion->question_value }}</td>
                                <td>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <div class="d-inline-block">
                                            <a href="javascript:;" class="btn-sm btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow show text-black" data-bs-toggle="dropdown" aria-expanded="true">
                                                <i class="ti ti-dots-vertical ti-md"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end m-0">
                                                <a href="{{ route('workgroup.workgroupquestionedit', $workgroupquestion->id) }}" class="btn p-0 edit-btn dropdown-item">
                                                    <i class="ti ti-pencil me-1"></i> Edit
                                                </a>
                                                <a href="{{ route('workgroup.workquestionview', $workgroupquestion->id) }}" class="btn p-0 view-btn dropdown-item">
                                                    <i class="ti ti-eye me-1"></i> View
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <form id="deletePartyForm" action="{{ route('workgroup.workquestiondelete', $workgroupquestion->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn p-0 delete-btn text-danger dropdown-item" data-party-id="{{ $workgroupquestion->id }}" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                                        <i class="ti ti-trash me-1"></i> Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endif
                            @empty
                            <tr>
                                <td colspan="5" class="text-center text-muted">No group questions available.</td>
                            </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <style>
        #partylist thead tr:first-child th {
            background-color: #f8f9fa;
            font-weight: bold;
        }

        #partylist tbody tr:nth-child(odd) {
            border-bottom: 2px solid #ddd;
        }

        #partylist tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this workgroup?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Delete</button>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        $(document).ready(function() {
            let partyIdToDelete;
            $(document).on('click', '.delete-btn', function() {
                cpartyIdToDelete = $(this).data('party-id');
                var form = $(this).closest('form');
                $('#confirmDeleteBtn').data('form', form);
            });

            $('#confirmDeleteBtn').on('click', function() {
                var form = $(this).data('form');
                form.submit();
            });
        });
    </script>
    @endpush
</div>
@endsection