@extends('layouts.app')

@section('title', $task->title)
@section('content')
    <p>{{ $task->description }}</p>

    @if ($task->long_description)
        <p>{{ $task->long_description }}</p>
    @endif

    <div>
        <form action="{{ route('tasks.toggle-complete', ['task' => $task]) }}" method="POST">
            @csrf
            @method('PUT')
            <button type="submit">{{ $task->completed ? 'Mark as Incomplete' : 'Mark as Complete' }}</button>
        </form>
    </div>

    <p>{{ $task->created_at }}</p>
    <p>{{ $task->updated_at }}</p>    

    <div>
        <a href="{{ route('tasks.edit', ['task' => $task]) }}">Edit</a>
    </div>

    <div>
        <form method="POST" action="{{ route('tasks.destroy', ['task' => $task->id]) }}">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
     </div>
@endsection