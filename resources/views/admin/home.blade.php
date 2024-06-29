@extends('layout')

@section('content')
<h1>This is Dash</h1>
{{Auth::User()->email}}
<div class="">
    {{Auth::User()->name}}
</div>  
@endsection
