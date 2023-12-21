<?php

namespace App\Http\Controllers;

use App\Models\ItemCategory;
use Illuminate\Http\Request;

class ItemCategoryController extends Controller
{
    public function list()
    {
        $categories = ItemCategory::all();
        return view('admin.categories', ['categories' => $categories]);
    }
}
