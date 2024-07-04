@extends('layout')


@section('content')
    <h1>Edit Category</h1>
    <form action="/categories/edit/{{$category->id}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{$category->name}}" required>
        </div>
        <br>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Update Category">
        </div>
    </form>
@endsection
