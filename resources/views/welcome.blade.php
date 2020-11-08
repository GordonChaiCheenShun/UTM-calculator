@extends('layouts.app1')

@section('content')
    <br><br><br><br><br>
    <div class="jumbotron text-center">
        <h1>Welcome To UTM Calculator</h1>
        <p>This is an application to calculate user-performance for University Teknologi Malaysia</p>
        <p><a class="btn btn-primary btn-lg" href="{{ route('login') }}" role="button">Login</a> <a class="btn btn-success btn-lg" href="{{ url('/registration') }}" role="button">Register</a></p>
    </div>
@endsection
