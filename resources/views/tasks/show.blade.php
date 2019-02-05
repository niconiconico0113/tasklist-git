@extends('layouts.app')

@section('content')

<h1>id = {{ $task->id }} のタスク内容詳細ページ</h1>

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>ステータス</th>
            <td>{{ $task->status }}</td>
        </tr>
        <tr>
            <tr>メッセージ</tr>
            <td>{{ $task->content }}</td>
         </tr>
        
@endsection