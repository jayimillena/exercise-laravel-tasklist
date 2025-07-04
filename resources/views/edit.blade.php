@extends('layouts.app')

@section('title', 'Edit Task')

@section('content') 
    <div class="max-w-2xl mx-auto bg-white shadow-md rounded-md p-6">
        <h1 class="text-2xl font-bold text-blue-700 mb-6">Edit Task</h1>

        <form method="POST" action="{{ route('tasks.update', ['task' => $task]) }}" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label for="title" class="block font-semibold text-gray-700">Title</label>
                <input type="text" name="title" id="title"
                       value="{{ old('title', $task->title) }}"
                       class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
                @error('title')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="description" class="block font-semibold text-gray-700">Description</label>
                <textarea name="description" id="description" rows="5"
                          class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">{{ old('description', $task->description) }}</textarea>
                @error('description')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="long_description" class="block font-semibold text-gray-700">Long Description</label>
                <textarea name="long_description" id="long_description" rows="10"
                          class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">{{ old('long_description', $task->long_description) }}</textarea>
                @error('long_description')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <button type="submit"
                        class="px-6 py-2 bg-blue-500 text-white font-semibold rounded-md hover:bg-blue-600 shadow">
                    Update Task
                </button>
            </div>
        </form>
    </div>
@endsection
