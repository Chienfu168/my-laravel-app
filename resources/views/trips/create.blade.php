@extends('layouts.app')

@section('content')
<div class="container">
    <h1>新增出差紀錄</h1>
    <form action="{{ route('trips.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="date" class="form-label">日期</label>
            <input type="date" name="date" id="date" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="person" class="form-label">人員</label>
            <input type="text" name="person" id="person" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">說明</label>
            <input type="text" name="description" id="description" class="form-control">
        </div>
        <div class="mb-3">
            <label for="amount" class="form-label">費用</label>
            <input type="number" step="0.01" name="amount" id="amount" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">儲存</button>
    </form>
</div>
@endsection