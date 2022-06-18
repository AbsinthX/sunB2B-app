<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Cart Controller
    |--------------------------------------------------------------------------
     *  Koszyk wykorzystuje paczkę LaravelShoppingcart by bumbummen99 (https://github.com/bumbummen99/LaravelShoppingcart).
     * Implemetacja koszyka wykorzystana na stronie sklepu, pozwalająca dodawać i usuwać produkty z koszyka, które zapisywane są w sesji użytkownika.
     *
     */

    public function index(Request $request)
    {
        $product = Product::all();
        $cart = Cart::content();
        $total = Cart::total();

        return view('cart.index', compact('product','cart','total'));
    }



    public function store(Request $request)
    {
        $product = Product::findOrFail($request->input('product_id'));

        Cart::add(
            $product->id,
            $product->name,
            $request->input('quantity'),
            $product->price
        );
        return redirect()->route('shop')->with('message','Produkt dodany do koszyka.');
    }

    public function delete($rowId)
    {
        Cart::remove($rowId);

        return redirect()->route('cart.show');
    }



}
