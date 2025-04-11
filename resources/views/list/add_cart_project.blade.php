@extends('layouts.app')

@push('css')
<link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
@endpush

@section('content')
<div id="app" class="layout-wrapper">
    @include('include.sidebar')
    <div class="container ">
        @include('include.navbar')
        <div class="row">
            <div class="col-md-12 d-flex justify-content-between align-items-center editpadding">
                <div class="col-md-12">
                    <a href="{{ route('parties.show', $list->parties_id ?? $partyId) }}" class="float-left d-flex text-black">
                        <i class="ti ti-arrow-narrow-left border border-dark rounded-circle mx-1 me-2 text-black rounded"></i>Back
                    </a>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="inner-container custmrmt0">
                <div class="row">
                    <div class="col-md-12 d-flex justify-content-between align-items-center">
                        <h2>Range Selection</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <form method="POST" action="{{ route('parties.updateWorkType', ['list' => $list->id, 'party' => $partyId]) }}">
                        @csrf
                        <div class="mb-3">
                            <label for="work_type" class="form-label">Types</label>
                            <select class="form-select" id="work_type" name="work_type" required>
                                <option value="Basic " {{ old('work_type', $list->work_type) == 'Basic ' ? 'selected' : '' }}>Basic </option>
                                <option value="Upgrade " {{ old('work_type', $list->work_type) == 'Upgrade ' ? 'selected' : '' }}>Upgrade </option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-dark me-1 rounded">Save</button>
                        <a href="{{ route('parties.show', $list->parties_id) }}" class="btn btn-outline-dark waves-effect rounded">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection