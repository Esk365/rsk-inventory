@extends('layout')

@section('content')
<h1>Customers</h1>
<br>
<a href="/customers/add" class="btn btn-success">Add New Customer</a>
<br><br>
<table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Contact</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @if(count($customers)>0)
                @foreach ($customers as $cust)
                    <tr>
                        <td>{{$cust->id}}</td>
                        <td>{{$cust->name}}</td>
                        <td>{{$cust->mobile}}</td>
                        <td>
                            <a href="/customers/delete/{{$cust->id}}" class="btn btn-danger">Delete</a>
                            <a href="/customers/edit/{{$cust->id}}" class="btn btn-primary">Edit</a>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
      </table>


@endsection