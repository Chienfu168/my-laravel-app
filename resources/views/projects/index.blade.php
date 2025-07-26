@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4 fw-bold">專案列表</h2>

    <a href="{{ route('projects.create') }}" class="btn btn-success mb-3">新增專案</a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark text-center">
            <tr>
                <th>專案名稱</th>
                <th>預算</th>
                <th>開始日期</th>
                <th>結束日期</th>
                <th>交易支出</th>
                <th>零用金支出</th>
                <th>總支出</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->name }}</td>
                    <td>${{ number_format($project->budget, 2) }}</td>
                    <td>{{ $project->start_date }}</td>
                    <td>{{ $project->end_date }}</td>
                    <td>${{ number_format($project->transactions_sum_amount, 2) }}</td>
                    <td>${{ number_format($project->petty_cashes_sum_amount, 2) }}</td>
                    <td>
                        ${{ number_format(
                            ($project->transactions_sum_amount ?? 0) +
                            ($project->petty_cashes_sum_amount ?? 0), 2
                        ) }}
                    </td>
                    <td>
                        <a href="{{ route('projects.show', $project) }}" class="btn btn-info btn-sm">檢視</a>
                        <a href="{{ route('projects.edit', $project) }}" class="btn btn-primary btn-sm">編輯</a>
                        <form action="{{ route('projects.destroy', $project) }}" method="POST" class="d-inline" onsubmit="return confirm('確定要刪除嗎？')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">刪除</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
