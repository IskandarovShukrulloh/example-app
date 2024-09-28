@extends('layout.app')
@section('title')
    Edit Post
@endsection
@section('content')
    <form action="{{route('posts.update',$post )}}" method="post">
        @csrf
        @method('put')
        <label for="">title</label> <br>
        <input type="text" value="{{$post->title}}" name="title" id=""><br>
        <label for="">Content</label><br>
        <textarea name="content" id="" cols="30" rows="10">{{$post->content}}</textarea>
        <input type="submit" value="Save">
    </form>
@endsection
