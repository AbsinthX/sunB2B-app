<?php
namespace App\Http\Controllers\Auth;

use App\Models\Country;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterStep2Controller extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Step 2 Controller
    |--------------------------------------------------------------------------
     * Dodany drugi krok do standardowej Laravel'owej rejestracji, pozwalający uzupełnić więcej danych o użytkowniku.
     *
     * Krok jest opcjonalny, rejestracja występuje w kroku pierwszym, stąd nadpisanie konstruktora o middleware.
     */


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showForm()
    {
        $countries = Country::all();
        return view('auth.register_step2', compact('countries'));
    }

    public function postForm(Request $request)
    {
        auth()->user()->update($request->all());
        return redirect()->route('home');
    }

}
