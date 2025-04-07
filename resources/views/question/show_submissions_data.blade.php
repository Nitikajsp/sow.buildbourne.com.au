    @extends('layouts.app')

    @push('css')
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
    @endpush

    @section('content')
    <div id="app" class="layout-wrapper">
        <!-- Sidebar -->
        @include('include.sidebar')

        <!-- Main Content Area -->
        <div class="main-content">
            @include('include.navbar')

            <div class="container mt-4">
                <h2 class="mb-4">All Site Work Submissions</h2>

                <div class="card shadow-sm">
                    <div class="card-body">
                        @if($submissions->isEmpty())
                        <p class="text-muted">No submissions found.</p>
                        @else
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
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
    @endsection