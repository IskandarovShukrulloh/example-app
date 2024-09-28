@extends('layout.app')
@section('content')
{{--    {{$posts}}--}}
    <table class="table" border="1">
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Content</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>Edit</th>
            <th>Delete</th>
            <th>Show</th>
        </tr>

        @foreach($posts as $post)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$post->author_name}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->content}}</td>
                <td>{{$post->created_at}}</td>
                <td>{{$post->updated_at}}</td>
                <td>
                    <form action="{{route('posts.edit', $post)}}" method="get">
                        @csrf
                        @method('get')
                        <input class = "btn btn-outline-success" type="submit" value="Edit">
                    </form>
                </td>

                <td>
                    <form action="{{route('posts.destroy', $post)}}" method="post">
                        @csrf
                        @method('delete')
                        <input class = "btn btn-outline-danger" type="submit" value="Delete">
                    </form>
                </td>

                <td>
                    <form action="{{route('posts.show', $post)}}" method="post">
                        @csrf
                        @method('get')
                        <input class = "btn btn-outline-warning" type="submit" value="Show">
                    </form>
                </td>

            </tr>
        @endforeach

    </table>

<br>
<form action="{{route('posts.create')}}" method="">
    <input class = "btn btn-outline-primary" type="submit" value="Add">
</form>

@endsection
