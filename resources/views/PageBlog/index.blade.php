@extends('Layout.main')

@section('title', 'Page Blog')
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
    <h1 style="text-align:center">Page Blog</h1>

    <table class="table" style="text-align:center">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($data as $page_blogs)
        <tr>
           <td>{{$page_blogs->title}}</td>
           <td>{{$page_blogs->author}}</td>
           <td>{{$page_blogs->created_at}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>

    <a class="btn btn-primary" href="{{ url ('blog')}}" >List Blog</a>
    <a class="btn btn-primary" href="{{ url ('comment')}}" >Comment</a>

@endsection