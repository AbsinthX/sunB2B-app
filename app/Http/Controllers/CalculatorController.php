<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CalculatorsService;

class CalculatorController extends Controller
{
    
    public function index()
    {
        return view('calculators.index');
    }
    
    public function calculate(CalculatorsService $service)
    {
        $service->calculate();
    }
    
}
