@extends('layouts.app')

@section('title', $task->title)
@section('content')
    <a href="{{ route('tasks.edit', $task->id) }}">Edit</a>
    <p>{{ $task->description }}</p>

    @if ($task->long_description)
        <p>{{ $task->long_description }}</p>
    @endif

    <p>{{ $task->created_at }}</p>
    <p>{{ $task->updated_at }}</p>    
@endsection