<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CalculatorsService;
use App\Models\Product;

class CalculatorController extends Controller
{

    public function index()
    {
        return view('calculators.index');
    }

    public function calculate(Request $request, CalculatorsService $service)
    {
        $products = Product::all();
        $temp = (new CalculatorsService())->calculate($request);
        $konstrukcja = $temp[1];
        $calculation = $temp[0];

            return view('calculators.calculationGen', compact('calculation','products'));
    }

    public function summary(Request $request, CalculatorsService $service)
    {
        $products = Product::all();
        $sum = $request->all();


        return view('calculators.summary', compact('sum','products'));
    }



    public function orderComplete(Request $request, CalculatorsService $service)
    {
        $products = Product::all();
        $sum = $request->all();
        $array = unserialize(base64_decode($_POST['result']));

        $temp = (new CalculatorsService())->order($request);


        return view('calculators.complete', compact('sum','products','array'));
    }


}
