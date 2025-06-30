@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/render-form-custom.css') }}" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
<!-- <script src="https://formbuilder.online/assets/js/form-builder.min.js"></script>
<script src="https://formbuilder.online/assets/js/form-render.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-formBuilder/3.19.13/form-builder.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-formBuilder/3.19.13/form-render.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>


<div id="app" class="layout-wrapper">
    @include('include.sidebar')
    <div class="main-content">
        <div class="container-fluid addcartwidth">
            @include('include.navbar')
            <div class=" d-flex justify-content-between align-items-center page-header">
                <a href="{{ url()->previous() }}"
                    class="float-left d-flex text-black">
                    <i
                        class="ti ti-arrow-narrow-left border border-dark rounded-circle mx-1 me-2 text-black rounded"></i>Back
                </a>
<button id="download-pdf" class="btn btn-success d-none">Download PDF</button>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-title text-center">Add Work Group Question</h2>
                    <div class="fb-render"></div>
                    <div class=" d-flex gap-2 align-items-center layout-width py-3">
                      <!-- Updated buttons -->
                    <button id="saveSendBtn" class="btn btn-primary ">Save & Send</button>

                     <button id="saveBtn" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="loader" style="display: none; position: fixed; z-index: 9999; top: 0; left: 0; height: 100vh; width: 100vw; background: rgba(255,255,255,0.7); align-items: center; justify-content: center;">
    <div class="spinner-border text-success" role="status">
        <span class="visually-hidden">Loading...</span>
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

