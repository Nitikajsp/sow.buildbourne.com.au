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
    <pre>{{ json_encode($workData, JSON_PRETTY_PRINT) }}</pre>
    <p>Thank you.</p>
</body>

</html>