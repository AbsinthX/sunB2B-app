@extends('layouts.layout')


@section('content')
    <header class="py-5">
        <div class="container px-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xxl-8">
                            <div class="container1">
                                <div class="Kalkulacja px-md-4">
                                    <div class="card-header text-white bg-dark">{{ __('Produkty') }}</div>
                                    <div class="card-body"></div>
                                    <div class="content" >
                                        <table class="table table-striped">
                                            <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Produkt</th>
                                                <th scope="col">Ilość</th>
                                                <th scope="col">Suma</th>
                                            </tr>
                                            </thead>
                                            @foreach($sum['kalkulacja'] as $kalk)
                                                <tr>
                                                    <th scope="row">{{$loop->iteration}}</th>
                                                    <td>{{$products[$kalk['id']-1]->name}}</td>
                                                    <td>{{ $kalk['ilosc'] }}</td>
                                                    <td>{{$kalk['ilosc'] * $products[$kalk['id']-1]->price  }}</td>
                                                </tr>
                                            @endforeach

                                            <tr>
                                                <th scope="row"></th>
                                                <td></td>
                                                <td>Suma netto</td>
                                                <td>{{$sum['result1']}}</td>
                                            </tr>

                                        </table>
                                    </div>
                                </div>
                                <div class="Adres px-md-4 ">
                                    <div class="card-header text-white bg-dark">{{ __('Dostawa i uwagi') }}</div>
                                    <div class="card-body"></div>
                                    <div class="content" >
                                        <form action="{{ route('calculator.orderComplete') }}" method="POST">
                                            <?php
                                            $postvalue = base64_encode(serialize($sum));
                                            ?>
                                                <input type="hidden" name="result" value="<?php echo $postvalue; ?>">

                                            <div class="form-group">
                                                <div class="checkbox">
                                                    <label><input name="innedane" id="more" type="checkbox"> Podaj inny adres dostawy</label>
                                                </div>
                                                <div id="moreField" style="display:none;">
                                                <label class="col-4 col-form-label" for="name">Odbiorca</label>
                                                <div class="col-8">
                                                    <input id="name" name="name" type="text" class="form-control">
                                                </div>
                                            <div class="form-group">
                                                <label for="street" class="col-4 col-form-label">Ulica</label>
                                                <div class="col-8">
                                                    <input id="street" name="street" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="postal_code" class="col-4 col-form-label">Kod pocztowy</label>
                                                <div class="col-8">
                                                    <input id="postal_code" name="postal_code" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="city" class="col-4 col-form-label">Miejscowość</label>
                                                <div class="col-8">
                                                    <input id="city" name="city" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="state" class="col-4 col-form-label">Województwo</label>
                                                <div class="col-8">
                                                    <input id="state" name="state" type="text" class="form-control">
                                                </div>
                                            </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="state" class="col-4 col-form-label">Uwagi</label>
                                                    <div class="col-8">
                                                        <textarea class="form-control" id="info" name="info" rows="7"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>


                                <div class="Uwagi px-md-4">
                                    <div class="card-header text-white bg-dark">{{ __('Zamówienie') }}</div>
                                    <div class="card-body"></div>
                                    <div class="content" >
                                        <a class="float-left">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="typ"  value="przedplata" checked>
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Przedpłata
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="typ" value="odroczony">
                                                <label class="form-check-label" for="exampleRadios2">
                                                    Odroczony termin płatności
                                                </label>
                                            </div>
                                        </a>
                                        <a class="float-right">
                                            <button type="submit" class="btn btn-primary btn-lg">Zamów</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </header>
@endsection
@section('javascript')
    $("#more").change(function(e){
    e.preventDefault();
    $("#moreField").slideToggle();
    });
@endsection
