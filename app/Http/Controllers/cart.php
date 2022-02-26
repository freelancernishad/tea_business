<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class cart extends Controller
{

    public function cart()
    {
        return view('cart');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function addToCart(Request $request,$id)
    {
        $product = Product::findOrFail($id);

        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity'] = $cart[$id]['quantity']+$request->quantity;
        } else {
            $cart[$id] = [
                "name" => $product->product_title,
                "quantity" => $request->quantity,
                "price" => $product->Price,
                "image" => $product->Images
            ];

        }

        session()->put('cart', $cart);

$q= 0;

        foreach (session()->get('cart') as $id => $details) {
            $q = $q+$details['quantity'];
        }
        return $q;

      //  return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function update(Request $request)
    {

// return $request->all();

        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
        $q= 0;

        foreach (session()->get('cart') as $id => $details) {
            $q = $q+$details['quantity'];
        }
        return $q;

    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');

echo $request->id;

        }
    }



}