<div id="pdf-loader" style="display: none; position: fixed; top: 0; left: 0;
    width: 100%; height: 100%; background: rgba(255, 255, 255, 0.7);
    z-index: 9999; justify-content: center; align-items: center; 
    text-align: center; font-size: 18px; font-weight: bold;">
    Generating PDF... Please wait
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

    // Safe parsing of value
    let rawValue = fieldData.value || fieldData.attrs?.value || [];
    let value = [];

    if (typeof rawValue === 'string') {
        try {
            value = JSON.parse(rawValue);
        } catch (e) {
            value = [];
        }
    } else if (Array.isArray(rawValue)) {
        value = rawValue;
    }

    // Dynamic fields from value if not defined
    let fields = fieldData.fields || fieldData.attrs?.fields;
    if (!fields && value.length > 0) {
        const firstRow = value[0];
        fields = Object.keys(firstRow).map(key => {
            const isCheckbox = typeof firstRow[key] === 'boolean' || key.toLowerCase().includes('na');
            return {
                key: key,
                label: key.charAt(0).toUpperCase() + key.slice(1),
                type: isCheckbox ? 'checkbox' : 'text',
                className: `custom-${isCheckbox ? 'checkbox' : 'text'}-${key}`
            };
        });
    }

    // Fallback default fields
    if (!fields || !Array.isArray(fields) || fields.length === 0) {
        fields = [
            { key: 'label', label: 'label', type: 'text', className: 'custom-text-description' },
            { key: 'colour', label: 'Colour', type: 'text', className: 'custom-text-colour' },
            { key: 'na', label: 'NA', type: 'checkbox', className: 'custom-text-na' }
        ];
    }

    const rowsHtml = value.map((row, index) => {
        return `<tr>
            ${fields.map((f, fieldIndex) => {
                const inputName = `${fieldName}[row_${index}][${f.key}]`;
                const readonlyAttr = fieldIndex === 0 ? 'readonly' : '';
                if (f.type === 'text') {
                    return `<td><input type="text" name="${inputName}" class="${f.className}" value="${row[f.key] || ''}" ${readonlyAttr} /></td>`;
                } else if (f.type === 'checkbox') {
                    const checked = row[f.key] == 1 ? 'checked' : '';
                    return `<td><input type="checkbox" name="${inputName}" class="${f.className}" ${checked} /></td>`;
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

           setTimeout(function() {
        const targetClasses = ['responsible-party', 'buildr-details', 'owner-details', 'add-notes', 'additional-notes','section_initial_power_to_site','protection-question','sub-option-details'];

            $('.formbuilder-radio-group, .formbuilder-radio-inline, .formbuilder-checkbox-inline, .formbuilder-checkbox').each(function() {
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
        }, 1000);

    $(document).ready(function () {

        // Auto-save on input change
        $(document).on('change', 'input, select, textarea', function () {
            saveForm('draft', false);
        });

        // Save button
        $('#saveBtn').on('click', function () {
            saveForm('submitted', false);
        });

        // Save & Send button
        $('#saveSendBtn').on('click', function () {
            saveForm('submitted', true);
        });

        // Main form save function
        function saveForm(status = 'draft', sendEmail = false) {
            console.log("saveForm called with status:", status, "sendEmail:", sendEmail);

            const isManualSubmit = (status === 'submitted');

            if (isManualSubmit) {
                console.log("Manual submit - showing loader");
                $('#mini-loader').show();
                $('.btn').prop('disabled', true).text('Submitting...');
            }

            const userDataCustom = getUpdatedFormData(); // Your form data gatherer

            console.log("Form Data:", userDataCustom);
            console.log("Sending AJAX request to:", "{{ route('parties.saveSiteWork') }}");

            $.ajax({
                url: "{{ route('parties.saveSiteWork') }}",
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    partyId: partyId,
                    listId: listId,
                    work_id: work_id,
                    form_data: JSON.stringify(userDataCustom),
                    status: status,
                    send_email: sendEmail ? 1 : 0
                },
                success: function (response) {
                    console.log("AJAX Success:", response);
$('#download-pdf').attr('data-id', response.job_id); // ✅ now matches

                        // Remove d-none to show the button
                        $('#download-pdf').removeClass('d-none');


                    if (isManualSubmit && response.redirect_url) {
                        // ✅ Store message if needed later
                        sessionStorage.setItem('siteWorkMessage', response.message);
                        // Set job_id as data attribute on button

                    } else {
                        console.log("Auto-saved as draft.");
                    }
                },
                error: function (err) {
                    console.error("AJAX Error:", err);
                    if (isManualSubmit) alert('Error submitting form.');
                },
                complete: function () {
                    console.log("AJAX Complete");
                    if (isManualSubmit) {
                        $('#mini-loader').hide();
                        $('.btn').prop('disabled', false).text('Submit Form');
               }
            }
        });
    }
    function getUpdatedFormData() {
        var userDataCustom = fb.userData;
        fb.userData = [];

        originalFormData.forEach((field, index) => {
            if (field.type === 'customRepeaterTable') {
                const fieldName = field.name;
                $('.custom-repeater-table').each(function () {
                    const tableId = $(this).data('field-id');
                    if (tableId && tableId.includes(fieldName)) {
                        const $table = $(this);
                        let tableData = [];

                        $table.find('tbody tr').each(function () {
                            let rowData = {};
                            let isRowValid = false;

                            $(this).find('input, select, textarea').each(function () {
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

        console.log("Processed Form Data:", userDataCustom);
        return userDataCustom;
    }
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
    // Hide all relevant details initially
    $('.buildr-details, .owner-details').closest('.form-group').hide();

    // Combine selectors for both radio groups
    $('.formbuilder-radio-group.responsible-party, .formbuilder-radio-group.protection-question').each(function () {
        const $group = $(this);
        const selected = $group.find('input[type="radio"]:checked').val();

        if (selected === 'By Builder' || selected === 'Yes') {
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
         $(document).on('change', 'input.protection-question[type="radio"]', function() {
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
 $(document).ready(function () {
    $('#download-pdf').on('click', function () {
      var id = $(this).data('id'); // ✅ correct
    
        // Show loader
        $('#pdf-loader').css('display', 'flex');

        $.ajax({
            url: '/submission/download/' + id,
            type: 'GET',
            xhrFields: {
                responseType: 'blob'
            },
            success: function (data, status, xhr) {
                var blob = new Blob([data], { type: 'application/pdf' });
                var link = document.createElement('a');
                link.href = window.URL.createObjectURL(blob);
                link.download = 'submission_' + id + '.pdf';
                link.click();
            },
            error: function () {
                alert('Failed to generate PDF');
            },
            complete: function () {
                $('#pdf-loader').css('display', 'none');
            }
        });
    });
});

</script>
@endsection