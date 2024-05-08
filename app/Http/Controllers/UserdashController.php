<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;


class UserdashController extends Controller
{
   
    // public function dashboard()
    // {
    //     return view('user.dashboardlayout');
    // }


    // public function index()
    // {
    //     $orders =  Order::with('user')->get();

    //     return view('user_order.order', compact('orders'));
    // }

    public function user_dashboard(){

        return view('user.dashboardlayout');
          
       }
    //     public function index(){
    //         $orders = Order::get();
    //        return view('userOrders', compact('orders'));
    //    }



public function index() {
    $orders = Order::with('orderDetails.product')->get();

    return view('userOrders', compact('orders'));
}

}
