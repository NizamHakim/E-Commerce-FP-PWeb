<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\ItemCategory;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function detail()
    {
        return view('detail');
    }

    public function categories()
    {
        return view('categories');
    }

    public function category($id)
    {
        return view('category');
    }

    public function list()
    {
        $items = Item::all();
        return view('admin.items', ['items' => $items]);
    }
}
