@extends('layout')


@section('content')
    <h1>Edit Product</h1>
    <form action="/products/edit/{{$product->id}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{$product->name}}">
        </div>
        <div class="form-group">
            <label for="">Category</label>
            <select name="category" id="category" class="form-control">
                <option value="1" @if($product->id == 1) selected @endif>Foods</option>
                <option value="2" @if($product->id == 2) selected @endif>Cloths</option>
                <option value="3" @if($product->id == 3) selected @endif>Furniture</option>
                <option value="4" @if($product->id == 4) selected @endif>Drinks</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Quantity</label>
            <input type="number" name="qty" id="qty" class="form-control" value="{{$product->qty}}">
        </div>
        <div class="form-group">
            <label for="">Unit Price</label>
            <input type="number" name="price" id="price" class="form-control" value="{{$product->price}}">
        </div>
        <br>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Update Product">
        </div>
    </form>
@endsection
