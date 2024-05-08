<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\OrderDetails;
use App\Models\order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderPlaced;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use log;


class OrderController extends Controller
{
    public function index(Request $request)
    {
        $orders =  Order::with('user');
        if($request->order_status) {
            $orders =  $orders->where('order_status', $request->order_status);
        }
        if($request->payment_status) {
            $orders =  $orders->where('payment_status', $request->payment_status);
        }
        if (!empty($request->from_date) && !empty($request->to_date)) {
            $orders = $orders->whereDate('created_at', '>=', $request->from_date)->whereDate('created_at', '<=', $request->to_date);
        }
        $orders =  $orders->get();

        return view('Orders.order', compact('orders'));
    }

    public function updateStatus(Request $request)
    {
        $orderId = $request->input('order_id');
        $status = $request->input('order_status');
        $payment_status = $request->input('payment_status');

        // Update order status
        Order::where('id', $orderId)->update([
            'order_status' => $status,
            'payment_status' => $payment_status,
        ]);

        // Fetch order with its details using eager loading
        $order = Order::with('orderDetails')->find($orderId);

        // Prepare data for the email
        $messageData = [
            'order' => $order,
            'orderDetails' => $order->orderDetails, // Fetch order details
        ];

        $email = 'shrutikadam7272@gmail.com';

        Mail::send('mails.order_status', $messageData, function ($message) use ($email) {
            $message->to($email)->subject('Order Details');
        });

        return redirect()->back();
        // Session::flash('success', 'Order status updated successfully and email sent.');

        // return redirect()->back();
    }


    public function OrderDetails($order_id)
    {

        // $order = Order::with('user', 'orderDetails.product')->find($order_id);
        $order = Order::with('orderDetails')->find($order_id);

        // Return the view with order details
        return view('orders.order_details', compact('order'));
    }

    public function USerOrderDetails($order_id)
    {

        // $order = Order::with('user', 'orderDetails.product')->find($order_id);
        $order = Order::with('orderDetails')->find($order_id);
         
        // Return the view with order details
        return view('userOrder_detail', compact('order'));
    }



}
