@extends('layout')

@section('content')
<h1>Orders</h1>
<br>
<a href="/orders/add" class="btn btn-success">Add New Order</a>
<br>
<a href="/generatePdf" class="btn btn-primary float-end">Download Order Report</a>
<br><br>
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Product</th>
        <th scope="col">Customer</th>
        <th scope="col">Quantity</th>
        <th scope="col">Total</th>
        <th scope="col">Status</th>
        @if(Auth::User()->role == "admin")
            <th scope="col">Action</th>
        @endif
      </tr>
    </thead>
    <tbody>
        @if(count($orders)>0)
            @foreach ($orders as $order)
                <tr>
                    <td>{{$order->id}}</td>
                    <td>{{$order->pname}}</td>
                    <td>{{$order->cname}}</td>
                    <td>{{$order->qty}}</td>
                    <td>{{$order->qty * $order->price}}</td>
                    <td>{{$order->status}}</td>
                    <td>
                    @if(Auth::User()->role == "admin" && $order->status == "pending")
                        <a href="/orders/approve/{{$order->id}}" class="btn btn-success">Approve</a>
                    @endif
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
  </table>


@endsection