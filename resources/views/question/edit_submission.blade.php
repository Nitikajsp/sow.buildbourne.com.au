@extends('layouts.app')
<<<<<<< HEAD
<link rel="stylesheet" href="{{ asset('css/render-form-custom.css') }}" />
=======
>>>>>>> 7ac371402c6dfe71949f124d350dea1da3866c16

@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
<script src="https://formbuilder.online/assets/js/form-builder.min.js"></script>
<script src="https://formbuilder.online/assets/js/form-render.min.js"></script>
<<<<<<< HEAD
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>

=======
>>>>>>> 7ac371402c6dfe71949f124d350dea1da3866c16

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
<<<<<<< HEAD
                    </a>
                       <button id="download-pdf" class="btn btn-success">Download PDF</button>
                       <a href="{{ route('sitework.sendemail') }}" class="btn btn-success">
                            Send  Email
                        </a>


                                 </div>
                             <div class="row">
                                    <div class="col-md-12">
                                 <h2 class="page-title text-center">
                                    @if ($mode === 'add')
                                        Add Submission Question
                                    @elseif ($mode === 'draft')
                                        Edit Draft Submission
                                    @else
                                        Edit Submission Question
                                    @endif
                                </h2>                                <div class="fb-render"></div>
                                <div class="d-flex justify-content-between align-items-center page-header">
                                    <button id="submit-form" class="btn btn-primary mt-4">Submit Form</button>
                                            </div>
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
<div id="loader" style="display: none; position: fixed; z-index: 9999; top: 0; left: 0; height: 100vh; width: 100vw; background: rgba(255,255,255,0.7); align-items: center; justify-content: center;">
    <div class="spinner-border text-success" role="status">
        <span class="visually-hidden">Loading...</span>
=======
                </a>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-title text-center">Edit Submission Question</h2>
                    <div class="fb-render"></div>
                    <div class=" d-flex justify-content-between align-items-center page-header">

                        <button id="submit-form" class="btn btn-primary mt-4">Submit Form</button>
                    </div>
                </div>
            </div>
        </div>
>>>>>>> 7ac371402c6dfe71949f124d350dea1da3866c16
    </div>
</div>

<script>
    function convertStringsToBooleans(obj) {
    if (Array.isArray(obj)) {
        return obj.map(convertStringsToBooleans);
    } else if (obj !== null && typeof obj === 'object') {
        for (const key in obj) {
            if (typeof obj[key] === 'string') {
                if (obj[key].toLowerCase() === 'true') {
                    obj[key] = true;
                } else if (obj[key].toLowerCase() === 'false') {
                    obj[key] = false;
                }
            } else if (typeof obj[key] === 'object') {
                obj[key] = convertStringsToBooleans(obj[key]);
            }
        }
        return obj;
    }
    return obj;
}
<<<<<<< HEAD


 
    $(function() {
        const originalFormData = @json($workData ?? []);

      
=======
 
    $(function() {
        const originalFormData = @json($workData ?? []);
        // console.log('originalFormData', originalFormData);

        const cleanedFormData = convertStringsToBooleans(originalFormData);
>>>>>>> 7ac371402c6dfe71949f124d350dea1da3866c16

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

<<<<<<< HEAD
=======

        // Register the customRepeaterTable template before calling formRender
>>>>>>> 7ac371402c6dfe71949f124d350dea1da3866c16
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
<<<<<<< HEAD
    return `<tr>${
        fields.map((f, fieldIndex) => {
            if (!f.key) return '';
            const inputName = `${fieldName}[row_${index}][${f.key}]`;
            if (f.type === 'text') {
                const readonlyAttr = fieldIndex === 0 ? 'readonly' : '';
                return `<td><input type="text" name="${inputName}" class="${f.className}" value="${row[f.key] || ''}" ${readonlyAttr} /></td>`;
            } else if (f.type === 'checkbox') {
                const checked = row[f.key] ? 'checked' : '';
                return `<td><input type="checkbox" name="${inputName}" class="${f.className}" ${checked} /></td>`;
            }
            return '<td></td>';
        }).join('')
    }</tr>`;
}).join('');
=======
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
>>>>>>> 7ac371402c6dfe71949f124d350dea1da3866c16

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

        const formData = @json($workData ?? []);

        const submissionId = @json($submissionId);

<<<<<<< HEAD
=======

>>>>>>> 7ac371402c6dfe71949f124d350dea1da3866c16
        var fb = $('.fb-render').formRender({
            formData: originalFormData,
            templates: templates
        });


<<<<<<< HEAD
   function saveForm(isManual, status = 'draft') {
    if (isManual) {
        $('#mini-loader').show(); 
    }

    let userDataCustom = fb.userData;
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
                        userDataCustom[index].userData = tableData;
                    }
                }
            });
        }
    });

    $.ajax({
        url: "{{ route('submission.update') }}",
        type: 'POST',
        data: {
            _token: "{{ csrf_token() }}",
            submissionId: submissionId,
            form_data: JSON.stringify(userDataCustom),
            is_manual_submit: isManual ? 1 : 0,
            status: status 
        },
        success: function (response) {
            $('#mini-loader').hide();

            if (status === 'submitted') {
                alert(response.message || 'Form submitted successfully!');
            }
        },
        error: function () {
            $('#mini-loader').hide();
            if (status === 'submitted') {
                alert("Something went wrong while submitting.");
            }
        }
    });
}


        $('#submit-form').on('click', function () {
            saveForm(true, 'submitted');
        });

     
        $('.fb-render').on('change', 'input, select, textarea', function () {
            saveForm(false, 'draft');
=======
        $('#submit-form').on('click', function() {

            var userDataCustom = fb.userData;
            fb.userData = [];


            originalFormData.forEach((field, index) => {
                console.log('All field', field);
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
                                console.log("before rowData", rowData);
                                if (isRowValid && Object.keys(rowData).length > 0) {
                                    tableData.push(rowData);
                                    console.log("after rowData", tableData);
                                }
                            });



                            console.log("before userData :", userDataCustom[index]);

                            if (tableData.length > 0) {
                                field = tableData;
                                console.log("after push data :", field);
                                userDataCustom[index].userData = field;
                            }
                            console.log("after userData :", userDataCustom[index].userData);
                        }
                    });
                }
            });

            console.log("FINAL FORM DATA:", userDataCustom);

            $.ajax({
                url: "{{ route('submission.update') }}",
                type: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                    submissionId: submissionId,
                    form_data: userDataCustom
                },
                success: function(response) {
                    if (response.success) {
                        alert('Form updated successfully!');
                    } else {
                        alert('Error submitting form: ' + (response.message || 'Unknown error'));
                    }
                }
            });
