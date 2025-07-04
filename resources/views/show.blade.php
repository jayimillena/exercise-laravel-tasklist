@extends('layouts.app')

@section('title', $task->title)

@section('content')
    <div class="max-w-2xl mx-auto bg-white shadow-md rounded-md p-6 space-y-6">
        <h1 class="text-2xl font-bold text-blue-700">{{ $task->title }}</h1>

        <p class="text-gray-700">{{ $task->description }}</p>

        @if ($task->long_description)
            <p class="text-gray-600">{{ $task->long_description }}</p>
        @endif

        <div>
            <form action="{{ route('tasks.toggle-complete', ['task' => $task]) }}" method="POST">
                @csrf
                @method('PUT')
                <button type="submit"
                    class="px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white font-semibold rounded">
                    {{ $task->completed ? 'Mark as Incomplete' : 'Mark as Complete' }}
                </button>
            </form>
        </div>

        <div class="text-sm text-gray-500">
            <p>Created: {{ $task->created_at }}</p>
            <p>Updated: {{ $task->updated_at }}</p>
        </div>

        <div>
            <a href="{{ route('tasks.edit', ['task' => $task]) }}"
                class="inline-block px-4 py-2 bg-blue-100 hover:bg-blue-200 text-blue-700 font-medium rounded">
                Edit
            </a>
        </div>

        <div>
            <form method="POST" action="{{ route('tasks.destroy', ['task' => $task->id]) }}">
                @csrf
                @method('DELETE')
                <button type="submit"
                    class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white font-semibold rounded">
                    Delete
                </button>
            </form>
        </div>
    </div>
@endsection
