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
                <a href="{{ route('workgroup.showworkgroup') }}" class="float-left d-flex text-black">
                    <i class="ti ti-arrow-narrow-left border border-dark rounded-circle mx-1 me-2 text-black"></i>Back
                </a>
            </div>
        </div>

        <div class="container addcustomer_pad">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-between align-items-center custmrmt0 mb-4">
                    <h2>Work Group</h2>
                </div>

                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                <div class="col-md-6">
                    <form method="POST" action="{{ route('workgroup.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="group_name" class="form-label">Group Name</label>
                            <input type="text" class="form-control" id="group_name" name="group_name" placeholder="Enter Group Name" required>
                        </div>
                        <button type="submit" class="btn btn-dark me-1 rounded">Save</button>
                        <a href="" class="btn btn-outline-dark waves-effect rounded">Cancel</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
@endpush