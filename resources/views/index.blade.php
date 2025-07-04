@extends('layouts.app')

@section('title', 'The list of tasks')

@section('content')
    <div class="max-w-3xl mx-auto p-6 space-y-6 bg-white shadow-md rounded-md">
        <div class="flex justify-between items-center">
            <h1 class="text-2xl font-bold text-blue-700">Task List</h1>
            <a href="{{ route('tasks.create') }}"
               class="px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded shadow">
                Add Task!
            </a>
        </div>

        <div class="space-y-3">
            @forelse ($tasks as $task)
                <div>
                    <a href="{{ route('tasks.show', ['task' => $task]) }}"
                       class="block px-4 py-2 bg-blue-100 hover:bg-blue-200 text-blue-800 rounded">
                        {{ $task->title }}
                    </a>
                </div>
            @empty
                <div class="text-gray-500 italic">There are no tasks!</div>
            @endforelse
        </div>

        @if ($tasks->count())
            <nav class="mt-4">
                {{ $tasks->links() }}
            </nav>
        @endif
    </div>
@endsection
