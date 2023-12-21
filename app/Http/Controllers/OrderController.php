<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetails;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $inputdata['user_id'] = $request->user()->id;
        $inputdata['address'] = $request->address;
        $inputdata['total'] = $request->total;
        $inputdata['date'] = date('Y-m-d H:i:s');
        Order::create($inputdata);

        $carts = Cart::where('user_id', $inputdata['user_id'])->get();
        
        foreach ($carts as $cart) {
            OrderDetails::create([
                'order_id' => Order::where('user_id', $inputdata['user_id'])->latest()->first()->id,
                'item_id' => $cart->item_id,
                'quantity' => $cart->quantity
            ]);
        }

        Cart::where('user_id', $inputdata['user_id'])->delete();
        
        return redirect()->route('item.index');
    }    
}
