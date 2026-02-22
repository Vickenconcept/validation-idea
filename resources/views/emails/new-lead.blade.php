<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New lead</title>
</head>
<body>
    <h2>New lead submission</h2>
    <p><strong>Email:</strong> {{ $lead->email }}</p>
    <p><strong>Business size:</strong> {{ $lead->business_size }}</p>
    <p><strong>How they quote jobs today:</strong></p>
    <p>{{ $lead->quoting_method }}</p>
    <p><strong>Would pay $50–$100/month?</strong> {{ $lead->willingness_to_pay }}</p>
    <p><em>Submitted at {{ $lead->created_at->toDateTimeString() }}</em></p>
</body>
</html>
