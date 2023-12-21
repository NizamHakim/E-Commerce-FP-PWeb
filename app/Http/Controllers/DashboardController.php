<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\ItemCategory;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $itemCount = Item::count();
        $categoryCount = ItemCategory::count();
        $userCount = User::count();
        
        return view('admin.dashboard', [
            'item_count' => $itemCount,
            'category_count' => $categoryCount,
            'user_count' => $userCount,
        ]);
    }
}
