@extends('layouts.app')
@section('content')

    <h1>id: {{ $task->id }} のタスク内容編集ページ</h1>
    
        {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}

            <div class="form-geoup">
                {!! Form::label('status', 'ステータス:') !!}
                {!! Form::text('status', null, ['class' => 'form-control']) !!}
            </div>
                    
            <div class="form-group">
                {!! Form::label('content', '内容:') !!}
                {!! Form::text('content', null, ['class' => 'form-control']) !!}
            </div>
            {!! Form::submit('更新', ['class' => 'btn btn-light']) !!}
        
        {!! Form::close() !!}
            </div>


@endsection