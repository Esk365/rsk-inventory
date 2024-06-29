@extends('layout')

@section('content')
<h1>Category</h1>
<br>
<a href="/categories/add" class="btn btn-success">Add New Category</a>
<br><br>
<table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @if(count($categories)>0)
                @foreach ($categories as $cat)
                    <tr>
                        <td>{{$cat->id}}</td>
                        <td>{{$cat->name}}</td>
                        <td>
                            <a href="/categories/delete/{{$cat->id}}" class="btn btn-danger">Delete</a>
                            <a href="/categories/edit/{{$cat->id}}" class="btn btn-primary">Edit</a>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
      </table>
@endsection