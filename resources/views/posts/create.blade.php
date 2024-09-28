@extends('layout.app')
@section('title')
    Create Post
@endsection
@section('content')

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                   <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('posts.store')}}" method="post">
        @csrf
        <label>Author</label>
        <input class="form-control" type="text" name="author_name" id="">
        <label for="">Title</label> <br>
        <input class="form-control" type="text" name="title" id=""><br>
        <label for="">Content</label><br>
        <textarea class="form-control" name="content" id="" cols="10" rows="5"></textarea>
        <input class="btn btn-outline-primary" type="submit" value="Save">
    </form>
@endsection
