@extends('layouts.frontend')

@section('title')
    Profile
@endsection

@section('main')

    <div class="container">

        <div style="text-align: center">
            <h2>Name: {{auth()->user()->name}}</h2>
            <p><strong>Email:</strong> {{$user->email}}</p>
        </div>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">Order No</th>
                <th scope="col">Total Price</th>
                <th scope="col">Payment Method</th>
                <th scope="col">Txn ID</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>


            @foreach($orders as $order)
                <tr>
                    <td>{{$order->order_no}}</td>
                    <td>{{$order->price}}</td>
                    <td>{{$order->method}}</td>
                    <td>{{$order->txn_id}}</td>
                    <td>{{$order->status}}</td>
                    <td>
                        <a href="{{route('user.order.show',$order->id)}}" class="btn btn-primary">Show</a>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>


@endsection
