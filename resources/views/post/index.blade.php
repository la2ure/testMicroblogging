@extends('layout.app')
@section('title', 'Home Page')
@section('heading', 'All Posts')
@section('link_text', 'Add New Post')
@section('link', '/post/create')

@section('content')

@if(session('message'))
<div class="alert alert-{{ session('status') }} alert-dismissible fade show" role="alert">
  <strong>{{ session('message') }}</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="grid grid-cols-1 sm:grid-cols-3 gap-4 min-h-screen">
  @forelse($posts as $key => $row)
<div class="relative flex flex-col items-center justify-center">
  <div class="relative h-56 w-full mb-3">
      <div >
        <a href="post/{{ $row->id }}">
          <img src="{{ asset('storage/images/'.$row->image) }}" alt="" class="block object-cover h-full w-full"/>
        </a>
        <div class="flex justify-center items-center opacity-0 bg-gradient-to-t from-gray-800 via-gray-800 to-opacity-30 group-hover:opacity-50 absolute top-0 left-0 h-full w-full"></div>
      </div>
      <div>
        <p class="btn btn-success rounded-pill btn-sm">{{ $row->tag }}</p>
      </div>
  </div>
</div>


  {{-- <div class="col-lg-4">
      <div class="card shadow">
        <a href="post/{{ $row->id }}">
          <img src="{{ asset('storage/images/'.$row->image) }}" class="card-img-top img-fluid">
        </a>
        <div class="card-body">
          <p class="btn btn-success rounded-pill btn-sm">{{ $row->tag }}</p>
          {{-- <div class="card-title fw-bold text-primary h4">{{ $row->title }}</div> --}}
          {{-- <p class="text-secondary">{{ Str::limit($row->content, 100) }}</p> --}}
        {{-- </div>
      </div>
  </div> --}} 

  @empty
    <h2 class="text-center text-secondary p-4">No post found in the database!🧧🏁</h2>
  @endforelse
  <div class="d-flex justify-content-center my-5">
    {{ $posts->onEachSide(1)->links() }}
  </div>

</div>
@endsection 