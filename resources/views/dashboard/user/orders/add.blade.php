@extends('layout')


@section('content')
    <h1>Add Order</h1>
    <form action="/orders/add" method="post" id="orderForm">
        {{csrf_field()}}     
        <div class="form-group">
            <label for="">Quantity</label>
            <input type="number" name="qty" id="qty" class="form-control" required>
        </div>
        <br>
        <div class="form-group">
            <label for="">Product</label>
            <select name="product" id="product" class="form-control" required>
                @foreach ($products as $pro)
                    <option value="{{$pro->id}}">{{$pro->name}}</option>
                @endforeach
            </select>
        </div>
        <br>
        <div class="form-group">
            <label for="">Customer</label>
            <select name="customer" id="customer" class="form-control" required>
                @foreach ($customers as $cus)
                    <option value="{{$cus->id}}">{{$cus->name}}</option>
                @endforeach
            </select>
        </div>
        <br>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Save Order">
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('#orderForm').on('submit', function(e){
            var isValid = true;
            var mobNumber = $("#number").val();

            if(mobNumber.length > 10){
                isValid = false;
                alert("Mobile Number Invalid");
                return false;
            }

        });
    </script>
    </form>
@endsection
