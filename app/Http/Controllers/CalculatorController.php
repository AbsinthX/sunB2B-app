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
        $calculation = (new CalculatorsService())->calculate($request);


        if ($calculation[0]=='1') return view('calculators.calculation1', compact('calculation','products'));
        else if ($calculation[0]=='2') return view('calculators.calculation2', compact('calculation','products'));
        else if ($calculation[0]=='3') return view('calculators.calculation3', compact('calculation','products'));
        else return view('calculators.calculation4', compact('calculation','products'));
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
