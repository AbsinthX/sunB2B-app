@extends('layouts.layout')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card w-100 mt-3 mb-3">
                    <div class="card-header"><i class="fas fa-list"></i> Zawartość koszyka:</div>

                    <form class="form-horizontal" action="{{ route('calculator.summary') }}" method="POST">
                    <div class="container">
                        <div class="row">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th style="width: 5%" scope="col">#</th>
                                    <th style="width: 15%" scope="col">Nazwa</th>
                                    <th style="width: 10%" scope="col">Cena jednostkowa</th>
                                    <th style="width: 5%" scope="col">Ilość</th>
                                    <th style="width: 10%" scope="col">Wartość</th>
                                    <th style="width: 10%" scope="col">Usuń produkt</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($cart as $c)
                                    <input type='hidden' name="kalkulacja[{{$loop->iteration}}][id]" value="{{$c->id}}"></input>
                                    <input type='hidden' name="kalkulacja[{{$loop->iteration}}][ilosc]" value="{{$c->qty}}"></input>

                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td class="align-middle">{{$c -> name}}</td>
                                        <td class="align-middle">{{$c -> price}}</td>
                                        <td class="align-middle">{{$c -> qty}}</td>
                                        <td class="align-middle">{{$c -> qty * $c -> price}}</td>
                                        <td class="align-middle">
                                            <a href="{{route('cart.delete', $c -> rowId) }}">
                                                <button type="button" class="btn btn-danger btn-sm delete"><i
                                                        class="fas fa-trash-alt"></i>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="d-flex justify-content-end mb-3 mr-3">
                            <div>Suma: {{$total}}</div>
                            <input type='hidden' name="result1" value="{{$total}}"></input>
                        </div>
                        <div class="d-flex justify-content-end mb-3 mr-3">
                            <a class="float-right">
                                <button type="submit" class="btn btn-primary btn-lg">Zamów</button>
                            </a>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
