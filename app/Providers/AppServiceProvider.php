<?php

namespace App\Providers;

use App\Models\Item;
use Illuminate\Support\Facades\View;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $itemscount = Item::count();
        View::share('itemscount', $itemscount);
    }
}
