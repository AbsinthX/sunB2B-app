@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-3">
                <div class="card-header">{{ __('Podgląd produktu') }}</div>

                <div class="card-body">

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nazwa') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" maxlength="500" class="form-control" name="name" value="{{ $user->name }}" required autocomplete="name" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
                            <div class="col-md-6">
                            <input id="email" type="text" maxlength="500" class="form-control" name="email" value="{{ $user->email }}" required autocomplete="email" disabled>
                        </div>
                            </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Telefon') }}</label>
                            <div class="col-md-6">
                                <input id="phone" type="text" maxlength="500" class="form-control" name="phone" value="{{ $user->phone }}" required autocomplete="phone" disabled>
                                </div>
                        </div>

                        <div class="form-group row">
                            <label for="nip" class="col-md-4 col-form-label text-md-right">{{ __('NIP') }}</label>
                            <div class="col-md-6">
                                <input id="nip" type="text" maxlength="500" class="form-control" name="nip" value="{{ $user->nip }}" required autocomplete="nip" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="street" class="col-md-4 col-form-label text-md-right">{{ __('Ulica') }}</label>
                            <div class="col-md-6">
                                <input id="street" type="text" maxlength="500" class="form-control" name="street" value="{{ $user->street }}" required autocomplete="street" disabled>
                                </div>
                        </div>


                        <div class="form-group row">
                            <label for="postal_code" class="col-md-4 col-form-label text-md-right">{{ __('Kod pocztowy') }}</label>
                            <div class="col-md-6">
                                 <input id="street" type="text" maxlength="500" class="form-control" name="postal_code" value="{{ $user->postal_code }}" required autocomplete="postal_code" disabled>
                                </div>
                        </div>


                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('Miasto') }}</label>
                            <div class="col-md-6">
                                <input id="city" type="text" maxlength="500" class="form-control" name="city" value="{{ $user->city }}" required autocomplete="city" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="state" class="col-md-4 col-form-label text-md-right">{{ __('Województwo') }}</label>

                            <div class="col-md-6">
                                <input id="state" type="text" maxlength="500" class="form-control" name="state" value="{{ $user->state }}" required autocomplete="state" disabled>
                                </div>
                        </div>

                        <div class="form-group row">
                            <label for="country_id" class="col-md-4 col-form-label text-md-right">{{ __('Państwo') }}</label>

                            <div class="col-md-6">
                                <input id="state" type="text" maxlength="500" class="form-control" name="country_id" value="{{ $user -> country->name ?? ""}}" required autocomplete="country_id" disabled>

                            </div>
                        </div>

                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
