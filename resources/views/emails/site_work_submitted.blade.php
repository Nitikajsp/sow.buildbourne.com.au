<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD
=======

>>>>>>> 7ac371402c6dfe71949f124d350dea1da3866c16
<head>
    <meta charset="UTF-8">
    <title>Site Work Submission</title>
    <style>
        body {
<<<<<<< HEAD
            font-family: DejaVu Sans, sans-serif;
            font-size: 12px;
            margin-top: 120px; 
            margin-bottom: 70px;
            position: relative; 
        }

        .formbuilder-checkbox-group,
        .formbuilder-radio-group {
            padding:10px 0px;
            break-inside: avoid; 
        }
        .formbuilder-checkbox-group h2,
        .formbuilder-radio-group h2 {
            font-size: 16px;
            margin-top:0px;
            margin-bottom: 0px;
            break-inside: avoid; 
        }
        .form-group {
            background-color: #EBEAEA;
            padding: 10px 15px;
            border: 1px solid #CFCFCF;
            margin-bottom: 10px;
            break-inside: avoid; 
        }
        .checkbox-option input,
        .radio-option input{
            vertical-align: middle;
            background:transparent;
            margin:0px
        }
        .checkbox-option input {
            vertical-align: middle;
        }
        label {
            font-weight: bold;
            line-height: 1.2rem;
        }
        .buildr-details {
            padding: 10px 15px;
            background-color: #f8f9fa;
            border-left: 4px solid #5c662b;
            margin-top: 10px;
            break-inside: avoid;
        }
        textarea {
            border: 1px dashed #CFCFCF;
            min-height: 100px;
            width: 100%;
            margin-top: 10px;
            break-inside: avoid; 
        }
        .cehckbox-group,
        .radio-group {
            display: inline-block;
            float: right;
            vertical-align: middle;
        }
        .checkbox-group label,
        .radio-group label{
            display: inline-block;
        }
        .formbuilder-radio {
            display: inline-block;
            margin-right: 10px;
        }
        .sub-option-details {
            padding: 15px 20px;
            background-color: #f8f9fa;
            border-left: 4px solid #5c662b;
            margin-top: 10px;
            break-inside: avoid;
        }
        .sub-option-details .checkbox-group,
        .sub-option-details .radio-group{
            display: block ;
            float:unset;
        }
        .sub-option-details .checkbox-group .formbuilder-checkbox,
        .sub-option-details .radio-group .formbuilder-radio {
            display:block;
        }
        .paragraph p {
            background-color: #EBEAEA;
            padding: 10px 15px;
            border: 1px solid #CFCFCF;
            color: #000;
            margin-bottom: 15px;
            font-weight: bold;
            break-inside: avoid; 
        }

        .page-header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            width: 100%;
            padding: 10px 2rem;
            background-color: #ffffff;
            border-bottom: 1px solid #000;
            z-index: 1000;
            box-sizing: border-box;
            height: 90px; 
        }
        .page-header table {
            width: 100%;
        }
        .page-header .header-logo img {
            max-width: 200px;
            height: auto;
            display: block;
        }
        .page-header .header-info {
            text-align: right;
            font-weight: bold;
            line-height: 1.4;
        }
        .page-header .header-info div {
            margin-bottom: 2px;
        }

        /* Fixed Footer CSS */
        .page-footer {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            padding: 10px 2rem;
            background-color: #ffffff;
            border-top: 1px solid #000;
            font-size: 10px;
            color: #555;
            z-index: 1000;
            box-sizing: border-box;
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 60px; /* Explicit height to better calculate body margin-bottom */
        }
        .page-footer .footer-left,
        .page-footer .footer-right {
            display: inline-block;
        }
        .page-footer .footer-left {
            flex-grow: 1;
        }
        .page-footer .footer-right {
            text-align: right;
        }

        .document-container {
            max-width: 800px;
            /* Removed top/bottom margins here as body margin handles the fixed header/footer spacing */
            margin-left: auto;
            margin-right: auto;
            padding: 2rem; /* Keep padding for inner content spacing */
            background-color: #ffffff;
            border-radius: 0.75rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            line-height: 1.6;
            break-inside: avoid; /* Try to keep the entire container together if possible, or break gracefully */
        }
        .header-logo-container {
            font-family: 'Georgia', serif;
            font-size: 2.5rem;
            font-weight: bold;
            color: #1a73e8;
            text-align: center;
            margin-bottom: 30px;
        }
        .header-logo-container img {
            max-width: 200px;
        }

        .header-tagline {
            font-size: 1.25rem;
            color: #555;
        }
        .section-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
            margin-top: 1.5rem;
            margin-bottom: 1rem;
            text-align: center;
            break-after: avoid; /* Avoid breaking immediately after a title */
        }
        .info-label {
            font-weight: bold;
            color: #444;
        }
        .table-header {
            background-color: #e2e8f0;
            font-weight: bold;
            padding: 0.75rem 0.5rem;
            text-align: left;
            border-radius: 0.5rem;
        }

        .text-center {
            text-align:center
        }

        .custom-table{
            width: 100%;
            margin:0px auto;
            break-inside: avoid; /* Prevent table from being split across pages */
        }

        .custom-table,   .custom-table th,   .custom-table td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        .table-cell {
            padding: 0.5rem;
        }
        .checkbox-cell {
            /* display: flex;
            justify-content: center;
            align-items: center; */
        }
        .formbuilder-checkbox {
            break-inside: avoid; /* Keep checkbox and label together */
        }
    </style>
