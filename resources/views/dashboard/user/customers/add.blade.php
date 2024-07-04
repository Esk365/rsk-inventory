@extends('layout')


@section('content')
    <h1>Add Customer</h1>
    <form action="/customers/add" method="post" id="customerForm">
        {{csrf_field()}}
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <br>
        <div class="form-group">
            <label for="">Contact</label>
            <input type="text" name="number" id="number" class="form-control" required>
        </div>
        <br>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Save Customer">
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('#customerForm').on('submit', function(e){
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
