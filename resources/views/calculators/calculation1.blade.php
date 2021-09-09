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
                            <form class="form-horizontal">                   
                                <div class="row">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Nazwa</th>
                                                <th scope="col">Cena jednostkowa</th>
                                                <th style="width: 20%" scope="col">Ilość</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>{{ $products[0]->name }}</td>
                                                <td>{{ $products[0]->price }}</td>
                                                <td> <input type="number" class="form-control" value="{{ $products[0]->amount }}" /> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </form>                       


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection