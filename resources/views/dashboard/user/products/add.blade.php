@extends('layout')


@section('content')
    <h1>Add Product</h1>
    <form action="/products/add" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Category</label>
            <select name="category" id="category" class="form-control">
                <option value="1">Food</option>
                <option value="2">Cloths</option>
                <option value="3">Furniture</option>
                <option value="4">Drinks</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Quantity</label>
            <input type="number" name="qty" id="qty" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Unit Price</label>
            <input type="number" name="price" id="price" class="form-control">
        </div>
        <br>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Save Product">
        </div>
    </form>
@endsection
