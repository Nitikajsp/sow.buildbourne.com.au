@extends('layouts.app')

@push('css')
<link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-touchspin/4.3.1/jquery.bootstrap-touchspin.min.css">
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
                        <i class="ti ti-arrow-narrow-left border border-dark rounded-circle mx-1 me-2 text-black"></i>Back
                    </a>
                </div>
            </div>


            <div class="row">
                <div class="col-md-7">
                    <div id="form-success-message" class="alert alert-success d-none"></div>

                    <div class="inner-container">

                        <input type="text" name="form_name" id="form_name" placeholder="Enter Tax Percentage" value="{{ old('form_name', $form_name ?? '') }}">

                        <h2>Edit Work Group Question</h2>

                        @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        <div class="row">
                            <div class="col-md-12">
                                @csrf
                                <div id="build-wrap"></div>
                                <button id="update-form" type="submit" class="btn btn-primary create-new waves-effect waves-light btn-dark rounded">Update Form</button>
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
        const questionId = @json($questionId);
        const savedJson = @json($questionJson);
        var existingFormData = @json($questionJson ?? []);

        var fb = $('#build-wrap').formBuilder({
            formData: existingFormData,
            inputSets: [{
                label: 'Grouped Custom Fields',
                name: 'grouped-custom-fields',
                className: 'responsible-header',
                showHeader: true,
                fields: [{
                        type: 'radio-group',
                        label: 'Responsible Party',
                        className: 'responsible-party',
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
                    },
                    {
                        type: 'textarea',
                        label: 'Additional Notes',
                        className: 'additional-notes',
                    }
                ]
            }],

            disabledAttrs: ['name'],
            controlOrder: ['text', 'radio-group', 'checkbox', 'textarea'],
        });

        $('#update-form').on('click', function() {
            const formJson = fb.actions.getData('json');
            const form_name = $('#form_name').val();


            $.ajax({
                url: "{{ route('workgroup.workgroupquestionupdate', ['id' => $questionId]) }}",
                method: 'POST',
                data: {
                    form_data: formJson,
                    form_name: form_name,
                    _token: '{{ csrf_token() }}'
                },
                success: function(res) {
                    $('#form-success-message')
                        .removeClass('d-none')
                        .text(res.message)
                        .fadeIn()
                        .delay(3000)
                        .fadeOut();
                },
                error: function(err) {
                    alert('Error updating form.');
                    console.error(err);
                }
            });
        });

    });
</script>
@endsection