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
                                <INPUT hidden name='konstrukcja' VALUE= "{{ $_GET['construction'] }}">
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

                                            @foreach ($calculation as $kalk)
                                                <tr>
                                                    <th scope="row">{{$loop->iteration}}</th>
                                                    <td> {{$products[$kalk[0]-1]->name}}</td>
                                                    <td><input disabled style="border: none;    background-color: transparent;" id="{{"a".$loop->iteration}}" type="number" class="form-control" value="{{ $products[$kalk[0]-1]->price }}" /></td>
                                                    <input type='hidden' name="kalkulacja[{{$loop->iteration}}][id]" id='{{$loop->iteration}}' value="{{$kalk[0]}}"></input>
                                                    <td> <input id="{{"b".$loop->iteration}}" name=kalkulacja[{{$loop->iteration}}][ilosc] oninput="przelicz({{$loop->iteration}})" pattern=" 0+\.[0-9]*[1-9][0-9]*$" onkeypress="return event.charCode >= 48 && event.charCode <= 57" type="number" MIN="0" MAX="1000" STEP="1"  class="form-control" value="{{ $kalk[1] }}" /> </td>
                                                    <td><input disabled class="cena" style="border: none;    background-color: transparent;" id="{{"c".$loop->iteration}}" type="number" input="number" step="0.01"class="form-control" value="" /></td>
                                                </tr>

                                            @endforeach



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

return true;
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
