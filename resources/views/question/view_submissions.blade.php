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
                    <h2>View Submission Data</h2>
                    <div class="fb-render"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function() {

         const originalFormData = @json($workData ?? []);
        //  const formData = @json($workData ?? []);
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
                                return `<td><input type = "checkbox" name="${inputName}" class = "${f.className}"${checked} /></td>`;
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


        const formData = @json($workData ?? []);
        const submissionId = @json($submissionId);

        // Render the form
        var fb = $('.fb-render').formRender({
            formData: originalFormData,
            templates: templates
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