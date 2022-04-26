@extends('layout')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Blog number {{$blog->id}}</h1>
        </div>
    </div>

    <table class="table">
        <tr>
            <td>Title</td>
            <td>Author</td>
            <td>Description</td>
            <td>Created</td>
            <td>Updated</td>
        </tr>
    <div class="row">
        <div class="col">
      <tr>
          <td><a href="{{route('blogs.show', $blog->id)}}">{{$blog->title}}</a></td>
          <td>{{ $blog->author}}</td>
          <td>{{ $blog->description}}</td>
          <td>{{$blog->created_at}}</td>
          <td>{{ $blog->updated_at }}</td>
      </tr>
        </div>
    </div>
    </table>
    <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST">
        <a href="{{route('blogs.index')}}" class="btn btn-primary" title="Back">Back</a>

        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
@endsection
