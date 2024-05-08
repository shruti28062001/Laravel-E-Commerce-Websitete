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

</br>
    <div class="container">
   
        <h2 >Your Cart</h2></br>
    
        @if($cartItems->isEmpty())
            <p>Your cart is empty.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Product name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $total = 0;
                    @endphp
                   @foreach($cartItems as $cartItem)
                   <tr>
                       <td>
                           @if($cartItem->product)
                               <img src="{{asset('Products/' . $cartItem->product->thumbnail)}}" alt="Product Image" height="50">
                           @endif
                       </td>
                       <td>
                           @if($cartItem->product)
                               {{ $cartItem->product->name }}
                           @endif
                       </td>
                       <td class="price-cell">
                        @if($cartItem->product)
                            ${{ $cartItem->product->price }}
                        @endif
                    </td>
                    
                       <td >
                           <div style="width: 135px;">
                               <form action="{{ url('update-cart-quantity') }}" method="post" class="update-cart-form">
                                   @csrf
                                   <input type="hidden" name="customerId" value="{{ $cartItem->customerId }}">
                                   @if($cartItem->product)
                                       <input type="hidden" name="productId" value="{{ $cartItem->product->id }}">
                                   @endif
                                   <div class="input-group">
                                       <button class="btn btn-outline-secondary btn-minus" type="button">-</button>
                                       <input type="number" min="1" value="{{ $cartItem->quantity }}" class="form-control quantity-input width text-center"  name="quantity" data-cart-id="{{ $cartItem->id }}">
                                       <button class="btn btn-outline-secondary btn-plus" type="button">+</button>
                                   </div>
                               </form>
                           </div>
                       </td>
                       <td class="total-price-cell">
                           @if($cartItem->product)
                               ${{ $cartItem->product->price * $cartItem->quantity }}
                           @endif
                       </td>
                       <td>
                           <a href="{{ route('remove-from-cart', ['cartItemId' => $cartItem->id]) }}">Remove from Cart</a>
                       </td>
                   </tr>
                   @php
                       if ($cartItem->product) {
                           $total += ($cartItem->product->price * $cartItem->quantity);  
                       }
                   @endphp
               @endforeach
               
                </tbody>
            </table>
            
            <div class="d-flex justify-content-left">
                <h3>SubTotal: <span class="subtotal">${{ $total }}</span></h3>
               <a href="{{ route('checkout') }}"> <button class="btn btn-primary me-md-2" class="d-grid gap-2 d-md-flex justify-content-md-end" type="submit" style="margin-left: 500px">Proceed to Checkout</button></a>
            </div>
         
        @endif
        </br></br></br></br></br>
    </div>
</hr>
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    
    <script>
        $(document).ready(function() {
            $('.btn-minus, .btn-plus').on('click', function() {
                var $input = $(this).parent().find('input.quantity-input');
                var customerId = $input.closest('form').find('input[name="customerId"]').val();
                var productId = $input.closest('form').find('input[name="productId"]').val();
                var oldValue = parseInt($input.val());
    
                if ($(this).hasClass('btn-minus') && oldValue > 1) {
                    var quantity = oldValue - 1;
                } else if ($(this).hasClass('btn-plus')) {
                    var quantity = oldValue + 1;
                } else {
                    var quantity = oldValue;
                }
    
                $.ajax({
                    url: '/update-cart-quantity',
                    type: 'POST',
                    data: {
                        customerId: customerId,
                        productId: productId,
                        quantity: quantity,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.status === 'success') {
                            // Update the quantity input value
                            $input.val(quantity);
    
                            // Update the total price cell value
                            var $totalPriceCell = $input.closest('tr').find('.total-price-cell');
                            $totalPriceCell.text('$' + response.updatedTotal.toFixed(2));
    
                            // Reload the page after a successful update
                            location.reload();       
                        } 
                        else {
                            alert('Error updating quantity. Please try again.');
                        }
                    },
                });
            });
        });
    </script>
</section>
@endsection
