@extends('layout')

@section('content')
<h1>Alert</h1>
<br>
<table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Unit Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Category</th>
            <th scope="col">Supplier</th>
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
                        <td>{{$pro->cname}}</td>
                        <td>{{$pro->sname}}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
      </table>
@endsection