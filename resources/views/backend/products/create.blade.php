@extends('layouts.backend')

@section('main')
    <h3 class="text-center">Create New Product</h3>
    <form action="{{route('admin.product.create')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="name" name="name" value="">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" name="price" class="form-control" id="price" value="">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description"  cols="30" rows="5"  class="form-control" id="description"></textarea>
        </div>
        <div class="mb-3">
            <label for="photo" class="form-label">Product Photo</label>
            <input type="file" class="form-control" id="photo" name="photo">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
