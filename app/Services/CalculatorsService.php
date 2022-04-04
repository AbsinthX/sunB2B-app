<?php

namespace App\Services;

use App\Models\Order;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;


class CalculatorsService {

public function calculate(Request $request)
 {

    if ($_GET['construction'] == 'Dach z dachówką') {
            $tbl = [];
            //$_GET['1'] = Product::find(1)->name;
            $panele = filter_input(INPUT_GET, "panele", FILTER_VALIDATE_INT);
            $rzedy = filter_input(INPUT_GET, "rzędy", FILTER_VALIDATE_INT);

            $tbl[] = [1,$profil = ceil(1.1 * $panele)];
            //echo $profil." profili"."<br>";
            $tbl[] = [3,$klemyk = ceil(1.1 * $rzedy * 4)];
            //echo $klemyk." klem końcowych"."<br>";
            $tbl[] = [4,$klemys = ceil(1.1 * ($panele * 2 - $rzedy * 2))];
            //echo $klemys." klem środkowych"."<br>";
            $tbl[] = [5,$haki = ceil(1.1 * $panele * 2.5)];
            //echo $haki." haków regulowanych podwójnych typu Vario "."<br>";
            $tbl[] = [6,$zaslepki = ceil(1.1 * $rzedy * 4)];
            //echo $zaslepki." zaślepek plastikowych"."<br>";
            $tbl[] = [8,$srubimb = ceil(1.1 * (($panele * 2 - $rzedy * 2) + ($rzedy * 4)))];
            //echo $srubimb." śrub imbusowych"."<br>";
            $tbl[] = [10,$wpust = ceil($srubimb)];
            //echo $wpust." wpustów uniwersalnych"."<br>";
            $tbl[] = [12,$srubamlot = ceil($haki)];
            //echo $srubamlot." śrub młotkowych"."<br>";
            $tbl[] = [13,$lacznik = ceil(1.1 * $panele * 2)];
            //echo $lacznik." łączników do szyn"."<br>";
            $tbl[] = [14,$nakretka = ceil($haki)];
            //echo $nakretka." nakrętek kołnierzowych"."<br>";
            $tbl[] = [17,$wkret = ceil(1.1 * $panele * 2.5 * 2)];
            //echo $wkret." wkrętów do drewna"."<br>";
            //var_dump($tbl);
            return array($tbl,"1");
        } else if ($_GET['construction'] == 'Dach z blachodawchówki') {

            $tbl = [];
            //$_GET['1'] = Product::find(1)->name;
            $panele = filter_input(INPUT_GET, "panele", FILTER_VALIDATE_INT);
            $rzedy = filter_input(INPUT_GET, "rzędy", FILTER_VALIDATE_INT);
            //echo "robimy blachę "."<br>";
            $tbl[] = [1,$profil = ceil(1.1 * $panele)];
            //echo $profil." profili"."<br>";
            $tbl[] = [2,$dwugwint = ceil(1.1 * $panele * 2.5)];
            //echo $dwugwint." śrub dwugwintowych"."<br>";
            $tbl[] = [3,$klemyk = ceil(1.1 * $rzedy * 4)];
            //echo $klemyk." klem końcowych"."<br>";
            $tbl[] = [4,$klemys = ceil(1.1 * ($panele * 2 - $rzedy * 2))];
            //echo $klemys." klem środkowych"."<br>";
            $tbl[] = [6,$zaslepki = ceil(1.1 * $rzedy * 4)];
            //echo $zaslepki." zaślepek plastikowych"."<br>";
            $tbl[] = [8,$srubimb = ceil(1.1 * (($panele * 2 - $rzedy * 2) + ($rzedy * 4)))];
            //echo $srubimb." śrub imbusowych"."<br>";
            $tbl[] = [10,$wpust = ceil($srubimb)];
            //echo $wpust." wpustów uniwersalnych"."<br>";
            $tbl[] = [11,$adapter = ceil($dwugwint)];
            //echo $adapter." adapterów montażowych"."<br>";
            $tbl[] = [12,$srubamlot = ceil($dwugwint)];
            //echo $srubamlot." śrub młotkowych"."<br>";
            $tbl[] = [13,$lacznik = ceil(1.1 * $panele * 2)];
            //echo $lacznik." łączników do szyn"."<br>";
            $tbl[] = [14,$nakretka = ceil($dwugwint)];
            //echo $nakretka." nakrętek kołnierzowych"."<br>";

            return array($tbl,"2");
        } else if ($_GET['construction'] == 'Dach z blachą trapezową') {
            $tbl = [];
            //$_GET['1'] = Product::find(1)->name;
            $panele = filter_input(INPUT_GET, "panele", FILTER_VALIDATE_INT);
            $rzedy = filter_input(INPUT_GET, "rzędy", FILTER_VALIDATE_INT);

            //echo "robimy trapez "."<br>";
            $tbl[] = [3,$klemyk = ceil(1.1 * $rzedy * 4)];
            //echo $klemyk." klem końcowych"."<br>";
            $tbl[] = [4,$klemys = ceil(1.1 * ($panele * 2 - $rzedy * 2))];
            //echo $klemys." klem środkowych"."<br>";
            $tbl[] = [8,$srubimb = ceil(1.1 * (($panele * 2 - $rzedy * 2) + ($rzedy * 4)))];
            //echo $srubimb." śrub imbusowych"."<br>";
            $tbl[] = [10,$wpust = ceil($srubimb)];
            //echo $wpust." wpustów uniwersalnych"."<br>";
            $tbl[] = [15,$mostek = ceil(1.1 * (($panele * 2 - $rzedy * 2) + ($rzedy * 4)))];
            //echo $mostek." mostków podklejanych"."<br>";
            $tbl[] = [16,$blachowkret = ceil(1.1 * 6 * (($panele * 2 - $rzedy * 2) + ($rzedy * 4)))];
            //echo $blachowkret." blachowkrętów"."<br>";
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

    $array = unserialize(base64_decode($request['result']));

    if ($_POST['typ']=='przedplata') {
        $payment = 'Przedpłata';
        $status = 'Przychodzące';
    }
    else {
        $payment = 'Odroczony termin płatności';
        $status = 'Przyjęte do realizacji';
    }


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


        $order = Order::create([
            'owner' => Auth::id(),
            'status' => $status,
            'comments' => $_POST['info'],
            'payment'=> $payment,
            'value' => $array['result1'],
            'delivery_address' => $adres,
            'user_id' => Auth::id(),
        ]);


        foreach ($array['kalkulacja'] as $kalk){
            $order->products()->syncWithoutDetaching([
                $kalk['id'] => ['amount' => $kalk['ilosc']],
                ]);
            }
        Cart::destroy();
        return 'Success';
    }



}
