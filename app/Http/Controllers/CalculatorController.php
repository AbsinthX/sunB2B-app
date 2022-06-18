<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CalculatorsService;
use App\Models\Product;

class CalculatorController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Calculator Controller
    |--------------------------------------------------------------------------
     * Ten kontroler odpowiada za obsługę kalkulatora elementów dostępnego w aplikacji.
     * Cała logika biznesowa, zgodnie z dobrymi praktykami, została wyodrębniona do serwisu.
     * Kontroler jedynie pośredniczy w przekazywaniu zapytań i odpowiedzi do widoków.
     *
     */

    public function index()
    {
        return view('calculators.index');
    }

    public function calculate(Request $request, CalculatorsService $service)
    {
        /*
         * Funkcja przyjmuje ilość rzędów oraz paneli, a także rodzaj konstrukcji, a następnie przekazuje
         * do CalculatorsService celem obliczenia ilości elementów.
         * Po otrzymaniu wyniku zwraca go do widoku z kalkulacją gdzie użytkownik wciąż może je edytować.
         */


        $products = Product::all();
        $temp = (new CalculatorsService())->calculate($request);
        $konstrukcja = $temp[1];
        $calculation = $temp[0];

            return view('calculators.calculationGen', compact('calculation','products'));
    }

    public function summary(Request $request, CalculatorsService $service)
    {
        /*
         * Funkcja pobiera dane z widoku gdzie użytkownik może zmienić ich ilość - jeżeli nie zgadza się z kalkulacją.
         * Dane te przekazywane są bezpośrednio do podsumowania zamówienia.
         */

        $products = Product::all();
        $sum = $request->all();


        return view('calculators.summary', compact('sum','products'));
    }



    public function orderComplete(Request $request, CalculatorsService $service)
    {
        /*
         * Funkcja składa zamówienie.
         * Pobiera dane z podsumowania oraz uzupełnione dane jak adres wysyłki/metoda płatności, po czym składa
         * zamówienie za pomocą CalculatorsService.
         * Zwraca widok potwierdzający złożenie zamówienia.
         */

        $products = Product::all();
        $sum = $request->all();
        $array = unserialize(base64_decode($_POST['result']));

        $temp = (new CalculatorsService())->order($request);


        return view('calculators.complete', compact('sum','products','array'));
    }


}
