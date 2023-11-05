@extends('Layout.main')

@section('title', 'List Blog')
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
@section('headers')
<a class="btn btn-primary" href="{{ url ('blog/create')}}">Login</a>
@endsection


    @section('content')
    <h1 style="text-align:center">List Blog</h1>
    <a class="btn btn-primary" href="{{ url ('blog/create')}}">Tambah Blog</a>

    <table class="table" style="text-align:center">
        <thead>
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th>Nama User</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($data as $blogs)
        <tr>
           <td>{{$blogs->title}}</td>
           <td>{{$blogs->description}}</td>
           <td>{{$blogs->name}}</td>
           <td><a class="btn btn-info" href="{{ url('blog/edit/' .$blogs->id)}}">Edit</a>
            <a class="btn btn-danger" href="{{ url('blog/delete/' .$blogs->id)}}">Delete</a>
            {{-- <a class="btn btn-primary" href="{{ url ('blog/comment/'.$blogs->id) }}">Comment</a> --}}
        </td>
        </tr>
        @endforeach
        </tbody>
    </table>

@endsection