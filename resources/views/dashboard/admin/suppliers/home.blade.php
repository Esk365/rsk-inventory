@extends('layout')

@section('content')
<h1>Suppliers</h1>
<br>
<a href="/suppliers/add" class="btn btn-success">Add New Supplier</a>
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
            @if(count($suppliers)>0)
                @foreach ($suppliers as $supp)
                    <tr>
                        <td>{{$supp->id}}</td>
                        <td>{{$supp->name}}</td>
                        <td>{{$supp->mobile}}</td>
                        <td>
                            <a href="/suppliers/delete/{{$supp->id}}" class="btn btn-danger">Delete</a>
                            <a href="/suppliers/edit/{{$supp->id}}" class="btn btn-primary">Edit</a>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
      </table>


@endsection