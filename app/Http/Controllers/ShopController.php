<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Shop Controller
    |--------------------------------------------------------------------------
     * Kontroler wyświetlający sklep, obsługujący filtry.
     *
     *TODO: Paginacja JS przy filtrowaniu.
     */


        public function shop()
    {
        $filters=request()->query('filter');
        $paginate=request()->query('paginate')?? 50;

        $query=Product::query();

        if(!is_null($filters)){
            if (array_key_exists('categories', $filters)) {
                $query = $query->whereHas('categories', function ($q) use ($filters) {
                    $q->whereIn('product_category_id', $filters['categories']);
                });
            }
            if(!is_null($filters['price_min'])){
            $query = $query->where('price','>=',$filters['price_min']);
            }
            if(!is_null($filters['price_max'])){
            $query = $query->where('price','<=',$filters['price_max']);
            }

                return response()->json($query->paginate($paginate));
                }

        $products = Product::all();
        $categories = ProductCategory::all();
        return view('shop.shop', [
            'products' => $query->paginate($paginate),
            'categories' => ProductCategory::all(),
            'defaultImage'=>'https://via.placeholder.com/240x240/5fa9f8/efefef']);
    }
}
