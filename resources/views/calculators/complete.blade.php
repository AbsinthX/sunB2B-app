@extends('layouts.app')


@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card w-100">


                    <div class="card-header">{{ __('Kalkulacja') }}</div>
                    <div class="card-body mx-auto">
                            <h1>Dziękujemy za złożenie zamówienia.</h1><br>
                            <div class="row justify-content-center">
                                <a class="float-lg-none" href="{{ route('orders.index') }}">
                                    <button type="button" class="btn btn-primary btn-lg">Moje zamówienia</button>
                                </a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
