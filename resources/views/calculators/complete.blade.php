@extends('layouts.app')


@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card w-100">


                    <div class="card-header">{{ __('Kalkulacja') }}</div>
                    <div class="card-body">
                        {{var_dump($array['kalkulacja'])}}
                        <br>
                        {{var_dump($_POST)}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
