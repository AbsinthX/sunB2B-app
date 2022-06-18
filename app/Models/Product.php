<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /*
     * Model odpowiadający za produkty znajdujące się w sklepie.
     */

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
        // Relacja many to many z zamówieniami, dodatkowe pole w tabeli pivot -> ilość.
        return $this->belongsToMany(Order::class)->withPivot('amount')->withTimestamps();
    }

    public function categories()
    {
        // Relacja many to many z kategoriami.
        return $this->belongsToMany(ProductCategory::class)->withTimestamps();
    }

}
