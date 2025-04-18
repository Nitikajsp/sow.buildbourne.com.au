@extends('layouts.app')
@push('css')
<link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-touchspin/4.3.1/jquery.bootstrap-touchspin.min.css">
@endpush
@section('content')
<div id="app" class="layout-wrapper">
    @include('include.sidebar')
    <div class="main-content">

        <div class="container-fluid addcartwidth">
            @include('include.navbar')
            <div class="row">
                <div class="col-md-12 d-flex justify-content-between align-items-center py-4">
                    <a href="{{ route('workgroup.showworkgroup') }}" class="float-left d-flex text-black">
                        <i
                            class="ti ti-arrow-narrow-left border border-dark rounded-circle mx-1 me-2 text-black"></i>Back
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="inner-container ">

                        <!-- <div class="col-md-12 d-flex justify-content-between align-items-center "> -->
                        <h2>Work Group</h2>
                        <!-- </div> -->
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
                        <div class="row">
                            <div class="col-md-12">
                                <form method="POST" action="{{ route('workgroup.store') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="group_name" class="text-secondary mb-1">Group Name</label>
                                        <input type="text" class="form-control border border-white-50" id="group_name"
                                            name="group_name" placeholder="Enter Group Name" required>
                                    </div>
                                    <div class="pull-right mt-1 text-center">
                                        <button type="submit" class="btn btn-primary me-1 rounded">Save</button>
                                        <a href="" class="btn btn-outline-dark waves-effect rounded">Cancel</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection