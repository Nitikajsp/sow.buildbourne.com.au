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
                    <div class="col-md-12">
                        <a href="{{ url()->previous() }}" class="float-left d-flex text-black">
                            <i
                                class="ti ti-arrow-narrow-left border border-dark rounded-circle mx-1 me-2 text-black rounded"></i>Back
                        </a>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-7">
                    <div class="inner-container ">
                        <div class="row">
                            <div class="col-lg-12 ">
                                <div class="pull-left">
                                    <h2>Add Client </h2>
                                </div>
                                <div class="pull-left">
                                    <h5>Please enter your details</h5>
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

                        <form id="partiesForm" action="{{ route('parties.store') }}" method="POST">
                            @csrf

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="name" class="text-secondary mb-1">Name</label>
                                        <input type="text" id="name" name="name"
                                            class="form-control border border-white-50">
                                        <span class="text-danger error-text name-error"></span>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="phone" class="text-secondary mb-1">Phone</label>
                                        <input type="text" id="phone" name="phone"
                                            class="form-control border border-white-50">
                                        <span class="text-danger error-text phone-error"></span>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="email" class="text-secondary mb-1">E-mail Address</label>
                                        <input type="email" id="email" name="email"
                                            class="form-control border border-white-50">
                                        <span class="text-danger error-text email-error"></span>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="street" class="text-secondary mb-1">Location/Address</label>
                                        <input type="text" id="street" name="street"
                                            class="form-control border border-white-50">
                                        <span class="text-danger error-text street-error"></span>
                                    </div>
                                </div>


                                <div class="pull-right mt-1 text-center">
                                    <button type="submit" class="btn btn-primary  me-1 rounded">Save</button>
                                    <a href="{{ url()->previous() }}"
                                        class="btn btn-outline-dark waves-effect rounded">Cancel</a>
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
        // Add CSRF token to all AJAX requests
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.validator.addMethod("validName", function(value, element) {
            return this.optional(element) || /^[a-zA-Z\s]+$/.test(value);
        }, "Name should contain only letters.");

        $.validator.addMethod("validEmail", function(value, element) {
            // General regex for email validation
            return this.optional(element) || /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value);
        }, "Please enter a valid email address.");



        $('#partiesForm').validate({
            rules: {
                name: {
                    required: true,
                    validName: true,
                    minlength: 3
                },
                email: {
                    required: true,
                    validEmail: true,
                    remote: {
                        url: "{{ route('check.email') }}",
                        type: "POST",
                        data: {
                            email: function() {
                                return $('#email').val();
                            }
                        },
                        dataFilter: function(response) {
                            var json = JSON.parse(response);
                            return json.available ? 'true' : 'false';
                        }
                    }
                },
                street: {
                    required: true,
                },

                phone: {
                    required: true,
                },
                suburb: {
                    required: true,
                },
                state: {
                    required: true,
                },
                pincode: {
                    required: true,
                }
            },
            messages: {
                name: {
                    required: "Please enter your name"
                },
                email: {
                    required: "Please enter your email address",
                    remote: "The email address has already been taken"
                },
                street: {
                    required: "Please enter your Address/Location"
                },

                phone: {
                    required: "Please enter your phone number"
                },
                suburb: {
                    required: "Please enter your suburb"
                },
                state: {
                    required: "Please enter your state"
                },
                pincode: {
                    required: "Please enter your pincode"
                }
            },

            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                error.appendTo(element.parent().find('.error-text'));
            },

            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid').removeClass('is-valid');
            },

            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('is-invalid').addClass('is-valid');
            },

            submitHandler: function(form) {
                form.submit();
            }
        });
    });
    </script>
    @endpush