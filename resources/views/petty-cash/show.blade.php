@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">零用金紀錄明細</h2>

    <div class="card">
        <div class="card-body">

            <p><strong>日期：</strong> {{ $pettyCash->date }}</p>
            <p><strong>金額：</strong> NT${{ number_format($pettyCash->amount, 2) }}</p>
            <p><strong>說明：</strong> {{ $pettyCash->description }}</p>
            <p><strong>所屬專案：</strong> {{ $pettyCash->project?->name ?? '無' }}</p>
            <p><strong>建立時間：</strong> {{ $pettyCash->created_at->format('Y-m-d H:i') }}</p>
            <p><strong>最後更新：</strong> {{ $pettyCash->updated_at->format('Y-m-d H:i') }}</p>

        </div>
    </div>

    <div class="mt-4 d-flex justify-content-between">
        <a href="{{ route('petty-cash.index') }}" class="btn btn-secondary">返回列表</a>
        <a href="{{ route('petty-cash.edit', $pettyCash->id) }}" class="btn btn-primary">編輯</a>
    </div>
</div>
@endsection
