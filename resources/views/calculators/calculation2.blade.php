@extends('layouts.app')


@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card w-100">


                <div class="card-header">{{ __('Kalkulacja') }}</div>

                <div class="card-body">
                    <div class="col d-flex justify-content-center">

                        <div class="content" >

                             <table class="table table-borderless">
                                 <thead>
                                            <tr>
                                                <th  scope="col">Konstrukcja: {{ $_GET['construction'] }}</th>
                                                <th  scope="col">Rzędy: {{ $_GET['rzędy'] }}</th>
                                                <th  scope="col">Panele: {{ $_GET['panele'] }}</th>
                                                <th  scope="col">
                                                    <a class="float-right" href="{{ route('calculator') }}">
                                                        <button type="button" class="btn btn-primary">Zmień</button>
                                                    </a>
                                                </th>
                                            </tr>
                                        </thead>
                             </table>
                            <form id="form1" class="form-horizontal" action="{{ route('calculator.summary') }}" method="POST">
                                <INPUT hidden name='konstrukcja' VALUE="{{ $_GET['construction'] }}">
                                <INPUT hidden name='rzędy' VALUE={{ $_GET['rzędy'] }}>
                                <INPUT hidden name='panele' VALUE={{ $_GET['panele'] }}>

                                <div class="row">
                                    <table id="myTable" class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th  scope="col">#</th>
                                                <th  scope="col">Nazwa</th>
                                                <th  scope="col">Cena jednostkowa netto</th>
                                                <th  scope="col">Ilość</th>
                                                <th  scope="col">Wartość netto</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>{{ $products[0]->name }}</td>
                                                <td><input disabled style="border: none;    background-color: transparent;" id="a1" type="number" class="form-control" value="{{ $products[0]->price }}" /></td>
                                                <td> <input id="b1" name="1" oninput="przelicz(1)" pattern=" 0+\.[0-9]*[1-9][0-9]*$" onkeypress="return event.charCode >= 48 && event.charCode <= 57" type="number" MIN="0" MAX="1000" STEP="1"  class="form-control" value="{{ $calculation[1] }}" /> </td>
                                                <td><input disabled class="cena" style="border: none;    background-color: transparent;" id="c1" type="number" input="number" step="0.01"class="form-control" value="" /></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>{{ $products[1]->name }}</td>
                                                <td><input disabled style="border: none;    background-color: transparent;" id="a2" type="number" class="form-control" value="{{ $products[1]->price }}" /></td>
                                                <td> <input id="b2" name="2" oninput="przelicz(2)" pattern=" 0+\.[0-9]*[1-9][0-9]*$" onkeypress="return event.charCode >= 48 && event.charCode <= 57" type="number" MIN="0" MAX="1000" STEP="1"  class="form-control" value="{{ $calculation[2] }}" /> </td>
                                                <td><input disabled class="cena" style="border: none;    background-color: transparent;" id="c2" type="number" input="number" step="0.01"class="form-control" value="" /></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>{{ $products[2]->name }}</td>
                                                <td><input disabled style="border: none;    background-color: transparent;" id="a3" type="number" class="form-control" value="{{ $products[2]->price }}" /></td>
                                                <td> <input id="b3" name="3" oninput="przelicz(3)" pattern=" 0+\.[0-9]*[1-9][0-9]*$" onkeypress="return event.charCode >= 48 && event.charCode <= 57" type="number" MIN="0" MAX="1000" STEP="1"  class="form-control" value="{{ $calculation[3] }}" /> </td>
                                                <td><input disabled class="cena" style="border: none;    background-color: transparent;" id="c3" type="number" input="number" step="0.01"class="form-control" value="" /></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td>{{ $products[3]->name }}</td>
                                                <td><input disabled style="border: none;    background-color: transparent;" id="a4" type="number" class="form-control" value="{{ $products[3]->price }}" /></td>
                                                <td> <input id="b4" name="4" oninput="przelicz(4)" pattern=" 0+\.[0-9]*[1-9][0-9]*$" onkeypress="return event.charCode >= 48 && event.charCode <= 57" type="number" MIN="0" MAX="1000" STEP="1"  class="form-control" value="{{ $calculation[4] }}" /> </td>
                                                <td><input disabled class="cena" style="border: none;    background-color: transparent;" id="c4" type="number" input="number" step="0.01"class="form-control" value="" /></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">5</th>
                                                <td>{{ $products[5]->name }}</td>
                                                <td><input disabled style="border: none;    background-color: transparent;" id="a5" type="number" class="form-control" value="{{ $products[5]->price }}" /></td>
                                                <td> <input id="b5" name="5" oninput="przelicz(5)" pattern=" 0+\.[0-9]*[1-9][0-9]*$" onkeypress="return event.charCode >= 48 && event.charCode <= 57" type="number" MIN="0" MAX="1000" STEP="1"  class="form-control" value="{{ $calculation[5] }}" /> </td>
                                                <td><input disabled class="cena" style="border: none;    background-color: transparent;" id="c5" type="number" input="number" step="0.01"class="form-control" value="" /></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">6</th>
                                                <td>{{ $products[7]->name }}</td>
                                                <td><input disabled style="border: none;    background-color: transparent;" id="a6" type="number" class="form-control" value="{{ $products[7]->price }}" /></td>
                                                <td> <input id="b6" name="6" oninput="przelicz(6)" pattern=" 0+\.[0-9]*[1-9][0-9]*$" onkeypress="return event.charCode >= 48 && event.charCode <= 57" type="number" MIN="0" MAX="1000" STEP="1"  class="form-control" value="{{ $calculation[6] }}" /> </td>
                                                <td><input disabled class="cena" style="border: none;    background-color: transparent;" id="c6" type="number" input="number" step="0.01"class="form-control" value="" /></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">7</th>
                                                <td>{{ $products[9]->name }}</td>
                                                <td><input disabled style="border: none;    background-color: transparent;" id="a7" type="number" class="form-control" value="{{ $products[9]->price }}" /></td>
                                                <td> <input id="b7" name="7" oninput="przelicz(7)" pattern=" 0+\.[0-9]*[1-9][0-9]*$" onkeypress="return event.charCode >= 48 && event.charCode <= 57" type="number" MIN="0" MAX="1000" STEP="1"  class="form-control" value="{{ $calculation[7] }}" /> </td>
                                                <td><input disabled class="cena" style="border: none;    background-color: transparent;" id="c7" type="number" input="number" step="0.01"class="form-control" value="" /></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">8</th>
                                                <td>{{ $products[10]->name }}</td>
                                                <td><input disabled style="border: none;    background-color: transparent;" id="a8" type="number" class="form-control" value="{{ $products[10]->price }}" /></td>
                                                <td> <input id="b8" name="8" oninput="przelicz(8)" pattern=" 0+\.[0-9]*[1-9][0-9]*$" onkeypress="return event.charCode >= 48 && event.charCode <= 57" type="number" MIN="0" MAX="1000" STEP="1"  class="form-control" value="{{ $calculation[8] }}" /> </td>
                                                <td><input disabled class="cena" style="border: none;    background-color: transparent;" id="c8" type="number" input="number" step="0.01"class="form-control" value="" /></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">9</th>
                                                <td>{{ $products[11]->name }}</td>
                                                <td><input disabled style="border: none;    background-color: transparent;" id="a9" type="number" class="form-control" value="{{ $products[11]->price }}" /></td>
                                                <td> <input id="b9" name="9" oninput="przelicz(9)" pattern=" 0+\.[0-9]*[1-9][0-9]*$" onkeypress="return event.charCode >= 48 && event.charCode <= 57" type="number" MIN="0" MAX="1000" STEP="1"  class="form-control" value="{{ $calculation[9] }}" /> </td>
                                                <td><input disabled class="cena" style="border: none;    background-color: transparent;" id="c9" type="number" input="number" step="0.01"class="form-control" value="" /></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">10</th>
                                                <td>{{ $products[12]->name }}</td>
                                                <td><input disabled style="border: none;    background-color: transparent;" id="a10" type="number" class="form-control" value="{{ $products[12]->price }}" /></td>
                                                <td> <input id="b10" name="10" oninput="przelicz(10)" pattern=" 0+\.[0-9]*[1-9][0-9]*$" onkeypress="return event.charCode >= 48 && event.charCode <= 57" type="number" MIN="0" MAX="1000" STEP="1"  class="form-control" value="{{ $calculation[10] }}" /> </td>
                                                <td><input disabled class="cena" style="border: none;    background-color: transparent;" id="c10" type="number" input="number" step="0.01"class="form-control" value="" /></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">11</th>
                                                <td>{{ $products[13]->name }}</td>
                                                <td><input disabled style="border: none;    background-color: transparent;" id="a11" type="number" class="form-control" value="{{ $products[13]->price }}" /></td>
                                                <td> <input id="b11" name="11" oninput="przelicz(11)" pattern=" 0+\.[0-9]*[1-9][0-9]*$" onkeypress="return event.charCode >= 48 && event.charCode <= 57" type="number" MIN="0" MAX="1000" STEP="1"  class="form-control" value="{{ $calculation[11] }}" /> </td>
                                                <td><input disabled class="cena" style="border: none;    background-color: transparent;" id="c11" type="number" input="number" step="0.01"class="form-control" value="" /></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"></th>
                                                <td style="text-align: center; vertical-align: middle;"><input type='hidden' name="result1" id='result1' name='result'></input></td>
                                                <td><input disabled style="border: none;    background-color: transparent;" id="total" name="suma1" type="number" input="number" step="0.01"class="form-control" /></td>
                                                <td style="text-align: center; vertical-align: middle;">Suma netto (PLN)</td>
                                                <td><input disabled style="border: none;    background-color: transparent;" class="total" name="suma" id="suma" type="number" input="number" step="0.01"class="form-control" value="" /></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <table class="table table-borderless">
                                    <thead>
                                    <tr>
                                        <th  scope="col"></th>
                                        <th  scope="col"></th>
                                        <th  scope="col"></th>
                                        <th  scope="col">
                                            <a class="float-right">
                                                <button type="submit" class="btn btn-primary btn-lg">Zamów</button>
                                            </a>
                                        </th>
                                    </tr>
                                    </thead>
                                </table>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('javascript')
$(document).ready(function(){
var i;
for (i = 1; i < 13; i++) {
  przelicz(i);
}

var $sum = 0;
    $(".cena").each(function(){
        $sum += +$(this).val();
    });
    $(".total").val(parseFloat($sum).toFixed(2));
    $("#result").val(parseFloat($sum).toFixed(2));
$("#result1").val(parseFloat($sum).toFixed(2));

});

function przelicz(a){
      $("#c"+a).val(parseFloat($("#a"+a).val()*$("#b"+a).val()).toFixed(2));
}

$(document).on('input', function() {
var $sum = 0;
$(".cena").each(function(){
$sum += +$(this).val();
});
$(".total").val(parseFloat($sum).toFixed(2));
$("#result").val(parseFloat($sum).toFixed(2));
$("#result1").val(parseFloat($sum).toFixed(2));


});


@endsection
