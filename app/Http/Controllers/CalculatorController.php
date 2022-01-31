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



    public function order1(Request $request, CalculatorsService $service)
    {
        $order1 = (new CalculatorsService())->order1($request);

return 'Sukces';
        //return view('calculators.order1view', compact('order1'));
    }


}
