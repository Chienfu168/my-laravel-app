@extends('layouts.app')

@section('content')
<div class="container">
    <h1>交易詳情</h1>

    <div class="mb-3">
        <strong>日期：</strong> {{ $transaction->date }}
    </div>
    <div class="mb-3">
        <strong>金額：</strong> {{ $transaction->amount }}
    </div>
    <div class="mb-3">
        <strong>說明：</strong> {{ $transaction->description }}
    </div>

    <a href="{{ route('transactions.index') }}" class="btn btn-secondary">返回</a>
    <a href="{{ route('transactions.edit', $transaction) }}" class="btn btn-warning">編輯</a>
</div>
@endsection
