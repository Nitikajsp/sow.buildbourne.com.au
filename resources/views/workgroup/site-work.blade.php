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

                <div class="col-md-12">
                    <h2>View Work Group Question</h2>
                    <div class="fb-render"></div>
                    <button id="submit-form" class="btn btn-primary mt-4">Submit Form</button>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function() {

        const formData = @json($questionJson ?? []);
        const partyId = @json($partyId);
        const listId = @json($listId);
        const work_id = @json($work_id);


        var fb = $('.fb-render').formRender({
            formData: formData
        });


        $('#submit-form').on('click', function() {

            var formDatasub = fb.userData;

            $.ajax({
                url: "{{ route('parties.saveSiteWork') }}",
                type: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                    partyId: partyId,
                    listId: listId,
                    work_id: work_id,
                    form_data: formDatasub,
                },
                success: function(response) {
                    if (response.success) {
                        alert(response.message);
                        window.location.href = "{{ route('submissions.index') }}?success=1";
                    } else {
                        alert('Error: ' + response.message);
                    }
                },
                error: function(err) {
                    alert('Error submitting form.');
                    console.error(err);
                }
            });
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

        function applyConditionalVisibility() {
            $('.buildr-details, .owner-details').closest('.form-group').hide();
            $('.formbuilder-radio-group.responsible-party').each(function() {
                const $group = $(this);
                const selected = $group.find('input[type="radio"]:checked').val();

                if (selected === 'By Builder') {
                    $group.nextAll('.buildr-details').first().closest('.form-group').show();
                } else if (selected === 'By Owner') {
                    $group.nextAll('.owner-details').first().closest('.form-group').show();
                }
            });
        }

        function applyNotesVisibility() {
            $('.formbuilder-checkbox.add-notes').each(function() {
                const $checkbox = $(this).find('input[type="checkbox"]');

                if ($checkbox.is(':checked')) {
                    $(this).nextAll('.additional-notes').first().closest('.form-group').show();
                } else {
                    $(this).nextAll('.additional-notes').first().closest('.form-group').hide();
                }
            });
        }

        $(document).on('change', 'input.responsible-party[type="radio"]', function() {
            applyConditionalVisibility();
        });
        $(document).on('change', 'input.add-notes[type="checkbox"]', function() {
            applyNotesVisibility();
        });

        setTimeout(function() {
            applyConditionalVisibility();
            applyNotesVisibility();
        }, 500);
    });
</script>
@endsection