@extends('dashlayouts.dashboardlayout')

@section('content')
<div class="container-fluied">
    <form action="" method="get">
        <div class="row mt-4">
            <div class="col-2"style="margin-left: 280px">
                <div class="form-group" >
                    <label for="orderStatusFilter"> Order Status:</label>
                    <select class="form-control" id="orderStatusFilter" name="order_status" onchange="this.form.sumit()">
                        <option value="">All</option>
                        <option value="Pending" @if(Request()->order_status == 'Pending') selected @endif>Pending</option>
                        <option value="Dispatch" @if(Request()->order_status == 'Dispatch') selected @endif>Dispatch</option>
                        <option value="Delivered" @if(Request()->order_status == 'Delivered') selected @endif>Delivered</option>
                        <option value="Cancelled" @if(Request()->order_status == 'Cancelled') selected @endif>Cancelled</option>
                    </select>
                </div>
            </div>
            <div class="col-2">
                <div class="form-group">
                    <label for="paymentStatusFilter">Payment Status:</label>
                    <select class="form-control" id="paymentStatusFilter" name="payment_status">
                        <option value="">All</option>
                        <option value="Paid" @if(Request()->payment_status == 'Paid') selected @endif>Paid</option>
                        <option value="Unpaid" @if(Request()->payment_status == 'Unpaid') selected @endif>Unpaid</option>
                    </select>
                </div>
            </div>
            <div class="col-2">
                <div class="form-group">
                    <label for="startDateFilter"> Start Date:</label>
                    <input type="date" name="from_date" class="form-control" id="startDateFilter" value="{{ Request()->from_date }}">
                </div>
            </div>
            <div class="col-2">
                <div class="form-group">
                    <label for="endDateFilter"> End Date:</label>
                    <input type="date" name="to_date" class="form-control" id="endDateFilter" value="{{ Request()->to_date }}">
                </div>
            </div>
            <div class="col-1" style="margin-top: 30px">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>
<div class="container">
    <section class="content">       
        <div class="container">
            <div  style="margin-left: 200px">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Orders</strong>
                    </div>
                        <div class="card-body">
                            <table class="table table-hover mt-2">
                                <thead>
                                    <tr>
                                        <th>Order ID</th>
                                        <th>User Name</th>
                                        <th>Order Status</th>
                                        <th>Payment</th>
                                        <th>Date</th>
                                        {{-- <th>Phone No</th> --}}
                                        <th>Order Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($orders as $order)
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                        <td>{{ $order->user->name }}</td>
                                        <td>
                                            <input type="hidden" name="order_id" class="order_id" value="{{ $order->id }}">
                                            <select class="order_status" data-order-id="{{ $order->id }}">
                                                <option value="Pending" {{ $order->order_status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                                <option value="Dispatch" {{ $order->order_status == 'Dispatch' ? 'selected' : '' }}>Dispatch</option>
                                                <option value="Delivered" {{ $order->order_status == 'Delivered' ? 'selected' : '' }}>Delivered</option>
                                                <option value="Cancelled" {{ $order->order_status == 'Cancelled' ? 'selected' : '' }}>Cancelled</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="hidden" name="order_id" class="order_id" value="{{ $order->id }}">
                                            <select class="payment_status" data-order-id="{{ $order->id }}">
                                                <option value="Paid" {{ $order->payment_status == 'Paid' ? 'selected' : '' }}>Paid</option>
                                                <option value="Unpaid" {{ $order->payment_status == 'Unpaid' ? 'selected' : '' }}>Unpaid</option>
                                            </select>
                                        </td>
                                        <td>{{date('d F Y',strtotime($order->created_at))}} </td>
                                        {{-- <td>{{ $order->phone_no }}</td> --}}
                                        <td>
                                            {{-- <a href="/orders/order_detail/{{$order->id}}"> --}}
                                                <a href="{{route('Orders.order_details', $order->id)}}">
                                               View
                                            </a> 
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><br>
</div>
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('.order_status, .payment_status').on('change', function() {
            var selectedStatus = $(this).closest('tr').find('.order_status').val(); 
            var selectedPaymentStatus = $(this).closest('tr').find('.payment_status').val(); 
            var orderId = $(this).closest('tr').find('.order_id').val(); 
            // alert(orderId);
            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: '{{url('update-order-status')}}', 
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': csrfToken,
                },
                data: {
                    order_id: orderId, 
                    order_status: selectedStatus,  
                    payment_status: selectedPaymentStatus 
                },
                success: function(response) {
                    console.log(response);
                     alert('order status updated sucessfully');
                },
                error: function(xhr, status, error) {  
                    console.error(xhr.responseText);
                }
            });
        });
    });


// Capture filter values and filter displayed orders
$(document).ready(function() {
    $('#orderStatusFilter, #paymentStatusFilter, #startDateFilter, #endDateFilter').on('change', function() {
        var orderStatus = $('#orderStatusFilter').val();
        var paymentStatus = $('#paymentStatusFilter').val();
        var startDate = $('#startDateFilter').val();
        var endDate = $('#endDateFilter').val();

        // Loop through each row in the table and hide/show based on filter criteria
        $('#orders tbody tr').each(function() {
            var rowOrderStatus = $(this).find('.order_status').val();
            var rowPaymentStatus = $(this).find('.payment_status').val();
            var rowDate = $(this).find('td:eq(4)').text().trim(); // Assuming date is in the 5th column

            // Check if row matches filter criteria
            var showRow = true;
            if (orderStatus && orderStatus !== rowOrderStatus) {
                showRow = false;
            }
            if (paymentStatus && paymentStatus !== rowPaymentStatus) {
                showRow = false;
            }
            if (startDate && rowDate < startDate) {
                showRow = false;
            }
            if (endDate && rowDate > endDate) {
                showRow = false;
            }

            // Show/hide row based on filter criteria
            if (showRow) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    });
});



</script>
