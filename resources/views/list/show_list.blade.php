@extends('layouts.app')
@push('css')
<link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
@endpush
@section('content')
<div id="app" class="layout-wrapper">
    @include('include.sidebar')

    <div class="container">
        @include('include.navbar')
        <div class="listpadding">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ url()->previous() }}" class="float-left d-flex text-black"><i
                            class="ti ti-arrow-narrow-left border border-dark rounded-circle mx-1 me-2 "></i>Back</a>
                </div>
            </div>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left head-label">
                            <h2>View Project Detail</h2>
                        </div>
                    </div>
                    @if(session('success'))
                    <div id="success-message-email" class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                </div>


                <div id="success-message" class="alert alert-success d-none" role="alert">
                    Quantity updated successfully!
                </div>

                <div class="card px-3 py-4 table_scroll customer_table_width">
                    <div class="d-flex flex-end ms-auto">
                        <a href="{{ route('lists.edit', $list->id) }}"
                            class="btn p-0 edit-btn text-info">
                            <i class="ti ti-pencil me-1"></i>
                        </a>

                        <form action="{{ route('parties.destroy', $list->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn p-0 delete-btn text-danger"
                                data-bs-toggle="modal" data-bs-target="#deleteModal" data-form-id="customer-form" data-delete-type="customer">
                                <i class="ti ti-trash me-1"></i>
                            </button>
                        </form>
                    </div>

                    <div class="d-flex">

                        <div class="ms-4 d-flex flex-column justify-content-center w-100">
                            <div class="row mb-2">
                                <div class="col-sm-4 fw-bold">Party Name:</div>
                                <div class="col-sm-8">{{ $list->name }}</div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-sm-4 fw-bold">Party ID:</div>
                                <div class="col-sm-8">{{ $list->id }}</div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-sm-4 fw-bold">Email ID:</div>
                                <div class="col-sm-8">{{ $list->contact_email }}</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-sm-4 fw-bold">Phone Number:</div>
                                <div class="col-sm-8">
                                    <a href="tel:{{ $list->phone }}" class="text-dark">{{ $list->contact_number }}</a>
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