<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\{Response, Request};
use \App\Models\Task;

Route::get('/', function () {
    return redirect()->route('tasks.index');
})->name('tasks.index');

Route::get('/tasks', function () {
    return view('index', [
        'tasks' => Task::latest()->where('completed', true)->get()
    ]);
})->name('tasks.index');

Route::view('/tasks/create', 'create')->name('tasks.create');

Route::post('/tasks/store', function (Request $request) {
    dd($request->all());
})->name('tasks.store');

Route::get('/tasks/{id}', function ($id) {
    return view('show', [
        'task' => Task::findOrFail($id)
    ]);
})->name('tasks.show');