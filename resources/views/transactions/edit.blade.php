@extends('layouts.app')

@section('content')
<div class="container">
    <h1>編輯交易</h1>

    <form action="{{ route('transactions.update', $transaction) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>日期</label>
            <input type="date" name="date" class="form-control" value="{{ old('date', $transaction->date) }}" required>
        </div>

        <div class="form-group">
            <label>金額</label>
            <input type="number" name="amount" step="0.01" class="form-control" value="{{ old('amount', $transaction->amount) }}" required>
        </div>

        <div class="form-group">
            <label>說明</label>
            <input type="text" name="description" class="form-control" value="{{ old('description', $transaction->description) }}">
        </div>

        <button type="submit" class="btn btn-primary mt-2">更新</button>
        <a href="{{ route('transactions.index') }}" class="btn btn-secondary mt-2">返回</a>
    </form>
</div>
@endsection
