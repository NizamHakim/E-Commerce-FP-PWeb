<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {   
        $user_id = Auth::user()->id;
        $cartItems = Cart::where('user_id', $user_id)->get();
        $itemscount = Item::count();

        return view('cart', [
            'cartItems' => $cartItems,
            'itemscount' => $itemscount
        ]);
    }

    public function store(Request $request)
    {   
        $inputdata['user_id'] = Auth::user()->id;
        $inputdata['item_id'] = $request->item_id;
        $inputdata['quantity'] = $request->quantity;

        Cart::create($inputdata);

        return redirect()->route('item.detail', $request->item_id);
    }

    public function destroy($id)
    {   
        Cart::destroy($id);
        return redirect()->route('cart.index');
    }
}
