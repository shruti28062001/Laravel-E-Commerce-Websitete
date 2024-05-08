<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
@extends('layouts.mainlayout')
@section('content')

<div class="container">
    <form action="{{ route('process.payment') }}" method="post">
        @csrf
    <div class="row">
        <div class="col-md-6">
            <h5>Address</h5>
         
                 <div class="mb-3 mt-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <textarea class="form-control" id="address" name="address" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="city" class="form-label">City</label>
                    <input type="text" class="form-control" id="city" name="city" required>
                </div>
                <div class="mb-3">
                    <label for="pincode" class="form-label">Pin code</label>
                    <input type="text" class="form-control" id="pincode" name="pincode" required>
                </div>
             
        </div>

        <div class="col-md-6">
            <h5 class="mt-3">Order Summery</h5>
            @if($cartItems->isEmpty())
                <p>Your cart is empty.</p>
            @else
                <table class="table">
                    <thead>
                        <tr>
                         <th>Product name</th>
                         <th>Quantity</th>
                         <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $total = 0;
                        @endphp

                        @foreach($cartItems as $cartItem)
                            <tr>
                                <td>
                                    {{ $cartItem->product->name}}
                                </td>
                                <td>
                                    {{ $cartItem->quantity }}
                                </td>
                                <td class="total-price-cell">
                                    ${{ $cartItem->product->price * $cartItem->quantity }}
                                </td>
                               <td>
                                <input type="hidden" name="product_id" value="{{ $cartItem->product->id }}">
                               </td>
                            </tr>
                            @php
                                $total += ($cartItem->product->price * $cartItem->quantity);  
                            @endphp
                        @endforeach
                    </tbody>
                </table>

                <div class="d-flex justify-content-end">
                    <h3>Grand total: <span class="subtotal" name="grand total">${{ isset($total) ? $total : 'N/A' }}</span></h3>

                </div>
            @endif
        </div>
    </div>
    <div class="text-center">
        <input type="hidden" name="razorpay_order_id" value="{{ $order_id }}">
        <input type="hidden" name="razorpay_payment_id" id="payment_id" value="">
        <input type="hidden" name="razorpay_total_amount" value="{{ $total * 100 }}"> 
        <button type="submit" class="btn btn-primary" id="proceedPaymentBtn">Proceed with Payment</button>
    </div>
</form>
</div>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<script>
    document.getElementById('proceedPaymentBtn').addEventListener('click', function (event) {
        event.preventDefault(); 
        var options = {
            key: 'rzp_test_gHV25630oD4ngn', // Razorpay API key

            amount: document.querySelector('input[name="razorpay_total_amount"]').value,
            currency: 'INR',
            name: 'Your Company Name',
            description: 'Payment for Order',
            orderId: document.querySelector('input[name="razorpay_order_id"]').value,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
            handler: function (response) {
                 document.getElementById('payment_id').value = response.razorpay_payment_id;
                  alert('Payment successful! Payment ID: ' + response.razorpay_payment_id);
                document.querySelector('form').submit();
            },
            prefill: {
                name: 'shruti',
                email: 'shrutikadam7272@gmail.com',
                contact: '8237525779',
            },
            theme: {
                color: '#F37254',
            },
        };
        var razorpay = new Razorpay(options);
        razorpay.open();
    });
</script>
</section>
@endsection
