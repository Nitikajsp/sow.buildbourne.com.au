<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Site Work Submission</title>
    <style>
        body {
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

</html>