@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">


                <div class="card-header">{{ __('Kalkulator') }}</div>

                <div class="card-body">
                    <div class="col d-flex justify-content-center">
                        <div class="content" >
                            
                            <form method="GET" action="{{ route('calculator.calculate') }}">
                             <div class="mb-3">
                            <label for="name" class="col-form-label">{{ __('Rodzaj konstrukcji: ') }}</label>
                            <br>
                            <div class="row-md-6">
                                <select name="construction" id="construction" class="form-control @error('construction') is-invalid @enderror">
                                    <option value="dachówka">Dach z dachówką</option>
                                    <option value="blacha">Dach z blachodawchówki</option>
                                    <option value="trójkąt">Konstrukcja na trójkątach regulowanych</option>
                                </select>

                                @error('construction')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                                
                                
                                <div class="mb-3">
                            <label for="rzędy" class="col-form-label">{{ __('Liczba rzędów paneli: ') }}</label>
                            <br>
                            <div class="row-md-6">
                                <select name="rzędy" id="rzedy" class="form-control @error('rzędy') is-invalid @enderror">
                                    <?php
                                    for ($i = 1; $i <= 100; $i++) {
                                        ?>
                                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
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
                            <label for="panele" class="col-form-label">{{ __('Liczba paneli: ') }}</label>
                            <br>
                            <div class="row-md-6">
                                <select name="panele" id="panele" class="form-control @error('panele') is-invalid @enderror">
                                    <?php
                                    for ($i = 1; $i <= 100; $i++) {
                                        ?>
                                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
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

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Wylicz') }}
                                        </button>
                                    </div>
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