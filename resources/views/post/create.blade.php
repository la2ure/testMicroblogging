@extends('layout.app')
@section('title', 'Add New Post')
@section('heading', 'Create a New Post')
@section('link_text', 'Goto All Posts')
@section('link', '/post')

@section('content')

<div class="h-screen flex items-center justify-center">
  <div class="col-lg-8 mx-auto border-2 border-gray-800 px-9 py-9 rounded-lg">
    <div class="mx-auto max-w-md">
      <div class="card-header bg-primary">
        <h3 class="text-lg font-bold	 text-center">Add New Post</h3>
      </div>
      <div class="card-body p-4">
        <form action="/post" method="POST" enctype="multipart/form-data">
          @csrf
  

          <div class="my-5">
            <input type="text" name="tag" id="tag" class="form-control @error('tag') is-invalid @enderror" placeholder="Tag" value="{{ old('tag') }}">
            @error('tag')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="my-5">
            <p class="mb-1 block text-sm font-medium text-gray-700">Select your file</p>
            <input type="file" name="file" id="file" accept="image/*" class="mt-2 block w-full text-sm file:mr-4 file:rounded-md file:border-0 file:bg-teal-500 file:py-2 file:px-4 file:text-sm file:font-semibold file:text-white hover:file:bg-teal-700 focus:outline-none disabled:pointer-events-none disabled:opacity-60 form-control @error('file') is-invalid @enderror">
            @error('file')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          {{-- <div class="my-2">
            <textarea name="content" id="content" rows="6" class="form-control @error('content') is-invalid @enderror" placeholder="Post Content">{{ old('content') }}</textarea>
            @error('content')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div> --}}

          <div class="mt-10">
            <button class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800">
              <input type="submit" class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white text-gray-900 hover:text-white rounded-md group-hover:bg-opacity-0">
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection