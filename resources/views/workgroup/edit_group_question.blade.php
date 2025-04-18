@extends('layouts.app')

@push('css')
<link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
@endpush

@section('content')
<div id="app" class="layout-wrapper">
    @include('include.sidebar')
    <div class="main-content">

        <div class="container-fluid">
            @include('include.navbar')

            <div class="row">
                <div class="col-md-12 d-flex justify-content-between align-items-center page-header">
                    <a href="{{ route('workgroup.showgroupquestion') }}" class="float-left d-flex text-black">
                        <i
                            class="ti ti-arrow-narrow-left border border-dark rounded-circle mx-1 me-2 text-black"></i>Back
                    </a>
                    <a href="{{ route('workgroup.showgroupquestion', $workgroupquestion->id) }}"
                        class="btn btn-primary btn-dark float-end rounded">
                        View
                    </a>

                </div>
            </div>

            <!-- <div class="container-fluid"> -->
            <div class="row">
                <div class="col-md-7">
                    <div class="inner-container ">
                        <div class="row">
                            <div class="col-lg-12 ">
                                <div class="pull-left">
                                    <h2>Edit Group Question</h2>
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

                        <form action="{{ route('workgroup.workgroupquestionupdate', $workgroupquestion->id) }}"
                            method="POST" id="editPartyForm">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                    <div class="form-group">
                                        <p class="text-secondary mb-1">Group Name</p>
                                        <select name="workgroup_id" class="form-control border border-white-50">
                                            <option value="">-- Select Group --</option>
                                            @foreach($groups as $group)
                                            <option value="{{ $group->id }}"
                                                {{ $workgroupquestion->workgroup_id == $group->id ? 'selected' : '' }}>
                                                {{ $group->group_name }}
                                            </option>
                                            @endforeach
                                        </select>
                                        <div class="invalid-feedback"></div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                    <div class="form-group">
                                        <p class="text-secondary mb-1">Question Title</p>
                                        <input type="text" name="question_title"
                                            value="{{ old('question_title', $workgroupquestion->question_title) }}"
                                            class="form-control border border-white-50" placeholder="Question Title">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <p class="text-secondary mb-1">Question Value</p>
                                    <input type="text" name="question_value"
                                        value="{{ old('question_value', $workgroupquestion->question_value) }}"
                                        class="form-control border border-white-50" placeholder="Question Value">
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="pull-right mt-3 text-center">
                                <button type="submit" class="btn btn-primary btn btn-dark me-1 rounded">Save</button>
                                <a class="btn btn-outline-dark waves-effect rounded"
                                    href="{{ route('workgroup.showgroupquestion') }}">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- </div> -->
        </div>
    </div>
    @endsection

    @push('scripts')
    @endpush