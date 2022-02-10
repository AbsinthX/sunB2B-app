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
                        <div class="container">
                        @foreach($posts as $post)
                                        <div class="card mb-4">
                                            <img src="{{asset('storage/' . $post->image_path)}}" alt=""
                                                 class="card-img-top">
                                            <div class="card-body d-flex flex-column">
                                                <h5 class="card-title">{!! $post->title !!}</h5>
                                                <p class="card-text">{!! $post->description !!}</p>
                                                <a href="{{route('posts.show', $post -> id ) }}"
                                                   class="btn btn-outline-success btn-sm">
                                                    Czytaj więcej...
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                        @endforeach
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
