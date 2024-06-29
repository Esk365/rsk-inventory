@extends('layout')


@section('content')
    <h1>Edit Customer</h1>
    <form action="/customers/edit/{{$customer->id}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{$customer->name}}">
        </div>
        <div class="form-group">
            <label for="">Contact</label>
            <input type="text" name="number" id="number" class="form-control" value="{{$customer->mobile}}">
        </div>
        <br>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Update Customer">
        </div>
    </form>
@endsection
