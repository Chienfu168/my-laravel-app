@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">編輯零用金紀錄</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('petty-cash.update', $pettyCash->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="date" class="form-label">日期</label>
        <input type="date" name="date" value="{{ old('date', \Carbon\Carbon::parse($pettyCash->date)->format('Y-m-d')) }}" class="form-control">
        </div>

        <div class="mb-3">
            <label for="amount" class="form-label">金額</label>
            <input type="number" name="amount" id="amount" class="form-control" step="0.01" value="{{ old('amount', $pettyCash->amount) }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">說明</label>
            <textarea name="description" id="description" class="form-control" rows="3" required>{{ old('description', $pettyCash->description) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="project_id" class="form-label">所屬專案</label>
            <select name="project_id" id="project_id" class="form-select">
                <option value="">請選擇</option>
                @foreach ($projects as $project)
                    <option value="{{ $project->id }}" {{ old('project_id', $pettyCash->project_id) == $project->id ? 'selected' : '' }}>
                        {{ $project->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="d-flex justify-content-between">
            <a href="{{ route('petty-cash.index') }}" class="btn btn-secondary">取消</a>
            <button type="submit" class="btn btn-success">更新</button>
        </div>
    </form>
</div>
@endsection
