<?php

namespace App\Http\Controllers;

use App\Models\Carts;
use Illuminate\Http\Request;

class CartsController extends Controller
{
        
    public function index()
    {
        return view('index');
    }

    public function addToCart(Request $request)
    {
        $proid = $request->input('pro_id');
        $price = $request->input('price');

        if ($request->session()->has('cart')) {
            $cart = $request->session()->get('cart');
            $acol = array_column($cart, 'pro_id');

            if (in_array($proid, $acol)) {
                $key = array_search($proid, $acol);
                $cart[$key]['qty'] += 1;
            } else {
                $item = [
                    'pro_id' => $proid,
                    'qty' => 1,
                    'price' => $price
                ];
                $cart[] = $item;
            }
        } else {
            $item = [
                'pro_id' => $proid,
                'qty' => 1,
                'price' => $price
            ];
            $cart[] = $item;
        }

        $request->session()->put('cart', $cart);
        return redirect()->route('carts.index')->with('success', 'Item added to cart.');
    }

    public function showCart()
    {
        $items = session()->get('cart', []);
        return view('cart', ['items' => $items]);
    }

    public function updateCart(Request $request)
    {
        $pro_id = $request->input('upid');
        $qty = $request->input('qty');

        // Update the quantity in the session data or your desired cart storage mechanism

        return redirect()->route('/card')->with('success', 'Cart updated successfully.');
    }

    public function removeCartItem(Request $request)
    {
        $pro_id = $request->input('id');
          // Remove the item from the session data or your desired cart storage mechanism

          return redirect()->route('/card')->with('success', 'Item removed from cart.');
        }
    
        public function emptyCart()
        {
            // Empty the cart in the session data or your desired cart storage mechanism
    
            return redirect()->route('/emptycard')->with('success', 'Cart emptied successfully.');
        }
}
