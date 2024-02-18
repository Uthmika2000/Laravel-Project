<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
</head>
<body> 
    <div class="container-md mt-5">
        <center><h3>ADMIN DASHBOARD</h3></center>
        <br>
        <br>
        <table class="table table-bordered table-hover transparent-table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Order ID</th>
                    <th scope="col">Customer ID</th>
                    <th scope="col">Total</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $data)
                <tr>
                    <td>{{$data->order_id}}</td>
                    <td>{{$data->customer_id}}</td>
                    <td>{{$data->total}}</td>
                    <td>{{$data->status}}</td>
                    <td><button class="btn btn-primary btn-sm"><a href="{{ route('order.details', ['orderId' => $data->order_id]) }}" class="text-light" style="text-decoration:none;">Order Details</a> </button></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-eUGBlrhlTqWDUvAJt+XWzp5r1WA5SkKICr3Q+y5dS5JbsL7g/6k1U5V9LhBSJN9" crossorigin="anonymous"></script>
</body>
</html>