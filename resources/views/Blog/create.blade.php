@extends('Layout.main')

@section('title', 'Add Blog')
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
    <h1 style="text-align:center">Create Blog</h1>
    <form action="{{ url("blog/store")}}" method="POST">
        @csrf 
        {{-- untuk token, biar ga sembarang nerima form dr orang lain --}}
        <div class="mb-3">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title" name="title" placeholder="Masukkan Judul">
        </div>
        <div class="mb-3">
            <label for="description">Content</label>
            <input type="text" class="form-control" id="description" name="description" placeholder="Masukkan Content">
          </div>
          <div class="mb-3">
            <label for="description">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Namamu">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    
@endsection