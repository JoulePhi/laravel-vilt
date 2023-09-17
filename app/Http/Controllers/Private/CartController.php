<?php

namespace App\Http\Controllers\Private;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CartController extends Controller
{
    public function add(Request $request)
    {
        $user_id = $request->params['user_id'];
        $product_id = $request->params['product_id'];
        $quantity = $request->params['quantity'];
        $cart = Cart::where('user_id', $user_id)->where('product_id', $product_id)->first();
        
        if($cart)
        {
            $cart->update([
                'quantity' => $cart->quantity + $quantity
            ]);
        }else{
            $cart =  Cart::create([
                'user_id' => $user_id,
                'product_id' => $product_id,
                'quantity' => $quantity
            ]);
        }
        

        return response()->json($cart->load('products.category'));
    }

    public function delete(Request $request){
        $cart = Cart::find($request->id);
        
        $cart->delete();

        return response()->json($cart);
    }
}
