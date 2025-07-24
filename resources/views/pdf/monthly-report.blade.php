<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; }
        h2 { text-align: center; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #333; padding: 8px; text-align: left; }
    </style>
</head>
<body>
    <h2>{{ $title }}</h2>
    <p>產出日期：{{ $date }}</p>

    <table>
        <thead>
            <tr>
                <th>來源</th>
                <th>項目</th>
                <th>金額</th>
                <th>日期</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
            <tr>
                <td>{{ $item['來源'] }}</td>
                <td>{{ $item['項目'] }}</td>
                <td>{{ number_format($item['金額'], 0) }}</td>
                <td>{{ $item['日期'] }}</td>
            </tr>
            @endforeach
            <tr>
                <td colspan="2"><strong>合計</strong></td>
                <td colspan="2"><strong>{{ number_format($total, 0) }}</strong></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
