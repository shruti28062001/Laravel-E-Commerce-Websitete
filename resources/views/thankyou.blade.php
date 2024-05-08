<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    @extends('layouts.mainlayout')
    @section('content')
    <div class="container">
        <div class="row">
            {{-- <div class="col-md-12 text-center">
                <h2>Thank You for Your Purchase!</h2>
                <p>Your order has been successfully placed.</p>
                <p>Order ID: {{ $order_id }}</p>
                <p>Total Amount: ${{ $total }}</p>
                <p>Payment Id: ${{ $payment_id }}</p>

                <!-- You can customize this page further based on your needs -->
            </div> --}}

            <div class="card text-white bg-success mb-5 mt-4 text-center col-md-12 " style="max-width: 24rem; margin-left:400px">
                <h4 class="card-header">Thank You for Your Purchase!</h4>
                <div class="card-body">
                  <h6 class="card-title">Your order has been successfully placed.</h6></br>
                  <p class="card-text">Order ID: {{ $order_id }}</p>
                  <p class="card-text">Total Amount: ${{ $total }}</p>
                  <p class="card-text">Payment Id: ${{ $payment_id }}</p>
                </div>
              </div>
        </div>
    </div>


</section></br></br>
@endsection
