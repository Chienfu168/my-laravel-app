@extends('layouts.app')

@section('content')
<div class="container">
    <h1>出差紀錄詳情</h1>
    <ul class="list-group">
        <li class="list-group-item"><strong>日期：</strong> {{ $trip->date }}</li>
        <li class="list-group-item"><strong>人員：</strong> {{ $trip->person }}</li>
        <li class="list-group-item"><strong>說明：</strong> {{ $trip->description }}</li>
        <li class="list-group-item"><strong>費用：</strong> ${{ number_format($trip->amount, 2) }}</li>
    </ul>
    <a href="{{ route('trips.index') }}" class="btn btn-secondary mt-3">返回</a>
</div>
@endsection