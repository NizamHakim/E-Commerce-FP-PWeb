<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Item;
use App\Models\ItemCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    public function index()
    {   
        $trending5 = Item::inRandomOrder()->limit(7)->get();
        $featuredItems = Item::inRandomOrder()->limit(4)->get();
        $itemlist_title = "Featured Items";
        $itemscount = Item::count();
        return view('index', [
            'trending5' => $trending5,
            'itemlist' => $featuredItems,
            'itemlist_title' => $itemlist_title,
            'itemscount' => $itemscount
        ]);
    }

    public function detail($id)
    {   
        $itemdetails = Item::find($id);
        $relatedItems = Item::where('item_category_id', $itemdetails->item_category_id)->inRandomOrder()->limit(4)->get();
        $itemlist_title = "Related Items";
        $itemscount = Item::count();

        if (Auth::check()) {
            $match = [
                'user_id' => Auth::user()->id,
                'item_id' => $id
            ];
    
            $addedToCart = Cart::where($match)->exists();

            return view('detail', [
                'itemdetails' => $itemdetails,
                'itemlist' => $relatedItems,
                'itemlist_title' => $itemlist_title,
                'addedToCart' => $addedToCart,
                'itemscount' => $itemscount
            ]);
            
        } else {
            return view('detail', [
                'itemdetails' => $itemdetails,
                'itemlist' => $relatedItems,
                'itemlist_title' => $itemlist_title,
                'addedToCart' => false,
                'itemscount' => $itemscount
            ]);
        }
    }

    public function categories()
    {   
        $categories = ItemCategory::all();
        $categoryImages = [];
        foreach($categories as $category){
            $categoryImages[$category->id] = Item::where('item_category_id', $category->id)->first('image');
        }
        $items = Item::all();
        $itemscount = Item::count();

        return view('categories', [
            'categories' => $categories,
            'categoryImages' => $categoryImages,
            'items' => $items,
            'itemscount' => $itemscount
        ]);
    }

    public function category($id)
    {   
        $itemsfromcategory = Item::where('item_category_id', $id)->get();
        $categoryname = ItemCategory::find($id)->name;
        $itemlist_title = "$categoryname";
        $itemscount = Item::count();
        
        return view('category', [
            'itemlist' => $itemsfromcategory,
            'itemlist_title' => $itemlist_title,
            'itemscount' => $itemscount
        ]);
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

    public function search(Request $request)
    {
        $items = Item::where('name', 'like', '%'.$request->keyword.'%')->get();
        $itemlist_title = "Search Results for \"$request->keyword\"";
        $itemscount = Item::count();

        return view('category', [
            'itemlist' => $items,
            'itemlist_title' => $itemlist_title,
            'itemscount' => $itemscount
        ]);
    }
  
    public function edit($id)
    {
        $item = Item::find($id);
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
        $item = Item::find($id);
        $item->update($validated);

        return redirect('/items')->with('status', 'Item Updated Successfully');
    }

    public function delete($id)
    {
        $item = Item::find($id);
        return view('admin.item-delete', ['item' => $item]);
    }

    public function destroy($id)
    {
        $item = Item::find($id);
        $item->delete();
        return redirect('/items')->with('status', 'Item Deleted Successfully');
    }

    public function deletedBook()
    {
        $deletedItems = Item::onlyTrashed()->get();
        return view('admin.item-deleted', ['deletedItems' => $deletedItems]);
    }

    public function restore($id)
    {
        $item = Item::withTrashed()->find($id);
        $item->restore();
        return redirect('/items')->with('status', 'Item Restored Successfully');
    }
}
