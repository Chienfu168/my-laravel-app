@extends('layouts.app')

@section('content')
<div class="container">
    <h1>帳戶管理</h1>

    <a href="{{ route('accounts.create') }}" class="btn btn-primary mb-3">新增帳戶</a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($accounts->count())
        <table class="table table-bordered table-hover">
            <thead class="table-light">
                <tr>
                    <th>名稱</th>
                    <th>銀行</th>
                    <th>帳號</th>
                    <th>餘額</th>
                    <th>動作</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($accounts as $account)
                    <tr>
                        <td>{{ $account->name }}</td>
                        <td>{{ $account->bank }}</td>
                        <td>{{ $account->account_number }}</td>
                        <td>${{ number_format($account->balance, 2) }}</td>
                        <td>
                            <a href="{{ route('accounts.show', $account->id) }}" class="btn btn-sm btn-info">查看</a>
                            <a href="{{ route('accounts.edit', $account->id) }}" class="btn btn-sm btn-warning">編輯</a>
                            <form action="{{ route('accounts.destroy', $account->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('確定要刪除這個帳戶嗎？')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">刪除</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>目前尚無帳戶資料。</p>
    @endif
</div>
@endsection
