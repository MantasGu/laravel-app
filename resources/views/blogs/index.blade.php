@extends('layout')
@section('content')
    <div class="row">
        <div class="col">
            <h1>Blogs</h1>
            <a href="{{ route('blogs.create') }}" class="btn btn-primary" title="New Blog">New blog</a>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
        <p>{{$message}}</p>
        </div>
    @endif

    <table class="table">
        <tr>
            <td>ID</td>
            <td>Title</td>
            <td>Author</td>
            <td>Description</td>
            <td>Is active</td>
        </tr>
        @foreach($blogs as $blog)
            <tr>
                <td>{{ $blog->id}}</td>
                <td><a href="{{route('blogs.show', $blog->id)}}">{{$blog->title}}</a></td>
                <td>{{ $blog->author}}</td>
                <td>{{ $blog->description}}</td>
                <td>{{$blog->is_active}}</td>
                <td>
                    <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{route('blogs.edit', $blog->id) }}" class="btn btn-warning">Edit</a>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>                </td>
            </tr>
        @endforeach
    </table>
    {{ $blogs->links()}}
@endsection
