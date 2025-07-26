@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4 fw-bold">零用金紀錄列表</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="mb-3 text-end">
        <a href="{{ route('petty-cash.create') }}" class="btn btn-primary">新增零用金紀錄</a>
    </div>

    @if($pettyCashList->isEmpty())
        <p>目前尚無資料。</p>
    @else
    <div class="table-responsive">
    <table class="table table-bordered table-striped">
        <thead class="table-dark text-center">
                <tr>
                    <th>#</th>
                    <th>日期</th>
                    <th>金額</th>
                    <th>說明</th>
                    <th>所屬專案</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pettyCashList as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->date }}</td>
                    <td>${{ number_format($item->amount, 2) }}</td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->project->name ?? '－' }}</td>
                    <td>
                        <a href="{{ route('petty-cash.edit', $item->id) }}" class="btn btn-sm btn-warning">編輯</a>
                        <form action="{{ route('petty-cash.destroy', $item->id) }}" method="POST" class="d-inline"
                              onsubmit="return confirm('確定要刪除這筆紀錄嗎？');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">刪除</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
</div>
@endsection
