<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    /*
     * Model odpowiedzialny za kategorie produktów.
     */
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function products()
    {
        // Relacja many to many z produktami.
        return $this->belongsToMany(Product::class)->withTimestamps();
    }
}
