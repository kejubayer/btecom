@extends('layouts.backend')

@section('main')
    <h3 class="text-center">Edit Product</h3>
    <form action="{{route('admin.product.edit',$product->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$product->name}}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" name="price" class="form-control" id="price" value="{{$product->price}}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description"  cols="30" rows="5"  class="form-control" id="description">{{$product->description}}</textarea>
        </div>
        <div class="mb-3">
            <label for="photo" class="form-label">Product Photo</label>
            <input type="file" class="form-control" id="photo" name="photo">
            <img class="mt-2" src="{{asset("assets/uploads/".$product->photo)}}" alt="" style="height: 200px">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
