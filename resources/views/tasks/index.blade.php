<!-- resources/views/tasks/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Daftar Tugas</h1>

    <ul class="task-list">
        @foreach ($tasks as $task)
            <li class="task-item">
                <h3 class="task-title">{{ $task->title }}</h3>
                <p class="task-description">{{ $task->description }}</p>
            </li>
        @endforeach
    </ul>
@endsection
