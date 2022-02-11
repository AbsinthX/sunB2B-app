@extends('layouts.layout')


@section('content')

    <header class="py-5">
        <div class="container px-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xxl-6">
                    <h1 class="fw-bolder mb-3"><i class="fas fa-calculator"></i>Kalkulator</h1>
                    <p class="lead fw-normal text-muted mb-4">
                        Nasz kalkulator pozwoli Państwu obliczyć dokładną ilość elementów potrzebną do realizacji
                        konstrukcji o wskazanym rozmiarze,
                        co pozwoli zoptymalizować koszty. Jeżeli zajdzie taka potrzeba mogą Państwo również edytować
                        kalkulację, a także wskazać adres dostawy, tak aby elementy dotarły prosto do klienta!
                    </p>

                    <form method="GET" action="{{ route('calculator.calculate') }}">
                        <div class="mb-3">
                            <label for="name" class="col-form-label"><h5
                                    class="fw-bolder">{{ __('Rodzaj konstrukcji: ') }}</h5></label>
                            <br>
                            <div class="row-md-3">
                                <select name="construction" id="construction"
                                        class="form-control @error('construction') is-invalid @enderror">
                                    <option style="text-align:center" value="Dach z dachówką">Dach z dachówką</option>
                                    <option style="text-align:center" value="Dach z blachodawchówki">Dach z
                                        blachodawchówki
                                    </option>
                                    <option style="text-align:center" value="Dach z blachą trapezową">Dach z blachą
                                        trapezową
                                    </option>
                                    <option style="text-align:center" value="Trójkąty z balastem">Trójkąty z balastem
                                    </option>
                                </select>

                                @error('construction')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="mb-3">
                            <label for="rzędy" class="col-form-label"><h5
                                    class="fw-bolder">{{ __('Liczba rzędów paneli: ') }}</h5></label>
                            <br>
                            <div class="row-md-6">
                                <select name="rzędy" id="rzedy"
                                        class="form-control @error('rzędy') is-invalid @enderror">
                                    <?php
                                    for ($i = 1; $i <= 100; $i++) {
                                    ?>
                                    <option style="text-align:center"
                                            value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>

                                @error('rzędy')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="panele" class="col-form-label"><h5
                                    class="fw-bolder">{{ __('Liczba paneli: ') }}</h5></label>
                            <br>
                            <div class="row-md-6 mb-5">
                                <select name="panele" id="panele"
                                        class="form-control @error('panele') is-invalid @enderror">
                                    <?php
                                    for ($i = 1; $i <= 100; $i++) {
                                    ?>
                                    <option style="text-align:center"
                                            value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>

                                @error('panele')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="text-center my-5">
                            <button type="submit" class="btn-lg btn-primary">
                                {{ __('Wylicz') }}
                            </button>
                        </div>
                </div>
                </form>

            </div>
        </div>
    </header>


@endsection
