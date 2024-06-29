@extends('layout')


@section('content')
    <h1>Edit Supplier</h1>
    <form action="/suppliers/edit/{{$supplier->id}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{$supplier->name}}">
        </div>
        <div class="form-group">
            <label for="">Contact</label>
            <input type="text" name="mobile" id="mobile" class="form-control" value="{{$supplier->mobile}}">
        </div>
        <br>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Update Supplier">
        </div>
    </form>
@endsection