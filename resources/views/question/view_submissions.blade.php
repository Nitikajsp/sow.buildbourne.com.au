@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/render-form-custom.css') }}" />

@section('content')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
<script src="https://formbuilder.online/assets/js/form-builder.min.js"></script>
<script src="https://formbuilder.online/assets/js/form-render.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>



<div id="app" class="layout-wrapper">
    @include('include.sidebar')
    <div class="main-content">
        <div class="container-fluid addcartwidth">      
            @include('include.navbar')
  <div class="d-flex justify-content-between align-items-center page-header">
                        <a href="{{ route('submissions.index') }}" class="float-left d-flex text-black">
                        <i class="ti ti-arrow-narrow-left border border-dark rounded-circle mx-1 me-2 text-black"></i>Back
                    </a>
                     <button id="download-pdf" class="btn btn-success" data-id="{{ $submissionId }}">Download PDF</button>
                </div>
               
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-title text-center">View Submission Data</h2>
                    <div class="fb-render"></div>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="pdf-loader" style="display: none; position: fixed; top: 0; left: 0;
    width: 100%; height: 100%; background: rgba(255, 255, 255, 0.7);
    z-index: 9999; justify-content: center; align-items: center; 
    text-align: center; font-size: 18px; font-weight: bold;">
    Generating PDF... Please wait
</div>


<script>
   $(document).ready(function () {
    $('#download-pdf').on('click', function () {
        var id = $(this).data('id');

        // Show loader using inline CSS
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
                // Hide loader again
                $('#pdf-loader').css('display', 'none');
            }
        });
    });
});

</script>

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

        const formData = @json($workData ?? []);
        const submissionId = @json($submissionId);

        var fb = $('.fb-render').formRender({
            formData: originalFormData,
            templates: templates
        });

        $('.fb-render input, .fb-render textarea, .fb-render select').each(function() {
            $(this).prop('disabled', true); 
            $(this).addClass('disabled'); 
        });

        $('#submit-form').hide();

   
        setTimeout(() => {
            formData.forEach(field => {
                if (field.userData && field.name) {
                    const value = field.userData[0];

                    switch (field.type) {
                        case 'radio-group':
                            $(`input[name="${field.name}"][value="${value}"]`).prop('checked', true);
                            break;
                        case 'checkbox':
                         
                            $(`input[name="${field.name}"]`).prop('checked', false); 

                            if (Array.isArray(field.userData)) {
                                field.userData.forEach(val => {
                                    $(`input[name="${field.name}"][value="${val}"]`).prop('checked', true);
                                });
                            } else if (typeof field.userData === 'string') {
                                $(`input[name="${field.name}"][value="${field.userData}"]`).prop('checked', true);
                            }
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

@endsection