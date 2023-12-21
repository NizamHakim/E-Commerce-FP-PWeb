<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return view('cart');
    }

    public function store(Request $request)
    {   
        // $inputdata['user_id'] = auth()->user()->id;
        $inputdata['user_id'] = 1;
        $inputdata['item_id'] = $request->item_id;
        $inputdata['quantity'] = $request->quantity;

        Cart::create($inputdata);

        return redirect()->route('item.detail', $request->item_id);
    }

    public function destroy($id)
    {
        return view('cart');
    }
}
