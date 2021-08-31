@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">{{ __('Aktualności') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <div class="row row-cols-1 row-cols-md-3 g-8">
                        <div class="col mb-3">
                            <div class="card">
                                <img src="{{ asset('img/sun1.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Fotowoltaika przyszłości</h5>
                                    <p class="card-text">Zobacz jak technologia rozwija się na naszych oczach.</p>
                                    <a href="#" class="btn btn-primary">Sprawdź</a>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-3">
                            <div class="card">
                                <img src="{{ asset('img/sun1.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Fotowoltaika przyszłości</h5>
                                    <p class="card-text">Zobacz jak technologia rozwija się na naszych oczach.</p>
                                    <a href="#" class="btn btn-primary">Sprawdź</a>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-3">
                            <div class="card">
                                <img src="{{ asset('img/sun1.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Fotowoltaika przyszłości</h5>
                                    <p class="card-text">Zobacz jak technologia rozwija się na naszych oczach.</p>
                                    <a href="#" class="btn btn-primary">Sprawdź</a>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-3">
                            <div class="card">
                                <img src="{{ asset('img/sun1.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Fotowoltaika przyszłości</h5>
                                    <p class="card-text">Zobacz jak technologia rozwija się na naszych oczach.</p>
                                    <a href="#" class="btn btn-primary">Sprawdź</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
