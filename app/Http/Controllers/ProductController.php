<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * Kontroler odpowiadający za produkty.
     * Standardowy CRUD.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('products.index', [
            'products' => Product::paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
         * Dodawanie produktu wraz ze zdjęciem.
         */

         $product = new Product($request->all());
        if($request->hasFile('image')){
            $product->image_path = $request->file('image')->store('products');
        }
         $product->save();
        $product->categories()->sync($request['kat']);
         return redirect(route('products.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', [
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {

        return view('products.edit', [
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        /*
         * Edycja produktu wraz ze zdjęciem.
         * TODO: Usuwanie zdjęcia z dysku przy edycji zdjęcia/usunięciu produktu.
         */

        $product->fill($request->all());
        if($request->hasFile('image')){
            $product->image_path = $request->file('image')->store('products');
        }
        $product->save();
        $product->categories()->sync($request['kat']);
        return redirect(route('products.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
{
        /*
         * Usuwanie produktu wraz ze zdjęciem.
         * TODO: Usuwanie zdjęcia z dysku przy edycji zdjęcia/usunięciu produktu.
         */

            $product = Product::find($id);
            $product->orders()->detach();
            $product->categories()->detach();
            $product->delete();
            return response()->json([
            'status' => 'success']);
}
}
