<!-- resources/views/tasks/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Daftar Tugas</h1>

    <ul>
        @foreach ($tasks as $task)
            <li>{{ $task->title }} - {{ $task->description }}</li>
        @endforeach
    </ul>
@endsection
