@extends('layouts.app')

@section('content')
<div class="container">
    <h1>專案列表</h1>

    <div class="mb-3">
        <a href="{{ route('projects.create') }}" class="btn btn-success">新增專案</a>
    </div>

    @if($projects->count())
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>專案名稱</th>
                    <th>開始日期</th>
                    <th>結束日期</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                @foreach($projects as $project)
                    <tr>
                        <td>{{ $project->name }}</td>
                        <td>{{ $project->start_date ?? '未設定' }}</td>
                        <td>{{ $project->end_date ?? '未設定' }}</td>
                        <td>
                            <a href="{{ route('projects.show', $project->id) }}" class="btn btn-info btn-sm">檢視</a>
                            <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-primary btn-sm">編輯</a>
                            <form action="{{ route('projects.destroy', $project->id) }}" method="POST" class="d-inline" onsubmit="return confirm('確定要刪除這個專案嗎？');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">刪除</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>目前尚無專案資料。</p>
    @endif
</div>
@endsection
