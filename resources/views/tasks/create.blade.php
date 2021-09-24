@extends('layouts.app')

@section('title', 'CreateTask')

@section('content')
    <form class="mb-4" method="post" action="{{ route('task.store') }}">
        @csrf
        <div class="form-group">
            <label for="exampleInputTitle1">Title</label>
            <input type="text" class="form-control" id="exampleInputTitle1" placeholder="Enter Your Title" name="title">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="4" cols="20"></textarea>
        </div>
        <div class="form-group">
            <select class="form-select" name="user">
                @foreach($users as $user)
                    <option value="{{ $user->id }}"> {{ $user->name }} </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
