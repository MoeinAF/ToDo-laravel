@extends('layouts.app')

@section('title', 'Tasks')

@section('content')

    <a href="{{ route('task.create') }}" class="btn btn-primary mt-4">Create Task</a>
    <ul class="mt-4">
        @foreach($tasks as $task)
            <li> {{ $users->find($task->user_id)->name }} : {{ $task->description }} </li>
        @endforeach
    </ul>
@endsection
