<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Report</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            border: 2px solid #333;
            margin: 20px;
            padding: 20px;
        }
        h2 {
            color: #333;
            margin-top: 20px;
            text-decoration: underline;
        }
        p {
            color: #666;
            margin: 10px 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px 12px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>

</head>
<body>
    <h2 style="text-align:center">{{$name}}</h2>
    <p style="text-align: right;">{{$date}}</p>
    <br>
    <p style="text-align:center">Thank You For Your Order</p>
    <br>
    <table class="table table-bordered">
        <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Product</th>
              <th scope="col">Quantity</th>
              <th scope="col">Customer</th>
              <th scope="col">Total</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody>
              @if(count($orders)>0)
                  @foreach ($orders as $order)
                      <tr>
                          <td>{{$order->id}}</td>
                          <td>{{$order->pname}}</td>
                          <td>{{$order->qty}}</td>
                          <td>{{$order->cname}}</td>
                          <td>{{$order->qty * $order->price}}</td>
                          <td>{{$order->status}}</td>
                      </tr>
                  @endforeach
              @endif
          </tbody>
    </table>
</body>
</html>