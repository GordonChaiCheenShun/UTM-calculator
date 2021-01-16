@extends('layouts.app')

@section('content')
    <h3>Student List</h3>
    @if(count($list)>0)
        @foreach($list as $post)
            <div class='well'>
                <table width="100%" border="2" >
                    <tr><td>ID</td><td>Student name</td><td>Matric no</td><td>Project name</td><td>Created at</td><td>Action</td></tr>
                    <tbody>
                            <tr>
                                <td><p>{{$post->id}}</p></td>
                                <td><p>{{$post->student_name}}</p></td>
                                <td><p>{{$post->matric_no}}</p></td>
                                <td> <p>{{$post->Project_name}}</p></td>
                                <td><p>Written on {{$post->created_at}}</p></td>
                                <td><p><a class="btn btn-primary" href="/view" role="button">View</a><a class="btn btn-primary" href="/edit" role="button">Edit</a><a class="btn btn-primary" href="/delete" role="button">Delete</a></p></td>
                            </tr>
                    </tbody>
                </table>
            </div>
        @endforeach
        {{$list->links()}}
    @else
        <p>No Data Found</p>
    @endif
@endsection