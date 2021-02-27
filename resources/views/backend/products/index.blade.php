@extends('layouts.backend')

@section('main')
<h1>Products List</h1>
<a href="{{route('admin.product.create')}}" class="btn btn-primary">Add new product</a>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Photo</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $key=>$product)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->price}} tk</td>
                <td>{{$product->description}}</td>
                <td>
                    <img src="{{asset("assets/uploads/".$product->photo)}}" alt="" style="width: 50px">
                </td>
                <td>
                    <a href="{{route('admin.product.edit',$product->id)}}">edit</a>
                    <a href="">delete</a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        {{$products->links('pagination::bootstrap-4')}}
    </div>
@endsection
