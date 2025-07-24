@extends('layouts.app')

@section('content')
<div class="container">
    <h1>交易紀錄</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('transactions.create') }}" class="btn btn-primary mb-3">新增交易</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>日期</th>
                <th>金額</th>
                <th>說明</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transactions as $transaction)
                <tr>
                    <td>{{ $transaction->date }}</td>
                    <td>{{ $transaction->amount }}</td>
                    <td>{{ $transaction->description }}</td>
                    <td>
                        <a href="{{ route('transactions.show', $transaction) }}" class="btn btn-info btn-sm">查看</a>
                        <a href="{{ route('transactions.edit', $transaction) }}" class="btn btn-warning btn-sm">編輯</a>
                        <form action="{{ route('transactions.destroy', $transaction) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('確認刪除？')">刪除</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $transactions->links() }}
</div>
@endsection
