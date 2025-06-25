@extends('layouts.app')
@push('css')
<<<<<<< HEAD
<link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-touchspin/4.3.1/jquery.bootstrap-touchspin.min.css">
=======
<!-- <link rel="stylesheet" href="{{ asset('css/custom.css') }}" /> -->
<link rel="stylesheet" href="{{ asset('css/add_and_edit_custom.css') }}" />
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-touchspin/4.3.1/jquery.bootstrap-touchspin.min.css">
    
>>>>>>> 7ac371402c6dfe71949f124d350dea1da3866c16
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
<<<<<<< HEAD
                        <i class="ti ti-arrow-narrow-left border border-dark rounded-circle mx-1 me-2 text-black"></i>Back
=======
                        <i
                            class="ti ti-arrow-narrow-left border border-dark rounded-circle mx-1 me-2 text-black"></i>Back
>>>>>>> 7ac371402c6dfe71949f124d350dea1da3866c16
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="inner-container ">
                        <input type="text" name="form_name" id="form_name" placeholder="Enter Tax Percentage">
<<<<<<< HEAD
                        <!-- <div class="col-md-12 d-flex justify-content-between align-items-center "> -->
=======

>>>>>>> 7ac371402c6dfe71949f124d350dea1da3866c16
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
                                <button id="save-form" type="submit" class="btn btn-primary create-new waves-effect waves-light btn-dark rounded">Save Form</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<<<<<<< HEAD
<div id="columnModal" style="display: none; position: fixed; top: 35%; left: 50%; transform: translate(-50%, -35%);
    background: white; padding: 20px; border: 1px solid #ccc; z-index: 1001; box-shadow: 0 0 10px rgba(0,0,0,0.2);">
    
    <div id="columnModalContent"></div>
    <br>
    <button id="columnModalConfirm" class="btn btn-primary">Confirm</button>
    <button id="columnModalCancel" class="btn btn-secondary">Cancel</button>
</div>
=======
>>>>>>> 7ac371402c6dfe71949f124d350dea1da3866c16

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
<script src="https://formbuilder.online/assets/js/form-builder.min.js"></script>
<script src="https://formbuilder.online/assets/js/form-render.min.js"></script>

