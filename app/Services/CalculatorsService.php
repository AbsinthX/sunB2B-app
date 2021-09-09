<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Product;


class CalculatorsService {

public function calculate(Request $request)
 {
        
        if ($_GET['construction'] == 'dachówka') {
            $tbl = array ('1','2');
            $_GET['1']=Product::find(1)->name;
            
            
            







            return $tbl;
        } else if ($_GET['construction'] == 'blacha') {
            return ['2'];
        } else
            return ['3'];
    }

}