<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
 {
    /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index() {
    $posts = Post::orderBy('id')->paginate(6);
    return view('post.index', ['posts' => $posts]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create() {
    return view('post.create');
  }

/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request
 * @return \Illuminate\Http\Response
 */
public function store(Request $request) {
    $request->validate([
        'tag' => 'required',
        'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $imageName = time() . '.' . $request->file('file')->extension();
    $request->file('file')->storeAs('public/images', $imageName);

    $postData = ['tag' => $request->tag, 'image' => $imageName];

    Post::create($postData);
    return redirect('/post')->with(['message' => 'Post added successfully!', 'status' => 'success']);
}

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Post 
   * @return \Illuminate\Http\Response
   */
  public function show(Post $post) {
    return view('post.show', ['post' => $post]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Post  $post
   * @return \Illuminate\Http\Response
   */
  public function edit(Post $post) {
    return view('post.edit', ['post' => $post]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request
   * @param  Post  $post
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Post $post) {
    $imageName = '';
    if ($request->hasFile('file')) {
      $imageName = time() . '.' . $request->file->extension();
      $request->file->storeAs('public/images', $imageName);
      if ($post->image) {
        Storage::delete('public/images/' . $post->image);
      }
    } else {
      $imageName = $post->image;
    }

    $postData = ['tag' => $request->tag, 'image' => $imageName];

    $post->update($postData);
    return redirect('/post')->with(['message' => 'Post updated successfully!', 'status' => 'success']);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  Post  $post
   * @return \Illuminate\Http\Response
   */
  public function destroy(Post $post) {
    Storage::delete('public/images/' . $post->image);
    $post->delete();
    return redirect('/post')->with(['message' => 'Post deleted successfully!', 'status' => 'info']);
  }
 }