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

                        <h2>Work Group Question</h2>
                        <!-- </div> -->
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
                        <div class="row">
                            <div class="col-md-12">
                                @csrf
                                <div id="build-wrap"></div>
                                <button id="save-form" type="submit" class="mt-4 px-4 py-2 bg-blue-600 text-white">Save Form</button>
                                <button type="button" id="addSubfield" class="mt-4 px-4 py-2 bg-green-600 text-white">Add Subfield</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
<script src="https://formbuilder.online/assets/js/form-builder.min.js"></script>

<script src="https://formbuilder.online/assets/js/form-render.min.js"></script>
<script>
    $(function() {
        var fb = $('#build-wrap').formBuilder();
        jQuery(function($) {

            let subfieldCounter = 1;

            $('#addSubfield').on('click', function() {
                const timestamp = Date.now();
                const uniqueSuffix = subfieldCounter++;

                fb.actions.addField({
                    type: 'text',
                    label: `Subfield Name ${uniqueSuffix}`,
                    name: `subfield_name_${uniqueSuffix}`,
                    className: 'form-control'
                });

                fb.actions.addField({
                    type: 'email',
                    label: `Subfield Email ${uniqueSuffix}`,
                    name: `subfield_email_${uniqueSuffix}`,
                    className: 'form-control'
                });

                fb.actions.addField({
                    type: 'text',
                    label: `Subfield Address ${uniqueSuffix}`,
                    name: `subfield_address_${uniqueSuffix}`,
                    className: 'form-control'
                });
            });
        });

        $('#save-form').on('click', function() {
            const formJson = fb.actions.getData('json');

            $.ajax({
                url: "{{ route('workgroup.store') }}", // Laravel route or PHP endpoint
                method: 'POST',
                data: {
                    form_data: formJson,
                    _token: '{{ csrf_token() }}' // Required for Laravel
                },
                success: function(res) {
                    alert('Form saved successfully!');
                },
                error: function(err) {
                    alert('Error saving form.');
                    console.error(err);
                }
            });
        });
        return false;
    });
</script>
<script>

</script>

@endsection