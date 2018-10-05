@extends('layouts.admin')


@section('content')

  <h1>Posts</h1>

  <table class='table table-bordered'>
    <thead>
      <tr>
        <th>Post</th>
        <th>Image</th>
        <th>Title</th>
        <th>Author</th>
        <th>Category</th>
        <th>Created</th>
        <th>Updated</th>
     </tr>
    </thead>
    <tbody>

      @if ($posts)
        @foreach ($posts as $post)
          
        <tr>
          <td>{{$post->id}}</td>
          <td>
            <img height="50" width="50" src="{{$post->photo ? $post->photo->file : 'http://placehold.it/400*400'}}" alt="">
          </td>
          <td>{{$post->title}}</td>
          <td>{{$post->user->name}}</td>
          <td>{{$post->category ? $post->category->name : "Uncategorized"}}</td>
          <td>{{$post->created_at->diffForhumans()}}</td>
          <td>{{$post->updated_at->diffForhumans()}}</td>
        </tr>

        @endforeach
      @endif

    </tbody>
  </table>

    
@endsection