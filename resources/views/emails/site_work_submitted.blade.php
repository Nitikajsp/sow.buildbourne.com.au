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
    @foreach ($workData as $field)
    <div class="form-group">
        <div class="label">{{ $field['label'] ?? 'Unnamed Field' }}</div>

        @if(isset($field['values']) && is_array($field['values']))
        <div class="options">
            @foreach($field['values'] as $option)
            <div class="option 
                {{ isset($field['userData']) && in_array($option['value'], $field['userData']) ? 'selected' : '' }}">
                <label>
                    <input type="checkbox"
                        {{ isset($field['userData']) && in_array($option['value'], $field['userData']) ? 'checked' : '' }}
                        disabled>
                    {{ $option['label'] }}
                    @if(isset($field['userData']) && in_array($option['value'], $field['userData'])) ✅ @endif
                </label>
            </div>
            @endforeach
        </div>

        {{-- Text Inputs / Textareas --}}
        @elseif(isset($field['userData']) && is_array($field['userData']))
        <textarea readonly>{{ implode(', ', $field['userData']) }}</textarea>

        {{-- Default fallback --}}
        @else
        <div class="option">N/A</div>
        @endif
    </div>
    <hr>
    @endforeach
</body>

</html>