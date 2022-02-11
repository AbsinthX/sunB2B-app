@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-3">
                <div class="card-header">{{ __('Edytuj użytkownika') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('users.update', $user->id) }}">
                        @method('put')
                        @csrf

                      <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nazwa') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" maxlength="500" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" maxlength="50" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Telefon') }}</label>
                            <div class="col-md-6">
                                <input id="phone" type="text" maxlength="12" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control @error('phone') is-invalid @enderror"  name="phone" value="{{ $user->phone }}" required autocomplete="phone" autofocus>
                                @error('nip')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('NIP') }}</label>
                            <div class="col-md-6">
                                <input id="nip" type="text" maxlength="10" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control @error('nip') is-invalid @enderror"  name="nip" value="{{ $user->nip }}" required autocomplete="nip" autofocus>
                                @error('nip')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Ulica') }}</label>
                            <div class="col-md-6">
                                <input id="street" type="text" maxlength="50" class="form-control @error('street') is-invalid @enderror"  name="street" value="{{ $user->street }}" required autocomplete="street" autofocus>
                                @error('street')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Kod pocztowy') }}</label>
                            <div class="col-md-6">
                                <input id="postal_code" type="text" maxlength="10" class="form-control @error('postal_code') is-invalid @enderror"  name="postal_code" value="{{ $user->postal_code }}" required autocomplete="postal_code" autofocus>
                                @error('postal_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Miasto') }}</label>
                            <div class="col-md-6">
                                <input id="city" type="text" maxlength="50" class="form-control @error('city') is-invalid @enderror"  name="city" value="{{ $user->city }}" required autocomplete="city" autofocus>
                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Województwo') }}</label>

                            <div class="col-md-6">
                                <select name="state" class="form-control @error('state') is-invalid @enderror">
                                    <option value="{{ $user->state }}" {!! old('state') == $user->state ? 'selected="selected"' : '' !!}>{{ $user->state }}</option>
                                    @foreach(config('enums.states') as $key => $value)
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
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Państwo') }}</label>

                            <div class="col-md-6">
                                <select name="country_id" class="form-control @error('country_id') is-invalid @enderror">
                                    <option value="{{ $user->country_id ?? "" }}" {!! old('country_id') == $user->country_id ? 'selected="selected"' : '' !!}>{{ $user ->country->name ?? "" }}</option>
                                    @foreach ($countries as $country)
                                        <option value="{{ $country->id }}">{{ $country->name ?? "" }}</option>
                                    @endforeach
                                </select>

                                @error('country_id')
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
