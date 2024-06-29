@extends('layout')

@section('content')
<h1>Products</h1>
<br>
<a href="/products/add" class="btn btn-success">Add New Product</a>
<br><br>
<table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Unit Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Category</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @if(count($products)>0)
                @foreach ($products as $pro)
                    <tr>
                        <td>{{$pro->id}}</td>
                        <td>{{$pro->name}}</td>
                        <td>{{$pro->price}}</td>
                        <td>{{$pro->qty}}</td>
                        <td>{{$pro->category_id}}</td>
                        <td>
                            <a href="/products/delete/{{$pro->id}}" class="btn btn-danger">Delete</a>
                            <a href="/products/edit/{{$pro->id}}" class="btn btn-primary">Edit</a>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
      </table>
@endsection