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
                                <input id="name" type="text" maxlength="500" class="form-control" name="name" value="{{ $product->name }}" required autocomplete="name" disabled>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Opis') }}</label>

                            <div class="col-md-6">
                                <textarea id="description" maxlength="1500" class="form-control " name="description"  autofocus disabled>{{ $product->description }}</textarea>
                            </div>
                        </div>

{{--                        <div class="form-group row">--}}
{{--                            <label for="amount" class="col-md-4 col-form-label text-md-right">{{ __('Ilość') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="amount" type="number" min="0" class="form-control" name="amount" value="{{ $product->amount }}" required autocomplete="amount"  disabled>--}}

{{--                            </div>--}}
{{--                        </div>--}}

                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Cena') }}</label>

                            <div class="col-md-6">
                                <input id="price" type="number" step="0.01" min="0" class="form-control" name="price" value="{{ $product->price }}" required autocomplete="price" disabled>

                            </div>
                        </div>

                    <div class="form-group row">
                        <label for="amount" class="col-md-4 col-form-label text-md-right">{{ __('Konstrukcje') }}</label>

                        <div class="col-md-6">

                            <div class="form-check">
                                <input class="form-check-input" name="kat[]" type="checkbox" value="1" @if($product->categories->contains('1')) checked=checked @endif id="defaultCheck1" disabled>
                                <label class="form-check-label" for="defaultCheck1">
                                    Dach z dachówką
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="kat[]" type="checkbox" value="2" @if($product->categories->contains('2')) checked=checked @endif id="defaultCheck2" disabled>
                                <label class="form-check-label" for="defaultCheck2">
                                    Dach z blachodachówki
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="kat[]" type="checkbox" value="3" @if($product->categories->contains('3')) checked=checked @endif id="defaultCheck3" disabled>
                                <label class="form-check-label" for="defaultCheck3">
                                    Dach z blachą trapezową
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="kat[]" type="checkbox" value="4" @if($product->categories->contains('4')) checked=checked @endif id="defaultCheck4" disabled>
                                <label class="form-check-label" for="defaultCheck4">
                                    Trójkąty z balastem
                                </label>
                            </div>
                        </div>
                    </div>





                    <div class="form-group row justify-content-center">
                        <div class="col-md-6">
                            <img src="{{asset('storage/' . $product->image_path)}}" class="img-fluid mx-auto d-block">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
