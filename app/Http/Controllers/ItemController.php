<?php

namespace App\Http\Controllers;

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
}
