@extends('layouts.app')

@push('css')
<link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" />
@endpush

@section('content')
<div id="app" class="layout-wrapper">
    @include('include.sidebar')

    <div class="main-content">
        @include('include.navbar')

        <div class="container mt-4">
            <div class="d-flex flex-column flex-md-row justify-content-between">
                <div class="head-label text-center">
                    <h2 class="card-title mb-0">All Site Work Submissions</h2>
                </div>
            </div>

            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <div class="card shadow-sm">
                <div class="card-body">
                    @if($submissions->isEmpty())
                    <p class="text-muted">No submissions found.</p>
                    @else
                    <div class="table-responsive">
                        <table class="table table-bordered " id="submissionTable">
                            <thead class="thead-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Project Name</th>
                                    <th>Party Name</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($submissions as $index => $submission)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $submission->project->name ?? 'N/A' }}</td>
                                    <td>{{ $submission->party->name ?? 'N/A' }}</td>
                                    <td>{{ $submission->status ?? 'Pending' }}</td>
                                    <td>
                                        <a href="{{ route('submissions.show', $submission->id) }}" class="btn btn-warning btn-sm">View</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')

<script>
    $(document).ready(function() {
        $('#submissionTable').DataTable({
            "order": [
                [0, 'asc']
            ],
            "columnDefs": [{
                "orderable": false,
                "targets": 4
            }],
            "pageLength": 10,
            "language": {
                "search": "Search:",
                "lengthMenu": "Show _MENU_ entries",
                "info": "Showing _START_ to _END_ of _TOTAL_ entries"
            }
        });

        $('.dataTables_filter input')
            .css({
                'width': '150px',
                'padding': '4px 8px',
                'border-radius': '4px',
                'border': '1px solid #ced4da'
            });

        $('.dataTables_filter label').css({
            'display': 'flex',
            'align-items': 'center',
            'gap': '5px'
        });
    });
</script>
@endpush
@endsection