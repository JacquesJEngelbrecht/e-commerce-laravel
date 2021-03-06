@extends('master')
@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-sm-4 mr-sm-4">   
            <form action="/register" method="POST">@csrf
            <div class="form-group">
                <label for="user_name">User Name</label>
                <input type="text" name="user_name" class="form-control" id="user_name" placeholder="User Name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
</div>

@endsection