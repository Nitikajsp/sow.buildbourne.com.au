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
          <a href="{{ url()->previous() }}" class="float-left d-flex text-black"><i
              class="ti ti-arrow-narrow-left border border-dark rounded-circle mx-1 me-2 "></i>Back</a>
        </div>
      </div>

      <div class="container mt-5">
        <div class="row">
          <div class="col-lg-12 margin-tb">
            <div class="pull-left head-label">
              <h2>View Party Detail</h2>
            </div>
          </div>
        </div>

        <div class="card px-3 py-4 table_scroll party_table_width">
          <!-- <div class="d-flex flex-end ms-auto">
            <a href="{{ route('parties.edit', $party->id) }}" class="btn p-0 edit-btn text-info">
              <i class="ti ti-pencil me-1"></i>
            </a>


            <form id="deletePartyForm" action="{{ route('parties.destroy', $party->id) }}" method="POST" style="display: none;">
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
                <div class="col-sm-4 fw-bold">Party Name:</div>
                <div class="col-sm-8">{{ $party->name }}</div>
              </div>
              <div class="row mb-2">
                <div class="col-sm-4 fw-bold">Party ID:</div>
                <div class="col-sm-8">{{ $party->id }}</div>
              </div>
              <div class="row mb-2">
                <div class="col-sm-4 fw-bold">Email ID:</div>
                <div class="col-sm-8">{{ $party->email }}</div>
              </div>
              <div class="row mb-2">
                <div class="col-sm-4 fw-bold">Phone Number:</div>
                <div class="col-sm-8">
                  <a href="tel:{{ $party->phone }}" class="text-dark">{{ $party->phone }}</a>
                </div>
              </div>
            </div>
          </div>

          <div class="row mt-3 customr_btn_centr">
            <div class="col-lg-12 margin-tb">
              <div class="pull-right text-end">
                <a href="{{ route('createlist', ['party_id' => $party->id]) }}" class="btn btn-outline-dark text-dark rounded" tabindex="0" aria-controls="DataTables_Table_0">
                  <span><i class="ti ti-plus me-sm-1"></i> Create Project</span>
                </a>
              </div>
            </div>
          </div>

          <table id="partyListsTable" class="table table-bordered mt-3 show_custmer " style="border: 1px solid #DDDDDD; border-spacing: 0 10px;">
            <thead class="table-dark">
              <tr>
                <th class="text-secondary">Name</th>
                <th class="text-secondary">Description</th>
                <th class="text-secondary">Status</th>
                <th class="text-secondary">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($party->lists as $list)
              <tr class="mt-2">
                <td style="border: 1px solid #DDDDDD !important">{{ $list->name }}</td>
                <td style="border: 1px solid #DDDDDD !important;">{{ $list->description }}</td>
                <td style="border: 1px solid #DDDDDD !important;">
                  {{ $list->status }}
                </td>
                <td class="d-flex justify-content-center align-items-center">
                  <div class="d-inline-block">
                    <a href="javascript:;" class="btn-sm btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow show text-black" data-bs-toggle="dropdown" aria-expanded="true">
                      <i class="ti ti-dots-vertical ti-md"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end m-0">
                      <a href="c" class="btn p-0 edit-btn dropdown-item">
                        <i class="ti ti-pencil me-1"></i> Edit
                      </a>
                      <a href="{{ route('showlistparty', ['listId' => $list->id, 'partyId' => $party->id]) }}" class="btn p-0 view-btn dropdown-item">
                        <i class="ti ti-eye me-1"></i> View
                      </a>
                      <a href="{{ route('lists.addcartproject', ['list' => $list->id, 'party' => $list->parties_id]) }}" class="btn p-0 view-btn dropdown-item">
                        <i class="ti ti-plus me-1"></i>Choose WorkType
                      </a>

                      <div class="dropdown-divider"></div>
                      <form id="deletePartyForm" action="{{ route('lists.destroy', ['id' => $list->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn p-0 delete-btn text-danger dropdown-item" data-party-id="{{ $list->id }}" data-bs-toggle="modal" data-bs-target="#deleteModal">
                          <i class="ti ti-trash me-1"></i> Delete
                        </button>
                      </form>
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