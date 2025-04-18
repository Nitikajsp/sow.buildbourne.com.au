@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/select/2.0.8/css/select.dataTables.min.css" />
<div id="app" class="layout-wrapper">
  @include('include.sidebar')
  <div class="container-fluid container-partylist w-100">
    @include('include.navbar')
    <div class="row mb-3">
      <div class="col-12">
        <a href="{{ route('home') }}">
          <i class="ti ti-arrow-narrow-left border border-dark rounded-circle mx-1 me-2"></i> Back
        </a>
      </div>
    </div>

    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
      <div class="card-header flex-column flex-md-row">
        <div class="head-label text-center">
          <h2 class="card-title mb-0">All Client</h2>
        </div>
        <div class=" pt-6 pt-md-0">
          <!-- <div class="dt-buttons flex-wrap"> -->
          <a href="{{ route('parties.create') }}" class="btn btn-primary create-new waves-effect waves-light btn-dark rounded" tabindex="0" aria-controls="DataTables_Table_0">
            <span><i class="ti ti-plus me-sm-1"></i> Add Client </span>
          </a>
          <!-- </div> -->
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
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
                <th style="display: none; width: 0px;">Details</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($parties as $party)
              <tr data-party-id="{{ $party->id }}">
                <td class="toggle-details">{{ $party->id }}</td>
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
                <td class="accordion-body" style="display: none;">
                  <table class="w-100">
                    <thead>
                      <th></th>
                      <th>Street</th>
                      <th>Pincode</th>
                      <th>State</th>
                      <th style="font-size: 0">empty</th>
                    </thead>
                    <tbody>
                      <td style="color: transparent;padding: 8px 10px;">{{ $party->id }}</td>
                      <td>{{ $party->street }}</td>
                      <td>{{ $party->pincode }}</td>
                      <td>{{ $party->state }}</td>
                      <td></td>
                    </tbody>
                  </table>
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
  #partylist>tbody>tr:not(.appended-row) {
    border-bottom: 1px solid #ddd;
  }

  #partylist_filter input {
    border: unset;
    padding: 8px 10px;
  }

  #partylist>tbody>tr>td.toggle-details {
    cursor: pointer;
    position: relative;
  }

  #partylist>tbody>tr>td.toggle-details:before {
    margin-right: .5em;
    display: inline-block;
    box-sizing: border-box;
    content: "";
    border-top: 5px solid transparent;
    border-left: 10px solid rgba(0, 0, 0, 0.5);
    border-bottom: 5px solid transparent;
    border-right: 0px solid transparent;
    transition: transform 0.3s ease-in-out;
  }

  #partylist>tbody>tr.expand>td.toggle-details:before {
    transform: rotate(90deg);
  }

  /* #partylist {
      border-collapse: separate !important;
      border-spacing: 0px 10px;
    }
    #partylist tbody tr {
      box-shadow: 0px 5px 20px 0px #88888838;
    }
    #partylist tr.appended-row tr{ box-shadow: none;}
    #partylist tbody td:nth-child(2) {
      width: 50%;
    }
    #partylist tbody td {
      border-top: 1px solid #EDEDED !important;
      border-bottom: 1px solid #EDEDED !important;
    }
    #partylist tbody:before {
      content: "-";
      display: block;
      line-height: 1em;
      color: transparent;
    } */
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
        Are you sure you want to delete this client?
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
        <a href="{{ route('createlist', ['party_id' => $party->id]) }}" class="btn btn-outline-dark text-dark rounded" id="createListLink">
          <span><i class="ti ti-plus me-sm-1"></i> Create Project</span>
        </a>
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
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready(function() {
    var table = $('#partylist').DataTable();

    // Handle toggle button click
    $('.dataTables_wrapper #partylist tbody').on('click', '.toggle-details', function() {
      var currentRow = $(this).closest('tr');
      currentRow.addClass('expand');
      setTimeout(function() {
        var appendedRow = currentRow.next('.appended-row');
        if (appendedRow.length) {
          appendedRow.toggle();

          if (appendedRow.is(":visible")) {
            currentRow.css("border-bottom", "none");
            appendedRow.css("border-bottom", "1px solid #ddd");
          } else {
            currentRow.css("border-bottom", "1px solid #ddd");
            appendedRow.css("border-bottom", "none");
          }
        } else {
          $('.appended-row').remove();
          currentRow.removeClass('expand');
          currentRow.css("border-bottom", "none");
          var rowHtml = currentRow.find('td[style="display: none;"]').html();
          var newRow = $('<tr class="appended-row">').append($('<td>').attr('colspan', '5').html(rowHtml));
          currentRow.after(newRow);
          appendedRow = currentRow.next('.appended-row');
          appendedRow.css("border-bottom", "1px solid #ddd");
        }
      }, 100);
    });

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
    $(document).on('click', '.set-btn', function() {
      var partyId = $(this).data('party-id');
      $('#selectedPartyId').val(partyId);

      // Fetch the list options from the server
      $.ajax({
        url: '/get-lists',
        method: 'GET',
        data: {
          party_id: partyId
        },
        success: function(response) {
          // Populate dropdown with options or show a message if no lists are available
          var options = '<option value="" disabled selected required>Select...</option>';
          if (response.length > 0) {
            response.forEach(function(list) {
              options += `<option value="${list.id}">${list.name}</option>`;
            });
            $('#dropdownList').html(options);
          } else {
            $('#dropdownList').html('<option value="" disabled>No lists available</option>');
          }
          // Set the create list link
          var createUrl = '{{ route('
          createlist ', ['
          party_id ' => ': party_id ']) }}';
          createUrl = createUrl.replace(':party_id', partyId);
          $('#createListLink').attr('href', createUrl);

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
      var partyId = $('#selectedPartyId').val();
      var selectedOption = $('#dropdownList').val();
      if (!selectedOption) {
        alert('Please select a list.');
        return;
      }
      // Construct the URL
      var url = '{{ route('
      lists.addcartproduct ', ['
      list ' => '
      LIST_ID ', '
      party ' => '
      PARTY_ID ']) }}';
      url = url.replace('LIST_ID', selectedOption).replace('PARTY_ID', partyId);
      // Redirect to the constructed URL
      window.location.href = url;
    });
  });
</script>

@endpush
@endsection