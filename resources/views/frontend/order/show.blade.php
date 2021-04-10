@extends('layouts.frontend')

@section('title')
    Profile
@endsection

@section('main')

    <div class="container">

        <div style="text-align: center">
            <h2>Order NO: {{$order->order_no}}</h2>
            <p><strong>Status:</strong> {{$order->status}}</p>
        </div>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">Product Name</th>
                <th scope="col">Unit Price</th>
                <th scope="col">Qty</th>
                <th scope="col">Total price</th>
            </tr>
            </thead>
            <tbody>


            @foreach($order->order_details as $details)
                <tr>
                    <td>{{$details->product->name}}</td>
                    <td>{{$details->price}}</td>
                    <td>{{$details->qty}}</td>
                    <td>{{$details->qty * $details->price}}</td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>


@endsection
