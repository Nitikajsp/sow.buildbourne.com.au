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
                    <h2 class="page-title text-center">Add Work Group Question</h2>
                    <div class="fb-render"></div>
                    <button id="submit-form" class="btn btn-primary mt-4">Submit Form</button>

                </div>
            </div>
        </div>
    </div>
</div>


<!-- Centered Small Loader Modal -->
<div id="mini-loader" style="display: none; position: fixed; top: 50%; left: 50%;
    transform: translate(-50%, -50%); background-color: rgba(255, 255, 255, 0.95);
    padding: 30px 40px; border-radius: 10px; z-index: 9999; box-shadow: 0 0 10px rgba(0,0,0,0.2);">
    <div class="text-center">
        <div class="spinner-border text-success" role="status" style="width: 2.5rem; height: 2.5rem;">
            <span class="visually-hidden">Loading...</span>
        </div>
        <p class="mt-2 mb-0 fw-bold">Please wait...</p>
    </div>
</div>




<script>
    $(function() {
        const originalFormData = JSON.parse(@json($questionJson ?? '[]'));
        // console.log('originalFormData', originalFormData);

        originalFormData.forEach((field) => {
            if (field.type === 'customRepeaterTable') {
                if (typeof field.value === 'string') {
                    try {
                        field.value = JSON.parse(field.value);
                    } catch (e) {
                        field.value = [];
                    }
                }
            }
        });


        // Register the customRepeaterTable template before calling formRender
        const templates = {
            customRepeaterTable: function(fieldData) {
                const fieldName = fieldData.name || 'repeater';
                const uniqueId = `table_${Date.now()}_${Math.floor(Math.random() * 10000)}`;
                const fields = fieldData.fields || fieldData.attrs?.fields || [{
                        key: 'description',
                        label: 'Description',
                        type: 'text',
                        className: 'custom-text-description'
                    },
                    {
                        key: 'colour',
                        label: 'Colour',
                        type: 'text',
                        className: 'custom-text-colour'
                    },
                    {
                        key: 'na',
                        label: 'NA',
                        type: 'checkbox',
                        className: 'custom-text-na'
                    }
                ];

                let value = Array.isArray(fieldData.value) ? fieldData.value : [];
                const rowsHtml = value.map((row, index) => {
                    return `<tr>
                        ${fields.map((f, fieldIndex) => {
                            const inputName = `${fieldName}[row_${index}][${f.key}]`;
                            if (!f.key) return '';
                            if (f.type === 'text') {
                                const readonlyAttr = fieldIndex === 0 ? 'readonly' : '';
                                return `<td><input type="text" name="${inputName}" class="${f.className}" value="${row[f.key] || ''}" ${readonlyAttr} /></td>`;
                            } else if (f.type === 'checkbox') {
                                const checked = row[f.key] ? 'checked' : '';
                                return ` < td > < input type = "checkbox"
                    name = "${inputName}"
                    class = "${f.className}"
                    $ {
                        checked
                    }
                    /></td > `;
                            }
                            return '<td></td>';
                        }).join('')}
                    </tr>`;
                }).join('');

                return {
                    field: `
                        <div class="custom-repeater-table" data-field-id="${fieldName}">
                            <table class="table table-bordered" id="${fieldName}">
                                <thead>
                                    <tr>
                                        ${fields.map(f => `<th>${f.label}</th>`).join('')}
                                    </tr>
                                </thead>
                                <tbody>
                                    ${rowsHtml || `<tr><td colspan="${fields.length}">No data</td></tr>`}
                                </tbody>
                            </table>
                        </div>
                    `
                };
            }
        };

        const formData = @json($questionJson ?? []);
        const partyId = @json($partyId);
        const listId = @json($listId);
        const work_id = @json(request('work_id'));


        var fb = $('.fb-render').formRender({
            formData: originalFormData,
            templates: templates
        });

        $('#submit-form').on('click', function() {
            // Show mini popup loader
            $('#mini-loader').show();

            // Disable the button and show "Submitting..."
            $('#submit-form').prop('disabled', true).text('Submitting...');

            var userDataCustom = fb.userData;
            fb.userData = [];

            originalFormData.forEach((field, index) => {
                if (field.type === 'customRepeaterTable') {
                    const fieldName = field.name;

                    $('.custom-repeater-table').each(function() {
                        const tableId = $(this).data('field-id');
                        if (tableId && tableId.includes(fieldName)) {
                            const $table = $(this);
                            let tableData = [];

                            $table.find('tbody tr').each(function() {
                                let rowData = {};
                                let isRowValid = false;

                                $(this).find('input, select, textarea').each(function() {
                                    const inputName = $(this).attr('name');
                                    if (inputName && inputName.startsWith(fieldName)) {
                                        const keyMatch = inputName.match(/\[([^\]]+)]$/);
                                        if (keyMatch) {
                                            const key = keyMatch[1];
                                            const inputType = $(this).attr('type');
                                            let value = (inputType === 'checkbox') ?
                                                ($(this).is(':checked') ? '1' : '0') :
                                                $(this).val();

                                            if (value !== '' && value !== null) {
                                                isRowValid = true;
                                            }

                                            rowData[key] = value;
                                        }
                                    }
                                });

                                if (isRowValid && Object.keys(rowData).length > 0) {
                                    tableData.push(rowData);
                                }
                            });

                            if (tableData.length > 0) {
                                field = tableData;
                                userDataCustom[index].userData = field;
                            }
                        }
                    });
                }
            });

            // AJAX submit
            $.ajax({
                url: "{{ route('parties.saveSiteWork') }}",
                type: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                    partyId: partyId,
                    listId: listId,
                    work_id: work_id,
                    form_data: userDataCustom
                },
                success: function(response) {
                    if (response.redirect_url) {
                        sessionStorage.setItem('siteWorkMessage', response.message);
                        window.location.href = response.redirect_url;
                    }
                },
                error: function(err) {
                    alert('Error submitting form.');
                    console.error(err);
                },
                complete: function() {
                    // Hide loader and re-enable button
                    $('#mini-loader').hide();
                    $('#submit-form').prop('disabled', false).text('Submit Form');
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
<script>
    $(document).ready(function() {
        $('input[type="checkbox"].add-notes').prop('checked', false);
    });
</script>
@endsection