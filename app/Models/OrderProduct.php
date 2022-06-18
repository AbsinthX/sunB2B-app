<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use \Illuminate\Database\Eloquent\Relations\Pivot;

class OrderProduct extends Pivot
{
    /*
     * Model pivot odpowiedzialny za produkty powiązane z zamówieniami.
     * Ma dodatkowe pole odpowiadające za ilość produktów.
     */
    use HasFactory;

    protected $fillable = [
        'amount',
    ];
}
