<?php

namespace App\Services;

use App\Models\Order;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;


class CalculatorsService {

    /*
    |--------------------------------------------------------------------------
    | Calculators Service
    |--------------------------------------------------------------------------
     * Serwis odpowiedzialny za logikę biznesową stojącą za kalkulatorem.
     *
     */


public function calculate(Request $request)
 {
     /*
      * Funkcja odpowiedzialna za obliczenie ilości elementów zależnie od konstrukcji.
      * Wynik zwrócony jest w postaci tablicy zawierającej id produktu oraz jego ilość, a także informację o kontrukcji.
      * Wyniki są odpowiednio zaokrąglone i uwzględniają delikatną nadwyżkę.
      * Produkty potrzebne do obliczeń seed'owane są do bazy danych.
      *
      * TODO: Dodać parametr który nie pozwoli na ich usunięcie z bazy danych.
      */

    if ($_GET['construction'] == 'Dach z dachówką') {
            $tbl = [];
            $panele = filter_input(INPUT_GET, "panele", FILTER_VALIDATE_INT);
            $rzedy = filter_input(INPUT_GET, "rzędy", FILTER_VALIDATE_INT);
            $tbl[] = [1,$profil = ceil(1.1 * $panele)];
            $tbl[] = [3,$klemyk = ceil(1.1 * $rzedy * 4)];
            $tbl[] = [4,$klemys = ceil(1.1 * ($panele * 2 - $rzedy * 2))];
            $tbl[] = [5,$haki = ceil(1.1 * $panele * 2.5)];
            $tbl[] = [6,$zaslepki = ceil(1.1 * $rzedy * 4)];
            $tbl[] = [8,$srubimb = ceil(1.1 * (($panele * 2 - $rzedy * 2) + ($rzedy * 4)))];
            $tbl[] = [10,$wpust = ceil($srubimb)];
            $tbl[] = [12,$srubamlot = ceil($haki)];
            $tbl[] = [13,$lacznik = ceil(1.1 * $panele * 2)];
            $tbl[] = [14,$nakretka = ceil($haki)];
            $tbl[] = [17,$wkret = ceil(1.1 * $panele * 2.5 * 2)];
            return array($tbl,"1");

        } else if ($_GET['construction'] == 'Dach z blachodawchówki') {

            $tbl = [];
            $panele = filter_input(INPUT_GET, "panele", FILTER_VALIDATE_INT);
            $rzedy = filter_input(INPUT_GET, "rzędy", FILTER_VALIDATE_INT);
            $tbl[] = [1,$profil = ceil(1.1 * $panele)];
            $tbl[] = [2,$dwugwint = ceil(1.1 * $panele * 2.5)];
            $tbl[] = [3,$klemyk = ceil(1.1 * $rzedy * 4)];
            $tbl[] = [4,$klemys = ceil(1.1 * ($panele * 2 - $rzedy * 2))];
            $tbl[] = [6,$zaslepki = ceil(1.1 * $rzedy * 4)];
            $tbl[] = [8,$srubimb = ceil(1.1 * (($panele * 2 - $rzedy * 2) + ($rzedy * 4)))];
            $tbl[] = [10,$wpust = ceil($srubimb)];
            $tbl[] = [11,$adapter = ceil($dwugwint)];
            $tbl[] = [12,$srubamlot = ceil($dwugwint)];
            $tbl[] = [13,$lacznik = ceil(1.1 * $panele * 2)];
            $tbl[] = [14,$nakretka = ceil($dwugwint)];
            return array($tbl,"2");

        } else if ($_GET['construction'] == 'Dach z blachą trapezową') {
            $tbl = [];
            $panele = filter_input(INPUT_GET, "panele", FILTER_VALIDATE_INT);
            $rzedy = filter_input(INPUT_GET, "rzędy", FILTER_VALIDATE_INT);
            $tbl[] = [3,$klemyk = ceil(1.1 * $rzedy * 4)];
            $tbl[] = [4,$klemys = ceil(1.1 * ($panele * 2 - $rzedy * 2))];
            $tbl[] = [8,$srubimb = ceil(1.1 * (($panele * 2 - $rzedy * 2) + ($rzedy * 4)))];
            $tbl[] = [10,$wpust = ceil($srubimb)];
            $tbl[] = [15,$mostek = ceil(1.1 * (($panele * 2 - $rzedy * 2) + ($rzedy * 4)))];
            $tbl[] = [16,$blachowkret = ceil(1.1 * 6 * (($panele * 2 - $rzedy * 2) + ($rzedy * 4)))];
            return array($tbl,"3");
        }
        else {
            $tbl = [];
            $panele = filter_input(INPUT_GET, "panele", FILTER_VALIDATE_INT);
            $rzedy = filter_input(INPUT_GET, "rzędy", FILTER_VALIDATE_INT);

            $tbl[] = [1,$profil = ceil(1.1 * $panele)];
            $tbl[] = [3,$klemyk = ceil(1.1 * $rzedy * 4)];
            $tbl[] = [4,$klemys = ceil(1.1 * ($panele * 2 - $rzedy * 2))];
            $tbl[] = [8,$srubimb = ceil(1.1 * (($panele * 2 - $rzedy * 2) + ($rzedy * 4)))];
            $tbl[] = [10,$wpust = ceil($srubimb)];
            $tbl[] = [12,$srubamlot = ceil($panele*2*1.1*1.1*1.1)];
            $tbl[] = [14,$nakretka = ceil($srubamlot)];
            $tbl[] = [18,$trojkat = ceil($panele*1.1*1.1*1.1)];
            $tbl[] = [19,$balast = ceil($panele*4)];

            return array($tbl,"4");
        }
    }

    public function order(Request $request){

    /*
     * Funkcja odpowiedzialna za złożenie zamówienia.
     * Obsługuje zarowno kalkulatory jak i zamowienia zlozone przez sklep i koszyk.
     * W zależności od wyboru ustawia odpowiedni status zamówienia.
     * Jeżeli jest ustawiony uzupełnia także inny adres dostawy.
     */

    $array = unserialize(base64_decode($request['result']));

    // Ustawienie statusu w zależności od sposobu płatności
    if ($_POST['typ']=='przedplata') {
        $payment = 'Przedpłata';
        $status = 'Przychodzące';
    }
    else {
        $payment = 'Odroczony termin płatności';
        $status = 'Przyjęte do realizacji';
    }

    // Dodanie dodatkowych danych adresowych jeżeli wybrane i uzupełnione
    if (isset($_POST['innedane'])){
        $adres = $_POST['name'].'
'.
$_POST['street'].'
'.
$_POST['postal_code'].'
'.
$_POST['city'].'
';
    }
    else $adres = 'Standardowy';

        //Złożenie zamówienia w bazie, przypisanie do aktualnego użytkownika
        $order = Order::create([
            'owner' => Auth::id(),
            'status' => $status,
            'comments' => $_POST['info'],
            'payment'=> $payment,
            'value' => $array['result1'],
            'delivery_address' => $adres,
            'user_id' => Auth::id(),
        ]);

        //Stworzenie połączenia many to many - pivot table
        foreach ($array['kalkulacja'] as $kalk){
            $order->products()->syncWithoutDetaching([
                $kalk['id'] => ['amount' => $kalk['ilosc']],
                ]);
            }

        //Usuniecie koszyka jezeli zamowienie zlozone przez sklep
        Cart::destroy();
        return 'Success';
    }



}
