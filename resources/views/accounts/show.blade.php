@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4 fw-bold">帳戶詳細資料</h1>
    

    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">{{ $account->name }}</h5>

            <p class="card-text"><strong>銀行名稱：</strong> {{ $account->bank }}</p>
            <p class="card-text"><strong>帳號：</strong> {{ $account->account_number }}</p>
            <p class="card-text"><strong>餘額：</strong> ${{ number_format($account->balance, 2) }}</p>
            <p class="card-text"><strong>備註：</strong> {{ $account->note }}</p>
            <p class="card-text"><strong>建立時間：</strong> {{ $account->created_at->format('Y-m-d H:i') }}</p>
            <p class="card-text"><strong>最後更新：</strong> {{ $account->updated_at->format('Y-m-d H:i') }}</p>
        </div>
    </div>

    <a href="{{ route('accounts.edit', $account->id) }}" class="btn btn-warning">編輯</a>
    <form action="{{ route('accounts.destroy', $account->id) }}" method="POST" class="d-inline" onsubmit="return confirm('確定要刪除這個帳戶嗎？')">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">刪除</button>
    </form>
    <a href="{{ route('accounts.index') }}" class="btn btn-secondary">返回列表</a>
</div>
@endsection
