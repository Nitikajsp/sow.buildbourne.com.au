<!DOCTYPE html>
<html>

<head>
    <title>New Site Work Submitted</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 14px;
        }

        h2,
        h4 {
            color: #333;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin: 5px 0;
        }

        strong {
            color: #000;
        }
    </style>
</head>

<body>
    <h2>New Site Work Submitted</h2>
    <p>Dear {{ $party->name }},</p>
    <p>Site work has been successfully submitted.</p>
    <h4>Details:</h4>

    @foreach($workData as $groupName => $groupData)
    @foreach($groupData as $key => $value)
    <ul>
        <li>
            <strong>{{ ucfirst(str_replace('_', ' ', $key)) }}:</strong>
            {{ is_array($value) ? json_encode($value) : $value }}
        </li>
    </ul>
    @endforeach
    @endforeach

    <p>Thank you.</p>
</body>

</html>