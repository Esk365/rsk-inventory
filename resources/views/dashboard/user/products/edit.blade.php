@extends('layout')


@section('content')
    <h1>Edit Product</h1>
    <form action="/products/edit/{{$product->id}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{$product->name}}" required>
        </div>
        <div class="form-group">
            <label for="">Category</label>
            <select name="category" id="category" class="form-control">
                @foreach ($categories as $cat)
                <option value="{{$cat->id}}"  @if($product->category_id == $cat->id) selected @endif >{{$cat->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Supplier</label>
            <select name="supplier" id="supplier" class="form-control">
                @foreach ($suppliers as $sup)
                <option value="{{$sup->id}}"  @if($product->supplier_id == $sup->id) selected @endif >{{$sup->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Quantity</label>
            <input type="number" name="qty" id="qty" class="form-control" value="{{$product->qty}}" required>
        </div>
        <div class="form-group">
            <label for="">Unit Price</label>
            <input type="number" name="price" id="price" class="form-control" value="{{$product->price}}" required>
        </div>
        <br>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Update Product">
        </div>
    </form>
@endsection
