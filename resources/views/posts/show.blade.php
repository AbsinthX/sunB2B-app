@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-3">
                    <div class="card-header">{{ __('Czytaj...') }}</div>

                    <div class="card-body">

                        <div class="form-group row">
                            <img src="{{asset('storage/' . $post->image_path)}}" class="img-fluid mx-auto d-block"
                                 alt="...">
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <h2>{!! $post->title !!}</h2>
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! $post->text !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
