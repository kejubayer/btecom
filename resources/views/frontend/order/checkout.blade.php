@extends('layouts.frontend')

@section('main')
    <div class="container">

        <table class="table">
            <thead>
            <tr>
                <th scope="col">Product Name</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total Price</th>
            </tr>
            </thead>
            <tbody>
            @php
                $total_price = 0;
    $total_qty = 0;
            @endphp

            @foreach($carts as $cart)
                <tr>
                    <td>{{$cart['title']}}</td>
                    <td>{{$cart['price']}}</td>
                    <td>{{$cart['quantity']}}</td>
                    <td>{{$cart['quantity']*$cart['price']}}</td>
                </tr>
                @php
                    $total_price +=$cart['quantity']*$cart['price'];
                    $total_qty += $cart['quantity']
                @endphp
            @endforeach
            <tr>
                <td></td>
                <td>Total</td>
                <td>{{$total_qty}}</td>
                <td>৳{{$total_price}}</td>
            </tr>
            </tbody>
        </table>
        @if($total_qty>0)
            <a class="btn btn-success btn-block" href="{{route('place_order')}}">Place Order</a>
        @else
            <a class="btn btn-warning btn-block">No Product Added. Please add Product</a>
        @endif
    </div>

@endsection
