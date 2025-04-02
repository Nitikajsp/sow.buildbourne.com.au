<!DOCTYPE html>
<html>

<head>
    <title>New Site Work Submitted</title>
</head>

<body>
    <h2>New Site Work Submitted</h2>
    <p>Dear {{ $party->name }},</p>
    <p>Site work has been successfully submitted.</p>
    <h4>Details:</h4>
    <ul>
        @foreach($workData as $key => $value)
        <li><strong>{{ ucfirst(str_replace('_', ' ', $key)) }}:</strong> {{ is_array($value) ? json_encode($value) : $value }}</li>
        @endforeach
    </ul>
    <p>Thank you.</p>
</body>
    
</html>