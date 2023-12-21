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
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'item_category_id' => 'required|exists:item_categories,id'
        ]);

        $category = ItemCategory::find($validated['item_category_id']);
        $count = Item::where('item_category_id', $validated['item_category_id'])->count();
        $folder = $category->name;
        $file = $folder;

        if ($validated['item_category_id'] == 4) {
            $folder = 'home-kitchen';
            $file = 'home_kitchen';
        } elseif ($validated['item_category_id'] == 5) {
            $folder = 'pet-supplies';
            $file = 'pet_supplies';
        }

        $extension = $request->file('image')->getClientOriginalExtension();
        $newName = $file . '_' . ($count + 1) . '.' . $extension;

        $request->file('image')->storeAs($folder, $newName);
        $validated['image'] = 'storage/' . $folder . '/' . $newName;

        Item::create($validated);
        return redirect('items')->with('status', 'Item Added Successfully');
    }

    public function edit($id)
    {
        $item = Item::where('id', $id)->first();
        $categories = ItemCategory::all();
        return view('admin.item-edit', ['item' => $item, 'categories' => $categories]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'max:255',
            'description' => 'max:255',
            'price' => '',
            'stock' => '',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
            'item_category_id' => 'exists:item_categories,id'
        ]);

        $category = ItemCategory::find($validated['item_category_id']);
        $count = Item::where('item_category_id', $validated['item_category_id'])->count();
        $folder = $category->name;
        $file = $folder;

        if ($validated['item_category_id'] == 4) {
            $folder = 'home-kitchen';
            $file = 'home_kitchen';
        } elseif ($validated['item_category_id'] == 5) {
            $folder = 'pet-supplies';
            $file = 'pet_supplies';
        }

        $extension = '';
        $newName = '';

        if($request->file('image')){
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $file . '_' . ($count + 1) . '.' . $extension;
            $request->file('image')->storeAs($folder, $newName);
            $validated['image'] = 'storage/' . $folder . '/' . $newName;
        }
        $item = Item::where('id', $id)->first();
        $item->update($validated);

        return redirect('/items')->with('status', 'Item Updated Successfully');

        // Item::create($validated);
        // return redirect('items')->with('status', 'Item Added Successfully');

        

        // $book = Book::where('slug', $slug)->first();
        // $book->update($request->all());

        // if($request->categories){
        //     $book->categories()->sync($request->categories);
        // }

        // return redirect('books')->with('status', 'Book Updated Successfully');
    }
}
