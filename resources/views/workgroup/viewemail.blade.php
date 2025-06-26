<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Site Work Submission</title>
    <style>
       
        body {
          font-family: DejaVu Sans, sans-serif;
            font-size: 12px;
             margin-top: 90px;
        }

        /* Fixed Header */
        .page-header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            height: 55px;
            padding: 0px 2rem;
            background-color: #ffffff;
        }

        .page-header table {
            width: 100%;
        }

        .header-logo img {
            max-width: 200px;
        }

        .header-info {
            text-align: right;
            font-weight: bold;
            line-height: 1.4;
        }

        /* Fixed Footer */
        .page-footer {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            height: 70px;
            background-color: #ffffff;
            border-top: 1px solid #000;
            font-size: 10px;
            padding: 10px 2rem;
        }

        .footer-table {
            width: 100%;
        }

        .footer-right {
            text-align: right;
        }

        .document-container {
            padding: 2rem;
            margin-top: 100px;
            margin-bottom: 90px;
        }

        .section-title {
            font-size: 1.5rem;
            font-weight: bold;
            text-align: center;
            margin: 1.5rem 0;
        }

        .form-group, .formbuilder-checkbox-group, .formbuilder-radio-group, .formbuilder-textarea {
            break-inside: avoid;
            page-break-inside: avoid;
            margin-bottom: 12px;
            padding: 10px;
            background: #f5f5f5;
            border: 1px solid #ccc;
        }

        textarea {
            border: 1px dashed #CFCFCF;
            width: 100%;
            min-height: 100px;
            margin-top: 10px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        .formbuilder-radio,
        .formbuilder-checkbox {
            display: inline-block;
            margin-right: 10px;
            float: right;
        }

        .paragraph p {
            background-color: #EBEAEA;
            padding: 10px 15px;
            border: 1px solid #CFCFCF;
            font-weight: bold;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<!-- Header -->
<div class="page-header">
    <table style="border-bottom: 1px solid #000">
        <tr>
            <td style="width:50%;">
                <div class="header-logo">
                    <img src="{{ public_path('img/logo.png') }}" alt="Logo">
                </div>
            </td>
            <td style="width:50%;">
                <div class="header-info">
                    <div>Client: <span style="font-weight: normal;">{{ $clientName ?? '' }}</span></div>
                    <div>Job No: <span style="font-weight: normal;">{{ $jobNo ?? '' }}</span></div>
                    <div>Date: <span style="font-weight: normal;">{{ $currentDate ?? '' }}</span></div>
                </div>
            </td>
        </tr>
    </table>
</div>

<!-- Main content -->
<div class="document-container">
    <h1 class="section-title">ARCHITECTURAL SPECIFICATIONS AND SCOPE OF WORKS FOR THE PROPOSED BUILDING WORK</h1>

    <table style="width:80%; margin:0 auto; margin-bottom: 30px;">
        <tr><td>CLIENT</td><td>{{ $clientName ?? '' }}</td></tr>
        <tr><td>JOB No</td><td>{{ $jobNo ?? '' }}</td></tr>
        <tr><td>DATE ISSUED</td><td>{{ $currentDate ?? '' }}</td></tr>
        <tr><td>LOCATED AT</td><td></td></tr>
    </table>

    <section>
     <p>
                This specification is primarily architectural and does not outline construction or engineering requirements for the project, however all work will be carried out in a tradesman like manner and in accordance with the Building Code of Australia, relevant Australian Standards, and Local Government requirements.
            </p>
            <p>
                The document is designed to compliment architectural plans and engineering details. It will represent a detailed list of selections and choices to assist in the finalisation of the quotation to complete the works. These selections and choices will allow each specific trade to complete work during the course of construction to the owner's requirements.
            </p>
            <p>
                The document is broken up into stages, usually specific to each trade. Where appropriate it will list Provisional Sum allowances and PC amounts for items required. It will assist both the owner/s and "Freedom Homes", forming a check list prior to the commencement of work for each stage. Contract work cannot commence until necessary selections and specific details for each stage have been finalised. The owner/s will be required to fill out the specification and submit it to "Freedom Homes" Sales staff. Sales will give the owner/s a list of preferred suppliers for items required to select, and helpful advice to assist with this requirement.
            </p>
            <p>
                On completion of this document it will be checked by "Freedom Homes" and will form part of the "Contract Agreement", signed by both parties. Care should be taken to ensure the accurate completion of this specification. It is a detailed list of the building requirements and scope of works for your project and will take precedence over architectural drawings.
            </p>
    </section>

    <h2 style="margin-top: 30px;">Site Work Submission</h2>

    <div class="rendered-form">
     @foreach ($workData as $field)
    @switch($field['type'])

        @case('header')
            <h3 style="margin-top: 30px; background-color: #eee; padding: 10px;">{{ $field['label'] }}</h3>
            @break

        @case('radio-group')
            <div style="background-color: #f9f9f9; border: 1px solid #ccc; padding: 10px; margin-bottom: 15px;">
                <label style="font-weight: bold; margin-bottom: 5px; display: inline-block;">{{ $field['label'] ?? '' }}</label>
                <div style=" float: right; vertical-align: middle;">
                    @php
                        $userValue = $field['userData'][0] ?? null;
                    @endphp
                    @foreach ($field['values'] as $index => $option)
                        @php
                            $id = $field['name'] . '-' . $index;
                            $checked = ($userValue == $option['value']) ? 'checked' : '';
                        @endphp
                        <label style="display:inline-flex; align-items: center; vertical-align: middle;">
                            <input type="radio" name="{{ $field['name'] }}" id="{{ $id }}" value="{{ $option['value'] }}" {{ $checked }} style="vertical-align: middle;" >
                            {{ $option['label'] }}
                        </label>
                    @endforeach
                </div>
            </div>
            @break

        @case('checkbox-group')
            <div style="border-left: 4px solid olive; background-color: #f9f9f9; padding: 10px 15px; margin-bottom: 10px;">
                <label style="font-weight: bold;">{{ $field['label'] ?? '' }}</label>
                @php $userValues = $field['userData'] ?? []; @endphp
                <ul style="list-style: none; padding-left: 0; margin: 5px 0;">
                    @foreach ($field['values'] as $index => $option)
                        @php
                            $id = $field['name'] . '-' . $index;
                            $checked = in_array($option['value'], $userValues) ? 'checked' : '';
                        @endphp
                        <li style="margin: 5px 0;">
                            <label>
                                <input type="checkbox" name="{{ $field['name'] }}[]" id="{{ $id }}" value="{{ $option['value'] }}" {{ $checked }} >
                                {{ $option['label'] }}
                            </label>
                        </li>
                    @endforeach
                </ul>
            </div>
            @break

        @case('checkbox')
            @php $userValues = $field['userData'] ?? []; @endphp
            <div style="margin-bottom: 10px;">
                @foreach ($field['values'] as $index => $option)
                    @php
                        $id = $field['name'] . '-' . $index;
                        $checked = in_array($option['value'], $userValues) ? 'checked' : '';
                    @endphp
                    <label style="display: block;">
                        <input type="checkbox" name="{{ $field['name'] }}[]" id="{{ $id }}" value="{{ $option['value'] }}" {{ $checked }}>
                        {{ $option['label'] }}
                    </label>
                @endforeach
            </div>
            @break

        @case('textarea')
            <div style="margin-bottom: 20px;">
                <label for="{{ $field['name'] }}" style="font-weight: bold;">{{ $field['label'] ?? '' }}</label>
                <textarea name="{{ $field['name'] }}" id="{{ $field['name'] }}" style="width: 100%; min-height: 100px; border: 1px dashed #ccc; margin-top: 5px;">{{ $field['userData'][0] ?? '' }}</textarea>
            </div>
            @break

    @endswitch
@endforeach

    </div>
</div>

<!-- Footer -->
<div class="page-footer">
    <table class="footer-table">
        <tr>
            <td style="width: 33%; font-style: italic;">
                <strong>Initials:</strong> Freedom Homes: ............................................
            </td>
            <td style="width: 33%;">
                <strong>Client:</strong> ............................................
            </td>
        </tr>
        <tr>
            <td colspan="3">&copy; Freedom Homes Pty Ltd 2006</td>
        </tr>
    </table>
</div>

</body>
</html>
