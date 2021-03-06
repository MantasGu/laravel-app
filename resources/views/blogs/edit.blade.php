@extends('layout')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Edit Blog</h1>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <form action="{{ route('blogs.update', $blog->id) }}" method="POST">
                @csrf

                @method('PUT')
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Title:</strong>
                            <input type="text" name="title" value="{{$blog->title}}" class="form-control" placeholder="Title">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Author:</strong>
                            <input type="text" name="author"  value="{{$blog->author}} form-control" placeholder="Author">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Description:</strong>
                            <textarea class="form-control" style="height:150px" name="description"  placeholder="Description">{{$blog->description}}</textarea>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-check">
                            <input type="checkbox" name="is_active" id="flexCheckChecked" class="form-check-input">
                            @if($blog->is_active == 1)
                                checked
                            @endif
                            <label class="form-check-label" for="flexCheckChecked">
                                Active
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
