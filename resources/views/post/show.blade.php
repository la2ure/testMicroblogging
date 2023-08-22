@extends('layout.app')
@section('title', 'Post Details')
@section('heading', 'Post Details')
@section('link_text', 'Goto All Posts')
@section('link', '/post')

@section('content')

<div class="flex h-screen items-center justify-center background-image">
  <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow content-center">
    <div class="col-lg-8 mx-auto">
      <div class="flex justify-end px-4 py-2 relative">
        <button id="dropdownButton" class="inline-block hover:bg-gray-100 focus:outline-none rounded-lg text-sm p-1.5" type="button">
          <span class="sr-only">Open dropdown</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
            <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
          </svg>
        </button>
        <!-- Dropdown menu -->
          <div id="dropdown" class="z-10 hidden absolute top-0 right-0 mt-2 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44">        <ul class="py-2" aria-labelledby="dropdownButton">
            <li>
              <a href="/post/{{$post->id}}/edit" class="block px-4 py-2 text-sm hover:bg-gray-100">Edit</a>
            </li>
            <li>
              <form action="/post/{{$post->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger rounded-pill block px-4 py-2 text-sm text-red-600">Delete</span>
              </form>          
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div>
      <img src="{{ asset('storage/images/'.$post->image) }}" class="object-center object-cover max-h-96	w-full">
    </div>
    <div class="px-6 pt-4 pb-2">
      <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $post->tag }}</span>
    </div>
  </div>
  <div>
    <script>
      const dropdownButton = document.getElementById('dropdownButton');
      const dropdownMenu = document.getElementById('dropdown');
  
      dropdownButton.addEventListener('click', function(event) {
        event.stopPropagation(); // Empêche la propagation du clic au document
        dropdownMenu.classList.toggle('hidden');
      });
  
      // Gestionnaire d'événements pour masquer le menu lors d'un clic en dehors
      document.addEventListener('click', function(event) {
        const isDropdownButton = dropdownButton.contains(event.target);
        const isDropdownMenu = dropdownMenu.contains(event.target);
        
        if (!isDropdownButton && !isDropdownMenu) {
          dropdownMenu.classList.add('hidden');
        }
      });
    </script>
  </div>
</div>
@endsection