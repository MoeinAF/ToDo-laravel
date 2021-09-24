@extends('layouts.app')

@section('content')
    <form class="mb-4" method="post" action="{{ route('user.store') }}">
        @csrf
        <div class="form-group">
            <label for="exampleInputName1">Your Name</label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="Enter Your Name" name="name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
