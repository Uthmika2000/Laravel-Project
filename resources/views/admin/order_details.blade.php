<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class= "container-md mt-5" style= "border: 1px solid black; padding: 5px; background-color: red; ">
<h3>Order Details</h3>
<br>
    <p>Order ID: {{$orderDetails->order_id}}</p>
    <p>Total: {{$orderDetails->total}}</p>
    <p>Status: {{$orderDetails->status}}</p>
</div>
<br>
    <center><h2>ORDER ITEMS</h2></center>
    <div class="container-md mt-5">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Product ID</th>
                <th>Product Price</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orderDetails->orderDetails as $orderDetail)
                <tr>
                    <td>{{$orderDetail->product_id}}</td>
                    <td>{{$orderDetail->product_price}}</td>
                    <td>{{$orderDetail->qty}}</td>
                    <td>{{$orderDetail->sub_total}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <button type="button" class="btn btn-primary"><a href="http://127.0.0.1:8000/admin/dashboard" style="textDecoration: none; color: white;">BACK</a></button>
</div>
</body>
</html>