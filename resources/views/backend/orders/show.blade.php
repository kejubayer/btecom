@extends('layouts.backend')

@section('title')
    Order
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

        <form action="{{route('admin.order.status',$order->id)}}" method="post">
            @csrf
            <div class="row form-group">
                <div class="com-md-3">
                    <label for="">Change Status</label>
                </div>
                <div class="com-md-5">
                    <select name="status" id="" class="form-control">
                        <option value="pending" @if($order->status == 'pending') selected @endif>Pending</option>
                        <option value="confirm" @if($order->status == 'confirm') selected @endif>Confirm</option>
                        <option value="reject" @if($order->status == 'reject') selected @endif>Reject</option>
                        <option value="complete" @if($order->status == 'complete') selected @endif>Complete</option>
                    </select>
                </div>
                <div class="com-md-2">
                    <button class="btn btn-success">Submit</button>
                </div>
            </div>
        </form>
    </div>


@endsection
