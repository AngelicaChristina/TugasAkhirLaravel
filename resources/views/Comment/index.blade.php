@extends('Layout.main')

@section('title', 'Comment')
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
<a class="btn btn-primary" href="{{ url ('component/create')}}">Login</a>
@endsection


    @section('content')
    <h1 style="text-align:center">Content</h1>

    <table class="table" style="text-align:left">
        {{-- <thead>
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th>Nama User</th>
            </tr>
            
        </thead> --}}

        <tbody>
        @foreach ($data as $comments)
        <tr>
            <th>Title</th>
           <td>{{$comments->title}}</td>
        </tr>

        <tr>
            <th>Content</th>
           <td>{{$comments->description}}</td>
        </tr>

           <tr>
            <th>Nama User</th>
           <td>{{$comments->name}}</td>
           </tr>

        @endforeach
        </tbody>
    </table>

    <div>
        <label for="comment" >Comment</label>
        </div>
        <div>
        {{-- <input type="text" class="form-control" id="commentt" name="commentt" placeholder="Masukkan Comment"> --}}
        <textarea id="comment" name="comment" required></textarea>
        </div>
        
      
      <button type="submit" class="btn btn-primary">Submit</button>
      


@endsection