>>>>>>> 7ac371402c6dfe71949f124d350dea1da3866c16
        });


        setTimeout(() => {
            formData.forEach(field => {
                if (field.userData && field.name) {
                    const value = field.userData[0];

                    switch (field.type) {
                        case 'radio-group':
                            $(`input[name="${field.name}"][value="${value}"]`).prop('checked', true);
                            break;
                        case 'checkbox':
<<<<<<< HEAD
                          
                            $(`input[name="${field.name}"]`).prop('checked', false);

                            if (Array.isArray(field.userData)) {
                                field.userData.forEach(val => {
                                    $(`input[name="${field.name}"][value="${val}"]`).prop('checked', true);
                                });
                            } else if (typeof field.userData === 'string') {
                                $(`input[name="${field.name}"][value="${field.userData}"]`).prop('checked', true);
                            }   
=======
                            field.userData.forEach(val => {
                                $(`input[name="${field.name}[]"][value="${val}"]`).prop('checked', true);
                            });
>>>>>>> 7ac371402c6dfe71949f124d350dea1da3866c16
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

        setTimeout(function() {
<<<<<<< HEAD
            const targetClasses = ['responsible-party', 'buildr-details', 'owner-details', 'add-notes', 'additional-notes', 'sub-option-details'];
=======
            const targetClasses = ['responsible-party', 'buildr-details', 'owner-details', 'add-notes', 'additional-notes'];
>>>>>>> 7ac371402c6dfe71949f124d350dea1da3866c16

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

<<<<<<< HEAD
=======
            // For textareas
>>>>>>> 7ac371402c6dfe71949f124d350dea1da3866c16
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
<<<<<<< HEAD
<script>
document.getElementById('download-pdf').addEventListener('click', function () {
    const formElement = document.querySelector('.fb-render');
    document.getElementById('loader').style.display = 'flex';

    const options = {
        margin:       10,
        filename:     'submission-data.pdf',
        image:        { type: 'jpeg', quality: 0.8 },
        html2canvas:  { scale: 1, useCORS: true },
        jsPDF:        { unit: 'pt', format: 'a4', orientation: 'portrait' },
        pagebreak:    { mode: ['avoid-all', 'css', 'legacy'] }
    };

    html2pdf().set(options).from(formElement).save().then(() => {
        document.getElementById('loader').style.display = 'none';
    }).catch(() => {
        document.getElementById('loader').style.display = 'none';
        alert('Something went wrong while generating the PDF.');
    });
});
</script>
=======
>>>>>>> 7ac371402c6dfe71949f124d350dea1da3866c16
@endsection