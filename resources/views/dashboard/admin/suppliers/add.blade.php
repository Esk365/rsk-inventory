@extends('layout')


@section('content')
    <h1>Add Supplier</h1>
    <form action="/suppliers/add" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <br>
        <div class="form-group">
            <label for="">Contact</label>
            <input type="text" name="mobile" id="mobile" class="form-control">
        </div>
        <br>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Save Supplier">
        </div>
    </form>
@endsection
