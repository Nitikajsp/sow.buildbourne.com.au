@extends('layouts.app')

@push('css')
<!-- <link rel="stylesheet" href="{{ asset('css/custom.css') }}" /> -->
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
                <div class=" d-flex justify-content-between align-items-center py-4">
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
                        <button id="#update-top-form" type="button" class="btn btn-primary create-new waves-effect waves-light btn-dark rounded">Update Form</button>

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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
<script src="https://formbuilder.online/assets/js/form-builder.min.js"></script>
<script src="https://formbuilder.online/assets/js/form-render.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.2.0/jquery.rateyo.min.js"></script>

<script>
    $(document).ready(function() {
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
                        <td><button type="button" class="btn btn-danger btn-sm remove-row">âˆ’</button></td>
                    </tr>`;
                }).join('');

                return {
                    field: `
                        <div class="custom-repeater-table" data-field-id="${uniqueId}">
                            <table class="table table-bordered" id="${uniqueId}">
                                <thead>
                                    <tr>
                                        ${fields.map(f => `<th>${f.label}</th>`).join('')}
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
    id = "${uniqueId}_json"
    data - table - id = "${uniqueId}"
    data - field - name = "${fieldName}" > < /textarea> < /
    div >
    `,
                    onRender: function() {
                        const $wrapper = $(` [data - field - id = "${uniqueId}"] `);
                        const $table = $wrapper.find('table');
                        const $textarea = $wrapper.find(`
    textarea[data - table - id = "${uniqueId}"] `);

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
<<<<<<< HEAD
         const rowId = `
    row_$ {
        Date.now()
    }
    _$ {
        Math.floor(Math.random() * 10000)
    }
    `;
 
                                const newRow = ` < tr >
    $ {
        fields.map(f => {
            const inputName = `${fieldName}[${rowId}][${f.key}]`;
            if (f.type === 'text') {
                return `<td><input type="text" name="${inputName}" class="form-control ${f.className}" /></td>`;
            } else if (f.type === 'checkbox') {
                return `<td><input type="checkbox" name="${inputName}" class="${f.className}" /></td>`;
            }
            return '<td></td>';
        }).join('')
    } <
    td > < button type = "button"
    class = "btn btn-danger btn-sm remove-row" > − < /button></td >
    <
    /tr>`;
    $table.find('tbody').append(newRow); updateTextarea();
    });
=======
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
                                $table.find('tbody').append(newRow); updateTextarea();
                            });
>>>>>>> 853aef85d5e89732e67870b7bc89150e399f3432

    $wrapper.on('click', '.remove-row', function() {
        $(this).closest('tr').remove();
        updateTextarea();
    });

    $wrapper.on('change', 'input', function() {
        updateTextarea();
    });

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


    $('#update-top-form').on('click', function() {
        $('#update-form').trigger('click');
        return false;
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
    }, 1000);
    $('#update-form').on('click', function() {
    fb.actions.save();
    let formJson = JSON.parse(fb.actions.getData('json'));
    const form_name = $('#form_name').val();

    const repeaterMap = {};

    $('textarea.serialized-data').each(function() {
        const json = $(this).val();
        const fieldName = $(this).attr('data-field-name');
        const cleanFieldName = fieldName?.replace(/-preview$/, '');

        if (json && cleanFieldName) {
            try {
                JSON.parse(json);
                repeaterMap[cleanFieldName] = json;
            } catch (e) {
                console.warn("Invalid JSON for:", cleanFieldName);
            }
        }
    });

    formJson.forEach((field) => {
        if (field.type === 'customRepeaterTable') {
            if (repeaterMap.hasOwnProperty(field.name)) {
                field.value = repeaterMap[field.name];
            } else {
                console.warn("No repeater data found for:", field.name);
            }
        }
    });

    console.log("formJson", formJson);

    $('.render-wrap').formRender({
        formData: formJson
    });

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