<ul class="media-list">
    @foreach ($tasks as $task)
        <li class="media mb-3">
            <img class="media-object rounded" src="{{ Gravatar::src($user->email, 50) }}" alt="">
            <div class="media-body ml-3">
                <div>
                    {!! link_to_route('users.show', $task->user->name, ['id' => $task->user->id]) !!} <span class="text-muted">posted at {{ $micropost->created_at }}</span>
                </div>
                <div>
                    <p>{!! nl2br(e($task->content)) !!}</p>
                </div>
                <div>
                    @if (Auth::id() == $task->user_id)
                        {!! Form::submit('Delete',['class' => 'btn-danger btn-sm']) !!}
                </div>
            </div>
        </li>
    @endforeach
</ul>
{{ $tasks->render('pagination::bootstrap-4') }}