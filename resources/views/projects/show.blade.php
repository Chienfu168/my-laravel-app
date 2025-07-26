@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4 fw-bold">專案詳細資料</h1>

    <div class="card mt-3">
        <div class="card-body">
            <h5 class="card-title">{{ $project->name }}</h5>

            <p class="card-text">
                <strong>說明：</strong><br>
                {{ $project->description ?? '（無說明）' }}
            </p>

            <p class="card-text">
                <strong>開始日期：</strong> {{ $project->start_date ?? '未設定' }}<br>
                <strong>結束日期：</strong> {{ $project->end_date ?? '未設定' }}
            </p>
        </div>
    </div>

    <div class="mt-4">
        <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-primary">編輯</a>
        <a href="{{ route('projects.index') }}" class="btn btn-secondary">返回列表</a>
    </div>
</div>
@endsection
