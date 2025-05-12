@extends('layouts.app')

@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
<script src="https://formbuilder.online/assets/js/form-builder.min.js"></script>
<script src="https://formbuilder.online/assets/js/form-render.min.js"></script>

<div id="app" class="layout-wrapper">
    @include('include.sidebar')
    <div class="main-content">
        <div class="container-fluid addcartwidth">
            @include('include.navbar')
            <div class="row">
                <div class="col-md-12 d-flex justify-content-between align-items-center page-header">
                    <div class="col-md-12">
                        <a href="{{ url()->previous() }}"
                            class="float-left d-flex text-black">
                            <i
                                class="ti ti-arrow-narrow-left border border-dark rounded-circle mx-1 me-2 text-black rounded"></i>Back
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-12">
                    <h2>View Submission Data</h2>
                    <div class="fb-render"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function() {
        const formData = @json($workData ?? []);
        const submissionId = @json($submissionId);

        // Render the form
        var fb = $('.fb-render').formRender({
            formData: formData
        });

        // Disable all the fields to make them readonly
        $('.fb-render input, .fb-render textarea, .fb-render select').each(function() {
            $(this).prop('disabled', true); // Disable each input, textarea, and select field
            $(this).addClass('disabled'); // Optional: Add a class for styling disabled fields
        });

        // Hide the Submit button since the form is in view-only mode
        $('#submit-form').hide();

        // Pre-fill the form with the data
        setTimeout(() => {
            formData.forEach(field => {
                if (field.userData && field.name) {
                    const value = field.userData[0]; // Assuming single value for simplicity

                    switch (field.type) {
                        case 'radio-group':
                            $(`input[name="${field.name}"][value="${value}"]`).prop('checked', true);
                            break;
                        case 'checkbox':
                            field.userData.forEach(val => {
                                $(`input[name="${field.name}[]"][value="${val}"]`).prop('checked', true);
                            });
                            break;
                        case 'textarea':
                            $(`[name="${field.name}"]`).val(value);
                            break;
                        case 'text':
                        case 'number':
                        case 'email':
                            $(`[name="${field.name}"]`).val(value);
                            break;
                    }
                }
            });
        }, 200);
    });
</script>
@endsection