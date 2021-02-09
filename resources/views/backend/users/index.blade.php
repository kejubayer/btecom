@extends('layouts.backend')

@section('main')
    <div style="margin-left: 300px; margin-top: 50px; padding-right: 300px">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $key=>$user)
            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
        {{ $users->links('pagination::bootstrap-4') }}
    </div>
@endsection