<script>
    $(function() {
<<<<<<< HEAD
        let currentTable = null;

        // SHOW MODAL
        function showColumnModal(contentHtml, onConfirm) {
            $('#columnModalContent').html(contentHtml);
            $('#columnModal').fadeIn();

            $('#columnModalConfirm').off('click').on('click', function () {
                onConfirm();
                $('#columnModal').fadeOut();
            });

            $('#columnModalCancel').off('click').on('click', function () {
                $('#columnModal').fadeOut();
            });
        }
        
        const fields = [
            {
                label: 'Repeater Table',
                class: 'repeater-table',
                attrs: {
                    type: 'customRepeaterTable',
                    values: [
                        {
                            label: 'Option A',
                            value: 'option-a'
                        },
                        {
                            label: 'Option B',
                            value: 'option-b'
                        }
                    ],
                    fields: [
                        { label: 'Description', type: 'text', className: 'custom-text-description' },
                        { label: 'Colour', type: 'text', className: 'custom-text-colour' },
                        { label: 'NA', type: 'checkbox', className: 'custom-text-na' }
                    ]
                },
                value: [
                    {
                        description: 'Option A Description',
                        colour: 'Red',
                        na: 1
                    },
                    {
                        description: 'Option B Description',
                        colour: 'Blue',
                        na: 0
                    }
                ],
                icon: '📋'
            }
        ];

        const templates = {
            customRepeaterTable: function(fieldData) {
                // const fieldName = fieldData.name || 'repeater';
                const uniqueId = `table_${Date.now()}_${Math.floor(Math.random() * 1000)}`;
                const fieldName = `${fieldData.name || 'repeater'}_${uniqueId}`;
                const fields = fieldData.fields || [
                    { key: 'description', label: 'Description', type: 'text', className: 'custom-text-description' },
                    { key: 'colour', label: 'Colour', type: 'text', className: 'custom-text-colour' },
                    { key: 'na', label: 'NA', type: 'checkbox', className: 'custom-text-na' }
=======

        const fields = [{
            label: 'Repeater Table',
            class: 'repeater-table',
            attrs: {
                type: 'customRepeaterTable',
                values: [{
                        label: 'Option A',
                        value: 'option-a'
                    },
                    {
                        label: 'Option B',
                        value: 'option-b'
                    }
                ],
                fields: [{
                        label: 'Description',
                        type: 'text',
                        className: 'custom-text-description'
                    },
                    {
                        label: 'Colour',
                        type: 'text',
                        className: 'custom-text-colour'
                    },
                    {
                        label: 'NA',
                        type: 'checkbox',
                        className: 'custom-text-na'
                    }
                ]
            },
            value: [{
                    description: 'Option A Description',
                    colour: 'Red',
                    na: 1
                },
                {
                    description: 'Option B Description',
                    colour: 'Blue',
                    na: 0
                }
            ],
            icon: '📋'
        }];

        const templates = {
            customRepeaterTable: function(fieldData) {
                const fieldName = fieldData.name || 'repeater';
                const uniqueId = `table_${Date.now()}_${Math.floor(Math.random() * 1000)}`;
                const fields = fieldData.fields || [{
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
>>>>>>> 7ac371402c6dfe71949f124d350dea1da3866c16
                ];

                // Generate rows from value : NEW CODE
                // const value = fieldData.value || [];
                let rawValue = fieldData.value || fieldData.attrs?.value || [];
                let value = [];
                if (typeof rawValue === 'string') {
                    try {
                        value = JSON.parse(rawValue);
                    } catch (e) {
                        console.warn("Invalid JSON in fieldData.value:", rawValue);
                        value = [];
                    }
                } else if (Array.isArray(rawValue)) {
                    value = rawValue; // already an array
                } else if (typeof rawValue === 'object' && rawValue !== null) {
                    value = [rawValue]; // single object
                }
                console.log("value", value);
                const rowsHtml = value.map((row, index) => {
                    return `<tr>
                        ${fields.map(f => {
                            const inputName = `${fieldName}[row_${index}][${f.key}]`;
                            if (!f.key) return '';
                            if (f.type === 'text') {
                                return `<td><input type="text" name="${inputName}" class="form-control ${f.className}" value="${row[f.key] || ''}" /></td>`;
                            } else if (f.type === 'checkbox') {
                                const checked = row[f.key] ? 'checked' : '';
<<<<<<< HEAD
                                return `<td><input type="checkbox" name="${inputName}" class="${f.className}" ${checked} /></td>`;
                            }
                        }).join('')}
                        <td><button type="button" class="btn btn-danger btn-sm remove-row">−</button></td>
=======
                                return ` < td > < input type = "checkbox"
                    name = "${inputName}"
                    class = "${f.className}"
                    $ {
                        checked
                    }
                    /></td > `;
                            }
                        }).join('')}
                        <td><button type="button" class="btn btn-danger btn-sm remove-row">âˆ’</button></td>
>>>>>>> 7ac371402c6dfe71949f124d350dea1da3866c16
                    </tr>`;
                }).join('') || '';

                return {
                    field: `
                        <div class="custom-repeater-table">
                            <table class="table table-bordered" id="${uniqueId}">
                                <thead>
                                    <tr>
<<<<<<< HEAD
                                        ${fields.map(f => `<th><span class="editable-header" data-key="${f.key}">${f.label}</span></th>`).join('')}
=======
                                        ${fields.map(f => `<th>${f.label}</th>`).join('')}
>>>>>>> 7ac371402c6dfe71949f124d350dea1da3866c16
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ${rowsHtml || `<tr>
                                        ${fields.map(f => {
                                            const inputName = `${fieldName}[row_0][${f.key}]`;
                                            if (f.type === 'text') {
                                                return `<td><input type="text" name="${inputName}" class="form-control ${f.className}" /></td>`;
                                            } else if (f.type === 'checkbox') {
                                                return `<td><input type="checkbox" name="${inputName}" class="${f.className}" /></td>`;
<<<<<<< HEAD
                                            }
                                        }).join('')}
                                        <td><button type="button" class="btn btn-danger btn-sm remove-row">−</button></td>
                                    </tr>`}
                                </tbody>
                            </table>
                            <div class="repeater-action-button mt-2">
                                <button type="button" class="btn btn-primary add-row">Add Row</button>
                                <button type="button" class="btn btn-primary add-column">Add Column</button>
                                <button type="button" class="btn btn-danger remove-column">Remove Column</button>
                                <textarea name="${fieldName}_json" class="d-none serialized-data" id="${uniqueId}_json" data-table-id="${uniqueId}" data-field-name="${fieldName}"></textarea>
                            <div>
                        </div>
                    `,
                    onRender: function() {
                        const $wrapper = $(`#${uniqueId}`).closest('.custom-repeater-table');
=======
                }
            }).join('')
    } <
    td > < button type = "button"
    class = "btn btn-danger btn-sm remove-row" > âˆ’ < /button></td >
    <
    /tr>`} < /
    tbody > <
    /table> <
    button type = "button"
    class = "btn btn-primary btn-sm add-row" > Add Row < /button> <
    textarea name = "${fieldName}_json"
    class = "d-none serialized-data"
    id = "${uniqueId}_json" > < /textarea> < /
    div >
    `,
                    onRender: function() {
                        const $wrapper = $(`
    #$ {
        uniqueId
    }
    `).closest('.custom-repeater-table');
>>>>>>> 7ac371402c6dfe71949f124d350dea1da3866c16
                        const $table = $wrapper.find('table');
                        const $textarea = $wrapper.find('textarea.serialized-data');

                        const updateTextarea = () => {
                            const data = [];
                            $table.find('tbody tr').each(function () {
                                const row = {};
                                $(this).find('input').each(function () {
                                    const type = $(this).attr('type');
                                    const name = $(this).attr('name');
                                    if (!name) return;

                                    const match = name.match(/\[([^\]]+)\]$/);
                                    const key = match ? match[1] : null;
                                    if (!key) return;

                                    if (type === 'checkbox') {
                                        row[key] = $(this).is(':checked') ? 1 : 0;
                                    } else {
                                        row[key] = $(this).val();
                                    }
                                });
                                if (Object.keys(row).length > 0) data.push(row);
                            });

                            const formattedData = data;
                            console.log("Repeater Data JSON:", formattedData);
                            $textarea.val(JSON.stringify(formattedData));
                        };

                        $wrapper.on('click', '.add-row', function() {
                            const rowId = `row_${Date.now()}_${Math.floor(Math.random() * 1000)}`;
<<<<<<< HEAD
                            const newRow = `<tr>
                                ${fields.map(f => {
                                    const inputName = `${fieldName}[${rowId}][${f.key}]`;
                                    if (f.type === 'text') {
                                        return `<td><input type="text" name="${inputName}" class="form-control ${f.className}" /></td>`;
                                    } else if (f.type === 'checkbox') {
                                        return `<td><input type="checkbox" name="${inputName}" class="${f.className}" /></td>`;
                                    }
                                    return '<td></td>';
                                }).join('')}
                                <td><button type="button" class="btn btn-danger btn-sm remove-row">−</button></td>
                            </tr>`;
                            $table.find('tbody').append(newRow);
                            updateTextarea();
                        });

                        $wrapper.on('click', '.remove-row', function() {
                            $(this).closest('tr').remove();
                            updateTextarea();
                        });

                        $wrapper.on('change', 'input', function() {
                            updateTextarea();
                        });
                      
                        $wrapper.on('click', '.add-column', function () {
                            const $table = $(this).closest('.custom-repeater-table').find('table');
                            const $textarea = $(this).closest('.custom-repeater-table').find('textarea.serialized-data');
                            const fieldName = $textarea.attr('name').replace(/_json$/, '');
                            currentTable = $table;
                            const existingLabels = [];
                            $table.find('thead th .editable-header').each(function () {
                                existingLabels.push($(this).text().trim());
                            });
                            console.log('existingLabels',existingLabels);
                            let html = `
                                <label>New Column Label:</label>
                                <input type="text" id="newColumnLabel" class="form-control"><br>
                                <label>Field Type:</label>
                                <select id="newColumnType" class="form-control">
                                    <option value="text">Text</option>
                                    <option value="checkbox">Checkbox</option>
                                </select><br>
                                <label>Insert After:</label>
                                <select id="insertAfterColumn" class="form-control">
                                    ${existingLabels.map(lbl => `<option value="${lbl}">${lbl}</option>`).join('')}
                                </select>
                            `;

                            showColumnModal(html, function () { 
                                const newLabel = $('#newColumnLabel').val().trim();
                                const newFieldType = $('#newColumnType').val();
                                const afterLabel = $('#insertAfterColumn').val();
                                if (!newLabel) return;
                                const newFieldKey = newLabel.toLowerCase().replace(/\s+/g, '_').replace(/[^\w]/g, '');
                                const insertIndex = existingLabels.indexOf(afterLabel);
                                const $theadRow = $table.find('thead tr');
                                $theadRow.find('th').eq(insertIndex).after(`<th><span class="editable-header" data-key="${newFieldKey}">${newLabel}</span></th>`);

                                $table.find('tbody tr').each(function () {
                                    // $(this).find('td').eq(insertIndex).after(`<td><input type="text" name="${newFieldKey}[]" class="form-control" /></td>`);
                                    const $row = $(this);
                                    const firstInputName = $row.find('input').first().attr('name') || '';
                                    const rowIdMatch = firstInputName.match(/\[([^\]]+)\]/); // matches [row_123]
                                    const rowId = rowIdMatch ? rowIdMatch[1] : `row_${Date.now()}`;
                                    const inputName = `${fieldName}[${rowId}][${newFieldKey}]`;
                                    let inputHtml = '';
                                    if (newFieldType === 'checkbox') {
                                        inputHtml = `<input type="checkbox" name="${inputName}" class="custom-text-${newFieldKey}" />`;
                                    } else {
                                        inputHtml = `<input type="text" name="${inputName}" class="form-control custom-text-${newFieldKey}" />`;
                                    }
                                    $row.find('td').eq(insertIndex).after(`<td>${inputHtml}</td>`);
                                });
                                fields.splice(insertIndex, 0, {
                                    key: newFieldKey,
                                    label: newLabel,
                                    type: newFieldType,
                                    className: 'custom-text-' + newFieldKey
                                });
                                updateTextarea();
                            });
                        });

                        $wrapper.on('click', '.editable-header', function () {
                            const oldLabel = $(this).text();
                            const oldKey = $(this).data('key');
                            const newLabel = prompt('Rename column:', oldLabel);
                            if (!newLabel || newLabel === oldLabel) return;
                            const newKey = newLabel.trim().toLowerCase().replace(/\s+/g, '_').replace(/[^\w]/g, '');
                            // Update header text
                            $(this).text(newLabel).data('key', newKey);
                            // Update each input using this key
                            $table.find(`input[name*="[${oldKey}]"]`).each(function () {
                                const oldName = $(this).attr('name');
                                const newName = oldName.replace(`[${oldKey}]`, `[${newKey}]`);
                                $(this).attr('name', newName);
                            });

                            // Update in fields array
                            const fieldObj = fields.find(f => f.key === oldKey);
                            if (fieldObj) {
                                fieldObj.key = newKey;
                                fieldObj.label = newLabel;
                                fieldObj.type = newType; 
                            }

                            updateTextarea();
                        });
                        
                        $wrapper.on('click', '.remove-column', function () {
                            const $table = $(this).closest('.custom-repeater-table').find('table');
                            currentTable = $table;

                            const existingLabels = [];
                            $table.find('thead th .editable-header').each(function () {
                                existingLabels.push($(this).text().trim());
                            });
                            let html = `
                                <label>Select Column to Remove:</label>
                                <select id="removeColumnLabel" class="form-control">
                                    ${existingLabels.map(lbl => `<option value="${lbl}">${lbl}</option>`).join('')}
                                </select>
                            `;
                            showColumnModal(html, function () {
                                const removeLabel = $('#removeColumnLabel').val();
                                if (!removeLabel) return;

                                const removeIndex = existingLabels.indexOf(removeLabel);
                                if (removeIndex === -1) return;

                                // Remove <th> from thead
                                $table.find('thead tr th').eq(removeIndex).remove();

                                // Remove corresponding <td> from each row in tbody
                                $table.find('tbody tr').each(function () {
                                    $(this).find('td').eq(removeIndex).remove();
                                });

                                // Remove field key from fields array
                                fields.splice(removeIndex, 1);

                                updateTextarea();
                            });
                        });

                        // Initial call to populate data
                        updateTextarea();
                    }
                };
            }
        };

        var renderOpts = {
            controlConfig: {
                'textarea.tinymce': {
                    paste_data_images: false
                }
            }
        };

        var fb = $('#build-wrap').formBuilder({
            fields,
            templates,
            stickyControls: {
                enable: true,
                offset: {
                    top: 20,
                    right: 20,
                    left: 'auto'
                }
            },
            inputSets: [{
=======

                            const newRow = `<tr>
                            ${fields.map(f => {
                                const inputName = `${fieldName}[${rowId}][${f.key}]`;
                                if (f.type === 'text') {
                                return `<td><input type="text" name="${inputName}" class="form-control ${f.className}" /></td>`;
                                } else if (f.type === 'checkbox') {
                                return `<td><input type="checkbox" name="${inputName}" class="${f.className}" /></td>`;
                                }
                                return '<td></td>';
                            }).join('')}
                            <td><button type="button" class="btn btn-danger btn-sm remove-row">−</button></td>
                            </tr>`;
                            $table.find('tbody').append(newRow); updateTextarea();
                         });

    $wrapper.on('click', '.remove-row', function() {
        $(this).closest('tr').remove();
        updateTextarea();
    });

    $wrapper.on('change', 'input', function() {
        updateTextarea();
    });

    // Initial call to populate data
    updateTextarea();
    }
    };
    }
    };
    var renderOpts = {
        controlConfig: {
            'textarea.tinymce': {
                paste_data_images: false
            }
        }
    };


    var fb = $('#build-wrap').formBuilder({
        fields,
        templates,
        stickyControls: {
            enable: true,
            offset: {
                top: 20,
                right: 20,
                left: 'auto'
            }
        },
        inputSets: [{
>>>>>>> 7ac371402c6dfe71949f124d350dea1da3866c16
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
<<<<<<< HEAD
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
            fb.actions.save();
            let formJson = JSON.parse(fb.actions.getData('json'));
            console.log('Add formdata', formJson);
            const form_name = $('#form_name').val();

            // Create a map of repeater fieldName to its data
            const repeaterMap = {};

            // Loop through each serialized textarea to capture JSON data for each repeater
            $('textarea.serialized-data').each(function () {
                const json = $(this).val();
                const fieldName = $(this).attr('data-field-name');
                const cleanFieldName = fieldName?.replace(/-preview$/, '').replace(/-preview.*$/, ''); // Clean the field name if it ends with "-preview"
                if (json && cleanFieldName) {
                    try {
                        const parsedJson = JSON.parse(json);
                        repeaterMap[cleanFieldName] = parsedJson;
                    } catch (e) {
                        console.warn("Invalid JSON for:", cleanFieldName, e);
                    }
                }
            });

            // Loop through formJson and assign the correct repeater data to the matching fields
            formJson.forEach((field) => {
                if (field.type === 'customRepeaterTable') {
                    const fieldName = field.name;
                    if (repeaterMap.hasOwnProperty(fieldName)) {
                        field.value = JSON.stringify(repeaterMap[fieldName]); 
                    } else {
                        console.warn("No repeater data found for:", fieldName);
                        field.value = '[]'; 
                    }
                }
            });

            // Send the updated form data via AJAX
            $.ajax({
                url: "{{ route('workgroup.store') }}",
                method: 'POST',
                data: {
                    form_data: JSON.stringify(formJson),
                    form_name: form_name,
                    _token: '{{ csrf_token() }}'
                },
                success: function(res) {
                    alert('Form saved successfully!');
                    window.location.href = "{{ route('workgroup.showgroupquestion') }}?success=1";
                },
                error: function(err) {
                    console.log("DEV-CHECK-FORM-SUBMIT-ERROR : ", err);
                }
            });
        });

        return false;
=======
            },
            {
                label: 'Conditional Notes Fields',
                name: 'conditional-notes-fields',
                className: 'responsible-header',
                icon: '📝',
                showHeader: false,
                fields: [{
                        type: 'checkbox',
                        label: 'Add Notes',
                        className: 'add-notes',
                        name: 'check-add-notes',
                        values: [{
                            label: 'Add Notes',
                            value: 'add-notes',
                            selected: false
                        }]
                    },
                    {
                        type: 'textarea',
                        label: 'Additional Notes',
                        className: 'additional-notes',
                    }
                ]
            },
        ],


        disabledAttrs: ['name'],
        controlOrder: ['text', 'radio-group', 'checkbox', 'textarea'],
    });

    setTimeout(function() {
        const targetClasses = ['responsible-party', 'buildr-details', 'owner-details', 'add-notes', 'additional-notes','section_initial_power_to_site'];

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
        fb.actions.save();
        let formJson = JSON.parse(fb.actions.getData('json'));
        console.log('Add formdata', formJson);
        const form_name = $('#form_name').val();
        let repeater_table_data = [];
        $('textarea.serialized-data').each(function() {
            const json = $(this).val();
            if (json) {
                repeater_table_data.push(JSON.parse(json));
            }
        });

        // Update the customRepeaterTable field's value with the correct serialized repeater data
        formJson.forEach((field) => {
            if (field.type === 'customRepeaterTable') {
                let merged = [];
                repeater_table_data.forEach(arr => {
                    if (Array.isArray(arr)) {
                        merged = merged.concat(arr);
                    }
                });
                field.value = JSON.stringify(merged);
            }
        });

        $.ajax({
            url: "{{ route('workgroup.store') }}",

            method: 'POST',
            data: {
                form_data: JSON.stringify(formJson),
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
>>>>>>> 7ac371402c6dfe71949f124d350dea1da3866c16
    });
</script>

@endsection