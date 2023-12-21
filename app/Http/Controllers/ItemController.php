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

    public function add()
    {
        $categories = ItemCategory::all();
        return view('admin.item-add', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:items|max:255',
            'description' => 'required|max:255',
            'price' => 'required',
            'stock' => 'required',
            'image' => 'required|image',
            'item_category_id' => 'required|exists:item_categories,id'
        ]);

        $category = ItemCategory::find($validated['item_category_id']);
        $count = Item::where('item_category_id', $validated['item_category_id'])->count();
        $folder = $category->name;

        if ($validated['item_category_id'] == 4) {
            $folder = 'home-kitchen';
        } elseif ($validated['item_category_id'] == 5) {
            $folder = 'pet-supplies';
        }

        $extension = $request->file('image')->getClientOriginalExtension();
        $newName = 'images/'.$folder.'/'.$folder.'_'.($count + 1).'.'.$extension;
        $validated['image'] = $newName;

        Item::create($validated);
        return redirect('items')->with('status', 'Item Added Successfully');
    }
}
