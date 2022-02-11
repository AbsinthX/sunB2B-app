@extends('layouts.layout')


@section('content')

    <header class="py-5">
        <div class="container px-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xxl-6">
                    <div class="text-center my-5">
                        <h1 class="fw-bolder mb-3">Dziękujemy za złożenie zamówienia.</h1>
                        <p class="lead fw-normal text-muted mb-4">Postaramy się zrealizować je tak szybko jak to możliwe.</p>
                        <a class="btn btn-primary btn-lg" href="{{ route('orders.index') }}">Moje zamówienia</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection
