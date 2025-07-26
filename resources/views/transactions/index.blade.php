@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4 fw-bold">交易紀錄列表</h1>

    <a href="{{ route('transactions.create') }}" class="btn btn-primary float-end mb-3">新增交易紀錄</a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark text-center">
            <tr>
                <th>#</th>
                <th>日期</th>
                <th>金額</th>
                <th>說明</th>
                <th>所屬專案</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transactions as $index => $transaction)
                <tr>
                    <td class="text-center">{{ $index + 1 }}</td>
                    <td>{{ $transaction->date }}</td>
                    <td>${{ number_format($transaction->amount, 2) }}</td>
                    <td>{{ $transaction->description }}</td>
                    <td>{{ $transaction->project->name ?? '-' }}</td>
                    <td class="text-center">
                        <a href="{{ route('transactions.show', $transaction) }}" class="btn btn-info btn-sm">檢視</a>
                        <a href="{{ route('transactions.edit', $transaction) }}" class="btn btn-warning btn-sm">編輯</a>
                        <form action="{{ route('transactions.destroy', $transaction) }}" method="POST" class="d-inline" onsubmit="return confirm('確定要刪除嗎？');">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">刪除</button>
                        </form>
                    </td>
                </tr>
            @endforeach

            @if ($transactions->isEmpty())
                <tr>
                    <td colspan="6" class="text-center">尚無資料</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection
