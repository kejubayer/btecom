@extends('layouts.backend')

@section('main')
    <div style="margin-left: 300px; margin-top: 50px; padding-right: 300px">
        <form action="{{route('admin.profile')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{auth()->user()->name}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{auth()->user()->email}}" readonly>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{auth()->user()->phone}}">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <textarea name="address"  cols="30" rows="10"  class="form-control" id="address">{{auth()->user()->address}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
