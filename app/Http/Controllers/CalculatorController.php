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
        else if ($calculation=='2') return view('calculators.calculation2', compact('calculation'));
        else return view('calculators.calculation3', compact('calculation'));
        
    }
    
}
