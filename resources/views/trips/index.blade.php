@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4 fw-bold">出差記錄一覽表</h1>

    <a href="{{ route('trips.create') }}" class="btn btn-primary mb-3">新增出差紀錄</a>
    <table class="table table-bordered table-striped">
        <thead class="table-dark text-center">
            <tr>
                <th>日期</th>
                <th>人員</th>
                <th>說明</th>
                <th>費用</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            @foreach($trips as $trip)
                <tr>
                    <td>{{ \Carbon\Carbon::parse($trip->date)->format('Y-m-d') }}</td>
                    <td>{{ $trip->person }}</td>
                    <td>{{ $trip->description }}</td>
                    <td>${{ number_format($trip->amount, 2) }}</td>
                    <td>
                        <a href="{{ route('trips.show', $trip) }}" class="btn btn-info btn-sm">檢視</a>
                        <a href="{{ route('trips.edit', $trip) }}" class="btn btn-warning btn-sm">編輯</a>
                        <form action="{{ route('trips.destroy', $trip) }}" method="POST" style="display:inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('確定要刪除？')">刪除</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection