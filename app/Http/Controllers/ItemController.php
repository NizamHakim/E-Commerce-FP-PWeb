<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Item;
use App\Models\ItemCategory;
use Illuminate\Http\Request;

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

        if (auth()->check()) {
            $match = [
                'user_id' => auth()->user()->id,
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
}
