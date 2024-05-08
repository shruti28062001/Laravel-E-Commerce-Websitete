<?php

// Define the function to convert number to words
function convertToWords($number)
{
    $units = ['', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine'];
    $teens = ['', 'eleven', 'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen'];
    $tens = ['', 'ten', 'twenty', 'thirty', 'forty', 'fifty', 'sixty', 'seventy', 'eighty', 'ninety'];
    $suffixes = ['', 'thousand', 'million', 'billion', 'trillion'];

    // If the number is 0, return 'zero'
    if ($number == 0) {
        return 'zero';
    }

    $words = [];

    // Loop through each group of three digits
    for ($i = 0; $number > 0; $i++) {
        $group = $number % 1000;
        $number = floor($number / 1000);

        // Convert hundreds place
        $hundreds = floor($group / 100);
        if ($hundreds > 0) {
            $words[] = $units[$hundreds] . ' hundred';
        }

        // Convert tens and units place
        $tensUnits = $group % 100;
        if ($tensUnits > 0) {
            if ($tensUnits < 10) {
                $words[] = $units[$tensUnits];
            } elseif ($tensUnits < 20) {
                $words[] = $teens[$tensUnits - 10];
            } else {
                $ten = floor($tensUnits / 10);
                $unit = $tensUnits % 10;
                if ($unit > 0) {
                    $words[] = $units[$unit];
                }
                $words[] = $tens[$ten];
            }
        }

        // Add suffix for thousands, millions, etc.
        if ($i > 0 && $group > 0) {
            $words[] = $suffixes[$i];
        }
    }

    // Reverse the words and return as a string
    return implode(' ', array_reverse($words));
}

?>

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
    <div class="container">
        <section class="content-header">
            <div class="container-fluid">
                <div style="margin-left: 200px">
                    <div class="row mb-2">
                        <div class="col-8">
                            <h3>Order Details</h3><br>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="row">
                <div class="col-9">
                    <div style="margin-left: 200px">
                        <div class="card" style="width: 18rem;">
                            <h4 class="card-header"> Billing Details </h4>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">User Name: {{ $order->user->name }}</li>
                                <li class="list-group-item">Address: {{ $order->address }}</li>
                                <li class="list-group-item">Phone No: {{ $order->phone_no }}</li>
                            </ul>
                        </div><br>
                        <div class="card">
                            <div class="card-body">
                                <table id="orders" class="table table-hover mt-2">
                                    <thead>
                                        <tr>
                                            <th>Product Image</th>
                                            <th>Name</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($order->orderDetails as $orderDetail)
                                        <tr>
                                            <td>
                                                @if($orderDetail->Product)
                                                <img src="{{ asset('Products/' . $orderDetail->adminProduct->image) }}" alt="{{ $orderDetail->adminProduct->name }}" style="width: 50px;">
                                                @else
                                                No Image Available
                                                @endif
                                            </td>
                                            <td>
                                                @if($orderDetail->Product)
                                                {{ $orderDetail->adminProduct->name }}
                                                @else
                                                Product Not Found
                                                @endif
                                            </td>
                                            <td>{{ $orderDetail->quantity }}</td> 
                                            <td>{{ $orderDetail->price }}</td>
                                        </tr>
                                        @endforeach 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1">
                    <div class="card" style="width: 18rem;">
                        <h4 class="card-header"> Order Details </h4>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Order ID: {{ $order->id }}</li>
                            <li class="list-group-item">Order Date: {{ $order->created_at->format('d-m-y ') }}</li>
                            <li class="list-group-item">Order Status: {{ $order->order_status }}</li>
                            <li class="list-group-item">Payment: {{ $order->payment_status }}</li>
                            <li class="list-group-item">Grand Total: {{ convertToWords($order->grand_total) }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
