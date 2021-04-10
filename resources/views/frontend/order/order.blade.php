@extends('layouts.frontend')

@section('main')
    <div style="padding: 0 200px">
        <form action="{{route('submit.order')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name"
                       placeholder="Jon Doe" value="{{old('name')}}">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone"
                       placeholder="+8801700000000" value="{{old('phone')}}">
                @error('phone')
                    <div class=" alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email"
               placeholder="name@example.com" value="{{old('email')}}">
                @error('email')
            <div class=" alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
    <div class="mb-3">
        <label for="address" class="form-label">Delivery Address</label>
        <textarea class="form-control @error('address') is-invalid @enderror" name="address" id="address"
                  rows="3">{{old('address')}}</textarea>
        @error('address')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="method" class="form-label">Payment Method</label>
        <select name="method" id="" class="form-control @error('method') is-invalid @enderror">
            <option value="bkash">Bkash</option>
            <option value="rocket">Rocket</option>
            <option value="nogod">Nogod</option>
        </select>
        @error('method')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="txn_id" class="form-label">Txn ID</label>
        <input type="text" name="txn_id" class="form-control @error('txn_id') is-invalid @enderror" id="txn_id"
               placeholder="Your Payments Transaction ID" value="{{old('txn_id')}}">
                @error('txn_id')
            <div class=" alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
    <div class="md-3" style="margin: 20px 0px">
        <button class="btn btn-success">Submit Order</button>
    </div>
    </form>
    </div>

@endsection
