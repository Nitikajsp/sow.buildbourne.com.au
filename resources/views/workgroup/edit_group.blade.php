@extends('layouts.app')

@push('css')
<link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
@endpush

@section('content')
<div id="app" class="layout-wrapper">
    @include('include.sidebar')

    <div class="container-fluid">
        @include('include.navbar')

        <div class="row">
            <div class="col-md-12 d-flex justify-content-between align-items-center editpadding">
                <a href="{{ route('workgroup.showworkgroup') }}" class="float-left d-flex text-black">
                    <i class="ti ti-arrow-narrow-left border border-dark rounded-circle mx-1 me-2 text-black"></i>Back
                </a>
                <a href="{{ route('workgroup.showworkgroup', $workgroup->id) }}"
                    class="btn btn-primary btn-dark float-end rounded">
                    View
                </a>

            </div>
        </div>

        <div class="container mt-5">
            <div class="inner-container custmrmt0">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2>Edit Group</h2>
                        </div>
                        <div class="pull-left">
                            <h5>Please update the details below</h5>
                        </div>
                    </div>
                </div>

                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                <form action="{{ route('workgroup.workgroupupdate', $workgroup->id) }}" method="POST" id="editPartyForm">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                            <div class="form-group">
                                <p class="text-secondary mb-1">Group Name</p>
                                <input type="text" name="group_name" value="{{ old('group_name', $workgroup->group_name) }}" class="form-control border border-white-50" placeholder="Group Name">
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="pull-right mt-1 text-center">
                            <button type="submit" class="btn btn-primary btn btn-dark me-1 rounded">Save</button>
                            <a class="btn btn-outline-dark waves-effect rounded" href="{{ route('workgroup.showworkgroup') }}">Cancel</a>
                        </div>
                </form>
            </div>
        </div>
    </div>
    @endsection

    @push('scripts')
    @endpush