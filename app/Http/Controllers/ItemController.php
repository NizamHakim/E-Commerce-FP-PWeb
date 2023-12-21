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
        return view('index', [
            'trending5' => $trending5,
            'itemlist' => $featuredItems,
            'itemlist_title' => $itemlist_title
        ]);
    }

    public function detail($id)
    {   
        $itemdetails = Item::find($id);
        $relatedItems = Item::where('item_category_id', $itemdetails->item_category_id)->inRandomOrder()->limit(4)->get();
        $itemlist_title = "Related Items";

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
                'addedToCart' => $addedToCart
            ]);
            
        } else {
            return view('detail', [
                'itemdetails' => $itemdetails,
                'itemlist' => $relatedItems,
                'itemlist_title' => $itemlist_title,
                'addedToCart' => false
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

        return view('categories', [
            'categories' => $categories,
            'categoryImages' => $categoryImages,
            'items' => $items
        ]);
    }

    public function category($id)
    {   
        $itemsfromcategory = Item::where('item_category_id', $id)->get();
        $categoryname = ItemCategory::find($id)->name;
        $itemlist_title = "$categoryname";
        
        return view('category', [
            'itemlist' => $itemsfromcategory,
            'itemlist_title' => $itemlist_title
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

    public function search(Request $request)
    {
        $items = Item::where('name', 'like', '%'.$request->keyword.'%')->get();
        $itemlist_title = "Search Results for \"$request->keyword\"";

        return view('category', [
            'itemlist' => $items,
            'itemlist_title' => $itemlist_title
        ]);
    }
}
