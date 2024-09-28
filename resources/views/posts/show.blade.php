@extends('layout.app')
@section('title')
    List Post
@endsection

@section('content')
    <label for="">Title</label><br>
    {{$post->title}}<br>
    <hr>
    <label for="">Content</label><br>
    {{$post->content}}<br>

    <form action="{{route('posts.index')}}" method="">
        <input class="btn btn-outline-primary" type="submit" value="Back">
    </form>

@endsection
