@extends('layouts.app')

@section('title', 'Users')

@section('content')
    @if(session('name'))
        <div class="alert alert-success"> Hello {{ session('name') }} </div>
    @endif

    <a href="{{ route('user.create') }}" class="btn btn-primary mt-4">Create User</a>
    <ul class="mt-4">
        @foreach($users as $user)
            <li> {{ $user->name }} (<a href=""> {{ $user->email }} </a>)</li>
        @endforeach
    </ul>
@endsection
