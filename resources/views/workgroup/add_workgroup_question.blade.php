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
                        <input type="text" name="form_name" id="form_name" placeholder="Enter Tax Percentage">


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
        var fb = $('#build-wrap').formBuilder({
            stickyControls: {
                enable: true,
                offset: {
                    top: 20,
                    right: 20,
                    left: 'auto'
                }
            },
            inputSets: [{
                label: 'Grouped Custom Fields',
                name: 'grouped-custom-fields',
                className: 'responsible-header',
                //name: 'responsible_header',
                showHeader: true,
                fields: [{
                        type: 'radio-group',
                        label: 'Responsible Party',
                        className: 'responsible-party',
                        //name: 'responsible_party',
                        values: [{
                                label: 'By Builder',
                                value: 'By Builder'
                            },
                            {
                                label: 'By Owner',
                                value: 'By Owner'
                            },
                            {
                                label: 'N/A',
                                value: 'N/A'
                            }
                        ]
                    },
                    {
                        type: 'radio-group',
                        label: 'Builder Details',
                        className: 'buildr-details',
                        //name: 'builder_details',
                        values: [{
                                label: 'Option A',
                                value: 'option-a'
                            },
                            {
                                label: 'Option B',
                                value: 'option-a'
                            }
                        ]
                    },
                    {
                        type: 'radio-group',
                        label: 'Owner Details',
                        className: 'owner-details',
                        //name: 'owner_details',
                        values: [{
                                label: 'Option A',
                                value: 'option-a'
                            },
                            {
                                label: 'Option B',
                                value: 'option-a'
                            }
                        ]
                    },
                    {
                        type: 'checkbox',
                        label: 'Add Notes',
                        className: 'add-notes',
                        //name: 'terms'
                    },
                    {
                        type: 'textarea',
                        label: 'Additional Notes',
                        className: 'additional-notes',
                        // name: 'notes'
                    }
                ]
            }],


            disabledAttrs: ['name'],
            controlOrder: ['text', 'radio-group', 'checkbox', 'textarea'],
        });

        setTimeout(function() {
            const targetClasses = ['responsible-party', 'buildr-details', 'owner-details', 'add-notes', 'additional-notes'];

            $('.formbuilder-radio-group, .formbuilder-checkbox').each(function() {
                const $inputs = $(this).find('input');

                $inputs.each(function() {
                    const inputClasses = $(this).attr('class');
                    if (inputClasses) {
                        inputClasses.split(' ').forEach(cls => {
                            if (targetClasses.includes(cls)) {
                                $(this).closest('.form-group').addClass(cls);
                            }
                        });
                    }
                });
            });

            // For textareas
            $('.formbuilder-textarea').each(function() {
                const $textarea = $(this).find('textarea');
                const textareaClasses = $textarea.attr('class');

                if (textareaClasses) {
                    textareaClasses.split(' ').forEach(cls => {
                        if (targetClasses.includes(cls)) {
                            $(this).addClass(cls);
                        }
                    });
                }
            });
        }, 200);

        $('#save-form').on('click', function() {
            const formJson = fb.actions.getData('json');
            const form_name = $('#form_name').val();


            $.ajax({
                url: "{{ route('workgroup.store') }}",

                method: 'POST',
                data: {
                    form_data: formJson,
                    form_name: form_name,
                    _token: '{{ csrf_token() }}'
                },
                success: function(res) {
                    alert('Form saved successfully!');
                    window.location.href = "{{ route('workgroup.showgroupquestion') }}?success=1";

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

@endsection