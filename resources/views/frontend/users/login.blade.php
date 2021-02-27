@extends('layouts.frontend')

@section('title')
    Login
@endsection

@section('main')

    <div class="container">
        <div class="row">
            <div class="com-md-4"></div>
            <div class="com-md-4">
                <div class="mt-4">
                    <h3 class="text-center">Admin Login Form</h3>
                    <form action="{{route('admin.login')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                   aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
