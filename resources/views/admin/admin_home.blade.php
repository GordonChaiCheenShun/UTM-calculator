@extends('layouts.app')

@section('content')
        <h1>{{$title}}</h1>
        @if(count($admin)> 0)
            <ul class="list-group">
                @foreach($admin as $admin)
                    <li class ="list-group-item">{{$admin}}</li>
                @endforeach
            </ul>
        @endif
@endsection
