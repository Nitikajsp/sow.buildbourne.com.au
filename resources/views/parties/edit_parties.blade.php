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
                    <a href="{{ route('client.index') }}" class="float-left d-flex text-black">
                        <i
                            class="ti ti-arrow-narrow-left border border-dark rounded-circle mx-1 me-2 text-black"></i>Back
                    </a>

                </div>
            </div>

            <div class="row">
                <div class="col-md-7">
                    <div class="inner-container ">
                        <div class="row">
                            <div class="col-lg-12 ">
                                <div class="pull-left">
                                    <h2>Edit Client</h2>
                                </div>
                                <div class="pull-left">
                                    <h5>Please update the client details </h5>
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

                        <form action="{{ route('client.update', $client->id) }}" method="POST" id="editclientForm">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                    <div class="form-group">
                                        <p class="text-secondary mb-1">Name</p>
                                        <input type="text" name="name" value="{{ old('name', $client->name) }}"
                                            class="form-control border border-white-50" placeholder="Name">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                    <div class="form-group">
                                        <p class="text-secondary mb-1">Phone</p>
                                        <input type="text" name="phone" value="{{ old('phone', $client->phone) }}"
                                            class="form-control border border-white-50" placeholder="Phone">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                    <div class="form-group">
                                        <p class="text-secondary mb-1">E-mail Address</p>
                                        <input type="email" name="email" value="{{ old('email', $client->email) }}"
                                            class="form-control border border-white-50" placeholder="Email">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                    <div class="form-group">
                                        <p class="text-secondary mb-1">Location/Address</p>
                                        <input type="text" name="street" value="{{ old('street', $client->street) }}"
                                            class="form-control border border-white-50" placeholder="Location/Address">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">



                                    <div class="pull-right mt-1 text-center">
                                        <button type="submit"
                                            class="btn btn-primary btn btn-dark me-1 rounded">Save</button>
                                        <a class="btn btn-outline-dark waves-effect rounded"
                                            href="{{ route('client.index') }}">Cancel</a>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

    @push('scripts')

    <script>
        $(document).ready(function() {
            $.validator.addMethod("validEmail", function(value, element) {
                return this.optional(element) || /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value);
            }, "Please enter a valid email address.");



            $.validator.addMethod("validName", function(value, element) {
                return this.optional(element) || /^[a-zA-Z\s]+$/.test(value);
            }, "Name should contain only letters and spaces.");

            $("#editclientForm").validate({
                rules: {
                    name: {
                        required: true,
                        validName: true,
                    },
                    email: {
                        required: true,
                        email: true,
                        validEmail: true
                    },
                    phone: {
                        required: true,
                    },
                    street: {
                        required: true
                    },

                    suburb: {
                        required: true
                    },
                    state: {
                        required: true
                    },
                    pincod: {
                        required: true,

                    }
                },
                messages: {
                    name: {
                        required: "Please enter your name",
                        minlength: "Name must consist of at least 3 characters"
                    },
                    email: {
                        required: "Please enter your email address"
                    },
                    phone: {
                        required: "Please enter your phone number"
                    },
                    street: {
                        required: "Please enter your street address"
                    },

                    suburb: {
                        required: "Please enter your suburb"
                    },
                    state: {
                        required: "Please enter your state"
                    },
                    pincod: {
                        required: "Please enter your pincode",
                        digits: "Please enter only numbers for the pincode"
                    }
                },
                errorElement: 'div',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.after(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid').removeClass('is-valid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid').addClass('is-valid');
                }
            });
        });
    </script>
    @endpush