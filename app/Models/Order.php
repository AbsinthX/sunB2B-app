<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /*
     * Model odpowiadający za zamówienia.
     */

    use HasFactory;

    protected $fillable = [
        'owner',
        'status',
        'comments',
        'value',
        'delivery_address',
        'user_id',
        'payment'
    ];




    public function user()
    {
        // Relacja one to many z użytkownikami.
        return $this->belongsTo(User::class);
    }

    public function products()
    {
        // Relacja many to many z produktami. Dodatkowa wartość w tabeli pivot -> ilość.
        return $this->belongsToMany(Product::class)->withPivot('amount')->withTimestamps();
    }
}
