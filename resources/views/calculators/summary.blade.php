@extends('layouts.app')


@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card w-100">


                    <div class="card-header">{{ __('Kalkulacja') }}</div>

                    <div class="card-body">



                            <div class="container1">
                                <div class="Kalkulacja px-md-4">
                                    <div class="card-header">{{ __('Produkty') }}</div>
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
                                            <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>{{ $products[0]->name }}</td>
                                                <td>{{$sum['1']}}</td>
                                                <td>{{$sum['1'] * $products[0]->price }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>{{ $products[2]->name }}</td>
                                                <td>{{$sum['2']}}</td>
                                                <td>{{$sum['2'] * $products[2]->price }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>{{ $products[3]->name }}</td>
                                                <td>{{$sum['3']}}</td>
                                                <td>{{$sum['3'] * $products[3]->price }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td>{{ $products[4]->name }}</td>
                                                <td>{{$sum['4']}}</td>
                                                <td>{{$sum['4'] * $products[4]->price }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">5</th>
                                                <td>{{ $products[5]->name }}</td>
                                                <td>{{$sum['5']}}</td>
                                                <td>{{$sum['5'] * $products[5]->price }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">6</th>
                                                <td>{{ $products[7]->name }}</td>
                                                <td>{{$sum['6']}}</td>
                                                <td>{{$sum['6'] * $products[7]->price }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">7</th>
                                                <td>{{ $products[9]->name }}</td>
                                                <td>{{$sum['7']}}</td>
                                                <td>{{$sum['7'] * $products[9]->price }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">8</th>
                                                <td>{{ $products[11]->name }}</td>
                                                <td>{{$sum['8']}}</td>
                                                <td>{{$sum['8'] * $products[11]->price }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">9</th>
                                                <td>{{ $products[12]->name }}</td>
                                                <td>{{$sum['9']}}</td>
                                                <td>{{$sum['9'] * $products[12]->price }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">10</th>
                                                <td>{{ $products[13]->name }}</td>
                                                <td>{{$sum['10']}}</td>
                                                <td>{{$sum['10'] * $products[13]->price }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">11</th>
                                                <td>{{ $products[16]->name }}</td>
                                                <td>{{$sum['11']}}</td>
                                                <td>{{$sum['11'] * $products[16]->price }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"></th>
                                                <td></td>
                                                <td>Suma netto</td>
                                                <td>{{$sum['result1']}}</td>
                                            </tr>


                                            </tbody>
                                        </table>

                                    </div>
                                </div>

                                <div class="Adres px-md-4 ">
                                    <div class="card-header">{{ __('Dostawa i uwagi') }}</div>
                                    <div class="card-body"></div>
                                    <div class="content" >

                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <label class="col-4 col-form-label" for="name">Odbiorca</label>
                                                <div class="col-8">
                                                    <input id="name" name="name" type="text" class="form-control" required="required">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="street" class="col-4 col-form-label">Ulica</label>
                                                <div class="col-8">
                                                    <input id="street" name="street" type="text" class="form-control" required="required">
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
                                            <div class="form-group">
                                                <div class="offset-4 col-8">
                                                    <button name="submit" type="submit" class="btn btn-primary">Zapisz</button>
                                                </div>
                                            </div>
                                        </form>


                                    </div>
                                </div>


                                <div class="Uwagi px-md-4">
                                    <div class="card-header">{{ __('Zamówienie') }}</div>
                                    <div class="card-body"></div>
                                    <div class="content" >
                                        <a class="float-left">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Przedpłata
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                            <label class="form-check-label" for="flexRadioDefault2">
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
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
