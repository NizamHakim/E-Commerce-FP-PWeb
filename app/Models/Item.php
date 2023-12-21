<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Item extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable=[
        'name',
        'item_category_id',
        'price',
        'description',
        'image',
        'stock'
    ];

    public function category(){
        return $this->belongsTo(ItemCategory::class, 'item_category_id');
    }

    public function carts(){
        return $this->hasMany(Cart::class);
    }

    public function order_details(){
        return $this->hasMany(OrderDetails::class);
    }
}
