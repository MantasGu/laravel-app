@extends('layout')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Add new Blog</h1>
            <a href="{{route('blogs.index')}}" class="btn btn-primary" title="Back">Back</a>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <form action="{{ route('blogs.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Title:</strong>
                            <input type="text" name="title" class="form-control" placeholder="Title">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Author:</strong>
                            <input type="text" name="author" class="form-control" placeholder="Author">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Description:</strong>
                            <textarea class="form-control" style="height:150px" name="description" placeholder="Description"></textarea>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-check">
                            <input type="checkbox" name="active" id="flexCheckChecked" class="form-check-input">
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
