@extends('Layout.main')

@section('title', 'Edit Blog')
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
    @error("messages")
    <span>{{ $messages }}</span>
    @enderror
    <h1 style="text-align:center">Edit Blog</h1>
    <form action="{{ url("blog/update")}}" method="POST">
        @csrf 
        {{-- untuk token, biar ga sembarang nerima form dr orang lain --}}
        <div class="mb-3">
          <label for="title">Title</label>
          <input value="{{$blog->title}}" class="form-control" id="title" name="title" placeholder="Masukkan Judul">
        </div>
        <div class="mb-3">
            <label for="description">Content</label>
            <input value="{{$blog->description}}" class="form-control" id="description" name="description" placeholder="Masukkan Content">
          </div>
          <div class="mb-3">
            <label for="description">Nama</label>
            <input value="{{$blog->name}}" class="form-control" id="name" name="name" placeholder="Masukkan Namamu">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    
@endsection