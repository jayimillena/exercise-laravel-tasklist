@extends('layouts.app')

@section('title', 'Edit Task')
@section('styles')
    <style>
        .error-message {
            color: red;
            font-size: 0.8em;
        }
    </style>
@endsection

@section('content') 
    <form method="POST" action="{{ route('tasks.update', ['task' => $task]) }}">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title', $task->title) }}">
            @error('title')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="5">{{ old('description', $task->description) }}</textarea>
            @error('description')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>
`
        <div>
            <label for="long_description">Long Description</label>
            <textarea name="long_description" id="long_description" rows="10">{{ old('long_description', $task->long_description) }}</textarea>
            @error('long_description')
                <div class="error-message">{{ $message }}</div> 
            @enderror
        </div>

        <div>
            <button type="submit">Add Tasks</button>
        </div>
    </form>
@endsection