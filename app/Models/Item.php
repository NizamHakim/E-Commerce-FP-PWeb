<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'category_id',
        'price',
        'description',
        'image',
        'stock'
    ];

    public function category(){
        return $this->belongsTo(ItemCategory::class);
    }

    public function carts(){
        return $this->hasMany(Cart::class);
    }

    public function order_details(){
        return $this->hasMany(OrderDetails::class);
    }
}
