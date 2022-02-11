<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'owner',
        'status',
        'comments',
        'value',
        'delivery_address'
    ];




    public function user()
    {
        return $this->belongsTo(User::class, 'owner');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('amount')->withTimestamps();
    }
}
