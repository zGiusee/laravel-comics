@extends('layout.base')

@section('content')
    <div class="jumbo-container">
        <span class="default-badge-bg">CURRENT SERIES</span>
    </div>
    <div>
        <div class="my-bg-black py-5">
            <div class="container">
                <div class="row">
                    {{-- COMICS SECTION --}}
                    @foreach ($comics as $comic)
                        <div class="col-2 card_container">

                            <a class="text-decoration-none " href="{{ route('comic_info', ['param' => $comic['id']]) }}">
                                <!-- COMIC CARD -->
                                <div>
                                    <div class="img-container p-relative">
                                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                                        <span class="price-tag">{{ $comic['price'] }}</span>
                                    </div>
                                    <div>
                                        <h5>{{ $comic['series'] }}</h5>
                                    </div>
                                </div>
                            </a>

                        </div>
                    @endforeach
                </div>

                <div class="text-center mt-5">
                    <button type="button" class="default-btn"> LOAD MORE </button>
                </div>
            </div>
        </div>
    @endsection
