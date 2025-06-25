@extends('layouts.app')

@push('css')
<link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
<link rel="stylesheet" href="{{ asset('css/add_and_edit_custom.css') }}" />
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
                                <button id="update-form" type="button" class="btn btn-primary create-new waves-effect waves-light btn-dark rounded">Update Form</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="columnModal" style="display: none; position: fixed; top: 35%; left: 50%; transform: translate(-50%, -35%);
    background: white; padding: 20px; border: 1px solid #ccc; z-index: 1001; box-shadow: 0 0 10px rgba(0,0,0,0.2);">
    
    <div id="columnModalContent"></div>
    <br>
    <button id="columnModalConfirm" class="btn btn-primary">Confirm</button>
    <button id="columnModalCancel" class="btn btn-secondary">Cancel</button>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
<script src="https://formbuilder.online/assets/js/form-builder.min.js"></script>
<script src="https://formbuilder.online/assets/js/form-render.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.2.0/jquery.rateyo.min.js"></script>

<script>
    $(document).ready(function() {
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

        const fields = [{
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
                console.log('fieldData',fieldData);
                const uniqueId = `table_${Date.now()}_${Math.floor(Math.random() * 10000)}`;
                const fieldName = fieldData.name || 'repeater';
          

                let fields = fieldData.fields;
                console.log("DEV-CHECK-FIELDS-VAR-VAL : ", fields);
                if (!fields) {
                    // Try to infer field structure from value (fallback mode)
                    const rawValue = fieldData.value || fieldData.attrs?.value || [];
                    let parsedValue = [];

                    try {
                        parsedValue = typeof rawValue === 'string' ? JSON.parse(rawValue) : rawValue;
                    } catch (e) {
                        parsedValue = [];
                    }

                    const fieldKeys = new Set();
                    const fieldTypeMap = {};

                    parsedValue.forEach(row => {
                        if (typeof row === 'object' && row !== null) {
                            Object.entries(row).forEach(([key, val]) => {
                                fieldKeys.add(key);

                                // Dynamically infer field type
                                if (!(key in fieldTypeMap)) {
                                    if (typeof val === 'boolean' || (typeof val === 'number' && (val === 0 || val === 1))) {
                                        fieldTypeMap[key] = 'checkbox';
                                    } else if (typeof val === 'number') {
                                        fieldTypeMap[key] = 'number';
                                    } else if (typeof val === 'string' && val.length > 100) {
                                        fieldTypeMap[key] = 'textarea';
                                    } else {
                                        fieldTypeMap[key] = 'text';
                                    }
                                }
                            });
                        }
                    });

                    fields = Array.from(fieldKeys).map(key => ({
                        key,
                        label: key.replace(/_/g, ' ').replace(/\b\w/g, l => l.toUpperCase()),
                        type: fieldTypeMap[key] || 'text',
                        className: 'custom-text-' + key
                    }));
                }

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
                } else if (typeof rawValue === 'object' && rawValue !== null) {
                    value = [rawValue];
                }

                const rowsHtml = value.map((row, index) => {
                    return `<tr>
                        ${fields.map(f => {
                            const inputName = `${fieldName}[row_${index}][${f.key}]`;
                            if (!f.key) return '';
                            if (f.type === 'text') {
                                return `<td><input type="text" name="${inputName}" class="form-control ${f.className}" value="${row[f.key] || ''}" /></td>`;
                            } else if (f.type === 'checkbox') {
                                const checked = row[f.key] ? 'checked' : '';
                                return `<td><input type="checkbox" name="${inputName}" class="${f.className}" ${checked} /></td>`;
                            }
                            return '<td></td>';
                        }).join('')}
                        <td><button type="button" class="btn btn-danger btn-sm remove-row">−</button></td>
                    </tr>`;
                }).join('');

                return {
                    field: `
                        <div class="custom-repeater-table" data-field-id="${uniqueId}">
                            <table class="table table-bordered" id="${uniqueId}">
                                <thead>
                                    <tr>
                                        ${fields.map(f => `<th><span class="editable-header" data-key="${f.key}">${f.label}</span></th>`).join('')}
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
                                            }
                                            return '<td></td>';
                                        }).join('')}
                                        <td><button type="button" class="btn btn-danger btn-sm remove-row">−</button></td>
                                    </tr>`}
                                </tbody>
                            </table>
                            <div class="repeater-action-button mt-2">
                                <button type="button" class="btn btn-primary btn-sm add-row">Add Row</button>
                                <button type="button" class="btn btn-primary btn-sm add-column">Add Column</button>
                                <button type="button" class="btn btn-danger remove-column">Remove Column</button>
                                <textarea name="${fieldName}_json" class="d-none serialized-data" id="${uniqueId}_json" data-table-id="${uniqueId}" data-field-name="${fieldName}"></textarea>
                            <div>
                        </div>
                    `,
                    onRender: function() {
                        const $wrapper = $(`[data-field-id="${uniqueId}"]`);
                        const $table = $wrapper.find('table');
                        const $textarea = $wrapper.find(`textarea[data-table-id="${uniqueId}"]`);

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
                            $textarea.val(JSON.stringify(data));
                        };

                        $wrapper.on('click', '.add-row', function () {
                            const rowId = `row_${Date.now()}_${Math.floor(Math.random() * 10000)}`;
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

                        $wrapper.on('click', '.remove-row', function () {
                            $(this).closest('tr').remove();
                            updateTextarea();
                        });

                        $wrapper.on('change', 'input', function () {
                            updateTextarea();
                        });

                        $wrapper.on('click', '.add-column', function () { 
                            const $table = $(this).closest('.custom-repeater-table').find('table');
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
                                alert(newLabel);
                                const newFieldKey = newLabel.toLowerCase().replace(/\s+/g, '_').replace(/[^\w]/g, '');

                                const insertIndex = existingLabels.indexOf(afterLabel);
                                const $theadRow = $table.find('thead tr');
                                $theadRow.find('th').eq(insertIndex).after(`<th><span class="editable-header">${newLabel}</span></th>`);

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

                        updateTextarea(); // Initial call
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

        const questionId = @json($questionId);
        const savedJson = @json($questionJson);

        const fb = $('#build-wrap').formBuilder({
            fields,
            templates,
            formData: savedJson,
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
            fb.actions.save(); // Save form builder data
            let formJson = JSON.parse(fb.actions.getData('json'));
            const form_name = $('#form_name').val();

            const repeaterMap = {};

            $('textarea.serialized-data').each(function () {
                const json = $(this).val();
                const fieldName = $(this).attr('data-field-name');
                const cleanFieldName = fieldName?.replace(/-preview$/, '').replace(/-preview.*$/, '');
                if (json && cleanFieldName) {
                    try {
                        const parsedJson = JSON.parse(json);
                        repeaterMap[cleanFieldName] = parsedJson;
                    } catch (e) {
                        console.warn("Invalid JSON for:", cleanFieldName, e);
                        field.value = '[]';
                    }
                }
            });

                        formJson.forEach((field) => {
                    if (field.type === 'customRepeaterTable') {
                        const fieldName = field.name;
                        if (repeaterMap.hasOwnProperty(fieldName)) {
                            field.value = JSON.stringify(repeaterMap[fieldName]); // ✅ Save as stringified JSON
                        } else {
                            field.value = '[]'; // Empty fallback
                        }
                    }
                });

            console.log("formJson", formJson);

            $('.render-wrap').formRender({ formData: formJson });

            $.ajax({
                url: "{{ route('workgroup.workgroupquestionupdate', ['id' => $questionId]) }}",
                method: 'POST',
                data: {
                    form_data: JSON.stringify(formJson),
                    form_name: form_name,
                    _token: '{{ csrf_token() }}'
                },
                success: function(res) {
                    console.log('Form updated successfully:', res);
                    $('#form-success-message')
                        .removeClass('d-none')
                        .text(res.message)
                        .fadeIn()
                        .delay(3000)
                        .fadeOut();
                },
                error: function(err) {
                    console.error(err);
                }
            });
        });
    });
</script>

@endsection
