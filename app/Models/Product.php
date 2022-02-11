<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_path',
        'name',
        'description',
        'amount',
        'price',
        'category_id'
    ];

    public function orders()
    {
        return $this->belongsToMany(Order::class)->withPivot('amount')->withTimestamps();
    }

    public function categories()
    {
        return $this->belongsToMany(ProductCategory::class)->withTimestamps();
    }

}
