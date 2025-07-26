@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4 fw-bold">交易詳細資訊</h1>

    <div class="card">
        <div class="card-body">
            <p><strong>日期：</strong> {{ $transaction->date }}</p>
            <p><strong>金額：</strong> {{ number_format($transaction->amount, 2) }} 元</p>
            <p><strong>說明：</strong> {{ $transaction->description }}</p>
            <p><strong>所屬專案：</strong> {{ $transaction->project?->name ?? '無' }}</p>
        </div>
    </div>

    <a href="{{ route('transactions.index') }}" class="btn btn-secondary mt-3">返回列表</a>
</div>
@endsection
