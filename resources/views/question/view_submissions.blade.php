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
            <h2 class="mb-4">Submission Details</h2>
            <div class="card shadow-sm">
                <div class="card-body">
                    <hr>
                    @if(!empty($submission->work))
                    @php
                    $workData = json_decode($submission->work, true);
                    @endphp

                    @if (isset($workData['sow']['site_work']))
                    <ul class="list-group">
                        @foreach ($workData['sow']['site_work'] as $key => $value)
                        <li class="list-group-item">
                            <strong>{{ ucfirst(str_replace('_', ' ', $key)) }}:</strong>
                            {{ is_null($value) || $value === '' ? 'N/A' : (is_array($value) ? implode(', ', $value) : (is_object($value) ? json_encode($value) : $value)) }}
                        </li>
                        @endforeach
                    </ul>
                    @else
                    <p class="text-muted">No Site Work Data Available.</p>
                    @endif

                    @else
                    <p class="text-muted">No Work Data Available.</p>
                    @endif

                    <hr>
                    <a href="{{ route('submissions.index') }}" class="btn btn-secondary">Back to Submissions</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection