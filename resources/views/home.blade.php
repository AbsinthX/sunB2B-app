@extends('layouts.layout')

@section('content')
    <div class="row justify-content-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <header class="bg-dark py-5">
                            <div class="container px-5">
                                <div class="row gx-5 align-items-center justify-content-center">
                                    <div class="col-lg-8 col-xl-7 col-xxl-6">
                                        <div class="my-5 text-center text-xl-start">
                                            <h1 class="display-5 fw-bolder text-white mb-2">Twoja energia na
                                                przyszłość</h1>
                                            <p class="lead fw-normal text-white-50 mb-4">
                                                Fotowoltaika cieszy się niesłabnącą popularnością. Proces wytwarzania
                                                energii elektrycznej za pośrednictwem paneli PV jest przyjazny
                                                środowisku. Nie generuje zanieczyszczeń tak, jak dzieje się to w
                                                przypadku produkcji prądu z udziałem węgla brunatnego czy kamiennego.
                                                Prąd z własnej instalacji fotowoltaicznej to nie tylko ekologia. To
                                                także duże oszczędności.
                                            </p>
                                            <div
                                                class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">

                                                @guest
                                                    @if (Route::has('login'))
                                                        <a class="btn btn-primary btn-lg px-4 me-sm-3"
                                                           href="{{ route('login') }}">Zaloguj się</a>
                                                    @endif

                                                    @if (Route::has('register'))
                                                        <a class="btn btn-info btn-lg px-4 me-sm-3"
                                                           href="{{ route('register') }}">Dołącz do Nas</a>
                                                    @endif
                                                @endguest
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img
                                            class="img-fluid rounded-3 my-5" src="{{asset("img/main.jpg")}}" alt="..."/>
                                    </div>
                                </div>
                            </div>
                        </header>

                        <section class="py-5" id="features">
                            <div class="container px-5 my-5">
                                <div class="row gx-5">
                                    <div class="col-lg-4 mb-5 mb-lg-0"><h2 class="fw-bolder mb-0">Twój partner energetycznej transformacji</h2></div>
                                    <div class="col-lg-8">
                                        <div class="row gx-5 row-cols-1 row-cols-md-2">
                                            <div class="col mb-5 h-100">
                                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="fa-solid fa-solar-panel"></i></div>
                                                <h2 class="h5">Energia przyszłości</h2>
                                                <p class="mb-0">Fotowoltaika to czyste i w 100% odnawialne źródło energii.</p>
                                            </div>
                                            <div class="col mb-5 h-100">
                                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="fa-solid fa-leaf"></i></div>
                                                <h2 class="h5">Dbajmy o środowisko</h2>
                                                <p class="mb-0">Pomóż ratować Naszą planetę i zredukuj ilość wytwarzanych gazów cieplarnianych.</p>
                                            </div>
                                            <div class="col mb-5 mb-md-0 h-100">
                                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="fa-solid fa-plug"></i></div>
                                                <h2 class="h5">Oszczędność i niezależność od podwyżek cen prądu</h2>
                                                <p class="mb-0">Bądź niezależny i ze spokojem patrz w przyszłość, nie przejmując się rosnącymi cenami prądu.</p>
                                            </div>
                                            <div class="col h-100">
                                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="fa-solid fa-award"></i></div>
                                                <h2 class="h5">Gwarancja jakości</h2>
                                                <p class="mb-0">Współpracując z Nami masz pewność najlepszej jakości i sprawdzonych komponentów.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
