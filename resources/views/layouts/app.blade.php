<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    
    @vite('resources/css/app.css') {{-- TailwindCSS via Vite --}}
    @yield('styles')
</head>
<body class="bg-gray-50 text-gray-900">
    <div class="container mx-auto p-6">
        {{-- Navigation --}}
        <nav class="mb-6">
            <ul class="flex space-x-4 font-medium">
                <li><a href="{{ route('tasks.index') }}" class="text-blue-700 hover:underline">Home</a></li>
                <li><a href="{{ route('tasks.create') }}" class="text-blue-700 hover:underline">Add Task</a></li>
                <li><a href="{{ route('tasks.index') }}" class="text-blue-700 hover:underline">Task List</a></li>
            </ul>
        </nav>

        {{-- Flash Messages --}}
        @if(session()->has('error'))                
            <div class="mb-4 p-4 bg-red-100 text-red-700 border border-red-300 rounded">
                {{ session('error') }}
            </div>
        @endif  
        @if(session()->has('success'))
            <div class="mb-4 p-4 bg-green-100 text-green-700 border border-green-300 rounded">
                {{ session('success') }}
            </div>
        @endif

        {{-- Page Content --}}
        @yield('content')
    </div>
</body>
</html>
