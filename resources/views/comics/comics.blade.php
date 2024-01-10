@php
    $buyList = [
        [
            'text' => 'Digital Comics',
            'image' => 'resources/img/buy/buy-comics-digital-comics.png',
        ],
        [
            'text' => 'DC Merchandise',
            'image' => 'resources/img/buy/buy-comics-merchandise.png',
        ],
        [
            'text' => 'Subscription',
            'image' => 'resources/img/buy/buy-comics-subscriptions.png',
        ],
        [
            'text' => 'Comic shop locator',
            'image' => 'resources/img/buy/buy-comics-shop-locator.png',
        ],
        [
            'text' => 'DC power visa',
            'image' => 'resources/img/buy/buy-dc-power-visa.svg',
        ],
]; @endphp

@extends('layouts.app')

@section('title', 'Comics')

@section('content')
    <main>
        <div class="container-fluid">
            <div class="row" id="mainTop">
                <div class="jumbo position-relative">
                    <div class="container d-flex justify-content-between">
                        <button class="btn btn-primary rounded-0">Current series</button>
                        <button class="btn btn-success rounded-0" style="margin-left: 150px">
                            <a href="{{ route('comics.create') }}" class="text-white text-decoration-none">
                                Add a
                                new
                                comic
                            </a>
                        </button>
                        <form action="{{ route('comics.index') }}" class="" method="GET"
                            style="margin-left: 320px; margin-top: 480px">
                            <input class="form-control" type="text" name="search" placeholder="Search a comic">
                            <button class="btn btn-primary rounded-start-0" style="margin-left: 200px"
                                type="submit">Search</button>
                        </form>
                        <button class="btn btn-secondary" style="margin-left: 610px"><a
                                class="text-white text-decoration-none" href="/comics">All
                                comics</a></button>
                    </div>
                </div>
                <div class="bg-black">
                    <div class="container fs-3 fw-bold py-5">
                        <div class="row justify-content-center">
                            @if (session()->has('message'))
                                <div class="alert alert-warning">{{ session('message') }}</div>
                            @endif
                            @if (count($comics) === 0)
                                <div class="alert alert-primary text-center">No comic found</div>
                            @endif
                            @foreach ($comics as $key => $comic)
                                <div class="text-white col-12 col-md-6 col-lg-4 col-xxl-3 py-2">
                                    <div class="h-100 d-flex flex-column justify-content-between">
                                        <div class="c-img">
                                            <img src="{{ $comic->thumb }}" :alt="title" />
                                        </div>

                                        <h5 class="py-2">{{ $comic->title }}</h5>
                                        <div>
                                            <div class="d-flex justify-content-between">
                                                <span>{{ $comic->price }}</span>
                                                <a href="{{ route('comics.show', $comic->id) }}"
                                                    class="btn btn-primary">View
                                                    More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-primary w-100" id="mainBottom">
            <div class="container">
                <ul
                    class="m-0 row list-unstyled justify-content-xxl-between justify-content-center text-uppercase text-white">
                    @foreach ($buyList as $item)
                        <li v-for="item in buyList"
                            class="d-flex align-items-center justify-content-md-between justify-content-center py-5 col-xxl-2 col-xl-3 col-lg-4 col-md-6 col-12">
                            <div>
                                <img src="{{ Vite::asset($item['image']) }}" alt="{{ $item['text'] }}" class="h-100" />
                            </div>
                            {{ $item['text'] }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </main>
@endsection
