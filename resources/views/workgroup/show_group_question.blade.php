@extends('layouts.app')

@section('content')
<div id="app" class="layout-wrapper">
    @include('include.sidebar')
    <div class="main-content">
        <div class="container-fluid w-100">
            @include('include.navbar')

            <div class="py-3">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                    <div class="card-header flex-column flex-md-row">
                        <div class="head-label text-center">
                            <h2 class="card-title mb-0">All Group Question</h2>
                        </div>
                        <div class="dt-action-buttons text-end pt-6 pt-md-0">
                            <div class="dt-buttons flex-wrap">
                                <a href="{{ route('workgroup.addworkquestion') }}"
                                    class="btn btn-primary create-new waves-effect waves-light btn-dark rounded"
                                    tabindex="0" aria-controls="DataTables_Table_0">
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
                    <div class="card mt-4 p-2">
                        <div class="partyscroll">
                            @forelse ($workgroupquestions as $question)
                            <div class="card mb-4">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h5 class="mb-0">Question ID: {{ $question->id }}</h5>
                                    <a href="{{ route('workgroup.workgroupquestionedit', $question->id) }}" class="btn btn-sm btn-dark">Edit</a>
                                </div>
                                <div class="card-body">
                                    <div class="rendered-form" id="form-render-{{ $question->id }}">
                                        {{-- Decode the JSON data and loop through it --}}
                                        @if($question->questions_from_data)
                                        @php
                                        $questionData = json_decode($question->questions_from_data, true);
                                        @endphp

                                        @if(is_array($questionData))
                                        {{-- Loop through the decoded data --}}
                                        @foreach ($questionData as $item)
                                        @if ($item['type'] === 'header')
                                        <h3>{{ $item['label'] }}</h3>
                                        @elseif ($item['type'] === 'radio-group')
                                        {{-- Show the header and ID of the radio group --}}
                                        <div class="radio-group">
                                            <h5>{{ $item['label'] }} (ID: {{ $item['name'] }})</h5>
                                            @foreach ($item['values'] as $value)
                                            <label>
                                                <input type="radio" name="{{ $item['name'] }}" value="{{ $value['value'] }}"
                                                    @if($value['selected']) checked @endif>
                                                {{ $value['label'] }}
                                            </label><br>
                                            @endforeach
                                        </div>
                                        @endif
                                        @endforeach
                                        @else
                                        <p>Invalid form data format.</p>
                                        @endif
                                        @else
                                        <p>No form data available.</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @empty
                            <div class="text-center text-muted">No group questions available.</div>
                            @endforelse
                        </div>
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
            /* border-bottom: 2px solid #ddd; */
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
                partyIdToDelete = $(this).data('party-id');
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