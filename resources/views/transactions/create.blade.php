@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4 fw-bold">新增交易紀錄</h1>

    <form action="{{ route('transactions.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="date" class="form-label">日期</label>
            <input type="date" name="date" class="form-control" value="{{ old('date') }}" required>
        </div>

        <div class="mb-3">
            <label for="amount" class="form-label">金額</label>
            <input type="number" name="amount" step="0.01" class="form-control" value="{{ old('amount') }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">說明</label>
            <input type="text" name="description" class="form-control" value="{{ old('description') }}">
        </div>

        <div class="mb-3">
            <label for="project_id" class="form-label">所屬專案</label>
            <select name="project_id" class="form-select">
                <option value="">請選擇</option>
                @foreach ($projects as $project)
                    <option value="{{ $project->id }}" {{ old('project_id') == $project->id ? 'selected' : '' }}>
                        {{ $project->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary mt-2">儲存</button>
        <a href="{{ route('transactions.index') }}" class="btn btn-secondary mt-2">返回</a>
    </form>
</div>
@endsection
