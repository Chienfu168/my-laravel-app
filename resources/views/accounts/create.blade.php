@extends('layouts.app')

@section('content')
<div class="container">
    <h1>新增銀行帳戶</h1>

    <form action="{{ route('accounts.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">帳戶名稱</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="account_number" class="form-label">帳號</label>
            <input type="text" name="account_number" id="account_number" class="form-control">
        </div>

        <div class="mb-3">
            <label for="bank" class="form-label">銀行名稱</label>
            <input type="text" name="bank" id="bank" class="form-control">
        </div>

        <div class="mb-3">
            <label for="balance" class="form-label">初始餘額</label>
            <input type="number" step="0.01" name="balance" id="balance" class="form-control" value="0">
        </div>

        <div class="mb-3">
            <label for="note" class="form-label">備註</label>
            <textarea name="note" id="note" class="form-control" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">儲存</button>
        <a href="{{ route('accounts.index') }}" class="btn btn-secondary">取消</a>
    </form>
</div>
@endsection
