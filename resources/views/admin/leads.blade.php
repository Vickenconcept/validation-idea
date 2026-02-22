<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin – Leads</title>
    <style>
        body { font-family: ui-sans-serif, system-ui, sans-serif; line-height: 1.5; color: #1b1b18; background: #f8fafc; margin: 0; padding: 2rem; }
        .container { max-width: 56rem; margin: 0 auto; }
        h1 { font-size: 1.5rem; font-weight: 600; margin: 0 0 1rem; }
        a { color: #2563eb; }
        table { width: 100%; border-collapse: collapse; background: #fff; border: 1px solid #e2e8f0; border-radius: 0.25rem; overflow: hidden; }
        th, td { padding: 0.75rem 1rem; text-align: left; border-bottom: 1px solid #e2e8f0; }
        th { background: #f1f5f9; font-weight: 600; font-size: 0.875rem; }
        td { font-size: 0.875rem; }
        tr:last-child td { border-bottom: 0; }
        .quoting { max-width: 16rem; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Leads</h1>
        <p><a href="{{ url('/') }}">← Back to landing</a></p>

        @if ($leads->isEmpty())
            <p>No leads yet.</p>
        @else
            <table>
                <thead>
                    <tr>
                        <th>Email</th>
                        <th>Business Size</th>
                        <th>Quoting Method</th>
                        <th>Willing to Pay</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($leads as $lead)
                        <tr>
                            <td>{{ $lead->email }}</td>
                            <td>{{ $lead->business_size }}</td>
                            <td class="quoting" title="{{ $lead->quoting_method }}">{{ $lead->quoting_method }}</td>
                            <td>{{ $lead->willingness_to_pay }}</td>
                            <td>{{ $lead->created_at->format('Y-m-d H:i') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</body>
</html>
