@extends('layout')


@section('content')
    <h1>Add Customer</h1>
    <form action="/customers/add" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <br>
        <div class="form-group">
            <label for="">Contact</label>
            <input type="text" name="number" id="number" class="form-control">
        </div>
        <br>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Save Customer">
        </div>
    </form>
@endsection
