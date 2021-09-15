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
            $tbl = array('1');
            //$_GET['1'] = Product::find(1)->name;
            $panele = filter_input(INPUT_GET, "panele", FILTER_VALIDATE_INT);
            $rzedy = filter_input(INPUT_GET, "rzędy", FILTER_VALIDATE_INT);

            $tbl[] = $profil = ceil(1.1 * $panele);
            //echo $profil." profili"."<br>";
            $tbl[] = $klemyk = ceil(1.1 * $rzedy * 4);
            //echo $klemyk." klem końcowych"."<br>";
            $tbl[] = $klemys = ceil(1.1 * ($panele * 2 - $rzedy * 2));
            //echo $klemys." klem środkowych"."<br>";
            $tbl[] = $haki = ceil(1.1 * $panele * 2.5);
            //echo $haki." haków regulowanych podwójnych typu Vario "."<br>";
            $tbl[] = $zaslepki = ceil(1.1 * $rzedy * 4);
            //echo $zaslepki." zaślepek plastikowych"."<br>";
            $tbl[] = $srubimb = ceil(1.1 * (($panele * 2 - $rzedy * 2) + ($rzedy * 4)));
            //echo $srubimb." śrub imbusowych"."<br>";
            $tbl[] = $wpust = ceil($srubimb);
            //echo $wpust." wpustów uniwersalnych"."<br>";
            $tbl[] = $srubamlot = ceil($haki);
            //echo $srubamlot." śrub młotkowych"."<br>";
            $tbl[] = $lacznik = ceil(1.1 * $panele * 2);
            //echo $lacznik." łączników do szyn"."<br>";
            $tbl[] = $nakretka = ceil($haki);
            //echo $nakretka." nakrętek kołnierzowych"."<br>";
            $tbl[] = $wkret = ceil(1.1 * $panele * 2.5 * 2);
            //echo $wkret." wkrętów do drewna"."<br>";
            //var_dump($tbl);
            return $tbl;
        } else if ($_GET['construction'] == 'Dach z blachodawchówki') {

            $tbl = array('2');
            //$_GET['1'] = Product::find(1)->name;
            $panele = filter_input(INPUT_GET, "panele", FILTER_VALIDATE_INT);
            $rzedy = filter_input(INPUT_GET, "rzędy", FILTER_VALIDATE_INT);
            //echo "robimy blachę "."<br>";
            $tbl[] = $profil = ceil(1.1 * $panele);
            //echo $profil." profili"."<br>";
            $tbl[] = $dwugwint = ceil(1.1 * $panele * 2.5);
            //echo $dwugwint." śrub dwugwintowych"."<br>";
            $tbl[] = $klemyk = ceil(1.1 * $rzedy * 4);
            //echo $klemyk." klem końcowych"."<br>";
            $tbl[] = $klemys = ceil(1.1 * ($panele * 2 - $rzedy * 2));
            //echo $klemys." klem środkowych"."<br>";
            $tbl[] = $zaslepki = ceil(1.1 * $rzedy * 4);
            //echo $zaslepki." zaślepek plastikowych"."<br>";
            $tbl[] = $srubimb = ceil(1.1 * (($panele * 2 - $rzedy * 2) + ($rzedy * 4)));
            //echo $srubimb." śrub imbusowych"."<br>";
            $tbl[] = $wpust = ceil($srubimb);
            //echo $wpust." wpustów uniwersalnych"."<br>";
            $tbl[] = $adapter = ceil($dwugwint);
            //echo $adapter." adapterów montażowych"."<br>";
            $tbl[] = $srubamlot = ceil($dwugwint);
            //echo $srubamlot." śrub młotkowych"."<br>";
            $tbl[] = $lacznik = ceil(1.1 * $panele * 2);
            //echo $lacznik." łączników do szyn"."<br>";
            $tbl[] = $nakretka = ceil($dwugwint);
            //echo $nakretka." nakrętek kołnierzowych"."<br>";

            return $tbl;
        } else if ($_GET['construction'] == 'Dach z blachą trapezową') {
            $tbl = array('3');
            //$_GET['1'] = Product::find(1)->name;
            $panele = filter_input(INPUT_GET, "panele", FILTER_VALIDATE_INT);
            $rzedy = filter_input(INPUT_GET, "rzędy", FILTER_VALIDATE_INT);

            //echo "robimy trapez "."<br>";
            $tbl[] = $klemyk = ceil(1.1 * $rzedy * 4);
            //echo $klemyk." klem końcowych"."<br>";
            $tbl[] = $klemys = ceil(1.1 * ($panele * 2 - $rzedy * 2));
            //echo $klemys." klem środkowych"."<br>";
            $tbl[] = $srubimb = ceil(1.1 * (($panele * 2 - $rzedy * 2) + ($rzedy * 4)));
            //echo $srubimb." śrub imbusowych"."<br>";
            $tbl[] = $wpust = ceil($srubimb);
            //echo $wpust." wpustów uniwersalnych"."<br>";
            $tbl[] = $mostek = ceil(1.1 * (($panele * 2 - $rzedy * 2) + ($rzedy * 4)));
            //echo $mostek." mostków podklejanych"."<br>";
            $tbl[] = $blachowkret = ceil(1.1 * 6 * (($panele * 2 - $rzedy * 2) + ($rzedy * 4)));
            //echo $blachowkret." blachowkrętów"."<br>";
            return $tbl;
        }
        else {
            $tbl = array('4');
            $panele = filter_input(INPUT_GET, "panele", FILTER_VALIDATE_INT);
            $rzedy = filter_input(INPUT_GET, "rzędy", FILTER_VALIDATE_INT);

            $tbl[] = $profil = ceil(1.1 * $panele);
            $tbl[] = $klemyk = ceil(1.1 * $rzedy * 4);
            $tbl[] = $klemys = ceil(1.1 * ($panele * 2 - $rzedy * 2));
            $tbl[] = $srubimb = ceil(1.1 * (($panele * 2 - $rzedy * 2) + ($rzedy * 4)));
            $tbl[] = $wpust = ceil($srubimb);
            $tbl[] = $srubamlot = ceil($panele*2*1.1*1.1*1.1);
            $tbl[] = $nakretka = ceil($srubamlot);
            $tbl[] = $trojkat = ceil($panele*1.1*1.1*1.1);
            $tbl[] = $balast = ceil($panele*4);

            return $tbl;
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
