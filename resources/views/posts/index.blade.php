@extends('layouts.app') 
@section('content') 
<div class="container">
    <h1>All Posts</h1> 
    @foreach($posts as $post) 
    <div class="card mt-4">
        <div class="card-body">
            <h2 class="card-title">{{ $post->title }}</h2>
            <p class="card-text">{{ $post->body }}</p> <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">Read More</a>
        </div>
    </div> 
    @endforeach
</div> 
@endsection