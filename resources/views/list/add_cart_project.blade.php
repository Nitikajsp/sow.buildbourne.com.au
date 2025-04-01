@extends('layouts.app')
@push('css')
<link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-touchspin/4.3.1/jquery.bootstrap-touchspin.min.css">
@endpush

@section('content')
<div id="app" class="layout-wrapper">
    @include('include.sidebar')
    <div class="container addcartwidth">
        @include('include.navbar')
        <div class="row">
            <div class="col-md-12 d-flex justify-content-between align-items-center mt-3 p-5">
                <a href="{{ route('parties.show', $list->parties_id ?? $partyId) }}" class="float-left d-flex text-black">
                    <i class="ti ti-arrow-narrow-left border border-dark rounded-circle mx-1 me-2 text-black"></i>Back
                </a>
            </div>
        </div>
        <div class="container addcustomer_pad">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-between align-items-center custmrmt0 mb-4">
                    <h2>Choose Your Work Type </h2>
                </div>
                <div class="col-md-6">
                    <form method="POST" action="{{ route('parties.updateWorkType', ['list' => $list->id, 'party' => $partyId]) }}">
                        @csrf
                        <div class="mb-3">
                            <label for="work_type" class="form-label">Work Type</label>
                            <select class="form-select" id="work_type" name="work_type" required>
                                <option value="normal" {{ old('work_type', $list->work_type) == 'normal' ? 'selected' : '' }}>Normal</option>
                                <option value="advance" {{ old('work_type', $list->work_type) == 'advance' ? 'selected' : '' }}>Advance</option>
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
    @push('scripts')
    @endpush