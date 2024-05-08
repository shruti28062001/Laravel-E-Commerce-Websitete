<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ThankyouController extends Controller
{
    public function index(Request $request)
    {
        $order_id = $request->order_id;
        $total = $request->total;
        $payment_id=$request->payment_id;
        return view('thankyou', compact('order_id', 'total','payment_id'));
    }
}
