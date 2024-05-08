<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CartController extends Controller
{
//    public function cart(){
//     $cartItems=DB::table('products')
//     ->join('carts','carts.productId','products.id')
//     ->select('products.title','products.image','carts*')
//     ->where('carts.customerId',session()->get('id'))
//     ->get();
//     return view('cart',compact('cartItems'));
//    }

 

    public function addToCart(Request $data)
    {
        if (auth()->check()) {
            $customerId = auth()->id();
            $productId = $data->input('id');
            $quantity = $data->input('quantity');
            
                     
           
            $existingCartItem = Cart::where('customerId', $customerId)
                ->where('productId', $productId)
                ->first();
    
            if ($existingCartItem) {
                // If the product is already in the cart, update the quantity
                $existingCartItem->quantity += $quantity;
                $existingCartItem->save();
            } else {
                // If the product is not in the cart, add a new entry
                $item = new Cart();
                $item->quantity = $quantity;
                $item->productId = $productId;
                $item->customerId = $customerId;
                $item->price = $data->input('price');
            

                $item->save();
            }
    
            return redirect()->back()->with('success', 'Product added to cart successfully.');
        }
    
        return redirect()->route('user-login')->with('error', 'Please log in to add the product to your cart.');   
    }
    
    public function showCart()
    {
        $cartItems = Cart::with([
            'product' => function ($query) {
                $query->select('id', 'name', 'price', 'thumbnail');
            }
        ])
            ->where('customerId', auth()->id())
            ->get();
        $cartCount = Cart::where('customerId', auth()->id())->count();
        return view('cart', compact('cartItems', 'cartCount'));
    }
    public function removeFromCart($id)
    {
        $cartItem = Cart::find($id);
        if (!$cartItem) {
            return redirect()->back()->with('error', 'Cart item not found.');
        }
        if ($cartItem->customerId == auth()->id()) {
            $cartItem->delete();
            return redirect()->back()->with('success', 'Product removed from cart successfully.');
        }
        return redirect()->back()->with('error', 'You are not authorized to remove this product from the cart.');
    }
    public function updateCartQuantity(Request $request)
{
    try {
        $customerId = $request->input('customerId');
        $productId = $request->input('productId');
        $quantity = $request->input('quantity');

        // Find the cart item
        $cartItem = Cart::where('customerId', $customerId)
            ->where('productId', $productId)
            ->first();

        if (!$cartItem) {
            throw new \Exception('Cart item not found.');
        }

        // Update the quantity
        $cartItem->quantity = $quantity;
        $cartItem->save();

        // Calculate the updated total
        $updatedTotal = $cartItem->product->price * $quantity;

        return response()->json(['status' => 'success', 'updatedTotal' => $updatedTotal]);
    } catch (\Exception $e) {
        Log::error('Error updating quantity: ' . $e->getMessage());
        return response()->json(['status' => 'error', 'message' => 'Error updating quantity'], 500);
    }
}

}
