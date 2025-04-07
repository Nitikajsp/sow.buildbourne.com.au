@extends('layouts.app')

@section('content')
<div id="app" class="layout-wrapper">
  @include('include.sidebar')
  <div class="container-partylist w-100">
    @include('include.navbar')
    <div class="row mb-3">
      <div class="col-12">
        <!-- <a href="{{ route('home') }}">
              <i class="ti ti-arrow-narrow-left border border-dark rounded-circle mx-1 me-2"></i> Back
            </a> -->
      </div>
    </div>

    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
      <div class="d-flex flex-column flex-md-row justify-content-between">
        <div class="head-label text-center">
          <h2 class="card-title mb-0">All Party</h2>
        </div>
        <div class="dt-action-buttons text-end pt-6 pt-md-0">
          <div class="dt-buttons flex-wrap">
            <a href="{{ route('parties.create') }}" class="btn btn-primary create-new waves-effect waves-light btn-dark rounded" tabindex="0" aria-controls="DataTables_Table_0">
              <span><i class="ti ti-plus me-sm-1"></i> Add Party</span>
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
        <!-- <div class="partyscroll"> -->
        <div class="custom-resp-table">

          <table class="table datatables-projects" id="partylist">
            <thead>
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($parties as $party)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $party->name }}</td>
                <td>{{ $party->email }}</td>
                <td>{{ $party->phone }}</td>
                <td class="d-flex justify-content-center align-items-center">
                  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-primary me-md-2 rounded set-btn set-btn-class" data-party-id="{{ $party->id }}" type="button">Set</button>
                  </div>
                  <div class="d-inline-block">
                    <a href="javascript:;" class="btn-sm btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow show text-black" data-bs-toggle="dropdown" aria-expanded="true">
                      <i class="ti ti-dots-vertical ti-md"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end m-0">
                      <a href="{{ route('parties.edit', $party->id) }}" class="btn p-0 edit-btn dropdown-item">
                        <i class="ti ti-pencil me-1"></i> Edit
                      </a>
                      <a href="{{ route('parties.show', $party->id) }}" class="btn p-0 view-btn dropdown-item">
                        <i class="ti ti-eye me-1"></i> View
                      </a>
                      <div class="dropdown-divider"></div>
                      <form id="deletePartyForm" action="{{ route('parties.destroy', $party->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn p-0 delete-btn text-danger dropdown-item" data-party-id="{{ $party->id }}" data-bs-toggle="modal" data-bs-target="#deleteModal">
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
        Are you sure you want to delete this party?
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


@push('scripts')
<script>
  $(document).ready(function() {
    $('#partylist').DataTable({
      "order": [
        [0, 'asc']
      ], // Default: sort by first column (No) ascending
      "columnDefs": [{
          "orderable": false,
          "targets": 4
        } // Disable sorting on Action column
      ],
      "pageLength": 10,
      "language": {
        "search": "Search:",
        "lengthMenu": "Show _MENU_ entries",
        "info": "Showing _START_ to _END_ of _TOTAL_ entries"
      }
    });
  });
</script>
<script>
  $(document).ready(function() {
    let partyIdToDelete;
    // Store the form to submit on confirmation
    $(document).on('click', '.delete-btn', function() {
      cpartyIdToDelete = $(this).data('party-id');
      var form = $(this).closest('form');
      $('#confirmDeleteBtn').data('form', form);
    });

    // Submit the form when the confirm button is clicked
    $('#confirmDeleteBtn').on('click', function() {
      var form = $(this).data('form');
      form.submit();
    });
  });
</script>

<script>
  // Handle "Set" button click
  $(document).on('click', '.set-btn', function() {
    var partyId = $(this).data('party-id');
    $('#selectedPartyId').val(partyId);

    // AJAX call to get lists
    $.ajax({
      url: '/get-lists',
      method: 'GET',
      data: {
        party_id: partyId
      },
      success: function(response) {
        let options = '<option value="" disabled selected required>Select...</option>';
        if (response.length > 0) {
          response.forEach(function(list) {
            options += `<option value="${list.id}">${list.name}</option>`;
          });
        } else {
          options = '<option value="" disabled>No lists available</option>';
        }
        $('#dropdownList').html(options);

        // Build URL for create list
        let baseCreateUrl = "{{ url('/createproject') }}/";
        $('#createListLink').attr('href', baseCreateUrl + partyId);

        $('#setModal').modal('show');
      },
      error: function(xhr, status, error) {
        console.error('Error fetching lists:', error);
      }
    });
  });

  // Handle form submission
  $('#setPartyForm').on('submit', function(event) {
    event.preventDefault();

    let partyId = $('#selectedPartyId').val();
    let listId = $('#dropdownList').val();

    if (!listId) {
      alert('Please select a list.');
      return;
    }

    // Construct redirect URL
    let redirectUrl = "{{ url('/lists') }}/" + listId + "/projects/" + partyId;
    window.location.href = redirectUrl;
  });
</script>

@endpush
</div>
@endsection