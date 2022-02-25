@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-3">
                <div class="card-header">{{ __('Edytuj zamówienie') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('orders.update', $order->id) }}">
                        @method('put')
                        @csrf

                        <div class="form-group row">
                            <label for="id" class="col-md-4 col-form-label text-md-right">{{ __('Numer') }}</label>

                            <div class="col-md-6">
                                <input id="id" type="nember" class="form-control @error('id') is-invalid @enderror" name="id" value="{{ $order->id }}" required autocomplete="id" disabled>

                                @error('id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="owner" class="col-md-4 col-form-label text-md-right">{{ __('Kontrahent') }}</label>

                            <div class="col-md-6">
                                <textarea id="owner" maxlength="1500" class="form-control @error('owner') is-invalid @enderror" name="owner"  autofocus disabled>{{$order -> user -> name}}</textarea>

                                @error('owner')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="amount" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>

                            <div class="col-md-6">
                                <select name="status" class="form-control @error('status') is-invalid @enderror">
                                    <option value="{{ $order->status }}" {!! old('status ') == $order->status ? 'selected="selected"' : '' !!}>{{ $order->status }}</option>
                                    @foreach(config('enums.status') as $key => $value)
                                        {{ $key }}
                                        <option value="{{ $value }}">{{ $value }}</option>
                                    @endforeach
                                </select>

                                @error('country_id')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>



                        <div class="form-group row">
                            <label for="comments" class="col-md-4 col-form-label text-md-right">{{ __('Uwagi') }}</label>

                            <div class="col-md-6">
                                <textarea id="comments" maxlength="1500" class="form-control @error('comments') is-invalid @enderror" name="comments"  autofocus>{{ $order->comments }}</textarea>

                                @error('comments')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="value" class="col-md-4 col-form-label text-md-right">{{ __('Wartość netto') }}</label>

                            <div class="col-md-6">
                                <input id="value" type="number" min="0" step="0.01" class="form-control @error('value') is-invalid @enderror" name="value" value="{{ $order->value }}" required autocomplete="value"  autofocus>

                                @error('value')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="payment" class="col-md-4 col-form-label text-md-right">{{ __('Sposób płatności') }}</label>

                            <div class="col-md-6">
                                <td style="white-space: pre-wrap;">
                                    <input id="payment" type="text" class="form-control" name="payment" value="{!! $order->payment !!}" required autocomplete="amount"  disabled>
                                </td>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="delivery_address" class="col-md-4 col-form-label text-md-right">{{ __('Adres dostawy') }}</label>

                            <div class="col-md-6">
                                <textarea id="delivery_address" maxlength="1500" class="form-control @error('delivery_address') is-invalid @enderror" name="delivery_address"  autofocus>{{ $order->delivery_address }}</textarea>

                                @error('delivery_address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Zapisz') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