</head>
<body>

  

    <div class="document-container">

        <h1 class="section-title uppercase tracking-wide">
            ARCHITECTURAL SPECIFICATIONS AND SCOPE <br> OF WORKS FOR THE PROPOSED BUILDING WORK
        </h1>

        <table style="width:80%; margin:0px auto" >
            <tbody>
                <tr>
                    <td>CLIENT</td>
                    <td>{{ $clientName ?? '' }}</td>
                </tr>
                <tr>
                    <td>JOB No</td>
                    <td>{{ $jobNo ?? '' }}</td>
                </tr>
                <tr>
                    <td>DATE ISSUED</td>
                    <td>{{ $currentDate ?? '' }}</td>
                </tr>
                <tr>
                    <td>LOCATED AT</td>
                <td>{{ $locatedAt }}</td>
                </tr>
            </tbody>
        </table>

        <section class="mb-6 text-sm text-gray-700">
            <p class="mb-4">
                This specification is primarily architectural and does not outline construction or engineering requirements for the project, however all work will be carried out in a tradesman like manner and in accordance with the Building Code of Australia, relevant Australian Standards, and Local Government requirements.
            </p>
            <p class="mb-4">
                The document is designed to compliment architectural plans and engineering details. It will represent a detailed list of selections and choices to assist in the finalisation of the quotation to complete the works. These selections and choices will allow each specific trade to complete work during the course of construction to the owner's requirements.
            </p>
            <p class="mb-4">
                The document is broken up into stages, usually specific to each trade. Where appropriate it will list Provisional Sum allowances and PC amounts for items required. It will assist both the owner/s and "Freedom Homes", forming a check list prior to the commencement of work for each stage. Contract work cannot commence until necessary selections and specific details for each stage have been finalised. The owner/s will be required to fill out the specification and submit it to "Freedom Homes" Sales staff. Sales will give the owner/s a list of preferred suppliers for items required to select, and helpful advice to assist with this requirement.
            </p>
            <p>
                On completion of this document it will be checked by "Freedom Homes" and will form part of the "Contract Agreement", signed by both parties. Care should be taken to ensure the accurate completion of this specification. It is a detailed list of the building requirements and scope of works for your project and will take precedence over architectural drawings.
            </p>
        </section>

        
        <h2>Site Work Submission</h2>

      <div class="rendered-form formbuilder-embedded-bootstrap">
    @foreach ($workData as $field)
        @switch($field['type'])

            @case('header')
                <h2>{!! nl2br(e($field['label'])) !!}</h2>
                @break

            @case('paragraph')
                <div class="paragraph">
                    <p>{{ strip_tags(html_entity_decode($field['label'])) }}</p>
                </div>
                @break

            @case('radio-group')
                <div class="formbuilder-radio-group form-group {{ $field['className'] ?? '' }}">
                    <label>{!! $field['label'] ?? '' !!}</label>
                    <div class="radio-group" style="padding:10px 0px; vertical-align: middle;" >
                        @foreach ($field['values'] as $index => $option)
                            @php
                                $id = $field['name'] . '-' . $index;
                                $userValue = $field['userData'][0] ?? null;
                                $checked = ($userValue == $option['value']) ? 'checked' : '';
                            @endphp

                            <div class="formbuilder-radio">
                                <input type="radio"
                                    name="{{ $field['name'] }}"
                                    id="{{ $id }}"
                                    value="{{ $option['value'] }}"
                                    {{ $checked }}>
                                <label for="{{ $id }}">{{ $option['label'] }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>
                @break

            @case('checkbox-group')
                <div class="formbuilder-checkbox-group {{ $field['className'] ?? '' }}">
                    <label>{!! $field['label'] ?? '' !!}</label>
                    <div class="checkbox-group">
                        @php
                            $userValues = $field['userData'] ?? [];
                        @endphp
                        @foreach ($field['values'] as $index => $option)
                            @php
                                $id = $field['name'] . '-' . $index;
                                $checked = in_array($option['value'], $userValues) ? 'checked' : '';
                            @endphp
                            <div class="formbuilder-checkbox">
                                <input type="checkbox" name="{{ $field['name'] }}[]" id="{{ $id }}" value="{{ $option['value'] }}" {{ $checked }}>
                                <label for="{{ $id }}">{{ $option['label'] }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>
                @break

            @case('checkbox')
                @php
                    $userValues = $field['userData'] ?? [];
                @endphp
                @foreach ($field['values'] as $index => $option)
                    @php
                        $id = $field['name'] . '-' . $index;
                        $checked = in_array($option['value'], $userValues) ? 'checked' : '';
                    @endphp
                    <div class="formbuilder-checkbox {{ $field['className'] ?? '' }}">
                        @if (!empty($option['note']))
                            <div class="note" style="font-size: 12px; color: #555;">{{ $option['note'] }}</div>
                        @endif
                        <input type="checkbox" name="{{ $field['name'] }}[]" id="{{ $id }}" value="{{ $option['value'] }}" {{ $checked }}>
                        <label for="{{ $id }}">{{ $option['label'] }}</label>
                    </div>
                @endforeach
                @break

            @case('textarea')
                @php
                    $value = $field['userData'][0] ?? '';
                @endphp
                <div class="formbuilder-textarea {{ $field['className'] ?? '' }}" >
                    @if (!empty($field['note']))
                        <div class="note" style="font-size: 12px; color: #555;">{{ $field['note'] }}</div>
                    @endif
                    <label for="{{ $field['name'] }}">{!! $field['label'] ?? '' !!}</label>
                    <textarea name="{{ $field['name'] }}" id="{{ $field['name'] }}" class="{{ $field['className'] ?? '' }}">{{ $value }}</textarea>
                </div>
                @break

        @endswitch
    @endforeach
</div>

    </body>
=======
            font-family: Arial, sans-serif;
            color: #222;
            font-size: 14px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .options {
            margin-left: 20px;
        }

        .option {
            margin-bottom: 3px;
        }

        textarea {
            border: 1px solid #ccc;
            padding: 6px;
            width: 100%;
            min-height: 60px;
            font-family: Arial, sans-serif;
            margin-top: 5px;
        }

        hr {
            margin: 30px 0;
        }
    </style>
</head>

<body>
    <h2>Site Work Submission</h2>

    <div class="formbuilder-radio-group form-group field-radio-group-1745578098316 responsible-party"><label for="radio-group-1745578098316" class="formbuilder-radio-group-label">1.1 Access Road to Site fff<span class="formbuilder-required">*</span></label>
        <div class="radio-group">
            <div class="formbuilder-radio"><input class="responsible-party" name="radio-group-1745578098316" id="radio-group-1745578098316-0" aria-required="true" value="By Builder" type="radio"><label for="radio-group-1745578098316-0">By Builder</label></div>
            <div class="formbuilder-radio"><input class="responsible-party" name="radio-group-1745578098316" id="radio-group-1745578098316-1" aria-required="true" value="By Owner" type="radio"><label for="radio-group-1745578098316-1">By Owner</label></div>
            <div class="formbuilder-radio"><input class="responsible-party" name="radio-group-1745578098316" id="radio-group-1745578098316-2" aria-required="true" value="N/A" type="radio" checked="checked"><label for="radio-group-1745578098316-2">N/A</label></div>
        </div>
    </div>

    @foreach ($workData as $field)
    <div class="form-group">
        <div class="label">{{ strip_tags($field['label'] ?? 'Unnamed Field') }}</div>

        {{-- Custom Repeater Table --}}
        @if($field['type'] === 'customRepeaterTable' && isset($field['userData']) && is_array($field['userData']))
        <div class="custom-repeater-output">
            <table class="table table-bordered" border="1" cellspacing="0" cellpadding="5">
                <thead>
                    <tr>
                        @foreach(array_keys($field['userData'][0]) as $column)
                        <th>{{ ucfirst(strip_tags($column)) }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach($field['userData'] as $row)
                    <tr>
                        @foreach($row as $value)
                        <td>{{ strip_tags($value) }}</td>
                        @endforeach
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{-- Autocomplete, Radio Group, Checkbox Group --}}
        @elseif(isset($field['values']) && is_array($field['values']))
        <div class="options">
            @foreach($field['values'] as $option)
            <div class="option">
                <label>
                    <input type="checkbox"
                        {{ isset($field['userData']) && in_array($option['value'], $field['userData']) ? 'checked' : '' }}
                        disabled>
                    {{ strip_tags($option['label']) }}
                    @if(isset($field['userData']) && in_array($option['value'], $field['userData'])) ✅ @endif
                </label>
            </div>
            @endforeach
        </div>

        {{-- Text Inputs / Textareas --}}
        @elseif(isset($field['userData']) && is_array($field['userData']))
        <div>
            @foreach($field['userData'] as $text)
            {{ strip_tags($text) }}<br>
            @endforeach
        </div>

        {{-- Fallback --}}
        @else
        <div class="option">N/A</div>
        @endif
    </div>
    <hr>
    @endforeach

</body>

>>>>>>> 7ac371402c6dfe71949f124d350dea1da3866c16
</html>