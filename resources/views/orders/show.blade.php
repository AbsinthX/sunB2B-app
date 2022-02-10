@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Podgląd zamówienia') }}</div>

                <div class="card-body">

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Numer zamówienia') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" maxlength="500" class="form-control" name="name" value="{{ $order->id }}" required autocomplete="name" disabled>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Kontrahent') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" maxlength="500" class="form-control" name="name" value="{{ $order->owner }}" required autocomplete="name" disabled>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="amount" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>

                            <div class="col-md-6">
                                <input id="amount" type="text" class="form-control" name="amount" value="{{ $order->status }}" required autocomplete="amount"  disabled>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="amount" class="col-md-4 col-form-label text-md-right">{{ __('Uwagi') }}</label>

                            <div class="col-md-6">
                                <td style="white-space: pre-wrap;">
                                <textarea id="amount" type="text" min="0" class="form-control" name="amount" value="{!! $order->comments !!}" required autocomplete="amount"  disabled>{{ $order->comments }}</textarea>
                                </td>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Wartość netto') }}</label>

                            <div class="col-md-6">
                                <input id="price" type="number" step="0.01" min="0" class="form-control" name="price" value="{{ $order->value }}" required autocomplete="price" disabled>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Wartość brutto') }}</label>

                            <div class="col-md-6">
                                <input id="price" type="number" step="0.01" min="0" class="form-control" name="price" value="{{ $order->value * 1.23 }}" required autocomplete="price" disabled>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="amount" class="col-md-4 col-form-label text-md-right">{{ __('Adres dostawy') }}</label>

                            <div class="col-md-6">
                                <textarea id="amount" type="text" min="0" class="form-control" name="amount" value="{{ $order->delivery_address }}" required autocomplete="amount"  disabled>{{ $order->delivery_address }}</textarea>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="amount" class="col-md-4 col-form-label text-md-right">{{ __('Pozycje zamówienia') }}</label></br>

                            <div class="col-md-6">

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Nazwa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($order->products as $product)
                                        <tr>
                                            <th scope="row">{{ $product->id }}</th>
                                            <td>{{ $product->name }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

<!--                                @foreach($order->products as $product)
                                ID: {{ $product->id }} Ilość: {{ $product->name }}</br>
                                @endforeach-->


                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
