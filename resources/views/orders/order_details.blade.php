@extends('dashlayouts.dashboardlayout') 
@section('content') 

<div class="container">
  <section class="content-header">
    <div class="container-fluid ">
      <div style="margin-left: 200px">
        <div class="row mb-2">
          <div class="col-8">
            <h3>Order Details</h3><br>
            {{-- <p>
                <strong>User Name:</strong> {{ $order->user->name }}
              </p>
              <p>
                <strong>Address:</strong> {{ $order->address }}
              </p> --}}
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="container">
    <div class="row mb-2">
      <div class="col-9">
        
        <div style="margin-left: 200px">
          <div class="card" style="width: 18rem;">
            <h4 class="card-header"> User Details </h4>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">User Name: {{ $order->user->name }}</li>
              <li class="list-group-item">Address: {{ $order->address }}</li>
              <li class="list-group-item">Phone No: {{ $order->phone_no }}</li>
            </ul>
          </div>
          <div class="card">
            {{-- <div class="card-header">
              <h5 class="card-title">Order ID: {{ $order->id }}</h5>
              </br>
              <h4 class="card-title">Order Date: {{$order->created_at->format('d-m-y ') }}</h4>
            </div> --}}
            <div class="card-body">
              <table id="orders" class="table table-hover mt-2">
                <thead>
                  <tr>
                    <th>Product Image</th>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    {{-- <th>Grand Total </th> --}}
                  </tr>
                </thead>
                <tbody>
                     @foreach($order->orderDetails as $orderDetail)
                     <tr>
                    <td> @if($orderDetail->adminProduct) <img src="{{ asset('Products/' . $orderDetail->adminProduct->image) }}" alt="{{ $orderDetail->adminProduct->name }}" style="width: 50px;"> @else No Image Available @endif </td>
                    <td> @if($orderDetail->adminProduct) {{ $orderDetail->adminProduct->name }} @else Product Not Found @endif </td>
                    <td>{{ $orderDetail->quantity }}</td> 
                     <td>{{ $orderDetail->price }}</td>
                    {{-- <td>{{ $order->grand_total }}</td> --}}
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
            <li class="list-group-item">Order Date: {{$order->created_at->format('d-m-y ') }}</li>
            <li class="list-group-item">Order Status: {{ $order->order_status}}</li>
            <li class="list-group-item">Payment: {{ $order->payment_status }}</li>
            <li class="list-group-item">Grand Total: {{ $order->grand_total }}</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection