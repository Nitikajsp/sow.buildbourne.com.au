@extends('layouts.app')

@push('css')
<link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
@endpush

@section('content')
<div id="app" class="layout-wrapper">
    @include('include.sidebar')
    <div class="main-content">

        <div class="container-fluid ">
            @include('include.navbar')
            <div class=" d-flex justify-content-between align-items-center page-header">
                <a href="{{ route('client.show', $list->parties_id ?? $partyId) }}"
                    class="float-left d-flex text-black">
                    <i
                        class="ti ti-arrow-narrow-left border border-dark rounded-circle mx-1 me-2 text-black rounded"></i>Back
                </a>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-7">
                    <div class="inner-container ">
                        <div class="row">
                            <div class="col-md-12 d-flex justify-content-between align-items-center">
                                <h2>Range Selection</h2>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <form method="GET" action="{{ route('parties.updateWorkType', ['list' => $list->id, 'party' => $partyId, 'work_id' => '']) }}">
                                <div class="mb-3">
                                    <label for="work_id" class="form-label">Types</label>
                                    <select class="form-select" id="work_id" name="work_id" required>
                                        <option value="" disabled {{ !request('work_id') ? 'selected' : '' }}>Select Type</option>
                                        @foreach($workQuestions as $workQuestion)
                                        <option value="{{ $workQuestion->id }}"
                                            {{ request('work_id') == $workQuestion->id ? 'selected' : '' }}>
                                            {{ $workQuestion->form_name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="pull-right mt-1 text-center">
                                    <button type="submit" class="btn btn-dark me-1 rounded">Next</button>
                                    <a href="{{ route('client.show', $list->parties_id) }}" class="btn btn-outline-dark waves-effect rounded">Cancel</a>
                                </div>
                            </form>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection