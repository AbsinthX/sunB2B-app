<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductProductCategory extends Model
{
    /*
     * Model pivot odpowiadający za powiązanie produktów z kategoriami.
     * Brak dodatkowych pól.
     */
    use HasFactory;
}
