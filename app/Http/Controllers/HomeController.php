<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderDetails;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       $category = category::get();
        return view('index',compact('category'));
    }

    public function listing($id){
        // $product = Product::select('products.*','categories.name as cat_name')
        // ->leftJoin('products','products.category_id','category.id')
        // ->where('products.category_id',$id)
        // ->get(10);

        $products = Product::select('products.*','categories.name as cat_name')
            ->leftJoin('categories','products.category_id','categories.id')
            ->where('products.category_id',$id)
            ->paginate(); 
       return view ('listing' ,compact('products'));  
}

public function detail($id){
    $products = Product::where('id',$id)->get();
    return view ('detail' ,compact('products'));  

}

public function userOrders() {
    $order=Order::where('id',)->get();
   return view('userOrders',compact('order')); 
}


// public function cart($id){
//     $products = Product::where('id',$id)->get();
//     return view ('detail' ,compact('products'));  

public function cart($id){
$products = Product::select('products.*','categories.name as cat_name')
->leftJoin('categories','products.category_id','categories.id')
->where('products.category_id',$id)
->paginate(); 
return view ('cart' ,compact('products'));  

}


    
}
 
