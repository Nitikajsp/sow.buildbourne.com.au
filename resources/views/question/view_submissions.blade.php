@extends('layouts.app')
<<<<<<< HEAD
<link rel="stylesheet" href="{{ asset('css/render-form-custom.css') }}" />

@section('content')

=======

@section('content')
>>>>>>> 7ac371402c6dfe71949f124d350dea1da3866c16
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
<script src="https://formbuilder.online/assets/js/form-builder.min.js"></script>
<script src="https://formbuilder.online/assets/js/form-render.min.js"></script>
<<<<<<< HEAD
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>


=======
>>>>>>> 7ac371402c6dfe71949f124d350dea1da3866c16

<div id="app" class="layout-wrapper">
    @include('include.sidebar')
    <div class="main-content">
<<<<<<< HEAD
        <div class="container-fluid addcartwidth">      
            @include('include.navbar')
  <div class="d-flex justify-content-between align-items-center page-header">
                        <a href="{{ route('submissions.index') }}" class="float-left d-flex text-black">
                        <i class="ti ti-arrow-narrow-left border border-dark rounded-circle mx-1 me-2 text-black"></i>Back
                    </a>
                        <button id="download-pdf" class="btn btn-success">Download PDF</button>
                </div>
               
            <div class="row">
=======
        <div class="container-fluid addcartwidth">
            @include('include.navbar')

            <div class="row">

>>>>>>> 7ac371402c6dfe71949f124d350dea1da3866c16
                <div class="col-md-12">
                    <h2 class="page-title text-center">View Submission Data</h2>
                    <div class="fb-render"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<<<<<<< HEAD
<div id="loader" style="display: none; position: fixed; z-index: 9999; top: 0; left: 0; height: 100vh; width: 100vw; background: rgba(255,255,255,0.7); align-items: center; justify-content: center;">
    <div class="spinner-border text-success" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
</div>


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
    $(function() {

        const originalFormData = @json($workData ?? []);
        
                const cleanedFormData = convertStringsToBooleans(originalFormData);


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
    const templates = {
    customRepeaterTable: function (fieldData) {
        const fieldName = fieldData.name || 'repeater';
        const uniqueId = `table_${Date.now()}_${Math.floor(Math.random() * 10000)}`;

        let value = Array.isArray(fieldData.value) ? fieldData.value : [];

        // Auto-detect fields from first row
        let fields = [];
        if (value.length > 0) {
            const firstRow = value[0];
            for (const key in firstRow) {
                if (firstRow.hasOwnProperty(key)) {
                    const type = typeof firstRow[key] === 'boolean' ? 'checkbox' : 'text';
                    fields.push({
                        key: key,
                        label: key.charAt(0).toUpperCase() + key.slice(1),
                        type: type,
                        className: `custom-${type}-${key}`
                    });
                }
            }
        }

        const rowsHtml = value.map((row, index) => {
            return `<tr>
                ${fields.map((f, fieldIndex) => {
                    const inputName = `${fieldName}[row_${index}][${f.key}]`;
                    const value = row[f.key];

                    if (f.type === 'text') {
                        const readonlyAttr = fieldIndex === 0 ? 'readonly' : '';
                        return `<td><input type="text" name="${inputName}" class="${f.className}" value="${value || ''}" ${readonlyAttr} /></td>`;
                    } else if (f.type === 'checkbox') {
                        const checked = value ? 'checked' : '';
                        return `<td><input type="checkbox" name="${inputName}" class="${f.className}" ${checked} disabled /></td>`;
                    }
                    return '<td></td>';
                }).join('')}
            </tr>`;
        }).join('');

        return {
            field: `
                <div class="custom-repeater-table" data-field-id="${fieldName}">
                    <table class="table table-bordered" id="${uniqueId}">
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
=======
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

>>>>>>> 7ac371402c6dfe71949f124d350dea1da3866c16

        const formData = @json($workData ?? []);
        const submissionId = @json($submissionId);

<<<<<<< HEAD
=======
        // Render the form
>>>>>>> 7ac371402c6dfe71949f124d350dea1da3866c16
        var fb = $('.fb-render').formRender({
            formData: originalFormData,
            templates: templates
        });

<<<<<<< HEAD
        $('.fb-render input, .fb-render textarea, .fb-render select').each(function() {
            $(this).prop('disabled', true); 
            $(this).addClass('disabled'); 
        });

        $('#submit-form').hide();

   
        setTimeout(() => {
            formData.forEach(field => {
                if (field.userData && field.name) {
                    const value = field.userData[0];
=======
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
>>>>>>> 7ac371402c6dfe71949f124d350dea1da3866c16

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
<<<<<<< HEAD

        setTimeout(function() {
            const targetClasses = ['responsible-party', 'buildr-details', 'owner-details', 'add-notes', 'additional-notes', 'sub-option-details'];

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
           setTimeout(function() {
            applyConditionalVisibility();
            applyNotesVisibility();
        }, 500);
    });
</script>

=======
    });
</script>
>>>>>>> 7ac371402c6dfe71949f124d350dea1da3866c16
@endsection