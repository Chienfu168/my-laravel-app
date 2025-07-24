<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ $title }}</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #000; padding: 6px; text-align: left; }
    </style>
</head>
<body>
    <h2>{{ $title }}</h2>
    <p>日期：{{ $date }}</p>
    <table>
        <thead>
            <tr>
                <th>項目</th>
                <th>金額</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <td>{{ $item['項目'] }}</td>
                    <td>{{ $item['金額'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
