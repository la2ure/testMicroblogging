@extends('layout.app')
@section('title', 'Edit Post')
@section('heading', 'Edit This Post')
@section('link_text', 'Goto All Posts')
@section('link', '/post')

@section('content')

<div class="row my-3">
  <div class="col-lg-8 mx-auto">
    <div class="card shadow">
      <div class="card-header bg-primary">
        <h3 class="text-light fw-bold">Edit Post</h3>
      </div>
      <div class="card-body p-4">
        <form action="/post/{{ $post->id }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="my-2">
            <input type="text" name="tag" id="tag" class="form-control" placeholder="Tag" value="{{ $post->tag }}" required>
          </div>

          <div class="my-2">
            <input type="file" name="file" id="file" accept="image/*" class="form-control">
          </div>

          <img src="{{ asset('storage/images/'.$post->image) }}" class="img-fluid img-thumbnail" width="150">

          <div class="my-2">
            <input type="submit" value="Update Post" class="btn btn-primary">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection