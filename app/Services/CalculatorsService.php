<?php

namespace App\Services;

use App\Models\Order;
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
            //$_GET['1'] = Product::find(1)->name;
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

    public function order1(Request $request){
        $order = Order::create([
            'owner' => Auth::id(),
            'status' => 'Przychodzące',
            'comments' => 'Brak',
            'value' => $_POST['result1'],
            'delivery_address' => 'O chuj',
            'user_id' => Auth::id(),
        ]);

        $order->products()->sync([
            1 => ['amount' => $_POST['1']],
            3 => ['amount' => $_POST['2']],
            4 => ['amount' => $_POST['3']],
            5 => ['amount' => $_POST['4']],
            6 => ['amount' => $_POST['5']],
            8 => ['amount' => $_POST['6']],
            10 => ['amount' => $_POST['7']],
            12 => ['amount' => $_POST['8']],
            13 => ['amount' => $_POST['9']],
            14 => ['amount' => $_POST['10']],
            17 => ['amount' => $_POST['11']],
        ]);



        return 'Sukces';
    }



}
