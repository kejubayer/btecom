@extends('layouts.backend')

@section('main')
<h1>Order List</h1>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>#</th>
                <th scope="col">Order No</th>
                <th scope="col">Total Price</th>
                <th scope="col">Payment Method</th>
                <th scope="col">Txn ID</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $key=>$order)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$order->order_no}}</td>
                <td>{{$order->price}}</td>
                <td>{{$order->method}}</td>
                <td>{{$order->txn_id}}</td>
                <td>{{$order->status}}</td>
                <td>
                    <a href="{{route('admin.order.show',$order->id)}}" class="btn btn-primary">Show</a>
                </td>

            </tr>
            @endforeach
            </tbody>
        </table>
        {{$orders->links('pagination::bootstrap-4')}}
    </div>
@endsection
