@extends('layout')


@section('content')
    <h1>Add Category</h1>
    <form action="/categories/add" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <br>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Save Category">
        </div>
    </form>
@endsection
