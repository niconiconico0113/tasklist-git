@extends('layouts.app')

@section('content')

<h1>id = {{ $task->id }} のタスク内容詳細ページ</h1>

    <table class="table table-bordered">
        {!! link_to_route('task.edit', 'この内容を編集', ['id' => $task->id], ['class' => 'btn btn-primary']) !!}
        {!! Form::model($task, ['route' => ['task.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@endsection