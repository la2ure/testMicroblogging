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

<div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
  @forelse($posts as $key => $row)
    <div class="relative flex flex-col mb-9">
      <div class="relative h-80 w-full">
        <a href="post/{{ $row->id }}">
          <img src="{{ asset('storage/images/'.$row->image) }}" alt="" class="block object-cover h-full w-full"/>
        </a>
        <div>
          <p class="btn btn-success rounded-pill btn-sm">{{ $row->tag }}</p>
        </div>
      </div>
    </div>
  @empty
    <h2 class="text-center text-secondary p-4">No post found in the database!🧧🏁</h2>
  @endforelse
  <div class="d-flex justify-content-center my-5">
    {{ $posts->onEachSide(1)->links() }}
  </div>
</div>

@endsection
