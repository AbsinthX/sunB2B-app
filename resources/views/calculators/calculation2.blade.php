@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">


                <div class="card-header">{{ __('Kalkulacja') }}</div>

                <div class="card-body">
                    <div class="col d-flex justify-content-center">
                        <div class="content" >

                            {{ var_dump($_GET); }} <br>

                            {{ var_dump($calculation) }}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection