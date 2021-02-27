@extends('layouts.frontend')

@section('title')
    Profile
@endsection

@section('main')

    <div style="text-align: center">
        <h2>Name: {{auth()->user()->name}}</h2>
        <p><strong>Email:</strong> {{$user->email}}</p>
    </div>

@endsection
