@extends('layouts.app')

@section('content')
<div class="container">
    <h1>編輯專案</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>請修正以下錯誤：</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('projects.update', $project->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">專案名稱</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $project->name) }}" required>
        </div>
        <div class="form-group">
            <label for="budget">預算（元）</label>
            <input type="number" step="0.01" name="budget" class="form-control" value="{{ old('budget', $project->budget ?? '') }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">說明</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{ old('description', $project->description) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="start_date" class="form-label">開始日期</label>
            <input type="date" class="form-control" id="start_date" name="start_date" value="{{ old('start_date', $project->start_date) }}">
        </div>

        <div class="mb-3">
            <label for="end_date" class="form-label">結束日期</label>
            <input type="date" class="form-control" id="end_date" name="end_date" value="{{ old('end_date', $project->end_date) }}">
        </div>

        <button type="submit" class="btn btn-primary">更新</button>
        <a href="{{ route('projects.index') }}" class="btn btn-secondary">取消</a>
    </form>
</div>
@endsection
