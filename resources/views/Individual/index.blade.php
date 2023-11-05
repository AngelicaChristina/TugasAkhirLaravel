@extends('Layout.main')

@section('title', 'Post')
@section('style')

    <style>
        table, 
        th, 
        tr,
        td {
            border: solid black 1px;
            /* text-align: center, */
        }
    </style>
    @endsection 



    @section('content')
    <h1 style="text-align:center">Blog Post</h1>

    <table class="table" style="text-align:center">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Nama User</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($data as $blogs)
        <tr>
           <td>{{$blogs->title}}</td>
           <td>{{$blogs->description}}</td>
           <td>{{$blogs->name}}</td>
        </tr>
        
        @endforeach
        </tbody>
    </table>

    <a class="btn btn-primary" href="{{ url ('individual/comments')}}"> Add Comments</a>

@endsection