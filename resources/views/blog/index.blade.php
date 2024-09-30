@extends('layouts.app')

@section('title', 'Our Blog')

@section('content')
    <h1>Our Blog</h1>
    <div class="list-group">
        <a href="/blog/post-1" class="list-group-item list-group-item-action">Post Title 1</a>
        <a href="/blog/post-2" class="list-group-item list-group-item-action">Post Title 2</a>
        <a href="/blog/post-3" class="list-group-item list-group-item-action">Post Title 3</a>
    </div>
@endsection
